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
class Contact extends PublicController {

    //put your code here
    //put your code here

    public function __construct() {
        parent::__construct();

        $this->load->library('image_lib');
        $this->load->model('Testimonial_model');
        $this->load->model('Employee_model');
        $this->load->model('Property_type_model');
       
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index() {


        $this->data['employees'] = $this->Employee_model->find_all();
        $this->data['property_types'] = $this->Property_type_model->find_all();
        //load the view
        $this->data['content'] = 'public/contact';
        $this->load->view('includes/public/template', $this->data);
    }

    function send_feedback() {

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            //form validation
            $this->form_validation->set_rules('testimonial_author_name', 'Author Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('testimonial_author_email', 'Author Email', 'trim|required|xss_clean|valid_email');
            $this->form_validation->set_rules('testimonial_author_contact', 'Author Contact', 'trim|required|xss_clean');
            $this->form_validation->set_rules('testimonial_author_relation', 'Bridges & Allies Experience', 'trim|required|xss_clean');
            $this->form_validation->set_rules('testimonial_message', 'Message', 'trim|required|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run()) {
                $data_to_store = array(
                    'testimonial_author_name' => $this->input->post('testimonial_author_name', true),
                    'testimonial_author_email' => $this->input->post('testimonial_author_email', true),
                    'testimonial_author_contact' => $this->input->post('testimonial_author_contact', true),
                    'testimonial_author_relation' => $this->input->post('testimonial_author_relation', true),
                    'testimonial_agent' => ($this->input->post('testimonial_agent') === null) ? 0 : $this->input->post('testimonial_agent'),
                    'testimonial_approved' => 0,
                    'testimonial_message' => $this->input->post('testimonial_message', true),
                    'testimonial_property_type' => ($this->input->post('testimonial_property_type') === null) ? 0 : $this->input->post('testimonial_property_type')
                );


                //if the insert has returned true then we show the flash message
                if ($this->Testimonial_model->insert($data_to_store)) {
                    
                    //sent feedback request to admin
                    $this->send_feed_back_request($data_to_store);
                    
                    //sent feedback confirmation to author
                    $this->send_feed_back_confirmation($data_to_store);
                    $status = 'success';
                    $message = 'Feedback sent successfully';
                } else {
                    $status = 'failed';
                    $message = 'Feedback sent failed';
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

    function send_feed_back_request($params) {

        $send_feed_back_request = isset($this->configurations['send_feed_back_request']) ? $this->configurations['send_feed_back_request'] : 'no';

        if ($send_feed_back_request == 'no') {

            return;
        }

        $to = $this->configurations['admin_email'];
        $subject = "SHARE B&A EXPERIENCE";
        $agents = $this->Employee_model->find_by_id($params['testimonial_agent']);
        $agent = $agents == null ? [] : $agents[0];
        $data_to_send = array(
            'author' => $params['testimonial_author_name'],
            'email' => $params['testimonial_author_email'],
            'contact' => $params['testimonial_author_contact'],
            'agent' => isset($agent['emp_name']) ? $agent['emp_name'] : '',
            'message' => $params['testimonial_message'],
        );
        $message = $this->load->view('includes/email/feedback_request', $data_to_send, TRUE);

        
        send_email('html',$to,$subject,$message);
    }

    function send_feed_back_confirmation($params) {
       
        $send_feed_back_confirmation = isset($this->configurations['send_feed_back_confirmation']) ? $this->configurations['send_feed_back_confirmation'] : 'no';

        if ($send_feed_back_confirmation == 'no') {

            return;
        }
        
        

        $to = $params['testimonial_author_email'];
        $subject = "Re:Thank you for your feedback";
        $data_to_send = array(
            'name' => $params['testimonial_author_name']
        );
        $message = $this->load->view('includes/email/feedback_confirmation', $data_to_send, TRUE);

        send_email('html',$to,$subject,$message);
        
       
    }

}
