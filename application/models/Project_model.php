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
     * Store the new project into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    function insert_project($data) {
        $insert = $this->db->insert('projects', $data);
        return $insert;
    }

    /**
     * Update project
     * @param array $data - associative array with data to store
     * @return boolean
     */
    function update_project($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('projects', $data);
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
        $this->db->delete('project');
    }

}
