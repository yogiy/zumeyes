<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('Aquery');
    }
    public function login()
    {
        if (!$this->session->userdata('isUser_LoggedIn') &&
            !$this->session->userdata('user_Id')) {

            if ($this->input->post('login')) {

                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('password', 'password', 'required');
                if ($this->form_validation->run() == true) {
                    $con['returnType'] = 'single';
                    $con['conditions'] = array(
                        'email' => $this->input->post('email'),
                        'password' => $this->input->post('password'),
                        'status' => 1,
                    );

                    $this->load->model('Aquery');
                    $checkLogin = $this->Aquery->getRows($con);
                    if ($checkLogin) {
                        $this->session->set_userdata('isUser_LoggedIn', true);
                        $this->session->set_userdata('user_Id', $checkLogin['id']);
                        redirect('admin/homepage');
                    } else {

                        $data['error_msg'] = 'Wrong email or password, please try again.';
                    }
                }
            }
            $this->load->view('admin/zumeyesadmin/login', @$data);
        } else {
            redirect("admin/homepage");
        }

    }

    public function resetpass()
    {
        if ($this->session->userdata('otpemail')) {
            $this->session->userdata('otpemail');
            $this->form_validation->set_rules('pass', 'Password', 'trim|required|callback_valid_password');
            $this->form_validation->set_rules('cpass', 'confirm password', 'trim|required|matches[pass]');

            $userData = array(
                'password' => $this->input->post('pass'),

            );

            if ($this->form_validation->run() == true) {

                $email = $this->session->userdata('otpemail');
                $this->load->model('status');
                $insert = $this->status->updatepass($userData, $email);
                if ($insert) {
                    $msg = $this->session->set_flashdata('osuccess_msg', 'Your Password successfully changed. Please login to your account.');
                    $this->session->sess_destroy();
                    redirect('auth/login');

                } else {
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }

            $this->load->view('admin/zumeyesadmin/resetpass');
        } else {
            redirect('auth/login');
        }

    }
    public function valid_password($password = '')
    {
        $password = trim($password);
        $regex_lowercase = '/[a-z]/';
        $regex_uppercase = '/[A-Z]/';
        $regex_number = '/[0-9]/';
        $regex_special = '/[!@#$%^&*()\-_=+{};:,<.>§~]/';
        if (empty($password)) {
            $this->form_validation->set_message('valid_password', 'The {field} field is required.');
            return false;
        }
        if (preg_match_all($regex_lowercase, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least one lowercase letter.');
            return false;
        }
        if (preg_match_all($regex_uppercase, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least one uppercase letter.');
            return false;
        }
        if (preg_match_all($regex_number, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'The {field} field must have at least one number.');
            return false;
        }
        if (preg_match_all($regex_special, $password) < 1) {
            $this->form_validation->set_message('valid_password', 'The {field} field must have at least one special character.' . ' ' . htmlentities('!@#$%^&*()\-_=+{};:,<.>§~'));
            return false;
        }
        if (strlen($password) < 5) {
            $this->form_validation->set_message('valid_password', 'The {field} field must be at least 5 characters in length.');
            return false;
        }
        if (strlen($password) > 32) {
            $this->form_validation->set_message('valid_password', 'The {field} field cannot exceed 32 characters in length.');
            return false;
        }
        return true;
    }
    public function identify()
    {
        $this->load->helper('cookie');

        if ($this->input->post('frgpass')) {

            $email = $this->input->post('email');
            $numbers = $this->input->post('phone');
            $this->load->model('status');
            $user = $this->status->frgpass($email, $numbers);
            if ($user == true) {

                $number = array($numbers);
                $sender = urlencode('TXTLCL');
                $number = implode(',', $number);
                $otp = mt_rand(10000, 99999);
                $message = "This is your OTP of your zumeyes Admin Panel:" . $otp;

                $apiKey = urlencode('SE9SSwAgRZM-WLNZAAKcWsxR38FMlMrEkpZXtDi66S');
                $data = array('apikey' => $apiKey, 'numbers' => $number, "sender" => $sender, "message" => $message);
                // Send the POST request with cURL
                $ch = curl_init('https://api.textlocal.in/send/');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);

                // Process your response here
                $this->session->set_userdata('otp', $otp);
                $this->session->set_userdata('otpemail', $email);
                $this->session->set_flashdata('success_otp', 'Otp successfully sent to your registered phone number.');
                redirect('auth/verifyotp');

            } else {
                $this->session->set_flashdata('unauth', 'You are not registered');
            }
        }

        $this->load->view('admin/zumeyesadmin/otp');

    }
    public function verifyotp()
    {
        if ($this->input->post('verifybtn')) {
            $cotp = $this->input->post('verifyotp');
            $otp = $this->session->userdata('otp');
            if ($cotp == $otp) {

                redirect('auth/resetpass');
            } else {
                $this->session->set_flashdata('wrong_otp', 'You otp is incorrect');
                redirect('auth/verifyotp');
            }

        }

        $this->load->view('admin/zumeyesadmin/verifyotp');

    }

    public function logout()
    {
        $this->session->unset_userdata('isUser_LoggedIn');
        $this->session->unset_userdata('user_Id');
        $this->session->unset_userdata('user_nname');
        $this->session->unset_userdata('userimg');
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
