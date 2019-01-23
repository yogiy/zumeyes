<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
	{
		 parent::__construct();
		 $this->load->library('session');
		  $this->load->library('form_validation');
		  $this->load->library('pagination');
		  $this->load->model('Vquery');
		  $this->load->library('cart');
		  $this->load->database();
				  if($this->session->userdata('isUserLoggedIn')==TRUE &&
        $this->session->userdata('userId')) {
        	 $user['user'] = $this->Vquery->getRows(array('id'=>$this->session->userdata('userId')));
            foreach ($user as $key => $user) {
            	 $gfname=$user->fname;
            	  $gemail=$user->email;

            	  $this->session->set_userdata('user_name',$gfname);
                  $this->session->set_userdata('user_email',$gemail);

            }
       
    }

        
    }

	public function index()
	{   
		$this->load->database();
		$this->load->model('Vquery');
        $data['cat_data']=$this->Vquery->cat_list();
        $data['subcat_data']=$this->Vquery->subcat_list();
        $data['slider_data']=$this->Vquery->slider_data();
        $data['offer_data']=$this->Vquery->offer_data();
        $data['banner_data']=$this->Vquery->banner_data();
        $data['pro_data']=$this->Vquery->prolatest_data();       
        $data['product_data']=$this->Vquery->product_latest_data();
        $data['blog_data']=$this->Vquery->blog_data();
		$this->load->view('home', $data);
	}
    public function aboutus()
	{
		$this->load->database();
		$this->load->model('Vquery');
        $cat_data['cat_data']=$this->Vquery->cat_list();
        $cat_data['subcat_data']=$this->Vquery->subcat_list();
		$this->load->view('aboutus',$cat_data);
	}
	 public function blogDetails()
	{   
		$this->load->database();
		$this->load->model('Vquery');
		$id=$this->input->get('id');
        $cat_data['cat_data']=$this->Vquery->cat_list();
        $cat_data['subcat_data']=$this->Vquery->subcat_list();
        $cat_data['blog_data']=$this->Vquery->blog_databy_id($id);
		$this->load->view('blogDetails',$cat_data);
	}
	 public function contactLenses()
	{   
		$this->load->database();
		$this->load->model('Vquery');
        $cat_data['cat_data']=$this->Vquery->cat_list();
        $cat_data['subcat_data']=$this->Vquery->subcat_list();
		$this->load->view('contactLenses', $cat_data);
	}
	 public function lensAccessories()
	{
		$this->load->database();
		$this->load->model('Vquery');
        $cat_data['cat_data']=$this->Vquery->cat_list();
        $cat_data['subcat_data']=$this->Vquery->subcat_list();
		$this->load->view('lensAccessories', $cat_data);
	}
	 public function lensDetails()
	{
		$this->load->database();
		$this->load->model('Vquery');
        $cat_data['cat_data']=$this->Vquery->cat_list();
        $cat_data['subcat_data']=$this->Vquery->subcat_list();
		$this->load->view('lensDetails', $cat_data);
	}
	 public function sunglassesMen()
	{
		$this->load->database();
		$this->load->model('Vquery');
        $cat_data['cat_data']=$this->Vquery->cat_list();
        $cat_data['subcat_data']=$this->Vquery->subcat_list();
		$this->load->view('sunglassesMen', $cat_data);
	}
	 public function sunglassesWomen()
	{
		$this->load->database();
		$this->load->model('Vquery');
        $cat_data['cat_data']=$this->Vquery->cat_list();
        $cat_data['subcat_data']=$this->Vquery->subcat_list();
		$this->load->view('sunglassesWomen', $cat_data, $cat_data);
	}
	 public function productList()
	{
		$this->load->database();
		$this->load->model('Vquery');
		
		 $cat_data['cat_data']=$this->Vquery->cat_list();
        $cat_data['subcat_data']=$this->Vquery->subcat_list();
        $cat_data['brand_name']=$this->Vquery->brand_data();
         $cat_data['color_name']=$this->Vquery->color_data();
          $cat_data['fit_name']=$this->Vquery->fit_data();
           $cat_data['shape_name']=$this->Vquery->shape_data();
            $cat_data['material_name']=$this->Vquery->material_data();
             $cat_data['purpose_name']=$this->Vquery->purpose_data();
           if($this->input->get('id')){
	     	$cat_data['page_id']=$this->input->get('id');
	     	$catid=$this->input->get('id');
	     	
	     		$true=$this->Vquery->sub_subcat_row($catid);
	     		if($true==TRUE){
	     			$this->session->set_userdata('last_subid', $catid);
	     			redirect('subProduct');
	     		}
	     				
}
 if($this->input->get('sid')){
	     	$cat_data['sid']=$this->input->get('sid');
	     	$sid=$this->input->get('sid');
	     	
	     		$true=$this->Vquery->sub_subcat_row($sid);
	     		if($true==TRUE){
	     			$this->session->set_userdata('last_subid', $sid);
	     			redirect('subProduct');
	     		}
	     				
}
		$this->load->view('productList', $cat_data);
	}
	public function subProduct(){
		$subcatid=$this->session->userdata('last_subid');
		$cat_data['subcatdata']=$this->Vquery->sub_subcat_data($subcatid);

		 $cat_data['cat_data']=$this->Vquery->cat_list();
        $cat_data['subcat_data']=$this->Vquery->subcat_list();
          $this->load->view('subProduct', $cat_data);
       
	}
	
	 public function contactlense()
	{
		$this->load->database();  
		$this->load->model('Vquery');
		if($this->input->get('color') || $this->input->get('brand') || $this->input->get('uses')){
			@$color=$this->input->get('color');
			@$brand=$this->input->get('brand');
			@$shape=$this->input->get('uses');
			
         $cat_data['pro_data']=$this->Vquery->product_data_color($color,$brand,$shape,$material,$fit,$purpose);
		}
		 else {
             	 //$cat_data['pro_data']=$this->Vquery->contactlense_product_data();
             }
        $cat_data['cat_data']=$this->Vquery->cat_list();

        $cat_data['subcat_data']=$this->Vquery->subcat_list();
        $cat_data['brand_name']=$this->Vquery->brand_data();
         $cat_data['color_name']=$this->Vquery->color_data();
          $cat_data['lense_uses']=$this->Vquery->uses_data();
          
		$this->load->view('contactLenses', $cat_data);
	}
	 public function productDetails()
	{
		$this->load->database();
		$id=$this->input->get('id');
		$this->load->model('Vquery');
        $cat_data['cat_data']=$this->Vquery->cat_list();
        $cat_data['subcat_data']=$this->Vquery->subcat_list();
        $cat_data['pro_data']=$this->Vquery->pro_data_byid($id);
        $cat_data['related']=$this->Vquery->relateddata();
        $cat_data['prescription_type']=$this->Vquery->prescription();
        $cat_data['sphere_data']=$this->Vquery->sphere_list();
        $cat_data['cylinder_data']=$this->Vquery->cylinder_list();
        $cat_data['axis_data']=$this->Vquery->axis_list();
        $cat_data['nearaddition_data']=$this->Vquery->nearaddition_list();
       
		$this->load->view('productDetails', $cat_data);
	}
 public function removewishlist(){

			
         $id =$this->input->post('wishid');
          echo $this->Vquery->removewishlist($id);
         
     
 }
	
	 public function shoppingCart()
		{
			 if(($this->session->userdata('isUserLoggedIn') &&
        $this->session->userdata('userId') ) || $this->session->userdata('guest'))
      
      {
		$this->load->library('cart');
        if($this->input->post('singleVision')){
        	
        	$prescription_id=$this->input->post('prescription');
        	$this->load->database();
        	$this->load->model('Vquery');
        	$press['press']=$this->Vquery->prescription_package($prescription_id);
            foreach ($press as $key => $value) {
            	$lense_price=$value->price;
            	$prescription_type=$value->prescription_type;
            	$lense_name=$value->lense_name;
            }   
        	
        	
		$data = array('id' => $_POST['id'],
		              'name' => $_POST['pro_name'],
		              'lense_price'=>$lense_price,
		              'prescription_type'=>$prescription_type,
		              'prescription_name'=>$_POST['prescriptionname'],
		              'lense_name'=>$lense_name,
		               'price' => $_POST['sale_price'],
		               'pro_image' => $_POST['pro_image'],
		               'qty'=>1,
		                 
		                  'lsphere' => $_POST['lsphere'],
		                  'rsphere' => $_POST['rsphere'],
		                  'lcylinder' => $_POST['lcylinder'],
		                  'rcylinder' => $_POST['rcylinder'],
		                  'laxis' => $_POST['laxis'],
		                  'raxis' => $_POST['raxis']
		                 );
		$this->cart->insert($data);
		redirect('shoppingCart');				
	}
	 if($this->input->post('singleVisionwishlist')){
        	
        	$prescription_id=$this->input->post('prescription_id');
        	$this->load->database();
        	$this->load->model('Vquery');
        	$press['press']=$this->Vquery->prescription_package($prescription_id);
            foreach ($press as $key => $value) {
            	$lense_price=$value->price;
            	$prescription_type=$value->prescription_type;
            	$lense_name=$value->lense_name;
            }   
        	
        	 $user['user'] = $this->Vquery->getRows(array('id'=>$this->session->userdata('userId')));
            foreach ($user as $key => $user) {
            	
            	  $gemail=$user->email;

            }  
		$data = array('id' => $_POST['id'],
		              'name' => $_POST['pro_name'],
		              'lense_price'=>$lense_price,
		              'prescription_type'=>$prescription_type,
		               'prescription_name'=>$_POST['prescriptionname'],
		              'prs_id'=>$prescription_id,
		              'lense_name'=>$lense_name,
		               'price' => $_POST['sale_price'],
		               'pro_image' => $_POST['pro_image'],
		               'qty'=>1,
		                 
		                  'lsphere' => $_POST['lsphere'],
		                  'rsphere' => $_POST['rsphere'],
		                  'lcylinder' => $_POST['lcylinder'],
		                  'rcylinder' => $_POST['rcylinder'],
		                  'laxis' => $_POST['laxis'],
		                  'raxis' => $_POST['raxis'],
		                  'email'=>$gemail
		                 );
		$this->Vquery->wishlist_insert($data);
		redirect('shoppingCart');				
	}	
	    elseif($this->input->post('bifocal')){
        	
        	$prescription_id=$this->input->post('prescription_id');
        	$this->load->database();
        	$this->load->model('Vquery');
        	$press['press']=$this->Vquery->prescription_package($prescription_id);
            foreach ($press as $key => $value) {
            	$lense_price=$value->price;
            	$prescription_type=$value->prescription_type;
            	$lense_name=$value->lense_name;
            }   
        	
        	
		$data = array('id' => $_POST['id'],
		              'name' => $_POST['pro_name'],
		              'lense_price'=>$lense_price,
		              'prescription_type'=>$prescription_type,
                        'prescription_name'=>$_POST['prescriptionname'],
		              'lense_name'=>$lense_name,
		               'price' => $_POST['sale_price'],
		               'pro_image' => $_POST['pro_image'],
		               'qty'=>1,
		                 
		                  'lsphere' => $_POST['lsphere'],
		                  'rsphere' => $_POST['rsphere'],
		                  'pdsphere' => $_POST['pdsphere'],
		                  'nearpdsphere' => $_POST['nearpdsphere'],
		                  'lcylinder' => $_POST['lcylinder'],
		                  'rcylinder' => $_POST['rcylinder'],
		                  'laxis' => $_POST['laxis'],
		                  'raxis' => $_POST['raxis'],
		                   'description' => $_POST['description']
		                 );
		$this->cart->insert($data);
		redirect('shoppingCart');				
	} 
	 elseif($this->input->post('bifocalwishlist')){
        	
        	$prescription_id=$this->input->post('prescription_id');
        	$this->load->database();
        	$this->load->model('Vquery');
        	$press['press']=$this->Vquery->prescription_package($prescription_id);
            foreach ($press as $key => $value) {
            	$lense_price=$value->price;
            	$prescription_type=$value->prescription_type;
            	$lense_name=$value->lense_name;
            }   
        	 $user['user'] = $this->Vquery->getRows(array('id'=>$this->session->userdata('userId')));
            foreach ($user as $key => $user) {
            	
            	  $gemail=$user->email;

            }  
        	
		$data = array('id' => $_POST['id'],
		              'name' => $_POST['pro_name'],
		              'lense_price'=>$lense_price,
		              'prescription_type'=>$prescription_type,
		               'prescription_name'=>$_POST['prescriptionname'],
		               'prs_id'=>$prescription_id,
		              'lense_name'=>$lense_name,
		               'price' => $_POST['sale_price'],
		               'pro_image' => $_POST['pro_image'],
		               'qty'=>1,
		                 
		                  'lsphere' => $_POST['lsphere'],
		                  'rsphere' => $_POST['rsphere'],
		                  'pdsphere' => $_POST['pdsphere'],
		                  'nearpdsphere' => $_POST['nearpdsphere'],
		                  'lcylinder' => $_POST['lcylinder'],
		                  'rcylinder' => $_POST['rcylinder'],
		                  'laxis' => $_POST['laxis'],
		                  'raxis' => $_POST['raxis'],
		                   'description' => $_POST['description'],
		                   'email'=>$gemail
		                 );
		$this->Vquery->wishlist_insert($data);
		redirect('shoppingCart');				
	}   
	 elseif($this->input->post('zeroPower')){
        	
        	$prescription_id=$this->input->post('zeroPower');
        	$this->load->database();
        	$this->load->model('Vquery');
        	$press['press']=$this->Vquery->prescription_package($prescription_id);
            foreach ($press as $key => $value) {
            	$lense_price=$value->price;
            	$prescription_type=$value->prescription_type;
            	$lense_name=$value->lense_name;
            }   
        	
        	
		$data = array('id' => $_POST['id'],
		              'name' => $_POST['pro_name'],
		              'lense_price'=>$lense_price,
		              'prescription_type'=>$prescription_type,
		               'prescription_name'=>$_POST['prescriptionname'],
		              'lense_name'=>$lense_name,
		               'price' => $_POST['sale_price'],
		               'pro_image' => $_POST['pro_image'],
		               'qty'=>1,
		                 
		                  'lsphere' => $_POST['lsphere'],
		                  'rsphere' => $_POST['rsphere'],
		                  'lcylinder' => $_POST['lcylinder'],
		                  'rcylinder' => $_POST['rcylinder'],
		                  'laxis' => $_POST['laxis'],
		                  'raxis' => $_POST['raxis']
		                 );
		$this->cart->insert($data);
		redirect('shoppingCart');
		}
		elseif($this->input->post('zeroPowerwishlist')){
        	
        	$prescription_id=$this->input->post('zeroPower');
        	$this->load->database();
        	$this->load->model('Vquery');
        	$press['press']=$this->Vquery->prescription_package($prescription_id);
            foreach ($press as $key => $value) {
            	$lense_price=$value->price;
            	$prescription_type=$value->prescription_type;
            	$lense_name=$value->lense_name;
            }   
        	 $user['user'] = $this->Vquery->getRows(array('id'=>$this->session->userdata('userId')));
            foreach ($user as $key => $user) {
            	
            	  $gemail=$user->email;

            }  
        	
		$data = array('id' => $_POST['id'],
		              'name' => $_POST['pro_name'],
		              'lense_price'=>$lense_price,
		              'prescription_type'=>$prescription_type,
		               'prescription_name'=>$_POST['prescriptionname'],
		               'prs_id'=>$prescription_id,
		              'lense_name'=>$lense_name,
		               'price' => $_POST['sale_price'],
		               'pro_image' => $_POST['pro_image'],
		               'qty'=>1,
		                 
		                  'lsphere' => $_POST['lsphere'],
		                  'rsphere' => $_POST['rsphere'],
		                  'lcylinder' => $_POST['lcylinder'],
		                  'rcylinder' => $_POST['rcylinder'],
		                  'laxis' => $_POST['laxis'],
		                  'raxis' => $_POST['raxis'],
		                  'email'=>$gemail
		                 );
		$this->Vquery->wishlist_insert($data);
		redirect('shoppingCart');
		}
						
	
	elseif($this->input->post('frameOnly')){
        	
        	$this->load->database();
        	$this->load->model('Vquery');     	       	
		$data = array('id' => $_POST['id'],
		              'name' => $_POST['pro_name'],
		               'price' => $_POST['sale_price'],
		               'pro_image' => $_POST['pro_image'],
		               'prescription_type'=>'Frame Only',
		                'prs_id'=>$prescription_id,
		               'qty'=>1		                 
		                );
		$this->cart->insert($data);
		redirect('shoppingCart');				
	}	
	elseif($this->input->post('frameOnlywish')){
        	
        	$this->load->database();
        	$this->load->model('Vquery');   
        	 $user['user'] = $this->Vquery->getRows(array('id'=>$this->session->userdata('userId')));
            foreach ($user as $key => $user) {
            	
            	  $gemail=$user->email;

            }  	       	
		$data = array(
			           'pro_id' => $_POST['id'],
		              'product_name' => $_POST['pro_name'],
		               'price' => $_POST['sale_price'],
		               'pro_image' => $_POST['pro_image'],
		               'email'=>     $gemail             
		                );
		$this->Vquery->wishlist_insert($data);
					
	}	
	elseif($this->input->post('addtocart')) {
		$this->load->database();
        	$this->load->model('Vquery');     	       	
		$data = array('id' => $_POST['id'],
		              'name' => $_POST['pro_name'],
		               'price' => $_POST['sale_price'],
		               'pro_image' => $_POST['pro_image'],
		               'prescription_type'=>'Frame Only',
		               'qty'=>1		                 
		                );
		 $this->cart->insert($data);
		redirect('productList');
	}
	$this->load->library('cart');
$this->load->model('Vquery');
		$this->load->database();
        $cat_data['cat_data']=$this->Vquery->cat_list();
        $cat_data['subcat_data']=$this->Vquery->subcat_list();
		$this->load->view('shoppingCart', $cat_data);

	}
	else{
			redirect('login_and_registration');
		}
}
	
	public function delete_product_from_cart()
	{
       $this->load->library('cart');
		$data = array(
        'rowid' => $this->input->post('rowid'),
        'qty'   => 0
);

$this->cart->update($data);
redirect('shoppingCart');
	}
public function fetch_data(){
	sleep(1);
	$subsubid=$this->input->post('sid');
	$pageid=$this->input->post('id');
    $brand=$this->input->post('brand');
	$fit=$this->input->post('fit');
	$color=$this->input->post('color');
	$material=$this->input->post('material');
	$shape=$this->input->post('shape');
	$purpose=$this->input->post('purpose');
	
	$config = array();
	$config['base_url']='#';
	$config['total_rows']=$this->Vquery->count_all($pageid,$brand,$fit,$color,$material,$shape,$purpose,$subsubid); 
 $this->load->library('pagination');
  $config['per_page'] = 50;
  $config['uri_segment'] = 3;
  $config['use_page_numbers'] = TRUE;
  $config['full_tag_open'] = '<ul class="pagination">';
  $config['full_tag_close'] = '</ul>';
  $config['first_tag_open'] = '<li>';
  $config['first_tag_close'] = '</li>';
  $config['last_tag_open'] = '<li>';
  $config['last_tag_close'] = '</li>';
  $config['next_link'] = '&gt;';
  $config['next_tag_open'] = '<li>';
  $config['next_tag_close'] = '</li>';
  $config['prev_link'] = '&lt;';
  $config['prev_tag_open'] = '<li>';
  $config['prev_tag_close'] = '</li>';
  $config['cur_tag_open'] = "<li class='active'><a href='#'>";
  $config['cur_tag_close'] = '</a></li>';
  $config['num_tag_open'] = '<li>';
  $config['num_tag_close'] = '</li>';
  $config['num_links'] = 3;
  $this->pagination->initialize($config);
  $page = 1;
  $start = ($page - 1) * $config['per_page'];
  $output = $this->Vquery->fetch_data($config["per_page"],$start,$pageid,$brand,$fit,$color,$material,$shape,$purpose,$subsubid);
  
  echo $output;
 }
 public function guest(){

 if($this->input->post('guest'))
 {
 	$guest=$this->input->post('guest');
      $this->session->set_userdata('guest',$guest);
      if($this->input->post('addnewaddress')){
	
 	 $this->form_validation->set_rules('name', 'Name', 'trim|alpha|required');
             $this->form_validation->set_rules('radio-group', 'Address Type', 'trim|required');
            $this->form_validation->set_rules('phone', 'Phone No', 'trim|required');
           $this->form_validation->set_rules('landmark', 'Landmark', 'trim|required');
            $this->form_validation->set_rules('address', 'Address', 'trim|required');
           $this->form_validation->set_rules('city', 'City', 'trim|required');
      $this->form_validation->set_rules('state', 'State', 'trim|required');
           $this->form_validation->set_rules('alternatephone', 'City', 'trim|required');
            $this->form_validation->set_rules('cpin', 'Pin Code', 'trim|required');
             $this->form_validation->set_rules('locality', 'Locality', 'trim|required');
           
 
 if($this->form_validation->run()){
 	
  
     $data=array(
     	'email'=>$gemail,
         'name'=>$this->input->post('name'),
         'addresstype'=>$this->input->post('radio-group'),
         'phone'=>$this->input->post('phone'),
         'landmark'=>$this->input->post('landmark'),
         'address'=>$this->input->post('address'),
         'city'=>$this->input->post('city'),
         'state'=>$this->input->post('state'),
         'alternatephone'=>$this->input->post('alternatephone'),
          'pincode'=>$this->input->post('cpin'),
         'locality'=>$this->input->post('locality'),
         'status'=>'1'
         
  
     );
        $data= $this->Vquery->entry_guestaddressinfo($data);
        if($data){
        	$this->session->set_flashdata('success_address','Your Address Information Has Been Added');
        	redirect('checkout');
        }
        else{
        	$this->session->set_flashdata('success_address','Something Went Wrong...');
        	redirect('checkout');
        
        }

}
}


      redirect('checkout');
 }
 else{
 	redirect('login_and_registration');
 }
}
	
	 public function checkout()
	{   
		$count=count($this->cart->contents());
      if($this->session->userdata('isUserLoggedIn') &&
        $this->session->userdata('userId'))
      {
      	if($count>0){
		$this->load->database();
		$this->load->model('Vquery');
        $cat_data['cat_data']=$this->Vquery->cat_list();
        $cat_data['subcat_data']=$this->Vquery->subcat_list();
		$this->load->view('checkout', $cat_data, $cat_data);
	}
	else{
		echo '<script>alert("Your Cart Is Empty")</script>';
		redirect('productList');
	}
	}
	 elseif($this->session->userdata('guest'))
      {
      	if($count>0){
		$this->load->database();
		$this->load->model('Vquery');
        $cat_data['cat_data']=$this->Vquery->cat_list();
        $cat_data['subcat_data']=$this->Vquery->subcat_list();
		$this->load->view('checkout', $cat_data, $cat_data);
	}
	else{
		echo '<script>alert("Your Cart Is Empty")</script>';
		redirect('productList');
	}
	}
	
	else{
		redirect('login_and_registration');
	}
	}

	public function myAccount()
	{
if($this->session->userdata('isUserLoggedIn') &&
        $this->session->userdata('userId')) {
		$this->load->database();
		$this->load->model('Vquery');
      
        	 $user['user'] = $this->Vquery->getRows(array('id'=>$this->session->userdata('userId')));
            foreach ($user as $key => $user) {
            	 $gfname=$user->fname;
            	  $gemail=$user->email;
            	 $phone= $user->phone;
               $this->session->set_userdata('phone',$phone);
            	  $dob=$user->dob;
            	   $this->session->set_userdata('dob',$dob);
                     }
 if($this->input->post('update_personal_info')){
 	 $this->form_validation->set_rules('name', 'Name', 'trim|alpha|required');
             $this->form_validation->set_rules('radio-group', 'gender', 'trim|required');
            $this->form_validation->set_rules('phone', 'Phone No', 'trim|required');
           $this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
 if($this->form_validation->run() == true){
 	
     $data=array(
         'fname'=>$this->input->post('name'),
         'gender'=>$this->input->post('radio-group'),
         'phone'=>$this->input->post('phone'),
         'dob'=>$this->input->post('dob')
     );
        $data= $this->Vquery->entry_personalinfo($data,$gemail);
        if($data){
        	$this->session->set_flashdata('success_info','Your Personal Information Has Been Updated');
        	redirect('myAccount');
        }
        else{
        	$this->session->set_flashdata('success_info','Something Went Wrong...');
        	redirect('myAccount');
        
        }

}
}
elseif($this->input->post('changepass')){
 echo '<script>alert("out")</script>';
 $this->form_validation->set_rules('cpass', 'Current Password', 'trim|required|callback_auth_password');
             $this->form_validation->set_rules('pass', 'Password', 'trim|required|callback_valid_password');
            $this->form_validation->set_rules('rnewpass', 'confirm password', 'trim|required|matches[pass]');
            if($this->form_validation->run()){
            	
            	$pass=$this->input->post('pass');
            	$this->session->userdata('user_email');
            	$gemail=$this->Vquery->updatepass($pass,$gemail);
            	$this->session->set_flashdata('success_pass','successfully Password Updated');
            	redirect('myAccount');
 	
  
}
else {
	redirect('myAccount');
}
        
}
elseif($this->input->post('addnewaddress')){
	
 	 $this->form_validation->set_rules('name', 'Name', 'trim|alpha|required');
             $this->form_validation->set_rules('radio-group', 'Address Type', 'trim|required');
            $this->form_validation->set_rules('phone', 'Phone No', 'trim|required');
           $this->form_validation->set_rules('landmark', 'Landmark', 'trim|required');
            $this->form_validation->set_rules('address', 'Address', 'trim|required');
           $this->form_validation->set_rules('city', 'City', 'trim|required');
      $this->form_validation->set_rules('state', 'State', 'trim|required');
           $this->form_validation->set_rules('alternatephone', 'City', 'trim|required');
            $this->form_validation->set_rules('cpin', 'Pin Code', 'trim|required');
             $this->form_validation->set_rules('locality', 'Locality', 'trim|required');
           
 
 if($this->form_validation->run()){
 	
  
     $data=array(
     	'email'=>$gemail,
         'name'=>$this->input->post('name'),
         'addresstype'=>$this->input->post('radio-group'),
         'phone'=>$this->input->post('phone'),
         'landmark'=>$this->input->post('landmark'),
         'address'=>$this->input->post('address'),
         'city'=>$this->input->post('city'),
         'state'=>$this->input->post('state'),
         'alternatephone'=>$this->input->post('alternatephone'),
          'pincode'=>$this->input->post('cpin'),
         'locality'=>$this->input->post('locality'),
         'status'=>'1'
         
  
     );
        $data= $this->Vquery->entry_addressinfo($data);
        if($data){
        	$this->session->set_flashdata('success_address','Your Address Information Has Been Added');
        	redirect('myAccount');
        }
        else{
        	$this->session->set_flashdata('success_address','Something Went Wrong...');
        	redirect('myAccount');
        
        }

}
}

       $user_email=$gemail;
        $cat_data['wishlist']=   $this->Vquery->wishlist($user_email);
         $cat_data['useraddress']=   $this->Vquery->useraddress($user_email);
        $cat_data['cat_data']=$this->Vquery->cat_list();
        $cat_data['subcat_data']=$this->Vquery->subcat_list();
		$this->load->view('myAccount', $cat_data);
	}
	else{
		redirect('login_and_registration');
	}
	}
  public function changepass(){
  	if($this->input->post('changepass')){
	echo '<script>alert("out")</script>';
 $this->form_validation->set_rules('cpass', 'Current Password', 'trim|required|callback_auth_password');
             $this->form_validation->set_rules('pass', 'Password', 'trim|required|callback_valid_password');
            $this->form_validation->set_rules('rnewpass', 'confirm password', 'trim|required|matches[pass]');
            if($this->form_validation->run()){
            	echo '<script>alert("in")</script>';
            	$pass=$this->input->post('pass');
            	$this->session->userdata('user_email');
            	$gemail=$this->Vquery->updatepass($pass,$gemail);
            	$this->session->set_flashdata('success_pass','successfully Password Updated');
            	redirect('myAccount');
 	
  
}
else {
	echo 'bad';
}
        
}
  }
  
	 public function orderDetails()
	
	{
		$this->load->database();
		$this->load->model('Vquery');
        $cat_data['cat_data']=$this->Vquery->cat_list();
        $cat_data['subcat_data']=$this->Vquery->subcat_list();
		$this->load->view('orderDetails', $cat_data);
	}
    
	public function term_and_condition()
	{
		$this->load->database();
		$this->load->model('Vquery');
        $cat_data['cat_data']=$this->Vquery->cat_list();
        $cat_data['subcat_data']=$this->Vquery->subcat_list();
        $cat_data['term_get']=$this->Vquery->term_get();
		$this->load->view('terms_&_Conditions', $cat_data);
	}
	public function faq()
	{
		$this->load->database();
		$this->load->model('Vquery');
        $cat_data['cat_data']=$this->Vquery->cat_list();
        $cat_data['subcat_data']=$this->Vquery->subcat_list();
        $cat_data['faq_data']=$this->Vquery->faq_get();
		$this->load->view('faq', $cat_data);
	}
	public function login_and_registration()
	{
		 if(!$this->session->userdata('isUserLoggedIn') &&
        !$this->session->userdata('userId') ) 
      {
		$this->load->database();
		$this->load->model('Vquery');
        $cat_data['cat_data']=$this->Vquery->cat_list();
        $cat_data['subcat_data']=$this->Vquery->subcat_list();
        //----------------------------------------------------
            $data = array();
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
                $data = array();
       
        if($this->input->post('regisSubmit')){
        	
        	 $userData = array();
            $this->form_validation->set_rules('fname', 'First Name', 'trim|alpha|required');
            $this->form_validation->set_rules('lname', 'Last Name', 'trim|alpha|required');
            $this->form_validation->set_rules('cemail', 'Email', 'trim|required|valid_email|callback_email_check');
            $this->form_validation->set_rules('pass', 'Password', 'trim|required|callback_valid_password');
            $this->form_validation->set_rules('cpass', 'confirm password', 'trim|required|matches[pass]');

            $userData = array(
                'fname' => strip_tags($this->input->post('fname')),
                'lname' => strip_tags($this->input->post('lname')),
                'email' => strip_tags($this->input->post('cemail')),
                'password' => $this->input->post('pass'),
                'status'=>1
            );

            if($this->form_validation->run() == true){
            	$this->load->model('Vquery');
                $insert = $this->Vquery->insert_user($userData);
                if($insert){
                    $msg=$this->session->set_flashdata('rsuccess_msg', 'Registered successfully. Please login to your account.');

                    
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        
        $userdata['user'] = $userData;
        
        
    }
        if($this->input->post('loginSubmit')){
        	
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == true) {
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'email'=>$this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'status' => '1'
                );
                $this->load->model('Vquery');
                $checkLogin = $this->Vquery->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['id']);
                    redirect('shoppingCart');
                }else{
                   
                    $this->session->set_flashdata('error_msg','Wrong email or password, please try again.');

                }
            }
        }
        //load the view
		$this->load->view('signIn_&_register', $cat_data,@$dataa,$data,@$userdata);
	}
	else{
		redirect('index');
	}
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
    public function auth_password($cpass = ''){
    	$password = trim($cpass);
    	$useremail=$this->session->userdata('user_email');
    	$auth=$this->Vquery->authpass($password,$useremail);
    	if($auth==false){
       
			$this->form_validation->set_message('cpass', 'Your Current Password Is Wrong.');
			return FALSE;
    	}
        else{
        	return true;
        }
    }
    public function valid_password($password = '')
	{
		$password = trim($password);
		$regex_lowercase = '/[a-z]/';
		$regex_uppercase = '/[A-Z]/';
		$regex_number = '/[0-9]/';
		$regex_special = '/[!@#$%^&*()\-_=+{};:,<.>§~]/';
		if (empty($password))
		{
			$this->form_validation->set_message('valid_password', 'The {field} field is required.');
			return FALSE;
		}
		if (preg_match_all($regex_lowercase, $password) < 1)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field must be at least one lowercase letter.');
			return FALSE;
		}
		if (preg_match_all($regex_uppercase, $password) < 1)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field must be at least one uppercase letter.');
			return FALSE;
		}
		if (preg_match_all($regex_number, $password) < 1)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field must have at least one number.');
			return FALSE;
		}
		if (preg_match_all($regex_special, $password) < 1)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field must have at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>§~'));
			return FALSE;
		}
		if (strlen($password) < 5)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field must be at least 5 characters in length.');
			return FALSE;
		}
		if (strlen($password) > 32)
		{
			$this->form_validation->set_message('valid_password', 'The {field} field cannot exceed 32 characters in length.');
			return FALSE;
		}
		return TRUE;
	}
	public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->unset_userdata('user_name');
        $this->session->unset_userdata('user_email');
        $this->session->sess_destroy();
        redirect('index');
    }
    public function guestdelete(){
       
        $this->session->unset_userdata('guest');
        $this->session->sess_destroy();
        redirect('index');
    }
    public function addtocart(){  
                      $this->load->library('cart');
                      $cartdata = array('id' => $_POST['id'],
		              'name' => $_POST['name'],
		             
		               'price' => $_POST['price'],
		              
		               'qty'=>1
		                 
		                 );
                      $this->session->set_userdata('cartdata',$cartdata);
		
		redirect('productList');	
	}
	public function personalinfo(){
		if($this->session->userdata('isUserLoggedIn') &&
        $this->session->userdata('userId')) {
		$this->load->database();
		$this->load->model('Vquery');
      
        	 $user['user'] = $this->Vquery->getRows(array('id'=>$this->session->userdata('userId')));
            foreach ($user as $key => $user) {
            	 $gfname=$user->fname;
            	  $gemail=$user->email;
}
 $this->form_validation->set_rules('name', 'Name', 'trim|alpha|required');
             $this->form_validation->set_rules('gender', 'gender', 'trim|required');
            $this->form_validation->set_rules('phone', 'Password', 'trim|required|');
           $this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
 if($this->form_validation->run() == true){
     $array=array(
         'name'=>$this->input->post('name'),
         'gender'=>$this->input->post('gender'),
         'phone'=>$this->input->post('phone'),
         'dob'=>$this->input->post('dob')
     );
        $result= $this->Vquery->entry_personalinfo($array,$gemail);
        if($result){
        	$this->session->set_flashdata('success_info','Your Personal Information Has Been Updated');
        	redirect();
        }

}
	}
   
}
public function newsletter(){
	if($this->input->post('email')){
		$data=array(
       'email'=>$this->input->post('email'),
       'status'=>'1'
		);
	echo $this->Vquery->newsletter($data);
	}
	else{
		redirect('index');
	}
}
public function resetpassword(){
	if($_GET("email")!=NULL && $_GET("token")!=NULL){
		$email=$_GET("email");
		$token=$_GET("token");
		$id= $this->Vquery->frgpass($email);//change this function name

	}
	else{
		redirect('signIn_&_register');
	}
}
public function forgetpassword(){
	if($this->input->post('frgpass')){		
       $email=$this->input->post('email');		
	$id= $this->Vquery->frgpass($email);
	}
	else{
		redirect('index');
	}
}
}