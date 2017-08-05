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
    function index() {


        //all the posts sent by the view
        $filter= $this->input->post('filter');
        $search_string = $this->input->post('search_string');
        $order = $this->input->post('order');
        $order_type = $this->input->post('order_type');


        //limit end
        $page = $this->uri->segment(3);

        //math to get the initial record to be select in the database
        $offset = ($page * TEAM_PAGE_EMPLOYEE_COUNT_PER_PAGE) - TEAM_PAGE_EMPLOYEE_COUNT_PER_PAGE;
        if ($offset < 0) {
            $offset = 0;
        }

        //load the view
        $employees = $this->Employee_model->find_with_search(TEAM_PAGE_EMPLOYEE_COUNT_PER_PAGE, $offset,$filter, $search_string, $order, $order_type);

        $data['employees'] = $employees;
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
        
        if($employees[0]['emp_email_id']){
            
            $data['properties'] = $this->Property_model->find_by_agent_email_id(PROPERTIES_COUNT_PER_PAGE, 0, $employees[0]['emp_email_id'], null, null);
 
        }
        
       
        $data['content'] = 'public/team_detail';
        $this->load->view('includes/public/template', $data);
    }
    
    
    public function findEmployeesWithSearch() {

        $filter= $this->input->get('filter');
        $search_string = $this->input->get('search_string');
        $order = $this->input->get('order');
        $order_type = $this->input->get('order_type');
        
        $page = $this->input->get('page', TRUE);


        //math to get the initial record to be select in the database
        $offset = ($page * TEAM_PAGE_EMPLOYEE_COUNT_PER_PAGE) - TEAM_PAGE_EMPLOYEE_COUNT_PER_PAGE;
        if ($offset < 0) {
            $offset = 0;
        }

        $employees = $this->Employee_model->find_with_search(TEAM_PAGE_EMPLOYEE_COUNT_PER_PAGE, $offset, $filter, $search_string,$order,$order_type);

        exit ($this->send_response('success', $employees));
    }

}
