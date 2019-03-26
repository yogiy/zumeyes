<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Locations extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('isUser_LoggedIn') && $this->session->userdata('user_Id')) {
            $this->load->library('session');
            $this->load->model('Location');
            $this->load->database();

            $this->load->library('form_validation');
            $this->load->database();
            $this->load->model('Aquery');
            $adminuser['adminuser'] = $this->Aquery->get_profilerow(array('id' => $this->session->userdata('user_Id')));
            foreach ($adminuser as $key => $adminuserr) {
                $usrname = $adminuserr->name;
                $email = $adminuserr->email;
                $imgg = $adminuserr->user_image;

                $this->session->set_userdata('user_email', $email);
                $this->session->set_userdata('user_nname', $usrname);

                $this->session->set_userdata('userimg', $imgg);

            }
        } else {
            redirect('auth/login');

        }

    }
    public function addLocation()
    {
        $location_data['location_data'] = $this->Location->location_data();
        $this->load->view('admin/zumeyesadmin/addlocations', $location_data);
    }

    public function insert_location()
    {
        if ($this->input->post('shop_name') && $this->input->post('address')) {
            if ($this->input->post('shop_name') && $this->input->post('address') && $this->input->post('shop_info')) {
                $data = array('shop_name' => $this->input->post('shop_name'),
                    'address' => $this->input->post('address'),
                    'shop_about' => $this->input->post('shop_about'),
                    'shop_info' => $this->input->post('shop_info'),
                    'status' => 1);
            } elseif ($this->input->post('shop_name') && $this->input->post('address')) {
                $data = array('shop_name' => $this->input->post('shop_name'),
                    'address' => $this->input->post('address'),
                    'shop_about' => $this->input->post('shop_about'),
                    'status' => 1);
            }

            $result = $this->Location->insert_location($data);
            if ($result == true) {
                $this->session->set_flashdata('form_succ_msg', 'Location has been added.');
                redirect('locations/addLocation');
            } else {
                $this->session->set_flashdata('form_succ_msg', 'Location did not added.');
                redirect('locations/addLocation');
            }
        } else {
            redirect('locations/addLocation');
        }
    }

    public function update_location()
    {

        $id = $this->input->get('id');

        if ($this->input->post('location_update')) {
            $bid = $this->input->post('id');
            if ($this->input->post('shop_name') && $this->input->post('address') && $this->input->post('shop_info')) {
                $location_data = array(

                    'shop_name' => $this->input->post('shop_name'),
                    'shop_about' => $this->input->post('shop_about'),
                    'shop_info' => $this->input->post('shop_info'),
                    'address' => $this->input->post('address'),
                );

            } elseif ($this->input->post('shop_name') && $this->input->post('address')) {

                $location_data = array(

                    'shop_name' => $this->input->post('shop_name'),
                    'shop_about' => $this->input->post('shop_about'),
                    'address' => $this->input->post('address'),
                );

            }
            $this->Location->update_location($location_data, $bid);
            redirect('locations/addLocation');
        } else {
            $location_data['location_data'] = $this->Location->get_location_data($id);
            $this->load->view('admin/zumeyesadmin/updatelocation', $location_data);

        }

    }
    public function status_location()
    {
        if ($this->input->post('status') == 1) {
            $cstatus = 0;
        } elseif ($this->input->post('status') == 0) {
            $cstatus = 1;
        }
        $status = array(
            'status' => $cstatus,
        );
        $id = $this->input->post('id');

        $this->Location->status_location($status, $id);

        redirect('locations/addLocation');
    }
}
