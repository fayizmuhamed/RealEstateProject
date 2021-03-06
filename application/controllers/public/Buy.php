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

        $properties = $this->Property_model->search_properties(PROPERTIES_COUNT_PER_PAGE, 0, 'sale', null, null, null, null, null, null, null, null, null, null, null, null,null);
        $this->data['properties'] = $properties;
        $this->data['property_types'] = $this->Property_type_model->find_all();
        $this->data['communities'] = $this->Community_model->find_all();
        //load the view
        $this->data['content'] = 'public/buy';
        $this->load->view('includes/public/template', $this->data);
    }

    function buyCategory($category) {

        $unit_category = 'sale';
        $unit_model = null;
        $property_type = null;
        $bedrooms = null;
        $budgets = null;
        $size = null;
        $off_plan = null;
        $featured = null;
        $agent = null;
        $community = null;
        $property_id=null;
        $search_string = null;
        $order = null;
        $order_type = null;


        if ($category) {

            switch ($category) {

                case 'residential':
                    $unit_model = 'residential';
                    $off_plan = '0';
                    break;
                case 'commercial':
                    $unit_model = 'commercial';
                    $off_plan = '0';
                    break;
                case 'plots':
                    $unit_model = 'plots';
                    $off_plan = '0';
                    break;
            }

            $properties = $this->Property_model->search_properties(PROPERTIES_COUNT_PER_PAGE, 0, $unit_category, $unit_model, $property_type, $bedrooms, $budgets, $size, $off_plan, $featured, $search_string, $agent, $community,$property_id, $order, $order_type);

            $this->data['properties'] = $properties;
            $this->data['property_types'] = $this->Property_type_model->find_by_model_name($unit_model);
            $this->data['unit_model'] = $unit_model;
            //load the view
            $this->data['content'] = 'public/buy_sub';
            $this->load->view('includes/public/template', $this->data);
        } else {

            redirect('/buy');
        }
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function buyDetails($id) {

        $property = $this->Property_model->find_by_id($id);

        $this->data['property'] = $property;

        if (isset($property->property_listing_agent_email) && $property->property_listing_agent_email != "") {

            $employees = $this->Employee_model->find_by_email_id($property->property_listing_agent_email);

            if ($employees) {

                $this->data['employee'] = $employees == null ? [] : $employees[0];
            }
        }

        if (isset($property->property_ref_no) && $property->property_ref_no != "") {

            $property_navigations = $this->Property_navigation_model->find_by_property_ref_no($property->property_ref_no);

            $this->data['property_navigations'] = (isset($property_navigations) ? $property_navigations->property_navigations : '');
        }

        if ($property) {

            $this->data['properties_sale'] = $this->Property_model->find_by_community_and_ad_type_except_one(COMMUNITY_PAGE_PROPERTIES_COUNT_PER_PAGE, 0, (isset($property->property_community) ? $property->property_community  : ''), 'sale',$property->property_id, null, null);
        } else {

            $this->data['properties_sale'] = [];
        }
        //load the view
        $this->data['content'] = 'public/buy_detail';
        $this->load->view('includes/public/template', $this->data);
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function buyersGuide() {

        //load the view
        $this->data['content'] = 'public/buyers_guide';
        $this->load->view('includes/public/template', $this->data);
    }

}
