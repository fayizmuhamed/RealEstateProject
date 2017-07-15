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
        
    }

    /**
     * get projects list 
     */
    function get_projects() {

        $this->db->select('*,pt_name');
        $this->db->from('projects');
        $this->db->join('property_types', 'project_property_type = pt_id', 'inner');

        $this->db->order_by('project_id', 'Asc');

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get projects list 
     */
    function get_projects_by_id($project_id) {

        $this->db->select('*,pt_name');
        $this->db->from('projects');
        $this->db->join('property_types', 'project_property_type = pt_id', 'inner');
        $this->db->where('project_id', $project_id);
        $this->db->order_by('project_id', 'Asc');
        $this->db->limit(1);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get projects list by search conditions
     */
    function get_projects_with_search($search_string = null, $order = null, $order_type = 'Asc', $limit_start, $limit_end) {

        $this->db->select('*,pt_name');
        $this->db->from('projects');
        $this->db->join('property_types', 'project_property_type = pt_id', 'inner');

        if ($search_string) {

            $this->db->like('project_name', $search_string);
        }

        if ($order) {

            $this->db->order_by($order, $order_type);
        } else {

            $this->db->order_by('project_id', $order_type);
        }

        $this->db->limit($limit_start, $limit_end);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * Store the new project into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    function insert_project($data) {

        $insert = $this->db->insert('projects', $data);

        return $insert ? $this->db->insert_id() : NULL;
    }

    /**
     * Update project
     * @param array $data - associative array with data to store
     * @return boolean
     */
    function update_project($id, $data) {
        $this->db->where('project_id', $id);
        $this->db->update('projects', $data);
        $report = array();
        $report['error'] = $this->db->error();
        if ($report !== 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Delete project
     * @param int $id - product id
     * @return boolean
     */
    function delete_project($id) {
        $this->db->where('project_id', $id);
        $this->db->delete('projects');
    }

}
