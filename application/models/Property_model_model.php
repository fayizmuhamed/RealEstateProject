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
class Property_model_model extends CI_Model {

    function __construct() {
        
    }

    /**
     * get property type list by parent id
     */
    function find_all() {

        $this->db->select('pm_id');
        $this->db->select('pm_name');
        $this->db->select('pm_created_at');
        $this->db->select('pm_updated_at');
        $this->db->from('property_models');

        $this->db->group_by('pm_id');

        $this->db->order_by('pm_id', 'Asc');

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get property type list by parent id
     */
    function find_with_search($limit, $offset, $search_string = null, $order = null, $order_type = 'Asc') {

        $this->db->select('pm_id');
        $this->db->select('pm_name');
        $this->db->select('pm_created_at');
        $this->db->select('pm_updated_at');
        $this->db->from('property_models');

        if ($search_string) {

            $this->db->like('pm_name', $search_string);
        }

        $this->db->group_by('pm_id');

        if ($order) {

            $this->db->order_by($order, $order_type);
        } else {

            $this->db->order_by('pm_id', $order_type);
        }

        $this->db->limit($limit, $offset);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * Store the new property model into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    function insert($data) {
        $insert = $this->db->insert('property_models', $data);
        return $insert;
    }

    /**
     * Update property model
     * @param array $data - associative array with data to store
     * @return boolean
     */
    function update($id, $data) {
        $this->db->where('pm_id', $id);
        $this->db->update('property_models', $data);
        $report = array();
        $report['error'] = $this->db->error();
        if ($report !== 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Delete property model
     * @param int $id - product id
     * @return boolean
     */
    function delete($id) {
        $this->db->where('pm_id', $id);
        $this->db->delete('property_model');
    }

}
