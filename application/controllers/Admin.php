<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
   public function __construct()
  {
     parent::__construct();
     $this->load->library('form_validation');
    $this->load->database();
           $this->load->model('Aquery');
           if($this->session->userdata('isUserLoggedIn')==TRUE &&
        $this->session->userdata('userId')) {
        $user="admin@gmail.com"; 
            $profile['profile']=  $this->Aquery->get_profilerow($user);
          foreach ($profile as $key => $profiledataa) {
              $email= $profiledataa->email;
       $usrname= $profiledataa->name;     
       $imgg= $profiledataa->user_image;
        $this->session->set_userdata('user_nname',$usrname);

                  $this->session->set_userdata('userimg',$imgg);

          }
           }
           

    }
 public function _isLoggedIn(){
     if($this->session->userdata('isUser_LoggedIn')==TRUE &&
        $this->session->userdata('user_Id'));
        else { 
    redirect('admin/login');
     }


 }
    public function login(){
      
      if($this->input->post('login')){
          
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == true) {
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'email'=>$this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'status' => 1
                );
                $this->load->model('Aquery');
                $checkLogin = $this->Aquery->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('isUser_LoggedIn',TRUE);
                    $this->session->set_userdata('user_Id',$checkLogin['id']);
                    redirect('admin/homepage');
                }
                else{
                    $data['error_msg'] = 'Wrong email or password, please try again.';
                }
            }
        }
        $this->load->view('admin/zumeyesadmin/login',@$data);
    }
    public function logout(){
        $this->session->unset_userdata('isUser_LoggedIn');
        $this->session->unset_userdata('user_Id');
        $this->session->unset_userdata('user_nname');
        $this->session->unset_userdata('userimg');
        $this->session->sess_destroy();
        redirect('admin/login');
    }
    public function profile()
    {
     $user="admin@gmail.com"; 
      if($this->input->post('profileupdate'))
      {
         
         $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('designation', 'Designation', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('phone', 'Phone No', 'required');
        $data=array(
     'name' =>$this->input->post('name'),
      'email' =>$this->input->post('email'),
       'designation' =>$this->input->post('designation'),
        'phone' =>$this->input->post('phone'),
        'address' =>$this->input->post('address'),
        'status' =>1
      );
       
        $this->Aquery->update_profile($data,$user);
      }
      if($this->input->post('profilepass'))
      {
         
         $this->form_validation->set_rules('cpass', 'Current Password', 'required');
            $this->form_validation->set_rules('newpass', 'New Password', 'required');
            $data=array(
     'password' =>$this->input->post('newpass')
   
      );
            $cpass=$this->input->post('cpass');
       
        $this->Aquery->update_userpass($data,$user,$cpass);
      }
      if($this->input->post('profileimg'))
      {

        $configp = [
               'upload_path' => './assets/upload',//this is folder name which is create inside codeigniter folder only
               'allowed_types' => 'jpg|jpeg|gif|png',
    ];
    $this->load->library('upload',$configp);
    if($this->upload->do_upload('userfile')){
           $data = array(  
     'user_image' => $this->upload->data('file_name')           
       ); 
    $this->load->model('Aquery');

       $this->Aquery->update_proimage($data,$user);
   
            
            }
            else{       
    $upload_error = $this->upload->display_errors();
    $this->load->view('admin/zumeyesadmin/profile',compact('upload_error'));
    }  
    }   
      $profiledata['profile']=  $this->Aquery->get_profile($user);
      $this->load->view('admin/zumeyesadmin/profile',$profiledata);
    }

    public function email_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('email'=>$str);
        $checkEmail = $this->Vquery->getRows($con);
        if($checkEmail > 0){
            $this->form_validation->set_message('email_check', 'The given email already exists.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
   
   public function homepage()
  {   
     
    $this->load->database();
    $this->load->model('Aquery');
        $home_data['sliderimage_data']=$this->Aquery->slider_data();
        $home_data['offerimage_data']=$this->Aquery->offer_data();
        $home_data['bannerimage_data']=$this->Aquery->banner_data();
    $this->load->view('admin/zumeyesadmin/homepage', $home_data);
  }
 
  public function category()
  {
    $this->load->database();
    $this->load->model('Vquery');
        $cat_data['cat_data']=$this->Vquery->cat_list();
        $cat_data['subcat_data']=$this->Vquery->subcat_list();
    $this->load->view('admin/zumeyesadmin/addcategory',$cat_data);
  }
  public function category_insert()
  {   
         $this->load->library('form_validation');
    $this->form_validation->set_rules('cat_name','Category Name','required');
    if($this->form_validation->run()){
      $data = array(             
       'cat_name' => $this->input->post('cat_name')    
    ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->cat_entry($data);//Transfering data to Model
  $this->session->set_flashdata('form_succ_msg', 'Form Submited');
    redirect('admin/category');
}
else{
      redirect('admin/category');
       validation_errors();
    }
}

  
  public function filter()
  {
    
    if($this->input->post('brandd')){
      $data = array(             
       'brand_name' => $this->input->post('brand'),
       'status'=>'1'
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->brand_entry($data);
    $this->session->set_flashdata('form_succ_msg1', 'Form Submited');
   redirect('admin/filter');
    }
    elseif($this->input->post('color')){
      $data = array(             
       'color_name' => $this->input->post('color_name'),
       'status'=>'1'
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->color_entry($data);
    $this->session->set_flashdata('form_succ_msg2', 'Form Submited');
   redirect('admin/filter');
    }
    elseif($this->input->post('shapee')){
      $data = array(             
       'shape_type' => $this->input->post('shape'),
       'status'=>'1'
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->shape_entry($data);
    $this->session->set_flashdata('form_succ_msg3', 'Form Submited');
   redirect('admin/filter');
    }
    elseif($this->input->post('material')){
      $data = array(             
       'material_name' => $this->input->post('material_name'),
       'status'=>'1'
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->material_entry($data);
    $this->session->set_flashdata('form_succ_msg4', 'Form Submited');
   redirect('admin/filter');
    }
    elseif($this->input->post('purposes')){
      $data = array(             
       'purpose_name' => $this->input->post('purpose'),
        'status'=>'1'
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->purpose_entry($data);
    $this->session->set_flashdata('form_succ_msg5', 'Form Submited');
   redirect('admin/filter');
    }
       elseif($this->input->post('fit')){
      $data = array(             
       'fit_name' => $this->input->post('fit_name'),
        'status'=>'1'
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->fit_entry($data);
    $this->session->set_flashdata('form_succ_msg6', 'Form Submited');
   redirect('admin/filter');
    }
    elseif($this->input->post('lense_uses')){
      $data = array(             
       'uses' => $this->input->post('lense_uses'),
       'status'=> '1'
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->uses_entry($data);
    $this->session->set_flashdata('form_succ_msg7', 'Form Submited');
   redirect('admin/filter');
    }
    else{
      $this->load->database();
      $this->load->model('Aquery');
             $filter['fit_data']= $this->Aquery->fit_data();
             $filter['purpose_data']= $this->Aquery->purpose_data();
             $filter['color_data']= $this->Aquery->color_data();
             $filter['brand_data']= $this->Aquery->brand_data();
             $filter['shape_data']= $this->Aquery->shape_data();
             $filter['lense_uses']= $this->Aquery->lenseuses_data();
               $filter['material_data']= $this->Aquery->material_data();
      $this->load->view('admin/zumeyesadmin/filter',$filter);
    }

  }
  public function lenseinfo()
  {
    
    if($this->input->post('cylinderinfo')){
      $data = array(             
       'cylinder' => $this->input->post('cylinder')
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->cylinder_entry($data);
    $this->session->set_flashdata('form_succ_msg1', 'Form Submited');
   redirect('admin/lenseinfo');
    }
    elseif($this->input->post('sphereinfo')){
      $data = array(             
       'sphere' => $this->input->post('sphere')
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->sphere_entry($data);
    $this->session->set_flashdata('form_succ_msg2', 'Form Submited');
   redirect('admin/lenseinfo');
    }
    elseif($this->input->post('axisinfo')){
      $data = array(             
       'axis' => $this->input->post('axis')
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->axis_entry($data);
    $this->session->set_flashdata('form_succ_msg3', 'Form Submited');
   redirect('admin/lenseinfo');
    }
    elseif($this->input->post('nearadditioninfo')){
      $data = array(             
       'nearaddition' => $this->input->post('nearaddition')
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->nearaddition_entry($data);
    $this->session->set_flashdata('form_succ_msg4', 'Form Submited');
   redirect('admin/lenseinfo');
    }
    else{
      $this->load->database();
      $this->load->model('Aquery');
             $filter['cylinder_data']= $this->Aquery->cylinder_data();
             $filter['sphere_data']= $this->Aquery->sphere_data();
             $filter['axis_data']= $this->Aquery->axis_data();
             $filter['nearaddition_data']= $this->Aquery->nearaddition_data();
            $this->load->view('admin/zumeyesadmin/addlensesegment',$filter);
    }

  }

   public function update_sphere()
  {
        $id=$this->input->get('id');
           $sph['sphere']= $this->Aquery->get_spherebyid($id);
       $this->load->view('admin/zumeyesadmin/update_sphere',$sph);
       if($this->input->post('sphereupdate')){
       $sphere=array(
        'sphere'=>$this->input->post('sphere'));   
        $this->Aquery->update_spherebyid($sphere,$id);
        redirect('admin/lenseinfo');
      }
         }
   public function update_cylinder()
  {  
        $id=$this->input->get('id');
      $cyl['cylinder']= $this->Aquery->get_cylinderbyid($id);
       $this->load->view('admin/zumeyesadmin/update_cylinder',$cyl);
       if($this->input->post('cylinderupdate')){
        $cylinder=array(
          'cylinder'=>$this->input->post('cylinder'));     
        $this->Aquery->update_cylinderbyid($cylinder,$id);
       redirect('admin/lenseinfo');
     }
     }
  public function update_axis()
  {
        $id=$this->input->get('id');
           $axis['axis']= $this->Aquery->get_axisbyid($id);
       $this->load->view('admin/zumeyesadmin/update_axis',$axis);
       if($this->input->post('axisupdate')){
         $axis=array(
          'axis'=>$this->input->post('axis'));
        $this->Aquery->update_axisbyid($axis,$id);
        redirect('admin/lenseinfo');
      }
      }
      public function update_nearaddition()
  {
        $id=$this->input->get('id');
           $nearaddition['nearaddition']= $this->Aquery->get_nearadditionbyid($id);
       $this->load->view('admin/zumeyesadmin/update_nearaddition',$nearaddition);
       if($this->input->post('nearadditionupdate')){
         $nearaddition=array(
          'nearaddition'=>$this->input->post('nearaddition'));
        $this->Aquery->update_nearadditionbyid($nearaddition,$id);
        redirect('admin/lenseinfo');
      }
      }
  public function update_brand()
  {
        $id=$this->input->get('id');
        $brand['brand']=$this->Aquery->get_brandbyid($id);
        $this->load->view('admin/zumeyesadmin/brand_update',$brand);
  }
   public function update_color()
  {
        $id=$this->input->get('id');
        $color['color']=$this->Aquery->get_colorbyid($id);
        $this->load->view('admin/zumeyesadmin/update_color',$color);
  }
  public function update_shape()
  {
        $id=$this->input->get('id');
        $shape['shape']=$this->Aquery->get_shapebyid($id);
        $this->load->view('admin/zumeyesadmin/update_shape',$shape);
  }
  public function update_fit()
  {
        $id=$this->input->get('id');
        $fit['fit']=$this->Aquery->get_fitbyid($id);
        $this->load->view('admin/zumeyesadmin/update_fit',$fit);
  }
  public function update_purpose()
  {
        $id=$this->input->get('id');
        $purpose['purpose1']=$this->Aquery->get_purposebyid($id);
        $this->load->view('admin/zumeyesadmin/update_purpose',$purpose);
  }
  public function update_material()
  {
        $id=$this->input->get('id');
        $material['material']=$this->Aquery->get_materialbyid($id);
        $this->load->view('admin/zumeyesadmin/update_material',$material);
  }
  public function update_lenseuses()
  {
        $id=$this->input->get('id');
        $lenseuses['lenseuses']=$this->Aquery->get_lenseusesbyid($id);
        $this->load->view('admin/zumeyesadmin/update_lenseuses',$lenseuses);
  }
  public function filter_update()
  {
    
    if($this->input->post('brandd')){
      $id=$this->input->post('id');
      $data = array(             
       
       'brand_name' => $this->input->post('brand')
        ); 

      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->brand_update($data,$id);
     redirect('admin/filter');
    }
    elseif($this->input->post('color')){
       $id=$this->input->post('id');
      $data = array(        
         
       'color_name' => $this->input->post('color_name')
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->color_update($data,$id);
    redirect('admin/filter');
    }
    elseif($this->input->post('shapee')){
       $id=$this->input->post('id');
      $data = array(        
         
       'shape_type' => $this->input->post('shape')
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->shape_update($data,$id);
    redirect('admin/filter');
    }
    elseif($this->input->post('material')){
       $id=$this->input->post('id');
      $data = array(             
       'material_name' => $this->input->post('material_name')
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->material_update($data,$id);
    redirect('admin/filter');
    }
    elseif($this->input->post('purposes')){
       $id=$this->input->post('id');
      $data = array(             
       'purpose_name' => $this->input->post('purpose')
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->purpose_update($data,$id);
    redirect('admin/filter');
    }
       elseif($this->input->post('fit')){
         $id=$this->input->post('id');
      $data = array(             
       'fit_name' => $this->input->post('fit_name')
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->fit_update($data,$id);
    
   redirect('admin/filter');
    }
    elseif($this->input->post('lense_usess')){
       $id=$this->input->post('id');
      $data = array(             
       'uses' => $this->input->post('lense_uses'),
       'status'=> 1
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->lenseuse_update($data,$id);
    
   redirect('admin/filter');
    }
   redirect('admin/filter');

  }
  public function lensefilter()
  {
    
    if($this->input->post('brandd')){
      $data = array(             
       'lense_brand' => $this->input->post('brand')
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->lensebrand_entry($data);
    $this->session->set_flashdata('form_succ_msg1', 'Form Submited');
   redirect('admin/lensefilter');
    }
    elseif($this->input->post('lense')){
      $data = array(             
       'lense_type' => $this->input->post('lense_type')
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->lensetype_entry($data);
    $this->session->set_flashdata('form_succ_msg2', 'Form Submited');
   redirect('admin/lensefilter');
    }
    elseif($this->input->post('color')){
      $data = array(             
       'lense_color' => $this->input->post('color_name')
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->lensecolor_entry($data);
    $this->session->set_flashdata('form_succ_msg3', 'Form Submited');
   redirect('admin/lensefilter');
    }
    else{
      $this->load->database();
      $this->load->model('Aquery');
       $lensefilter['color_data']= $this->Aquery->lensecolor_data();
             $lensefilter['brand_data']= $this->Aquery->lensebrand_data();
             $lensefilter['lense_data']= $this->Aquery->lensetype_data();
             $this->load->view('admin/zumeyesadmin/lensefilter',$lensefilter);
    }
  } 
  public function addprescription(){
    if($this->input->post('pres')){
              $data = array(             
       'prescription_type' => $this->input->post('pres_name')
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->prescription_entry($data);
    $this->session->set_flashdata('form_succ_msg', 'Form Submited');
   redirect('admin/addprescription');
 }
 elseif($this->input->post('packege')){
              $data = array(             
       'prescription_type' => $this->input->post('pres_name'),
       'lense_name' => $this->input->post('lense_name'),
       'price' => $this->input->post('package_price'),
       'description' => $this->input->post('content')
        ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->prescription_package_entry($data);
    $this->session->set_flashdata('form_succ_msg2', 'Form Submited');
   redirect('admin/addprescription');
 }
 else{
  $this->load->database();
      $this->load->model('Aquery');
    $pres_data['pres_data']=$this->Aquery->prescription_type();
  $this->load->view('admin/zumeyesadmin/addprescription_&_packages',$pres_data);
 }

  }
  public function addproduct()
  {
    $this->load->database();
    $this->load->model('Aquery');
        $cat_data['cat_data']=$this->Aquery->cat_list();
        
        $cat_data['subcat_data']=$this->Aquery->subcat_list();
        $cat_data['brand_name']=$this->Aquery->brand_data();
         $cat_data['color_name']=$this->Aquery->color_data();
          $cat_data['fit_name']=$this->Aquery->fit_data();
           $cat_data['lense_uses']=$this->Aquery->lenseuses_data();
           $cat_data['shape_name']=$this->Aquery->shape_data();
            $cat_data['material_name']=$this->Aquery->material_data();
             $cat_data['purpose_name']=$this->Aquery->purpose_data();
    $this->load->view('admin/zumeyesadmin/addproduct',$cat_data);
  }
  public function addlenseproduct()
  {
    $this->load->database();
    $this->load->model('Aquery');
        $cat_data['cat_data']=$this->Aquery->cat_list();
        
        $cat_data['subcat_data']=$this->Aquery->subcat_list();
        $cat_data['brand_name']=$this->Aquery->brand_data();
         $cat_data['color_name']=$this->Aquery->color_data();
          $cat_data['fit_name']=$this->Aquery->fit_data();
           $cat_data['lense_type']=$this->Aquery->lense_type_data();
           $cat_data['shape_name']=$this->Aquery->shape_data();
            $cat_data['material_name']=$this->Aquery->material_data();
             $cat_data['purpose_name']=$this->Aquery->purpose_data();
    $this->load->view('admin/zumeyesadmin/addlense_product',$cat_data);
  }
public function product_insert()
  {   
        //-----------Image File Section Start Here -----------//

$this->load->library('upload');
           $_FILES['file']['name']       = $_FILES['userfile']['name'];
            $_FILES['file']['type']       = $_FILES['userfile']['type'];
            $_FILES['file']['tmp_name']   = $_FILES['userfile']['tmp_name'];
            $_FILES['file']['error']      = $_FILES['userfile']['error'];
            $_FILES['file']['size']       = $_FILES['userfile']['size'];

            // File upload configuration
            $uploadPath = './assets/upload/product/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            // Load and initialize upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // Upload file to server
            if($this->upload->do_upload('file')){
                // Uploaded file data
                $imageData = $this->upload->data();
                 $uploadImgData['userfile'] = $imageData['file_name'];

            }
//--------------End of Image File  Section------------------------//



//---------Thumbnail Image Upload Section Start Here -----------//
$image = array();
  $ImageCount = count($_FILES['featuredimage']['name']);
        for($i = 0; $i < $ImageCount; $i++)
        {
            $_FILES['file']['name']       = $_FILES['featuredimage']['name'][$i];
            $_FILES['file']['type']       = $_FILES['featuredimage']['type'][$i];
            $_FILES['file']['tmp_name']   = $_FILES['featuredimage']['tmp_name'][$i];
            $_FILES['file']['error']      = $_FILES['featuredimage']['error'][$i];
            $_FILES['file']['size']       = $_FILES['featuredimage']['size'][$i];

            // File upload configuration
            $uploadPath = './assets/upload/featuredimage/';
            $config1['upload_path'] = $uploadPath;
            $config1['allowed_types'] = 'jpg|jpeg|png|gif';

            // Load and initialize upload library
            $this->load->library('upload', $config1);
            $this->upload->initialize($config1);

            // Upload file to server
            if($this->upload->do_upload('file')){
                // Uploaded file data
                $imageData = $this->upload->data();
                 $uploadImgData[$i]['featuredimage'] = $imageData['file_name'];

            }
        }
if($this->input->post('sub_sub_cat_id')){
        $data11=array(  
'sub_sub_catid'=>$this->input->post('sub_sub_cat_id')
        );
      }
//--------End of Thumbnail Upload Section-----------//
    $less_price=$this->input->post('product_price')*$this->input->post('offer')/100;
    $sale_price=$this->input->post('product_price')-$less_price;  
if($this->input->post('water_content')){
        $data1=array(  
        'lense_type' => implode("|",$this->input->post('lense_uses')),
       'water_content' => $this->input->post('water_content'),
     
     
        'packaging' => $this->input->post('lense_inpackage'),
       'uses' => $this->input->post('use_duration')
      );

      }
      if($this->input->post('frame_style')){
                    $data2=array(  
                       'frame_width' => $this->input->post('frame_width'),
     
                      'lense_width' => $this->input->post('lense_width'),
                       'temple_length' => $this->input->post('temple_length'),
       'bridge' => $this->input->post('bridge'),
                      'fit' => implode("|",$this->input->post('fit_name')),
       'purpose' => implode("|",$this->input->post('purpose_name')),
       'shape' => implode("|",$this->input->post('shape_type')),
       'frame_style' => $this->input->post('frame_style'),
     'features' => $this->input->post('features'),
       'tags' => $this->input->post('tag'),
       'lense_height' => $this->input->post('lense_height'),
        'packaging' => $this->input->post('lense_inpackage')
      
      );


      }
  

        
         $data = array(  
       'featuredimage' => implode("|",$_FILES['featuredimage']['name']),
       'pro_image' => $_FILES['userfile']['name'],       
       'product_name' => $this->input->post('product_name'),
       'cat_id' => $this->input->post('cat_name'),    
       'sub_cat_id' => $this->input->post('sub_cat_id'),
       'weight' => $this->input->post('weight'),
       'regular_price' => $this->input->post('product_price'),       
       'sale_price' =>$sale_price,
       'pro_description' => $this->input->post('content'),
       'quantity' => $this->input->post('product_quantity'),
       'offer' => $this->input->post('offer'),
       'brand' => implode("|",$this->input->post('brand_name')),
       'color' => implode("|",$this->input->post('color_name')),
       'material' => implode("|",$this->input->post('material_name')),
        'status' => 1 

    );  
         if(isset($data1))
         {
          $data=array_merge($data1,$data);
         }
         if(isset($data2))
         {
          $data=array_merge($data2,$data);
         }
         if(isset($data11) && isset($data2))
         {
          $data=array_merge($data2,$data11,$data);
         }
          if(isset($data11) && isset($data1))
         {
          $data=array_merge($data1,$data,$data11);
         }

     $this->Aquery->product_entry($data);
      $this->session->set_flashdata('form_succ_msg', 'Form Submited');
   redirect('admin/addproduct');


}
public function product_update()
  {   
        //-----------Image File Section Start Here -----------//
        if($this->input->post('update_product')){

$this->load->library('upload');
           $_FILES['file']['name']       = $_FILES['userfile']['name'];
            $_FILES['file']['type']       = $_FILES['userfile']['type'];
            $_FILES['file']['tmp_name']   = $_FILES['userfile']['tmp_name'];
            $_FILES['file']['error']      = $_FILES['userfile']['error'];
            $_FILES['file']['size']       = $_FILES['userfile']['size'];

            // File upload configuration
            $uploadPath = './assets/upload/product/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            // Load and initialize upload library
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // Upload file to server
            if($this->upload->do_upload('file')){
                // Uploaded file data
                $imageData = $this->upload->data();
                 $uploadImgData['userfile'] = $imageData['file_name'];

            }
//--------------End of Image File  Section------------------------//



//---------Thumbnail Image Upload Section Start Here -----------//
$image = array();
  $ImageCount = count($_FILES['featuredimage']['name']);
        for($i = 0; $i < $ImageCount; $i++){
            $_FILES['file']['name']       = $_FILES['featuredimage']['name'][$i];
            $_FILES['file']['type']       = $_FILES['featuredimage']['type'][$i];
            $_FILES['file']['tmp_name']   = $_FILES['featuredimage']['tmp_name'][$i];
            $_FILES['file']['error']      = $_FILES['featuredimage']['error'][$i];
            $_FILES['file']['size']       = $_FILES['featuredimage']['size'][$i];

            // File upload configuration
            $uploadPath = './assets/upload/featuredimage/';
            $config1['upload_path'] = $uploadPath;
            $config1['allowed_types'] = 'jpg|jpeg|png|gif';

            // Load and initialize upload library
            $this->load->library('upload', $config1);
            $this->upload->initialize($config1);

            // Upload file to server
            if($this->upload->do_upload('file')){
                // Uploaded file data
                $imageData = $this->upload->data();
                 $uploadImgData[$i]['featuredimage'] = $imageData['file_name'];

            }
        }
//--------End of Thumbnail Upload Section-----------//
    $less_price=$this->input->post('product_price')*$this->input->post('offer')/100;
    $sale_price=$this->input->post('product_price')-$less_price;
    if($ImageCount){
       // Upload file to server
            $pid=$this->input->post('id');
      $data = array(  
     'featuredimage' => implode("|",$_FILES['featuredimage']['name']),
       'pro_image' => $_FILES['userfile']['name'],
       'brand' => implode("|",$this->input->post('brand_name')),
       'color' => implode("|",$this->input->post('color_name')),
       'fit' => implode("|",$this->input->post('fit_name')),
       'purpose' => implode("|",$this->input->post('purpose_name')),
       'material' => implode("|",$this->input->post('material_name')),
       'shape' => implode("|",$this->input->post('shape_type')),           
     'cat_id' => $this->input->post('cat_name'),
     'dimension' => $this->input->post('dimension'),
     'weight' => $this->input->post('weight'),
       'sub_cat_id' => $this->input->post('sub_cat_id'),
       'regular_price' => $this->input->post('product_price'),
       'sale_price' =>$sale_price,
       'product_name' => $this->input->post('product_name'),
       'pro_description' => $this->input->post('content'),
       'quantity' => $this->input->post('product_quantity'),
       'offer' => $this->input->post('offer') 
    ); 
       
      $this->load->database();
      $this->load->model('Aquery');
   $this->Aquery->product_update($data,$pid);//Transfering data to Model
  $this->session->set_flashdata('form_succ_msg', 'Form Submited');
   redirect('admin/addproduct');

    
}
else{       
    $upload_error = $this->upload->display_errors();
    $this->load->view('admin/zumeyesadmin/update_product',compact('upload_error'));
    }
  }
  else{
    $this->load->database();
     $id= $this->input->get('id');
      $this->load->model('Aquery');
            $product_data['product_data']=$this->Aquery->product_databy_id($id);
            $product_data['cat_data']=$this->Aquery->cat_list();
            $product_data['subcat_data']=$this->Aquery->subcat_list();
             $product_data['brand_name']=$this->Aquery->brand_data();
         $product_data['color_name']=$this->Aquery->color_data();
          $product_data['fit_name']=$this->Aquery->fit_data();
           $product_data['style_name']=$this->Aquery->style_data();
           $product_data['shape_name']=$this->Aquery->shape_data();
            $product_data['material_name']=$this->Aquery->material_data();
             $product_data['purpose_name']=$this->Aquery->purpose_data();
            $this->load->view('admin/zumeyesadmin/update_product',$product_data);
  }
}
public function addblog()
  {
    $this->load->database();
    $this->load->model('Aquery');
        $blog_data['blog_data']=$this->Aquery->blog_data();
        $blog_data['blogheader_data']=$this->Aquery->blogheader_data();
    $this->load->view('admin/zumeyesadmin/addblog',$blog_data);
  }
  public function addabout()
  {
    $this->load->database();
    $this->load->model('Aquery');
        $about_data['about_data']=$this->Aquery->about_data();       
    $this->load->view('admin/zumeyesadmin/addabout',$about_data);
  }
  public function updateabout()
  {
    $this->load->database();
    $id = $this->input->get('id');  
    $this->load->model('Aquery'); 
    if($this->input->post('update_about')){
      $uid = $this->input->post('id');
      $data = array(             
       'description' => $this->input->post('content')    
    ); 
       $this->Aquery->update_about($data,$uid);
    //redirect('admin/addabout');
    }
    else{         
        $about_data['about_data']=$this->Aquery->get_about_data($id);       
    $this->load->view('admin/zumeyesadmin/updateabout',$about_data);
    
    }
  }
  public function sub_cat_insert()
  {   
         $this->load->library('form_validation');
    $this->form_validation->set_rules('sub_cat_name','Sub Category Name','required');
    if($this->form_validation->run()){
      $config = [
               'upload_path' => './assets/upload',//this is folder name which is create inside codeigniter folder only
               'allowed_types' => 'jpg|jpeg|gif|png',
    ];
    $this->load->library('upload',$config);
    if($this->upload->do_upload('userfile')){
      
      $data = array(  
     'bg_image' => $this->upload->data('file_name'),           
     'cat_name' => $this->input->post('cat_name'),
       'sub_cat_name' => $this->input->post('sub_cat_name')    
    ); 
      
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->sub_cat_entry($data);//Transfering data to Model
  $this->session->set_flashdata('form_succ_msg2', 'Form Submited');
    redirect('admin/category');
}
else{       
    $upload_error = $this->upload->display_errors();
    $this->load->view('admin/zumeyesadmin/addcategory',compact('upload_error'));
    }
    }
else{  
      $this->load->database();
    $this->load->model('Aquery');
        $cat_data['cat_data']=$this->Aquery->cat_list();
        $cat_data['subcat_data']=$this->Aquery->subcat_list();
      $this->load->view('admin/zumeyesadmin/addcategory',$cat_data);
       validation_errors();
    }
}
public function sub_sub_cat_insert()
  {   
         $this->load->library('form_validation');
    $this->form_validation->set_rules('sub_sub_cat_name','Sub Category Name','required');
    if($this->form_validation->run()){
      $config = [
               'upload_path' => './assets/upload',//this is folder name which is create inside codeigniter folder only
               'allowed_types' => 'jpg|jpeg|gif|png',
    ];
    $this->load->library('upload',$config);
    if($this->upload->do_upload('userfile')){
      
      $data = array(  
     'bg_image' => $this->upload->data('file_name'),           
     'cat_name' => $this->input->post('cat_id'),
       'sub_cat_name' => $this->input->post('sub_cat_id'),
       'sub_sub_cat' => $this->input->post('sub_sub_cat_name'),
        'status' => 1 
           
        
    ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->sub_sub_cat_entry($data);//Transfering data to Model
  $this->session->set_flashdata('form_succ_msg3', 'Form Submited');
    redirect('admin/category');
}
else{       
    $upload_error = $this->upload->display_errors();
    $this->load->view('admin/zumeyesadmin/addcategory',compact('upload_error'));
    }
    }
else{  
      $this->load->database();
    $this->load->model('Aquery');
        $cat_data['cat_data']=$this->Aquery->cat_list();
        $cat_data['subcat_data']=$this->Aquery->subcat_list();
      $this->load->view('admin/zumeyesadmin/addcategory',$cat_data);
       validation_errors();
    }
}
   public function dropsubcat_ajaxData()
  {     
              $this->load->database();
         
               $cat_id= $this->input->post('cat_id');

              $this->load->model('Aquery');
            echo $this->Aquery->get_subcat_data($cat_id);
               

              }
              public function dropsubsubcat_ajaxData()
  {     
              $this->load->database();
         
               $subcat_id= $this->input->post('subcat_id');

              $this->load->model('Aquery');
            echo $this->Aquery->get_sub_subcat_data($subcat_id);
               

              }
    
  public function update_category()
  {
    $this->load->database();
    $this->load->model('Aquery');
    $id = $this->input->get('id');
        $cat_data['cat_data']=$this->Aquery->cat_name_by_id($id);
    $this->load->view('admin/zumeyesadmin/updatecate',$cat_data);
  }
  public function update_subcategory()
  {
    $this->load->database();
    $this->load->model('Aquery');
    $id = $this->input->get('id');
    $cat_name['cat_name']=$this->Aquery->subcat_name($id);
    
    foreach ($cat_name as $key => $value) {
      $cat_id=$value->cat_name;
      
    }
    $cat_data['subcatall_data']=$this->Aquery->subcat_name_id($id);
    $cat_data['subcat_data']=$this->Aquery->cat_name_by_id($cat_id);
    $cat_data['cat_data']=$this->Aquery->cat_list();
    $this->load->view('admin/zumeyesadmin/updatesubcat',$cat_data);
    }
  public function update_cat()
  {
    $this->load->database();
    $this->load->library('form_validation');
    $id = $this->input->post('id');
    $this->form_validation->set_rules('cat_name','Category Name','alpha');
    if($this->form_validation->run()){
      $data = array(             
       'cat_name' => $this->input->post('cat_name')    
    ); 
    $this->load->model('Aquery');

        $cat_data['cat_data']=$this->Aquery->update_cat($data,$id);
    redirect('admin/category');
  }
}
public function update_subcat()
  {
    $this->load->database();
    $this->load->library('form_validation');
    $id = $this->input->post('id');
    $this->form_validation->set_rules('cat_name','Category Name','required');
    if($this->form_validation->run()){
      $config = [
               'upload_path' => './assets/upload',//this is folder name which is create inside codeigniter folder only
               'allowed_types' => 'jpg|jpeg|gif|png',
    ];
    $this->load->library('upload',$config);
    if($this->upload->do_upload('userfile')){

      $data = array(  
     'bg_image' => $this->upload->data('file_name'),             
       'cat_name' => $this->input->post('cat_name'),
       'sub_cat_name' => $this->input->post('sub_cat_name')    
    ); 
    $this->load->model('Aquery');

        $cat_data['cat_data']=$this->Aquery->update_subcat($data,$id);
    redirect('admin/category');
  }
  else{       
    $upload_error = $this->upload->display_errors();
    $this->load->database();
    $this->load->model('Aquery');
    $id = $this->input->get('id');
    $cat_name['cat_name']=$this->Aquery->subcat_name($id);
    
    foreach ($cat_name as $key => $value) {
      $cat_id=$value->cat_name;
      
    }
    $cat_data['subcatall_data']=$this->Aquery->subcat_name_id($id);
    $cat_data['subcat_data']=$this->Aquery->cat_name_by_id($cat_id);
    $cat_data['cat_data']=$this->Aquery->cat_list();
    $this->load->view('admin/zumeyesadmin/updatesubcat',compact('upload_error'));
    }
    }
    else{

      $this->load->view('admin/zumeyesadmin/updatesubcat');
       validation_errors();
    }
}
  
public function slider_insert(){
    //-----------Image File Section Start Here -----------//
$image = array();
  $ImageCount = count($_FILES['sliderimage']['name']);
        for($i = 0; $i < $ImageCount; $i++){
            $_FILES['file']['name']       = $_FILES['sliderimage']['name'][$i];
            $_FILES['file']['type']       = $_FILES['sliderimage']['type'][$i];
            $_FILES['file']['tmp_name']   = $_FILES['sliderimage']['tmp_name'][$i];
            $_FILES['file']['error']      = $_FILES['sliderimage']['error'][$i];
            $_FILES['file']['size']       = $_FILES['sliderimage']['size'][$i];

            // File upload configuration
            $uploadPath = './assets/upload/';
            $config1['upload_path'] = $uploadPath;
            $config1['allowed_types'] = 'jpg|jpeg|png|gif';

            // Load and initialize upload library
            $this->load->library('upload', $config1);
            $this->upload->initialize($config1);

            // Upload file to server
            if($this->upload->do_upload('file')){
                // Uploaded file data
                $imageData = $this->upload->data();
                 $uploadImgData[$i]['sliderimage'] = $imageData['file_name'];

            }
        }
        //--------------End of Image File  Section------------------------//
   $data = array( 
     'sliderimage' => implode("|",$_FILES['sliderimage']['name'])
  );
   $this->load->database();
   $this->load->model('Aquery');
   $this->Aquery->slider_entry($data);//Transfering data to Model
  $this->session->set_flashdata('form_succ_msg', 'Form Submited');
   redirect('admin/homepage');


}
public function homepage_offer_image(){
    //-----------Image File Section Start Here -----------//

$image = array();
  $ImageCount = count($_FILES['offerimage']['name']);
        for($i = 0; $i < $ImageCount; $i++){
            $_FILES['file']['name']       = $_FILES['offerimage']['name'][$i];
            $_FILES['file']['type']       = $_FILES['offerimage']['type'][$i];
            $_FILES['file']['tmp_name']   = $_FILES['offerimage']['tmp_name'][$i];
            $_FILES['file']['error']      = $_FILES['offerimage']['error'][$i];
            $_FILES['file']['size']       = $_FILES['offerimage']['size'][$i];

            // File upload configuration
            $uploadPath = './assets/upload/';
            $config1['upload_path'] = $uploadPath;
            $config1['allowed_types'] = 'jpg|jpeg|png|gif';

            // Load and initialize upload library
            $this->load->library('upload', $config1);
            $this->upload->initialize($config1);

            // Upload file to server
            if($this->upload->do_upload('file')){
                // Uploaded file data
                $imageData = $this->upload->data();
                 $uploadImgData[$i]['offerimage'] = $imageData['file_name'];

            }
        }
//--------------End of Image File  Section------------------------//
   $data = array( 
     'offerimage' => implode("|",$_FILES['offerimage']['name'])
  );
   $this->load->database();
   $this->load->model('Aquery');
   $this->Aquery->homepage_offer_entry($data);//Transfering data to Model
  $this->session->set_flashdata('form_succ_msg2', 'Form Submited');
   redirect('admin/homepage');

}
public function homepage_bottombanner(){
    //-----------Image File Section Start Here -----------//

$image = array();
  $ImageCount = count($_FILES['bannerimage']['name']);
        for($i = 0; $i < $ImageCount; $i++){
            $_FILES['file']['name']       = $_FILES['bannerimage']['name'][$i];
            $_FILES['file']['type']       = $_FILES['bannerimage']['type'][$i];
            $_FILES['file']['tmp_name']   = $_FILES['bannerimage']['tmp_name'][$i];
            $_FILES['file']['error']      = $_FILES['bannerimage']['error'][$i];
            $_FILES['file']['size']       = $_FILES['bannerimage']['size'][$i];

            // File upload configuration
            $uploadPath = './assets/upload/';
            $config1['upload_path'] = $uploadPath;
            $config1['allowed_types'] = 'jpg|jpeg|png|gif';

            // Load and initialize upload library
            $this->load->library('upload', $config1);
            $this->upload->initialize($config1);

            // Upload file to server
            if($this->upload->do_upload('file')){
                // Uploaded file data
                $imageData = $this->upload->data();
                 $uploadImgData[$i]['bannerimage'] = $imageData['file_name'];

            }
        }
//--------------End of Image File  Section------------------------//
   $data = array( 
     'bannerimage' => implode("|",$_FILES['bannerimage']['name'])
  );
   $this->load->database();
   $this->load->model('Aquery');
   $this->Aquery->homepage_banner_entry($data);//Transfering data to Model
  $this->session->set_flashdata('form_succ_msg3', 'Form Submited');
   redirect('admin/homepage');

}


   public function blog_insertData()
  {     
              $this->load->database();
         $config = [
               'upload_path' => './assets/upload/blog',//this is folder name which is create inside codeigniter folder only
               'allowed_types' => 'jpg|jpeg|gif|png',
    ];
    $this->load->library('upload',$config);
    if($this->upload->do_upload('blogimage')){
     date_default_timezone_set('Asia/Kolkata');
      $blog_data = array( 
           'image' => $this->upload->data('file_name'),
             'description' => $this->input->post('content'),
             'title' => $this->input->post('title'),
             'date'=>date("M d Y h:i")
             );
              $this->load->model('Aquery');
              $this->Aquery->insert_blog_data($blog_data);
              $this->session->set_flashdata('form_succ_msg', 'Form Submited');
            redirect('admin/addblog');
               
}
              }
              public function blog_update()
  {     
              $this->load->database();
              $id= $this->input->get('id');
              $this->load->model('Aquery');
              if($this->input->post('blog_update')){
         $config = [
               'upload_path' => './assets/upload/blog',//this is folder name which is create inside codeigniter folder only
               'allowed_types' => 'jpg|jpeg|gif|png',
    ];
    $this->load->library('upload',$config);
    $this->upload->do_upload('blogimage');
         $bid= $this->input->post('id');
         date_default_timezone_set('Asia/Kolkata');
      $blog_data = array( 
           'image' => $this->upload->data('file_name'),
             'description' => $this->input->post('content'),
             'title' => $this->input->post('title'),
             'date'=>date("M d Y h:i")
             );
              $this->Aquery->update_blog($blog_data,$bid);
            redirect('admin/addblog');
        }

            else{         
        $blog_data['blog_data']=$this->Aquery->get_blog_data($id);       
    $this->load->view('admin/zumeyesadmin/updateblog',$blog_data);
    
    }
               
}
             
               public function about_titleData()
  {     
              $this->load->database();
         
               $about_data= array(
             'page_title' =>  $this->input->post('title')            
           );
              $this->load->model('Aquery');
              $this->Aquery->insert_about_title($about_data);
              $this->session->set_flashdata('form_succ_msg1', 'Form Submited');
            redirect('admin/addabout');
               

              }
               public function about_insertData()
  {     
              $this->load->database();
         
               $about_data= array(
             'description' => $this->input->post('content')            
           );
              $this->load->model('Aquery');
              $this->Aquery->insert_about_data($about_data);
              $this->session->set_flashdata('form_succ_msg', 'Form Submited');
            redirect('admin/addabout');
               

              }
  public function blog_headerimage()
  {
    $config = [
               'upload_path' => './assets/upload/blogheaderimage',//this is folder name which is create inside codeigniter folder only
               'allowed_types' => 'jpg|jpeg|gif|png',
    ];
    $this->load->library('upload',$config);
    if($this->upload->do_upload('userfile')){

      $data = array(  
     'header_image' => $this->upload->data('file_name')          
    ); 
      $this->load->database();
      $this->load->model('Aquery');
    $this->Aquery->blog_header_entry($data);//Transfering data to Model
  $this->session->set_flashdata('form_succ_msg2', 'Form Submited');
    redirect('admin/addblog');
}
else{       
    $upload_error = $this->upload->display_errors();
    $this->load->view('admin/zumeyesadmin/addblog',compact('upload_error'));
    }

  }
   public function glasses_product_list()
    {
        $this->load->database();
        $this->load->model('aquery');
        $product_data['product_data']=$this->aquery->product_data();
    $this->load->view('admin/zumeyesadmin/glassesproduct_list',$product_data);
    
    }
    public function addfaq()
  {
    $this->load->database();
    $this->load->view('admin/zumeyesadmin/addfaq');
    if($this->input->post('faq')){
       $faq_data= array(
             'description' =>  $this->input->post('content')            
           );
       $this->load->model('Aquery');
       $this->Aquery->faq_insert($faq_data);
       $this->session->set_flashdata('form_succ_msg', 'Form Submited');
       redirect('admin/addfaq');

    }
  }
   public function addtermand_condition()
  {
    $this->load->database();
    $this->load->view('admin/zumeyesadmin/term_and_condition');
    if($this->input->post('term')){
       $faq_data= array(
             'description' =>  $this->input->post('content')            
           );
       $this->load->model('Aquery');
       $this->Aquery->term_insert($faq_data);
       $this->session->set_flashdata('form_succ_msg', 'Form Submited');
       redirect('admin/addtermand_condition');

    }
  }
  public function update_faq()
  {
    $this->load->database();
    $this->load->model('Aquery');
    $faq_data['faq_data']=$this->Aquery->faq_get();
    $this->load->view('admin/zumeyesadmin/updatefaq',$faq_data);
    if($this->input->post('updatefaq')){
       $faq_data= array(
             'description' =>  $this->input->post('content')            
           );
       
       $this->Aquery->update_faq($faq_data);
       $this->session->set_flashdata('form_succ_msg', 'Form Submited');
       redirect('admin/update_faq');

    }
  }
  public function update_term()
  {
    $this->load->database();
    $this->load->model('Aquery');
    $term_data['term_data']=$this->Aquery->term_get();
    $this->load->view('admin/zumeyesadmin/update_term',$term_data);
    if($this->input->post('updateterm')){
       $faq_data= array(
             'description' =>  $this->input->post('content')            
           );
       
       $this->Aquery->update_term($faq_data);
       $this->session->set_flashdata('form_succ_msg', 'Form Submited');
       redirect('admin/update_term');

    }
  }
  //-------------------Delete Function--------------//
   public function delete_about()
    {
        $id=$this->input->get('id');
        $this->load->database();
        $this->load->model('aquery');
        $this->aquery->delete_about($id);
        redirect('admin/addabout');
    }
    public function delete_blog()
    {
        $id=$this->input->get('id');
        $this->load->database();
        $this->load->model('aquery');
        $this->aquery->delete_blog($id);
        redirect('admin/addblog');
    }
    public function delete_bannerimage()
    {
        $id=$this->input->get('id');
        $this->load->database();
        $this->load->model('aquery');
        $this->aquery->delete_bannerimage($id);
        redirect('admin/homepage');
    }
    public function delete_brand()
    {
        $id=$this->input->get('id');
        $this->load->database();
        $this->load->model('aquery');
        $this->aquery->delete_brand($id);
        redirect('admin/filter');
    }
    public function delete_category()
    {
        $id=$this->input->get('id');
        $this->load->database();
        $this->load->model('aquery');
        $this->aquery->delete_category($id);
        redirect('admin/category');
    }
      public function delete_color()
    {
        $id=$this->input->get('id');
        $this->load->database();
        $this->load->model('aquery');
        $this->aquery->delete_color($id);
        redirect('admin/filter');
    }
    public function delete_fit()
    {
        $id=$this->input->get('id');
        $this->load->database();
        $this->load->model('aquery');
        $this->aquery->delete_fit($id);
        redirect('admin/filter');
    }
    public function delete_lensebrand()
    {
        $id=$this->input->get('id');
        $this->load->database();
        $this->load->model('aquery');
        $this->aquery->delete_lensebrand($id);
        redirect('admin/lensefilter');
    }
    public function delete_material()
    {
        $id=$this->input->get('id');
        $this->load->database();
        $this->load->model('aquery');
        $this->aquery->delete_material($id);
        redirect('admin/filter');
    }
    public function delete_shape()
    {
        $id=$this->input->get('id');
        $this->load->database();
        $this->load->model('aquery');
        $this->aquery->delete_shape($id);
        redirect('admin/filter');
    }
    public function delete_style()
    {
        $id=$this->input->get('id');
        $this->load->database();
        $this->load->model('aquery');
        $this->aquery->delete_style($id);
        redirect('admin/filter');
    }
    public function delete_subcategory()
    {
        $id=$this->input->get('id');
        $this->load->database();
        $this->load->model('aquery');
        $this->aquery->delete_subcategory($id);
        redirect('admin/category');
    }
    public function delete_purpose()
    {
        $id=$this->input->get('id');
        $this->load->database();
        $this->load->model('aquery');
        $this->aquery->delete_purpose($id);
        redirect('admin/filter');
    }
    public function delete_offerimage()
    {
        $id=$this->input->get('id');
        $this->load->database();
        $this->load->model('aquery');
        $this->aquery->delete_offerimage($id);
        redirect('admin/homepage');
    }
    public function delete_lensecolor()
    {
        $id=$this->input->get('id');
        $this->load->database();
        $this->load->model('aquery');
        $this->aquery->delete_lensecolor($id);
        redirect('admin/lensefilter');
    }
    
    public function delete_lensetype()
    {
        $id=$this->input->get('id');
        $this->load->database();
        $this->load->model('aquery');
        $this->aquery->delete_lensetype($id);
        redirect('admin/lensefilter');
    }
    public function delete_blog_header_image()
    {
        $id=$this->input->get('id');
        $this->load->database();
        $this->load->model('aquery');
        $this->aquery->delete_blog_header_image($id);
        redirect('admin/addblog');
    }
    public function delete_product()
    {
        $id=$this->input->get('id');
        $this->load->database();
        $this->load->model('aquery');
        $this->aquery->delete_product($id);
        redirect('admin/glasses_product_list');
    }

}
?>