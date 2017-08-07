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

    public function record_count($query_array) {
        
        //count query
        $query= $this->db->select('COUNT(*) as count',FALSE)
                ->from('property_types')
                ->join('property_models', 'pt_model_id = pm_id', 'left');
        
          
        if(isset($query_array['pt_name'])&&strlen($query_array['pt_name'])){
            
             $query->like('pt_name', $query_array['pt_name']);
        }
        if(isset($query_array['pm_name'])&&strlen($query_array['pm_name'])){
            
             $query->like('pm_name', $query_array['pm_name']);
        }
        
        $temp=$query->get()->result();
        
        return $temp[0]->count;
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
    function find_with_search($limit, $offset, $query_array, $sort_by, $sort_order) {

        
        $sort_order=($sort_order=='desc')?'desc':'asc';
        
        $sort_column=array('pt_name','pm_name','pt_id');
        
        $sort_by=(in_array($sort_by, $sort_column))?$sort_by:'pt_id';
        
        $this->db->select('pt_id');
        $this->db->select('pt_name');
        $this->db->select('pt_model_id');
        $this->db->select('pm_name as pt_model_name');
        $this->db->select('pt_created_at');
        $this->db->select('pt_updated_at');
        $this->db->from('property_types');
        $this->db->join('property_models', 'pt_model_id = pm_id', 'left');
        $this->db->limit($limit, $offset);
        $this->db->order_by($sort_by, $sort_order);
        
        
        if(isset($query_array['pt_name'])&&strlen($query_array['pt_name'])){
            
             $this->db->like('pt_name', $query_array['pt_name']);
        }
        if(isset($query_array['pm_name'])&&strlen($query_array['pm_name'])){
            
             $this->db->like('pm_name', $query_array['pm_name']);
        }
        
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
