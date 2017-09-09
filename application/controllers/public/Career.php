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

        $this->data['opportunities'] = $this->Opportunity_model->find_all();
        //load the view
        $this->data['content'] = 'public/career';
        $this->load->view('includes/public/template', $this->data);
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
            if ($this->form_validation->run() && $this->resume_upload()) {


                $resume_tmp_path = (empty($this->upload_data) || !isset($this->upload_data['resume'])) ? null : $this->upload_data['resume']['full_path'];

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

                if (send_email('html', $to, $subject, $message, ($resume_tmp_path ? array('Resume' => $resume_tmp_path) : null))) {

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

    function resume_upload() {

        if ($_FILES['resume']['size'] != 0) {

            $upload_dir = './uploads/resume';

            if (!is_dir($upload_dir)) {

                mkdir($upload_dir);
            }

            $config2['upload_path'] = $upload_dir;

            $config2['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx|sql';

            $config2['max_size'] = 200;

            $date = new DateTime();

            $file_name = 'resume_' . $date->format('Y_m_d_H_i_s');

            $config2['file_name'] = $file_name;

            $config2['overwrite'] = false;

            $this->load->library('upload', $config2);

            if (!$this->upload->do_upload('resume')) {

                $this->form_validation->set_message('resume', $this->upload->display_errors());

                return false;
            } else {

                $this->upload_data['resume'] = $this->upload->data();

                return true;
            }
        } else {

            return true;
        }
    }

}
