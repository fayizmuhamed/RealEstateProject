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
        $this->load->model('Employee_model');
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

        $agent = $this->input->post('agent', true);

        $agent_email = null;
        $agent_name = null;

        if ($agent) {

            $employees = $this->Employee_model->find_by_id($agent);

            if ($employees) {
                $agent_name = isset($employees[0]['emp_name']) ? $employees[0]['emp_name'] : null;
                $agent_email = isset($employees[0]['emp_email_id']) ? $employees[0]['emp_email_id'] : null;
            }
        }

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
            'agent' => $agent_name?$agent_name:'',
            'preferred_call_back_time' => $this->input->post('preferred_call_back_time', true),
            'message' => $this->input->post('author_message', true),
        );


        if ($agent_email) {

            $to .= ',' . $agent_email;
        }

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
        if ($this->form_validation->run() && $this->do_list_your_property_doc_upload()) {

            $agent = $this->input->post('agent', true);

            $agent_email = null;
            $agent_name = null;

            if ($agent) {

                $employees = $this->Employee_model->find_by_id($agent);

                if ($employees) {
                    $agent_name = isset($employees[0]['emp_name']) ? $employees[0]['emp_name'] : null;
                    $agent_email = isset($employees[0]['emp_email_id']) ? $employees[0]['emp_email_id'] : null;
                }
            }

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
                'agent' => $agent_name ? $agent_name : '',
                'preferred_call_back_time' => $this->input->post('preferred_call_back_time', true),
                'message' => $this->input->post('author_message', true),
            );


            if ($agent_email) {

                $to .= ',' . $agent_email;
            }

            $data['data'] = $data_to_send;
            $data['title'] = ($type == 'buy' ? 'List Your Property ( Buy ) ' : 'List Your Property ( Rent ) ');

            $message = $this->load->view('includes/email/list_your_property', $data, TRUE);

            $attachement = null;

            if (!empty($this->upload_data) && isset($this->upload_data['title_deed'])) {

                $attachement['title_deed'] = $this->upload_data['title_deed']['full_path'];
            }

            if (!empty($this->upload_data) && isset($this->upload_data['owners_passport'])) {

                $attachement['owners_passport'] = $this->upload_data['owners_passport']['full_path'];
            }

            if (!empty($this->upload_data) && isset($this->upload_data['other_documents']) || !empty($this->upload_data['other_documents'])) {

                $docs = $this->upload_data['other_documents'];

                foreach ($docs as $doc) {

                    $attachement[$doc['file_name']] = $doc['full_path'];
                }
            }

            $send = send_email('html', $to, $subject, $message, $attachement);

            if ($send) {

                $send_enquiry_confirmation = isset($this->configurations['send_enquiry_confirmation']) ? $this->configurations['send_enquiry_confirmation'] : 'no';

                if ($send_enquiry_confirmation || $send_enquiry_confirmation == 'yes') {

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

    function do_list_your_property_doc_upload() {

        $upload_dir = './uploads';

        if (!is_dir($upload_dir)) {

            mkdir($upload_dir);
        }

        $config['upload_path'] = $upload_dir;

        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        $config['overwrite'] = false;

        $this->load->library('upload', $config);

        if (!$this->title_deed_upload()) {

            return false;
        }

        if (!$this->owners_passport_upload()) {

            return false;
        }

        if (!$this->other_documents_upload()) {

            return false;
        }

        return true;
    }

    function do_request_pre_valuation_doc_upload() {

        $upload_dir = './uploads';

        if (!is_dir($upload_dir)) {

            mkdir($upload_dir);
        }

        $config['upload_path'] = $upload_dir;

        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        $config['overwrite'] = false;

        $this->load->library('upload', $config);

        if (!$this->title_deed_upload()) {

            return false;
        }

        return true;
    }

    function title_deed_upload() {

        if ($_FILES['title_deed']['size'] != 0) {

            $upload_dir = './uploads/property-doc';

            if (!is_dir($upload_dir)) {

                mkdir($upload_dir);
            }

            $config1['upload_path'] = $upload_dir;

            $config1['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx|sql';

            $config1['max_size'] = 200;

            $date = new DateTime();

            $file_name = 'title_deed_' . $date->format('Y_m_d_H_i_s');

            $config1['file_name'] = $file_name;

            $config1['overwrite'] = false;

            $this->upload->initialize($config1);

            if (!$this->upload->do_upload('title_deed')) {

                $this->form_validation->set_message('title_deed', $this->upload->display_errors());

                return false;
            } else {

                $this->upload_data['title_deed'] = $this->upload->data();

                return true;
            }
        } else {

            return true;
        }
    }

    function owners_passport_upload() {

        if ($_FILES['owners_passport']['size'] != 0) {

            $upload_dir = './uploads/property-doc';

            if (!is_dir($upload_dir)) {

                mkdir($upload_dir);
            }

            $config2['upload_path'] = $upload_dir;

            $config2['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx|sql';

            $config2['max_size'] = 200;

            $date = new DateTime();

            $file_name = 'owners_passport_' . $date->format('Y_m_d_H_i_s');

            $config2['file_name'] = $file_name;

            $config2['overwrite'] = false;

            $this->upload->initialize($config2);

            if (!$this->upload->do_upload('owners_passport')) {

                $this->form_validation->set_message('owners_passport', $this->upload->display_errors());

                return false;
            } else {

                $this->upload_data['owners_passport'] = $this->upload->data();

                return true;
            }
        } else {

            return true;
        }
    }

    function other_documents_upload() {


        $upload_dir = './uploads/property-doc';

        if (!is_dir($upload_dir)) {

            mkdir($upload_dir);
        }

        $config4['upload_path'] = $upload_dir;

        $config4['max_size'] = 200;

        $config4['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc|docx|sql';

        $files = $_FILES;

        if (!empty($files['other_documents']['name'][0])) {
            $count = count($_FILES['other_documents']['name']);
            for ($i = 0; $i < $count; $i++) {
                $_FILES['other_documents']['name'] = time() . $files['other_documents']['name'][$i];
                $_FILES['other_documents']['type'] = $files['other_documents']['type'][$i];
                $_FILES['other_documents']['tmp_name'] = $files['other_documents']['tmp_name'][$i];
                $_FILES['other_documents']['error'] = $files['other_documents']['error'][$i];
                $_FILES['other_documents']['size'] = $files['other_documents']['size'][$i];

                $date = new DateTime();

                $file_name = 'doc_' . $date->format('Y_m_d_H_i_s');
                $config4['file_name'] = $file_name;
                $config4['overwrite'] = false;

                $this->upload->initialize($config4);

                if (!$this->upload->do_upload('other_documents')) {

                    $this->form_validation->set_message('other_documents', $this->upload->display_errors());

                    return false;
                } else {


                    $docs[] = $this->upload->data();
                }
            }
            $this->upload_data['other_documents'] = $docs;
            return true;
        } else {
            return true;
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
        if ($this->form_validation->run() && $this->do_request_pre_valuation_doc_upload()) {

            $agent = $this->input->post('agent', true);

            $agent_email = null;
            $agent_name = null;

            if ($agent) {

                $employees = $this->Employee_model->find_by_id($agent);

                if ($employees) {
                    $agent_name = isset($employees[0]['emp_name']) ? $employees[0]['emp_name'] : null;
                    $agent_email = isset($employees[0]['emp_email_id']) ? $employees[0]['emp_email_id'] : null;
                }
            }

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
                'agent' => $agent_name ? $agent_name : '',
                'preferred_call_back_time' => $this->input->post('preferred_call_back_time', true),
                'message' => $this->input->post('author_message', true),
            );




            if ($agent_email) {

                $to .= ',' . $agent_email;
            }

            $attachement = null;

            if (!empty($this->upload_data) && isset($this->upload_data['title_deed'])) {

                $attachement['title_deed'] = $this->upload_data['title_deed']['full_path'];
            }

            $data['data'] = $data_to_send;
            $data['title'] = ($type == 'buy' ? 'Request Pre Valuation ( Buy ) ' : 'Request Pre Valuation ( Rent ) ');

            $message = $this->load->view('includes/email/request_pre_valuation', $data, TRUE);

            $send = send_email('html', $to, $subject, $message, $attachement);

            if ($send) {

                $send_enquiry_confirmation = isset($this->configurations['send_enquiry_confirmation']) ? $this->configurations['send_enquiry_confirmation'] : 'no';

                if ($send_enquiry_confirmation || $send_enquiry_confirmation == 'yes') {

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
