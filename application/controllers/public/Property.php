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
         $this->load->model('Property_model');
        $this->load->model('Employee_model');
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index() {

    }
    

    public function findPropertiesWithSearch() {
        
        $unit_category= $this->input->get('unit_category');
        $unit_model= $this->input->get('unit_model');
        $property_type= $this->input->get('property_type');
        $bedrooms= $this->input->get('bedrooms');
        $budgets= $this->input->get('budgets');
        $size= $this->input->get('size');
        $off_plan= $this->input->get('off_plan');
        $featured= $this->input->get('featured');
        $agent=$this->input->get('agent');
        $community=$this->input->get('community');
        $search_string = $this->input->get('search_string');
        $order = $this->input->get('order');
        $order_type = $this->input->get('order_type');
        
        $page = $this->input->get('page', TRUE);
        
        $per_page = $this->input->get('count_per_page');
        
        if($per_page==null){
            
            $per_page=PROPERTIES_COUNT_PER_PAGE;
        }


        //math to get the initial record to be select in the database
        $offset = ($page * $per_page) - $per_page;
        if ($offset < 0) {
            $offset = 0;
        }

        $properties = $this->Property_model->search_properties($per_page, $offset,$unit_category,$unit_model,$property_type,$bedrooms,$budgets,$size,$off_plan,$featured,$search_string,$agent,$community,$order,$order_type);

        exit ($this->send_response('success', $properties));
        
    }
    
    
    function propertyDetail($id){
        
        $property = $this->Property_model->find_by_id($id);

        $data['property'] = $property;

        if (isset($property->property_listing_agent_email) && $property->property_listing_agent_email != "") {

            $employees = $this->Employee_model->find_by_email_id($property->property_listing_agent_email);

            if ($employees) {

                $data['employee'] = $employees == null ? [] : $employees[0];
            }
        }


        //load the view
        $data['content'] = 'public/property_detail';
        $this->load->view('includes/public/template', $data);
    }
}
