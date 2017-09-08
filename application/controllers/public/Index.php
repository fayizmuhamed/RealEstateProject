<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboard
 *
 * @author DELL
 */
class Index extends PublicController {

    //put your code here

    public function __construct() {
        parent::__construct();

        $this->load->model('Project_model');
        $this->load->model('Community_model');
        $this->load->model('Employee_model');
        $this->load->model('Property_model');
        $this->load->model('Testimonial_model');
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index() {

        
       // $data['configurations'] = $this->Configuration_model->find_as_key_map();

        $this->data['projects'] = $this->Project_model->find_latest_with_limit(INDEX_PAGE_PROJECT_COUNT);
        $this->data['testimonials'] = $this->Testimonial_model->find_approved_testimonial_by_agent(INDEX_PAGE_TESTIMONIAL_COUNT, 0, NULL, 'testimonial_updated_at', 'DESC');
        
        $this->data['communities'] = $this->Community_model->find_with_search(INDEX_PAGE_COMMUNITIES_COUNT_PER_PAGE, 0, NULL, NULL, NULL);
        $this->data['featured_sales'] = $this->Property_model->fetch_featured_property_by_ad_type('sale');
        $this->data['featured_rents'] = $this->Property_model->fetch_featured_property_by_ad_type('rent');
        $this->data['employees'] = $this->Employee_model->fetch_featured_agent(FEATURED_AGENT_COUNT, 0);
        //load the view
        $this->data['content'] = 'public/index';
        $this->load->view('includes/public/template_home', $this->data);
    }

    
    function infoGuide(){
        //load the view
        $this->data['content'] = 'public/info_guide';
        $this->load->view('includes/public/template', $this->data);
    }
    
}
