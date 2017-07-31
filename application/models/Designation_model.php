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
class Designation_model extends CI_Model {

    function __construct() {
        
    }

    /**
     * get designation list
     */
    function find_all() {

        $this->db->select('*');
        $this->db->from('designations');
        $this->db->order_by('des_id', 'Asc');
        

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get designation by id
     */
    function find_by_id($id) {

        $this->db->select('*');
        $this->db->from('designations');
        $this->db->where('des_id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get designation list with search conditions
     */
    function find_with_search($limit, $offset, $search_string = null, $order = null, $order_type = 'Asc') {

        $this->db->select('*');
        $this->db->from('designations');

        if ($search_string) {

            $this->db->like('des_name', $search_string);
        }

        if ($order) {

            $this->db->order_by($order, $order_type);
        } else {

            $this->db->order_by('des_id', $order_type);
        }

        $this->db->limit($limit, $offset);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * Store the designation into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    function insert($data) {
        $insert = $this->db->insert('designations', $data);
        return $insert;
    }

    /**
     * Update designation
     * @param type $id - designation id
     * @param type $data - array with designation details
     * @return boolean
     */
    function update($id, $data) {
        $this->db->where('des_id', $id);
        $this->db->update('designations', $data);
        $report = array();
        $report['error'] = $this->db->error();
        if ($report !== 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Delete designation
     * @param int $id - designation id
     * @return boolean
     */
    function delete($id) {
        $this->db->where('des_id', $id);
        $this->db->delete('designations');
    }

}
