<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Team
 *
 * @author DELL
 */
class Career extends PublicController {

    //put your code here
    //put your code here

    public function __construct() {
        parent::__construct();

        $this->load->library('image_lib');
        $this->load->model('Opportunity_model');
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index() {

        $data['opportunities'] = $this->Opportunity_model->find_all();
        //load the view
        $data['content'] = 'public/career';
        $this->load->view('includes/public/template', $data);
    }

    function drop_my_cv() {

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            //form validation
            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
            $this->form_validation->set_rules('contact', 'Mobie Number', 'trim|required|xss_clean');
            $this->form_validation->set_rules('applied_for', 'Applied For', 'trim|required|xss_clean');
           // $this->form_validation->set_rules('resume', 'Resume', 'trim|required|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run()) {

                
                $resume_tmp_path = $_FILES['resume']['tmp_name'] . '/' . $_FILES['resume']['name'];

                $data_to_send = array(
                    'first_name' => $this->input->post('first_name', true),
                    'last_name' => $this->input->post('last_name', true),
                    'email' => $this->input->post('email', true),
                    'contact' => $this->input->post('contact', true),
                    'applied_for' => $this->input->post('applied_for', true),
                );

                $to = $this->configurations['admin_email'];
                $subject = "Drop my cv";

                $message = $this->load->view('includes/email/drop_my_cv_request', $data_to_send, TRUE);

                if (send_email('html', $to, $subject, $message,$resume_tmp_path)) {

                    $status = 'success';
                    $message = 'Resume uploaded successfully';
                } else {
                    $status = 'failed';
                    $message = 'Resume upload failed';
                }
            } else {
                $status = 'failed';
                $message = validation_errors();
            }

            if ($this->input->is_ajax_request()) {

                exit($this->send_response($status, $message));
            }
        }
    }

}
