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
class Property extends PublicController {

    //put your code here
    //put your code here

    public function __construct() {
        parent::__construct();

        $this->load->library('image_lib');
        $this->load->model('Property_type_model');
        $this->load->model('Property_model');
        $this->load->model('Employee_model');
        $this->load->model('Community_model');
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index() {
        
    }

    public function search() {
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $unit_category = $this->input->post('unit_category');
            $search_string = $this->input->post('locations');
            $bedrooms = $this->input->post('bedrooms');
            $budgets = $this->input->post('budgets');
            $properties = $this->Property_model->search_properties(PROPERTIES_COUNT_PER_PAGE, 0, $unit_category, null, null, $bedrooms, $budgets, null, null, null, $search_string, null, null, null, 'property_last_updated', 'DESC');

            $this->data['properties'] = $properties;
            $this->data['property_types'] = $this->Property_type_model->find_all();
            $this->data['communities'] = $this->Community_model->find_all();
            $this->data['unit_category'] = $unit_category;
            $this->data['search_locations'] = $search_string;
            $this->data['search_bedrooms'] = $bedrooms;
            $this->data['search_budgets'] = $budgets;
            if ($unit_category == 'sale') {

                //load the view
                $this->data['content'] = 'public/buy';
                $this->load->view('includes/public/template', $this->data);
            } else {
                //load the view
                $this->data['content'] = 'public/rent';
                $this->load->view('includes/public/template', $this->data);
            }
        }
    }

    public function findPropertiesWithSearch() {

        $unit_category = $this->input->get('unit_category');
        $unit_model = $this->input->get('unit_model');
        $property_type = $this->input->get('property_type');
        $bedrooms = $this->input->get('bedrooms');
        $budgets = $this->input->get('budgets');
        $size = $this->input->get('size');
        $off_plan = $this->input->get('off_plan');
        $featured = $this->input->get('featured');
        $agent = $this->input->get('agent');
        $community = $this->input->get('community');
        $search_string = $this->input->get('search_string');
        $order = $this->input->get('order');
        $order_type = $this->input->get('order_type');
        $property_id = $this->input->get('property_id');

        $page = $this->input->get('page', TRUE);

        $per_page = $this->input->get('count_per_page');

        if ($per_page == null) {

            $per_page = PROPERTIES_COUNT_PER_PAGE;
        }


        //math to get the initial record to be select in the database
        $offset = ($page * $per_page) - $per_page;
        if ($offset < 0) {
            $offset = 0;
        }

        $properties = $this->Property_model->search_properties($per_page, $offset, $unit_category, $unit_model, $property_type, $bedrooms, $budgets, $size, $off_plan, $featured, $search_string, $agent, $community, $property_id, $order, $order_type);

        exit($this->send_response('success', $properties));
    }

    function propertyDetail($id) {

        $property = $this->Property_model->find_by_id($id);

        $this->data['property'] = $property;

        if (isset($property->property_listing_agent_email) && $property->property_listing_agent_email != "") {

            $employees = $this->Employee_model->find_by_email_id($property->property_listing_agent_email);

            if ($employees) {

                $this->data['employee'] = $employees == null ? [] : $employees[0];
            }
        }

        if ($property) {
            $this->data['properties_sale'] = $this->Property_model->find_by_community_and_ad_type_except_one(COMMUNITY_PAGE_PROPERTIES_COUNT_PER_PAGE, 0, (isset($property->property_community) ? $property->property_community : ''), 'sale', $property->property_id, null, null);
            $this->data['properties_rent'] = $this->Property_model->find_by_community_and_ad_type_except_one(COMMUNITY_PAGE_PROPERTIES_COUNT_PER_PAGE, 0, (isset($property->property_community) ? $property->property_community : ''), 'rent', $property->property_id, null, null);
        } else {
            $this->data['properties_sale'] = [];
            $this->data['properties_rent'] = [];
        }

        //load the view
        $this->data['content'] = 'public/property_detail';
        $this->load->view('includes/public/template', $this->data);
    }

    function locations() {

        $search = $this->input->get('search');
        $size = $this->input->post('size');
        $page = $this->input->post('page');

        $locations = $this->Property_model->fetch_location_for_search($search);

        exit($this->send_response('success', $locations));
    }

}
