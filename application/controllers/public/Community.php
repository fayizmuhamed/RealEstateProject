<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Community
 *
 * @author DELL
 */
class Community extends PublicController {

    //put your code here

    public function __construct() {
        parent::__construct();

        $this->load->library('image_lib');
        $this->load->model('Community_model');
        $this->load->model('Property_model');
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index($id = null) {

        if ($id == null) {

//            //all the posts sent by the view
//            $search_string = $this->input->post('search_string');
//            $order = $this->input->post('order');
//            $order_type = $this->input->post('order_type');
//
//            //pagination settings
//            $config['per_page'] = 20;
//            $config['base_url'] = base_url() . 'admin/projects';
//            $config['use_page_numbers'] = TRUE;
//            $config['num_links'] = 20;
//
//            //limit end
//            $page = $this->uri->segment(3);
//
//            //math to get the initial record to be select in the database
//            $limit_end = ($page * $config['per_page']) - $config['per_page'];
//            if ($limit_end < 0) {
//                $limit_end = 0;
//            }
//
//            //load the view
//            $communities = $this->Community_model->get_communities_with_search($search_string, $order, $order_type, $config['per_page'], $limit_end);
//
//
//            $config['total_rows'] = $communities == null ? 0 : count($communities);
//
//            //initializate the panination helper 
//            $this->pagination->initialize($config);
//
//            $data['communities'] = $communities;
//
//            $data['content'] = 'public/community';
//            $this->load->view('includes/public/template', $data);
        } else {

            //load the view
            $community = $this->Community_model->find_by_id($id);

            $data['community'] = $community;
            $data['community_thumbnails'] = $this->Community_thumbnail_model->find_all($id);
            $data['properties_sale'] = $this->Property_model->search_properties(COMMUNITY_PAGE_PROPERTIES_COUNT_PER_PAGE, 0,'sale',null,null,null,null,null,null,null,null,null,$community[0]['community_name'],null,null);
            $data['properties_rent'] = $this->Property_model->search_properties(COMMUNITY_PAGE_PROPERTIES_COUNT_PER_PAGE, 0,'rent',null,null,null,null,null,null,null,null,null,$community[0]['community_name'],null,null);

            //load the view
            $data['content'] = 'public/community_detail';
            $this->load->view('includes/public/template', $data);
        }
    }

    public function getCommunities() {

        $page = $this->input->get('page', TRUE);


        //math to get the initial record to be select in the database
        $offset = ($page * INDEX_PAGE_COMMUNITIES_COUNT_PER_PAGE) - INDEX_PAGE_COMMUNITIES_COUNT_PER_PAGE;
        if ($offset < 0) {
            $offset = 0;
        }

        $communities = $this->Community_model->find_with_search(INDEX_PAGE_COMMUNITIES_COUNT_PER_PAGE, $offset, NULL, NULL, NULL);

        foreach ($communities as $community) {

            echo '<div class="col s12 l3 m6">';
            echo '<a href="' . base_url() . 'communities/' . $community['community_id'] . '">';
            echo '<div class="community-card">';
            echo '<div class="overlay-bx">';
            echo '<h3>' . $community['community_name'] . '</h3>';
            echo '</div>';
            echo '<img src="' . base_url() . 'uploads/community/cover/' . $community['community_cover_image'] . '">';
            echo '</div>';
            echo '</a>';
            echo '</div>';
        }

        exit;
    }

}
