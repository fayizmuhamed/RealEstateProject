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
    function get_latest_projects($count) {

        $this->db->select('*,pt_name');
        $this->db->from('projects');
        $this->db->join('property_types', 'project_property_type = pt_id', 'inner');
        $this->db->order_by('project_updated_at', 'DESC');
        $this->db->limit($count);

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
    function get_projects_with_search($limit_start, $limit_end, $search_string = null, $order = null, $order_type = 'Asc') {

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
    function insert_project($data, $thumbnails) {

        $this->db->trans_start(); # Starting Transaction

        $this->db->trans_strict(FALSE);

        $this->db->insert('projects', $data);

        $project_id = $this->db->insert_id();

        $this->Project_thumbnail_model->insert_project_thumbnail($project_id, $thumbnails);

        return $this->db->trans_complete();
    }

    /**
     * Update project
     * @param array $data - associative array with data to store
     * @return boolean
     */
    function update_project($id, $data, $thumbnails) {

        $this->db->trans_start(); # Starting Transaction

        $this->db->trans_strict(FALSE);

        $this->db->where('project_id', $id);
        $this->db->update('projects', $data);

        $this->Project_thumbnail_model->insert_project_thumbnail($id, $thumbnails);

        return $this->db->trans_complete();
    }

    /**
     * Delete project
     * @param int $id - product id
     * @return boolean
     */
    function delete_project($id) {
        
        $this->db->trans_start(); # Starting Transaction

        $this->db->trans_strict(FALSE);
        
        $this->Project_thumbnail_model->delete_project_thumbnail_by_project_id($id);

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
