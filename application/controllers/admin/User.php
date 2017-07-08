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
        return md5($password);
    }

    /**
     * check the username and the password with the database
     * @return void
     */
    function validate_credentials() {


        //Load Users_model
        $this->load->model('User_model');

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
            $password = $this->__encrypt_password($this->input->post('password'));

            //get user type
            $usertype = USER_TYPE_ADMIN;

            //call user validate from model class
            $result = $this->User_model->validate($username, $password, $usertype);

            if ($result == TRUE) {

                $session_data = array(
                    'username' => $username,
                    'is_logged_in' => true
                );
                $this->session->set_userdata($session_data);

                redirect('admin/home');
                
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

    

}
