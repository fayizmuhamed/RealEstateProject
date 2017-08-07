<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author DELL
 */
class Project_model extends CI_Model {

    function __construct() {

        $this->load->model('Project_thumbnail_model');
    }

    public function record_count($query_array) {
        //count query
        $this->db->select('COUNT(*) as count', FALSE);
        $this->db->from('projects');

        if (isset($query_array['project_name']) && strlen($query_array['project_name'])) {

            $this->db->like('project_name', $query_array['project_name']);
        }
        if (isset($query_array['project_reference']) && strlen($query_array['project_reference'])) {

            $this->db->like('project_reference', $query_array['project_reference']);
        }

        if (isset($query_array['project_location']) && strlen($query_array['project_location'])) {

            $this->db->like('project_location', $query_array['project_location']);
        }
        if (isset($query_array['project_developer']) && strlen($query_array['project_developer'])) {

            $this->db->like('project_developer', $query_array['project_developer']);
        }

        $temp = $this->db->get()->result();

        return $temp[0]->count;
    }

    /**
     * get projects list 
     */
    function find_all() {

        $this->db->select('*');
        $this->db->from('projects');
        $this->db->order_by('project_id', 'Asc');

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get projects list 
     */
    function find_latest_with_limit($count) {

        $this->db->select('*');
        $this->db->from('projects');
        $this->db->order_by('project_updated_at', 'DESC');
        $this->db->limit($count);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get projects list 
     */
    function find_by_id($project_id) {

        $this->db->select('*');
        $this->db->from('projects');
        $this->db->where('project_id', $project_id);
        $this->db->order_by('project_id', 'Asc');
        $this->db->limit(1);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get projects list by search conditions
     */
    function find_with_search($limit, $offset, $query_array, $sort_by = 'project_id', $sort_order = 'asc') {

        $sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';

        $sort_column = array('project_id', 'project_name', 'project_reference', 'project_location', 'project_developer');

        $sort_by = (in_array($sort_by, $sort_column)) ? $sort_by : 'project_id';

        $this->db->select('*');
        $this->db->from('projects');
        $this->db->limit($limit, $offset);
        $this->db->order_by($sort_by, $sort_order);


        if (isset($query_array['project_name']) && strlen($query_array['project_name'])) {

            $this->db->like('project_name', $query_array['project_name']);
        }
        if (isset($query_array['project_reference']) && strlen($query_array['project_reference'])) {

            $this->db->like('project_reference', $query_array['project_reference']);
        }

        if (isset($query_array['project_location']) && strlen($query_array['project_location'])) {

            $this->db->like('project_location', $query_array['project_location']);
        }
        if (isset($query_array['project_developer']) && strlen($query_array['project_developer'])) {

            $this->db->like('project_developer', $query_array['project_developer']);
        }


        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * Store the new project into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    function insert($data, $thumbnails) {

        $this->db->trans_start(); # Starting Transaction

        $this->db->trans_strict(FALSE);

        $this->db->insert('projects', $data);

        $project_id = $this->db->insert_id();

        $this->Project_thumbnail_model->insert($project_id, $thumbnails);

        return $this->db->trans_complete();
    }

    /**
     * Update project
     * @param array $data - associative array with data to store
     * @return boolean
     */
    function update($id, $data, $thumbnails) {

        $this->db->trans_start(); # Starting Transaction

        $this->db->trans_strict(FALSE);

        $this->db->where('project_id', $id);
        $this->db->update('projects', $data);

        $this->Project_thumbnail_model->insert($id, $thumbnails);

        return $this->db->trans_complete();
    }

    /**
     * Delete project
     * @param int $id - product id
     * @return boolean
     */
    function delete($id) {

        $this->db->trans_start(); # Starting Transaction

        $this->db->trans_strict(FALSE);

        $this->Project_thumbnail_model->delete_by_project_id($id);

        $this->db->where('project_id', $id);

        $this->db->delete('projects');

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            return false;
        } else {
            return true;
        }
    }

}
