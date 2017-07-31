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
class Department_model extends CI_Model {

    function __construct() {
        
    }

    /**
     * get department list
     */
    function find_all() {

        $this->db->select('*');
        $this->db->from('departments');
        $this->db->order_by('dep_id', 'Asc');
        

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get department by id
     */
    function find_by_Id($id) {

        $this->db->select('*');
        $this->db->from('departments');
        $this->db->where('dep_id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get department list with search conditions
     */
    function find_with_search($limit, $offset, $search_string = null, $order = null, $order_type = 'Asc') {

        $this->db->select('*');
        $this->db->from('departments');

        if ($search_string) {

            $this->db->like('dep_name', $search_string);
        }

        if ($order) {

            $this->db->order_by($order, $order_type);
        } else {

            $this->db->order_by('dep_id', $order_type);
        }

        $this->db->limit($limit, $offset);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * Store the department into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    function insert($data) {
        $insert = $this->db->insert('departments', $data);
        return $insert;
    }

    /**
     * Update department
     * @param type $id - department id
     * @param type $data - array with department details
     * @return boolean
     */
    function update($id, $data) {
        $this->db->where('dep_id', $id);
        $this->db->update('departments', $data);
        $report = array();
        $report['error'] = $this->db->error();
        if ($report !== 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Delete department
     * @param int $id - department id
     * @return boolean
     */
    function delete($id) {
        $this->db->where('dep_id', $id);
        $this->db->delete('departments');
    }

}
