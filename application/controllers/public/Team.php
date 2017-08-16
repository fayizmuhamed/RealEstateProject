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
class Team extends PublicController {

    //put your code here
    //put your code here

    public function __construct() {
        parent::__construct();

        $this->load->library('image_lib');
        $this->load->model('Employee_model');
        $this->load->model('Department_model');
        $this->load->model('Designation_model');
        $this->load->model('Property_model');
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index($department = null) {



        //load the view
        $employees = $this->Employee_model->find_by_departments(TEAM_PAGE_EMPLOYEE_COUNT_PER_PAGE, 0, $department, 'emp_id', 'asc');

        $data['employees'] = $employees;
        $data['selected_department'] = $department;
        $data['departments'] = $this->Department_model->find_all();

        $data['content'] = 'public/team';
        $this->load->view('includes/public/template', $data);
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function viewProfile($id) {

        //load the view
        $employees = $this->Employee_model->find_by_id($id);

        $data['employee'] = $employees == null ? [] : $employees[0];

        if ($employees[0]['emp_email_id']) {

            $data['properties'] = $this->Property_model->find_by_agent_email_id(PROPERTIES_COUNT_PER_PAGE, 0, $employees[0]['emp_email_id'], null, null);
        }


        $data['content'] = 'public/team_detail';
        $this->load->view('includes/public/template', $data);
    }

    public function findEmployeesWithSearch() {

        $filter = $this->input->get('filter');
        $search_string = $this->input->get('search_string');
        $order = $this->input->get('order');
        $order_type = $this->input->get('order_type');

        $page = $this->input->get('page', TRUE);

        $query_array = array(
            $filter => $search_string
        );

        //math to get the initial record to be select in the database
        $offset = ($page * TEAM_PAGE_EMPLOYEE_COUNT_PER_PAGE) - TEAM_PAGE_EMPLOYEE_COUNT_PER_PAGE;
        if ($offset < 0) {
            $offset = 0;
        }

        $employees = $this->Employee_model->find_with_search(TEAM_PAGE_EMPLOYEE_COUNT_PER_PAGE, $offset, $query_array, $order, $order_type);

        exit($this->send_response('success', $employees));
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function send_message() {

        if ($this->input->server('REQUEST_METHOD') !== 'POST') {
            return;
        }


        $this->form_validation->set_rules('author_name', ' Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('author_email', ' Email', 'trim|required|xss_clean|valid_email');
        $this->form_validation->set_rules('author_contact', 'Contact', 'trim|required|xss_clean');
        $this->form_validation->set_rules('author_message', 'Message', 'trim|required|xss_clean');

        //if the form has passed through the validation
        if ($this->form_validation->run()) {

            $agent = $this->input->post('agent', true);
            $property_ref_no = $this->input->post('property_ref_no', true);
            $property_title = $this->input->post('property_title', true);

            $agent_name=null;
            $agent_email=null;

            if ($agent) {

                $employees = $this->Employee_model->find_by_id($agent);

                if ($employees) {

                    $agent_name = isset($employees[0]['emp_name']) ? $employees[0]['emp_name'] : null;
                    $agent_email = isset($employees[0]['emp_email_id']) ? $employees[0]['emp_email_id'] : null;
                }
            }

            $data_to_send = array(
                'author_name' => $this->input->post('author_name', true),
                'author_email' => $this->input->post('author_email', true),
                'author_contact' => $this->input->post('author_contact', true),
                'message' => $this->input->post('author_message', true)
            );
            if ($agent_name) {

                $data_to_send ['agent'] = $agent_name;
            }

            if ($property_ref_no) {

                $data_to_send ['property_ref_no'] = $property_ref_no;
            }

            if ($property_title) {

                $data_to_send ['property_title'] = $property_title;
            }

            $data['data'] = $data_to_send;
            $data['title'] = 'Send Message';

            $message = $this->load->view('includes/email/send_message', $data, TRUE);

            $to = $this->configurations['admin_email'];

            if ($agent_email) {

                $to .= ',' . $agent_email;
            }

            $subject = "Send Message";

            $send = send_email('html', $to, $subject, $message);

            if ($send) {

                $send_enquiry_confirmation = isset($this->configurations['send_enquiry_confirmation']) ? $this->configurations['send_enquiry_confirmation'] : 'no';

                if ($send_enquiry_confirmation || $send_enquiry_confirmation == 'yes') {

                    $to = $this->input->post('author_email', true);
                    $subject = "Re:Thank you for your enquiry";
                    $data_to_send = array(
                        'author' => $this->input->post('author_name', true)
                    );
                    $message = $this->load->view('includes/email/send_message_confirmation', $data_to_send, TRUE);

                    send_email('html', $to, $subject, $message);
                }

                $status = 'success';
                $response = 'Message send successfully';
            } else {

                $status = 'failed';
                $response = 'Message send failed';
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
    function request_call_back() {

        if ($this->input->server('REQUEST_METHOD') !== 'POST') {
            return;
        }


        $this->form_validation->set_rules('author_name', ' Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('author_email', ' Email', 'trim|required|xss_clean|valid_email');
        $this->form_validation->set_rules('author_contact', 'Contact', 'trim|required|xss_clean');
        $this->form_validation->set_rules('author_message', 'Message', 'trim|required|xss_clean');
        $this->form_validation->set_rules('author_call_back_time', 'Call back time', 'trim|required|xss_clean');

        //if the form has passed through the validation
        if ($this->form_validation->run()) {

            $agent = $this->input->post('agent', true);
            $property_ref_no = $this->input->post('property_ref_no', true);
            $property_title = $this->input->post('property_title', true);

            $agent_name=null;
            $agent_email=null;

            if ($agent) {

                $employees = $this->Employee_model->find_by_id($agent);

                if ($employees) {

                    $agent_name = isset($employees[0]['emp_name']) ? $employees[0]['emp_name'] : null;
                    $agent_email = isset($employees[0]['emp_email_id']) ? $employees[0]['emp_email_id'] : null;
                }
            }

            $data_to_send = array(
                'author_name' => $this->input->post('author_name', true),
                'author_email' => $this->input->post('author_email', true),
                'author_contact' => $this->input->post('author_contact', true),
                'author_call_back_time'=>$this->input->post('author_call_back_time', true),
                'message' => $this->input->post('author_message', true)
            );
            if ($agent_name) {

                $data_to_send ['agent'] = $agent_name;
            }

            if ($property_ref_no) {

                $data_to_send ['property_ref_no'] = $property_ref_no;
            }

            if ($property_title) {

                $data_to_send ['property_title'] = $property_title;
            }

            $data['data'] = $data_to_send;
            $data['title'] = 'Request For Call Back';

            $message = $this->load->view('includes/email/send_message', $data, TRUE);

            $to = $this->configurations['admin_email'];

            if ($agent_email) {

                $to .= ',' . $agent_email;
            }

            $subject = "Request For Call Back";

            $send = send_email('html', $to, $subject, $message);

            if ($send) {

                $send_enquiry_confirmation = isset($this->configurations['send_enquiry_confirmation']) ? $this->configurations['send_enquiry_confirmation'] : 'no';

                if ($send_enquiry_confirmation || $send_enquiry_confirmation == 'yes') {

                    $to = $this->input->post('author_email', true);
                    $subject = "Re:Thank you for your enquiry";
                    $data_to_send = array(
                        'author' => $this->input->post('author_name', true)
                    );
                    $message = $this->load->view('includes/email/send_message_confirmation', $data_to_send, TRUE);

                    send_email('html', $to, $subject, $message);
                }

                $status = 'success';
                $response = 'Message send successfully';
            } else {

                $status = 'failed';
                $response = 'Message send failed';
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
