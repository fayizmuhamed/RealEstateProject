<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Configuration
 *
 * @author DELL
 */
class Configuration extends CI_Model{
    //put your code here
    
    function __construct() {
        
    }
    
    /**
     * get property type list by parent id
     */
    function get_configurations() {

        $this->db->select('config_key');
        $this->db->select('config_value');

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * Store the new project into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    function insert_configuration($data) {
        $insert = $this->db->insert('configurations', $data);
        return $insert;
    }

    /**
     * Update project
     * @param array $data - associative array with data to store
     * @return boolean
     */
    function update_configuration($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('configurations', $data);
        $report = array();
        $report['error'] = $this->db->_error_number();
        $report['message'] = $this->db->_error_message();
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
    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('configurations');
    }
}
