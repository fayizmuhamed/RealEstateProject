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
class Property_navigation_model extends CI_Model {

    function __construct() {
        
    }

    function find_by_property_ref_no($property_ref_no) {

        $this->db->select('*');
        $this->db->from('property_navigations');
        $this->db->where('property_ref_no', $property_ref_no);
        $this->db->limit(1);

        $query = $this->db->get();

        return $query->row();
    }

    /**
     * Store the new property navigations into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    function insert($data) {
        $insert = $this->db->insert('property_navigations', $data);
        return $insert;
    }

    /**
     * Update property navigations
     * @param array $data - associative array with data to store
     * @return boolean
     */
    function update($property_ref_no, $data) {
        $this->db->where('property_ref_no', $property_ref_no);
        $this->db->update('property_navigations', $data);
        $report = array();
        $report['error'] = $this->db->error();
        if ($report !== 0) {
            return true;
        } else {
            return false;
        }
    }
    
    
    /**
     * Insert property navigations
     * @param array $data - associative array with data to store
     * @return boolean
     */
    function insert_property_navigations($property_ref_no, $data) {
       
        $row = $this->find_by_property_ref_no($property_ref_no);
       
       return ($row==NULL?$this->insert($data):$this->update($property_ref_no, $data));
    }

    

}
