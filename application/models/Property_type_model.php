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
class Property_type_model extends CI_Model {

    function __construct() {
        
    }
    
    function find_by_id($id) {
        
        $this->db->select('pt_id');
        $this->db->select('pt_name');
        $this->db->select('pt_model_id');
        $this->db->select('pt_created_at');
        $this->db->select('pt_updated_at');
        $this->db->from('property_types');
        $this->db->where('pt_id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        return $query->result_array();
    }
    
    function find_by_name($name) {
        
        $this->db->select('pt_id');
        $this->db->select('pt_name');
        $this->db->select('pt_model_id');
        $this->db->select('pm_name');
        $this->db->select('pt_created_at');
        $this->db->select('pt_updated_at');
        $this->db->from('property_types');
        $this->db->join('property_models', 'pt_model_id = pm_id', 'left');
        $this->db->where('pt_name', $name);
        $this->db->limit(1);

        $query = $this->db->get();

        return $query->row();
    }

    /**
     * get property type list by parent id
     */
    function find_all() {

        $this->db->select('pt_id');
        $this->db->select('pt_name');
        $this->db->select('pt_model_id');
        $this->db->select('pm_name as pt_model_name');
        $this->db->select('pt_created_at');
        $this->db->select('pt_updated_at');
        $this->db->from('property_types');
      
        $this->db->join('property_models', 'pt_model_id = pm_id', 'left');

        $this->db->group_by('pt_id');


        $query = $this->db->get();

        return $query->result_array();
    }


    /**
     * get property type list by parent id
     */
    function find_with_search($limit, $offset, $property_model_id = null, $search_string = null, $order = null, $order_type = 'Asc') {

        $this->db->select('pt_id');
        $this->db->select('pt_name');
        $this->db->select('pt_model_id');
        $this->db->select('pm_name as pt_model_name');
        $this->db->select('pt_created_at');
        $this->db->select('pt_updated_at');
        $this->db->from('property_types');
        if ($property_model_id != null) {
            $this->db->where('pt_model_id', $property_model_id);
        }

        if ($search_string) {

            $this->db->like('pt_name', $search_string);
        }

        $this->db->join('property_models', 'pt_model_id = pm_id', 'left');

        $this->db->group_by('pt_id');

        if ($order) {

            $this->db->order_by($order, $order_type);
        } else {

            $this->db->order_by('pt_id', $order_type);
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
        $insert = $this->db->insert('property_types', $data);
        return $insert;
    }

    /**
     * Update property model
     * @param array $data - associative array with data to store
     * @return boolean
     */
    function update($id, $data) {
        $this->db->where('pt_id', $id);
        $this->db->update('property_types', $data);
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
        $this->db->where('pt_id', $id);
        $this->db->delete('property_types');
    }

}
