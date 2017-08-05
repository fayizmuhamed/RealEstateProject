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
class Rent extends PublicController {

    //put your code here
    //put your code here

    public function __construct() {
        parent::__construct();

        $this->load->library('image_lib');
        $this->load->model('Property_model');
        $this->load->model('Employee_model');
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index() {

        $properties = $this->Property_model->search_properties(TEAM_PAGE_EMPLOYEE_COUNT_PER_PAGE, 0, 'rent', null, null, null, null, null, null, null, null, null, null, null, null);

        $data['properties'] = $properties;
        //load the view
        $data['content'] = 'public/rent';
        $this->load->view('includes/public/template', $data);
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function rentDetails($id) {

        $property = $this->Property_model->find_by_id($id);

        $data['property'] = $property;
        if (isset($property->property_listing_agent_email) && $property->property_listing_agent_email != "") {

            $employees = $this->Employee_model->find_by_email_id($property->property_listing_agent_email);
            if ($employees) {

                $data['employee'] = $employees == null ? [] : $employees[0];
            }
        }
        //load the view
        $data['content'] = 'public/rent_detail';
        $this->load->view('includes/public/template', $data);
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function tenantsGuide() {

        //load the view
        $data['content'] = 'public/tenants_guide';
        $this->load->view('includes/public/template', $data);
    }

}
