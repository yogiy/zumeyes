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
    public function status_category(){
      $status=$this->input->post('status');
      $id=$this->input->post('id');
      $this->Aquery->status_category($status,$id);
      redirect('admin/category');
    }
  }
  ?>