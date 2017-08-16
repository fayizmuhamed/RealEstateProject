<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author DELL
 */
class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index() {

        if ($this->session->userdata('is_logged_in')) {

            redirect('admin/home');
        } else {

            $this->load->view('admin/login');
        }
    }

    /**
     * Encrypt the password 
     * @return mixed
     */
    function __encrypt_password($password) {
        $this->load->library('encryption');
        return $this->encryption->encrypt($password);

        //return md5($password);
    }

    /**
     * Encrypt the password 
     * @return mixed
     */
    function __decrypt_password($password) {
        $this->load->library('encryption');
        return $this->encryption->decrypt($password);

        //return md5($password);
    }

    /**
     * check the username and the password with the database
     * @return void
     */
    function validate_credentials() {


        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {

            if (isset($this->session->userdata['is_logged_in'])) {

                redirect('admin/home');
            } else {

                $data = array(
                    'error_message' => 'Invalid Username or Password'
                );

                $this->load->view('admin/login', $data);
            }
        } else {

            //get username from input
            $username = $this->input->post('username');

            //get password from input
            $password = $this->input->post('password');

            //get user type
            $usertype = USER_TYPE_ADMIN;

            //call user validate from model class
            $result = $this->User_model->validate($username, $password, $usertype);



            if ($result) {

                $user_password = $this->__decrypt_password(isset($result->password) ? $result->password : '');

                if ($user_password == $password) {

                    $session_data = array(
                        'username' => $username,
                        'is_logged_in' => true
                    );
                    $this->session->set_userdata($session_data);

                    redirect('admin/home');
                } else {

                    $data = array(
                        'error_message' => 'Invalid Password'
                    );

                    $this->load->view('admin/login', $data);
                }
            } else {

                $data = array(
                    'error_message' => 'Invalid Username or Password'
                );

                $this->load->view('admin/login', $data);
            }
        }
    }

    /**
     * Destroy the session, and logout the user.
     * @return void
     */
    function logout() {
        $this->session->sess_destroy();
        redirect('admin');
    }

    /**
     * Load the main view with all the current model model's data.
     * @return void
     */
    public function changePassword() {

        if (!$this->session->userdata('is_logged_in')) {
            redirect('admin/login');
        }

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            //form validation
            $this->form_validation->set_rules('current_password', 'Current Password', 'trim|required|xss_clean|callback_passwordCheck');
            $this->form_validation->set_rules('new_password', 'New Password', 'trim|required|matches[confirm_password]|xss_clean');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run()) {


                //get username from input
                $username = $this->session->userdata('username');

                //get password from input
                $password = $this->__encrypt_password($this->input->post('new_password', TRUE));

                $data_to_store = array(
                    'user_name' => $username,
                    'password' => $password,
                    'user_type' => USER_TYPE_ADMIN
                );

                //if the insert has returned true then we show the flash message
                if ($this->User_model->update_password($username, $data_to_store)) {

                    $this->session->set_flashdata('flash_message', TRUE);
                    redirect(current_url());
                    //redirect(current_url());
                } else {
                    $this->session->set_flashdata('flash_message', FALSE);
                }
            } else {
                $this->session->set_flashdata('flash_message', FALSE);
            }
        }


        //load the view
        $data['content'] = 'admin/change_password';

        $this->load->view('includes/admin_template', $data);
    }

    public function passwordCheck() {

        $password = $this->input->post('current_password');

        //get username from input
        $username = $this->session->userdata('username');

        //get user type
        $usertype = USER_TYPE_ADMIN;

        //call user validate from model class
        $result = $this->User_model->validate($username, $password, $usertype);

        if ($result) {

            $user_password = $this->__decrypt_password(isset($result->password) ? $result->password : '');

            if ($user_password == $password) {

                return true;
            } else {
                $this->form_validation->set_message('passwordCheck', 'Invalid current password, please try again');
                return false;
            }
        } else {
            $this->form_validation->set_message('passwordCheck', 'Invalid current password, please try again');
            return false;
        }
    }

}
