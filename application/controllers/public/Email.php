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
class Email extends PublicController {

//put your code here
//put your code here

    public function __construct() {
        parent::__construct();

        $this->load->library('image_lib');
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function quick_enquiry() {

        if ($this->input->server('REQUEST_METHOD') !== 'POST') {
            return;
        }
        $this->form_validation->set_rules('author_name', ' Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('author_email', ' Email', 'trim|required|xss_clean|valid_email');
        $this->form_validation->set_rules('author_contact', 'Contact', 'trim|required|xss_clean');
        $this->form_validation->set_rules('author_message', 'Message', 'trim|required|xss_clean');

        //if the form has passed through the validation
        if ($this->form_validation->run()) {

            $enquiry_type = $this->input->post('type', true);

            switch ($enquiry_type) {

                case "quick":
                    $send = $this->send_quick_enquiry();
                    break;
                case "project":
                    $send = $this->send_project_enquiry();
                    break;
                case "property":
                    $send = $this->send_property_enquiry();
                    break;
                default :
                    $send = $this->send_quick_enquiry();
                    break;
            }

            if ($send) {

                $this->send_enquiry_confirmation();

                $status = 'success';
                $message = 'Enquiry sent successfully';
            } else {

                $status = 'failed';
                $message = 'Enquiry sent failed';
            }
        } else {
            $status = 'failed';
            $message = validation_errors();
        }

        if ($this->input->is_ajax_request()) {

            exit($this->send_response($status, $message));
        }
    }

    function send_quick_enquiry() {

        $to = $this->configurations['admin_email'];
        $subject = "Quick Enquiry";
        $data_to_send = array(
            'author_name' => $this->input->post('author_name', true),
            'author_email' => $this->input->post('author_email', true),
            'author_contact' => $this->input->post('author_contact', true),
            'message' => $this->input->post('author_message', true),
        );

        $data['data'] = $data_to_send;
        $data['title'] = 'Quick Enquiry';

        $message = $this->load->view('includes/email/enquiry_request', $data, TRUE);

        return send_email('html', $to, $subject, $message);
    }

    function send_project_enquiry() {

        $to = $this->configurations['admin_email'];
        $subject = "Project Enquiry";
        $data_to_send = array(
            'author_name' => $this->input->post('author_name', true),
            'author_email' => $this->input->post('author_email', true),
            'author_contact' => $this->input->post('author_contact', true),
            'project_ref_no' => $this->input->post('ref_number', true),
            'project_name' => $this->input->post('ref_name', true),
            'message' => $this->input->post('author_message', true),
        );

        $data['data'] = $data_to_send;
        $data['title'] = 'Project Enquiry';

        $message = $this->load->view('includes/email/enquiry_request', $data, TRUE);

        return send_email('html', $to, $subject, $message);
    }

    function send_property_enquiry() {

        $to = $this->configurations['admin_email'];
        $subject = "Property Enquiry";
        $data_to_send = array(
            'author_name' => $this->input->post('author_name', true),
            'author_email' => $this->input->post('author_email', true),
            'author_contact' => $this->input->post('author_contact', true),
            'project_ref_no' => $this->input->post('ref_number', true),
            'project_name' => $this->input->post('ref_name', true),
            'message' => $this->input->post('author_message', true),
        );

        $data['data'] = $data_to_send;
        $data['title'] = 'Property Enquiry';

        $message = $this->load->view('includes/email/enquiry_request', $data, TRUE);

        return send_email('html', $to, $subject, $message);
    }

    function send_enquiry_confirmation() {

        $send_enquiry_confirmation = isset($this->configurations['send_enquiry_confirmation']) ? $this->configurations['send_enquiry_confirmation'] : 'no';

        if ($send_enquiry_confirmation == 'no') {

            return true;
        } else {

            $to = $this->input->post('author_email', true);
            $subject = "Re:Thank you for your enquiry";
            $data_to_send = array(
                'author' => $this->input->post('author_name', true)
            );
            $message = $this->load->view('includes/email/enquiry_confirmation', $data_to_send, TRUE);

            send_email('html', $to, $subject, $message);

            return true;
        }
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function enquiry() {

        if ($this->input->server('REQUEST_METHOD') !== 'POST') {
            return;
        }
        $this->form_validation->set_rules('author_name', ' Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('author_email', ' Email', 'trim|required|xss_clean|valid_email');
        $this->form_validation->set_rules('author_contact', 'Contact', 'trim|required|xss_clean');
        $this->form_validation->set_rules('author_message', 'Message', 'trim|required|xss_clean');

        //if the form has passed through the validation
        if ($this->form_validation->run()) {


            if ($this->send_enquiry()) {

                $this->send_enquiry_confirmation();

                $status = 'success';
                $message = 'Enquiry sent successfully';
            } else {

                $status = 'failed';
                $message = 'Enquiry sent failed';
            }
        } else {
            $status = 'failed';
            $message = validation_errors();
        }

        if ($this->input->is_ajax_request()) {

            exit($this->send_response($status, $message));
        }
    }

    function send_enquiry() {

        $to = $this->configurations['admin_email'];
        $subject = "Enquiry";
        $type = $this->input->post('enquiry_type', true);
        $data_to_send = array(
            'author_name' => $this->input->post('author_name', true),
            'author_email' => $this->input->post('author_email', true),
            'author_contact' => $this->input->post('author_contact', true),
            'property_type' => $this->input->post('property_type', true),
            'location' => $this->input->post('location', true),
            'bedrooms' => $this->input->post('bedrooms', true),
            'study_or_maid' => $this->input->post('study_or_maid', true),
            'furnish' => $this->input->post('furnish', true),
            'budget' => $this->input->post('budget', true),
            'agent' => $this->input->post('agent', true),
            'preferred_call_back_time' => $this->input->post('preferred_call_back_time', true),
            'message' => $this->input->post('author_message', true),
        );

        $data['data'] = $data_to_send;
        $data['title'] = ($type == 'buy' ? 'Buy Enquiry' : 'Rent Enquiry');

        $message = $this->load->view('includes/email/enquiry_request', $data, TRUE);

        return send_email('html', $to, $subject, $message);
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function list_your_property() {

        if ($this->input->server('REQUEST_METHOD') !== 'POST') {
            return;
        }
        $this->form_validation->set_rules('author_name', ' Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('author_email', ' Email', 'trim|required|xss_clean|valid_email');
        $this->form_validation->set_rules('author_contact', 'Contact', 'trim|required|xss_clean');
        $this->form_validation->set_rules('author_message', 'Message', 'trim|required|xss_clean');

        //if the form has passed through the validation
        if ($this->form_validation->run()) {

            $to = $this->configurations['admin_email'];
            $subject = "List Your Property";
            $type = $this->input->post('type', true);
            $data_to_send = array(
                'author_name' => $this->input->post('author_name', true),
                'author_email' => $this->input->post('author_email', true),
                'author_contact' => $this->input->post('author_contact', true),
                'property_type' => $this->input->post('property_type', true),
                'location' => $this->input->post('location', true),
                'bedrooms' => $this->input->post('bedrooms', true),
                'study_or_maid' => $this->input->post('study_or_maid', true),
                'furnish' => $this->input->post('furnish', true),
                'unit_number' => $this->input->post('unit_number', true),
                'street_number' => $this->input->post('street_number', true),
                'expected_price' => $this->input->post('expected_price', true),
                'agent' => $this->input->post('agent', true),
                'preferred_call_back_time' => $this->input->post('preferred_call_back_time', true),
                'message' => $this->input->post('author_message', true),
            );

            $data['data'] = $data_to_send;
            $data['title'] = ($type == 'buy' ? 'List Your Property ( Buy ) ' : 'List Your Property ( Rent ) ');

            $message = $this->load->view('includes/email/list_your_property', $data, TRUE);

            $send = send_email('html', $to, $subject, $message);

            if ($send) {

                $send_enquiry_confirmation = isset($this->configurations['send_enquiry_confirmation']) ? $this->configurations['send_enquiry_confirmation'] : 'no';

                if ($send_enquiry_confirmation || $send_enquiry_confirmation=='yes') {

                    $to = $this->input->post('author_email', true);
                    $subject = "Re:Thank you for your request";
                    $data_to_send = array(
                        'author' => $this->input->post('author_name', true)
                    );
                    $message = $this->load->view('includes/email/list_your_property_confirmation', $data_to_send, TRUE);

                    send_email('html', $to, $subject, $message);
                } 

                $status = 'success';
                $response = 'Request sent successfully';
            } else {

                $status = 'failed';
                $response = 'Request sent failed';
            }
        } else {
            $status = 'failed';
            $response = validation_errors();
        }

        if ($this->input->is_ajax_request()) {

            exit($this->send_response($status, $response));
        }
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function request_pre_valuation() {

        if ($this->input->server('REQUEST_METHOD') !== 'POST') {
            return;
        }
        $this->form_validation->set_rules('author_name', ' Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('author_email', ' Email', 'trim|required|xss_clean|valid_email');
        $this->form_validation->set_rules('author_contact', 'Contact', 'trim|required|xss_clean');
        $this->form_validation->set_rules('author_message', 'Message', 'trim|required|xss_clean');

        //if the form has passed through the validation
        if ($this->form_validation->run()) {

            $to = $this->configurations['admin_email'];
            $subject = "Request Pre Valuation";
            $type = $this->input->post('type', true);
            $data_to_send = array(
                'author_name' => $this->input->post('author_name', true),
                'author_email' => $this->input->post('author_email', true),
                'author_contact' => $this->input->post('author_contact', true),
                'property_type' => $this->input->post('property_type', true),
                'location' => $this->input->post('location', true),
                'bedrooms' => $this->input->post('bedrooms', true),
                'study_or_maid' => $this->input->post('study_or_maid', true),
                'furnish' => $this->input->post('furnish', true),
                'unit_number' => $this->input->post('unit_number', true),
                'street_number' => $this->input->post('street_number', true),
                'primary_view' => $this->input->post('primary_view', true),
                'agent' => $this->input->post('agent', true),
                'preferred_call_back_time' => $this->input->post('preferred_call_back_time', true),
                'message' => $this->input->post('author_message', true),
            );

            $data['data'] = $data_to_send;
            $data['title'] = ($type == 'buy' ? 'Request Pre Valuation ( Buy ) ' : 'Request Pre Valuation ( Rent ) ');

            $message = $this->load->view('includes/email/request_pre_valuation', $data, TRUE);

            $send = send_email('html', $to, $subject, $message);

            if ($send) {

                $send_enquiry_confirmation = isset($this->configurations['send_enquiry_confirmation']) ? $this->configurations['send_enquiry_confirmation'] : 'no';

                if ($send_enquiry_confirmation || $send_enquiry_confirmation=='yes') {

                    $to = $this->input->post('author_email', true);
                    $subject = "Re:Thank you for your request";
                    $data_to_send = array(
                        'author' => $this->input->post('author_name', true)
                    );
                    $message = $this->load->view('includes/email/request_pre_valuation_confirmation', $data_to_send, TRUE);

                    send_email('html', $to, $subject, $message);
                } 

                $status = 'success';
                $response = 'Request sent successfully';
            } else {

                $status = 'failed';
                $response = 'Request sent failed';
            }
        } else {
            $status = 'failed';
            $response = validation_errors();
        }

        if ($this->input->is_ajax_request()) {

            exit($this->send_response($status, $response));
        }
    }
}
