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
class Employee_model extends CI_Model {

    function __construct() {
        
    }

    /**
     * get employee list 
     */
    function find_all() {

        $this->db->select('*');
        $this->db->from('employees');
        $this->db->join('departments', 'emp_department = dep_id', 'left');
        $this->db->join('designations', 'emp_designation = des_id', 'left');

        $query = $this->db->get();

        return $query->result_array();
    }

    function find_by_id($id) {

        $this->db->select('*');
        $this->db->from('employees');
        $this->db->join('departments', 'emp_department = dep_id', 'left');
        $this->db->join('designations', 'emp_designation = des_id', 'left');
        $this->db->where('emp_id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get employees
     */
    function find_with_search($limit, $offset, $filter = null, $search_string = null, $order = null, $order_type = 'Asc') {

        $this->db->select('*');
        $this->db->from('employees');
        $this->db->join('departments', 'emp_department = dep_id', 'left');
        $this->db->join('designations', 'emp_designation = des_id', 'left');
        if ($filter && ($search_string!==null && $search_string!=="")) {

            if ($filter === 'emp_name') {
                $this->db->like('emp_name', $search_string);
            } else if ($filter === 'emp_department') {
                    $this->db->where('emp_department', $search_string);
            }
        }

        if ($order) {

            $this->db->order_by($order, $order_type);
        } else {

            $this->db->order_by('emp_id', $order_type);
        }

        $this->db->limit($limit, $offset);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * Store the new employee into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    function insert($data) {
        $insert = $this->db->insert('employees', $data);
        return $insert;
    }

    /**
     * Update employee
     * @param array $data - associative array with data to store
     * @return boolean
     */
    function update($id, $data) {
        $this->db->where('emp_id', $id);
        $this->db->update('employees', $data);
        $report = array();
        $report['error'] = $this->db->error();
        if ($report !== 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Delete employee
     * @param int $id - employee id
     * @return boolean
     */
    function delete($id) {
        $this->db->where('emp_id', $id);
        $this->db->delete('employees');
    }

}
