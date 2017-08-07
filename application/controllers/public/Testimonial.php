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
class Testimonial extends PublicController {

    //put your code here
    //put your code here

    public function __construct() {
        parent::__construct();

        $this->load->library('image_lib');
        $this->load->model('Testimonial_model');
        $this->load->model('Employee_model');
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index($id = null) {
        if ($id == null) {


            $testimonials = $this->Testimonial_model->find_approved_testimonial_by_agent(TESTIMONIAL_COUNT_PER_PAGE, 0, null, 'testimonial_updated_at', 'DESC');

            $data['testimonials'] = $testimonials;
            //load the view
            $data['content'] = 'public/testimonial';
            $this->load->view('includes/public/template', $data);
        } else {

            $testimonials = $this->Testimonial_model->find_approved_testimonial_by_agent(TESTIMONIAL_COUNT_PER_PAGE, 0, $id, 'testimonial_updated_at', 'DESC');
            $data['testimonials'] = $testimonials;

            $employees = $this->Testimonial_model->find_by_id($id);
            $data['employee'] = $employees == null ? [] : $employees[0];

            //load the view
            $data['content'] = 'public/team_testimonial';
            $this->load->view('includes/public/template', $data);
        }
    }

     public function findTestimonialWithSearch() {

        $agent= $this->input->get('testimonial_agent');
        $order = $this->input->get('order');
        $order_type = $this->input->get('order_type');
        
        $page = $this->input->get('page', TRUE);


        //math to get the initial record to be select in the database
        $offset = ($page * TESTIMONIAL_COUNT_PER_PAGE) - TESTIMONIAL_COUNT_PER_PAGE;
        if ($offset < 0) {
            $offset = 0;
        }

        $testimonials = $this->Testimonial_model->find_approved_testimonial_by_agent(TESTIMONIAL_COUNT_PER_PAGE, $offset, $agent,$order,$order_type);

        exit ($this->send_response('success', $testimonials));
    }
}
