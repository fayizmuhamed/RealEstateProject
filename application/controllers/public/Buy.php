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
class Buy extends PublicController {

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

        $properties = $this->Property_model->search_properties(TEAM_PAGE_EMPLOYEE_COUNT_PER_PAGE, 0, 'sale', null, null, null, null, null, null, null, null, null, null, null, null);

        $data['properties'] = $properties;
        //load the view
        $data['content'] = 'public/buy';
        $this->load->view('includes/public/template', $data);
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function buyDetails($id) {

        $property = $this->Property_model->find_by_id($id);

        $data['property'] = $property;

        if (isset($property->property_listing_agent_email) && $property->property_listing_agent_email != "") {

            $employees = $this->Employee_model->find_by_email_id($property->property_listing_agent_email);

            if ($employees) {

                $data['employee'] = $employees == null ? [] : $employees[0];
            }
        }

        if (isset($property->property_ref_no) && $property->property_ref_no != "") {

            $property_navigations = $this->Property_navigation_model->find_by_property_ref_no($property->property_ref_no);

            $data['property_navigations'] = (isset($property_navigations) ? $property_navigations->property_navigations : '');
        }



        //load the view
        $data['content'] = 'public/buy_detail';
        $this->load->view('includes/public/template', $data);
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function buyersGuide() {

        //load the view
        $data['content'] = 'public/buyers_guide';
        $this->load->view('includes/public/template', $data);
    }

}
