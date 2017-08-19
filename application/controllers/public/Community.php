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

        } else {

            //load the view
            $community = $this->Community_model->find_by_id($id);

            $data['community'] = $community;
            $data['community_thumbnails'] = $this->Community_thumbnail_model->find_all($id);
            $data['properties_sale'] = $this->Property_model->find_by_community_and_ad_type(COMMUNITY_PAGE_PROPERTIES_COUNT_PER_PAGE, 0,$community[0]['community_name'],'sale',null,null);
            $data['properties_rent'] = $this->Property_model->find_by_community_and_ad_type(COMMUNITY_PAGE_PROPERTIES_COUNT_PER_PAGE, 0,$community[0]['community_name'],'rent',null,null);
            $data['employees'] = $this->Property_model->find_agents_from_properties(COMMUNITY_PAGE_EMPLOYEES_COUNT_PER_PAGE, 0,$community[0]['community_name'],null,null);

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

    public function findCommunityAgents() {

        $community = $this->input->get('community');

        $page = $this->input->get('page', TRUE);

        //math to get the initial record to be select in the database
        $offset = ($page * COMMUNITY_PAGE_EMPLOYEES_COUNT_PER_PAGE) - COMMUNITY_PAGE_EMPLOYEES_COUNT_PER_PAGE;
        if ($offset < 0) {
            $offset = 0;
        }
        $employees = $this->Property_model->find_agents_from_properties(COMMUNITY_PAGE_EMPLOYEES_COUNT_PER_PAGE, $offset,$community,null,null);

        exit($this->send_response('success', $employees));
    }
}
