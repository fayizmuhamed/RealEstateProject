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

    public function record_count($query_array) {
        //count query
        $this->db->select('COUNT(*) as count', FALSE);
        $this->db->from('employees');
        $this->db->join('departments', 'emp_department = dep_id', 'left');
        $this->db->join('designations', 'emp_designation = des_id', 'left');

        if (isset($query_array['emp_name']) && strlen($query_array['emp_name'])) {

            $this->db->like('emp_name', $query_array['emp_name']);
        }

        if (isset($query_array['dep_name']) && strlen($query_array['dep_name'])) {

            $this->db->like('dep_name', $query_array['dep_name']);
        }

        if (isset($query_array['des_name']) && strlen($query_array['des_name'])) {

            $this->db->like('des_name', $query_array['des_name']);
        }

        if (isset($query_array['emp_registration_id']) && strlen($query_array['emp_registration_id'])) {

            $this->db->like('emp_registration_id', $query_array['emp_registration_id']);
        }

        if (isset($query_array['emp_email_id']) && strlen($query_array['emp_email_id'])) {

            $this->db->like('emp_email_id', $query_array['emp_email_id']);
        }

        if (isset($query_array['emp_contact_no']) && strlen($query_array['emp_contact_no'])) {

            $this->db->like('emp_contact_no', $query_array['emp_contact_no']);
        }

        if (isset($query_array['emp_location']) && strlen($query_array['emp_location'])) {

            $this->db->like('emp_location', $query_array['emp_location']);
        }

        if (isset($query_array['emp_featured_agent']) && strlen($query_array['emp_featured_agent'])) {

            $this->db->where('emp_featured_agent', $query_array['emp_featured_agent']);
        }

        if (isset($query_array['emp_department']) && strlen($query_array['emp_department'])) {

            $this->db->where('emp_department', $query_array['emp_department']);
        }

        $temp = $this->db->get()->result();

        return $temp[0]->count;
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

    function find_by_departments($limit, $offset, $department=null, $sort_by = 'emp_id', $sort_order = 'asc') {

        $this->db->select('*');
        $this->db->from('employees');
        $this->db->join('departments', 'emp_department = dep_id', 'left');
        $this->db->join('designations', 'emp_designation = des_id', 'left');
        if ($department) {
            $this->db->where('dep_name', $department);
        }
        $this->db->limit($limit, $offset);
        $this->db->order_by($sort_by, $sort_order);

        $query = $this->db->get();

        return $query->result_array();
    }

    function find_for_dropdown($filter = null, $search_string = null) {

        $this->db->select('emp_id as id,emp_name as value');
        $this->db->from('employees');
        if ($filter && ($search_string !== null && $search_string !== "")) {

            if ($filter === 'emp_name') {
                $this->db->like('emp_name', $search_string);
            } else if ($filter === 'emp_department') {
                $this->db->where('emp_department', $search_string);
            } else if ($filter === 'emp_featured_agent') {
                $this->db->where('emp_featured_agent', $search_string);
            } else if ($filter === 'emp_contact_no') {
                $this->db->where('emp_contact_no', $search_string);
            } else if ($filter === 'emp_email_id') {
                $this->db->where('emp_email_id', $search_string);
            }
        }
        $this->db->limit(10);

        $query = $this->db->get();

        return $query->result();
    }

    function find_by_email_id($email_id) {

        $this->db->select('*');
        $this->db->from('employees');
        $this->db->join('departments', 'emp_department = dep_id', 'left');
        $this->db->join('designations', 'emp_designation = des_id', 'left');
        $this->db->where('emp_email_id', $email_id);
        $this->db->limit(1);

        $query = $this->db->get();

        return $query->result_array();
    }

    function fetch_featured_agent($limit, $offset) {

        $this->db->select('*');
        $this->db->from('employees');
        $this->db->join('departments', 'emp_department = dep_id', 'left');
        $this->db->join('designations', 'emp_designation = des_id', 'left');
        $this->db->where('emp_featured_agent', 1);
        $this->db->limit($limit, $offset);
        $this->db->order_by('emp_updated_at', 'DESC');

        $query = $this->db->get();

        return $query->result_array();
    }

    function find_by_contact_no($contact_no) {

        $this->db->select('*');
        $this->db->from('employees');
        $this->db->join('departments', 'emp_department = dep_id', 'left');
        $this->db->join('designations', 'emp_designation = des_id', 'left');
        $this->db->where('emp_contact_no', $contact_no);
        $this->db->limit(1);

        $query = $this->db->get();

        return $query->result_array();
    }
    
    function find_by_ids($limit,$offset,$ids){
        
        $this->db->select('*');
        $this->db->from('employees');
        $this->db->join('departments', 'emp_department = dep_id', 'left');
        $this->db->join('designations', 'emp_designation = des_id', 'left');
        $this->db->where_in('emp_id', $ids);
        $this->db->limit($limit, $offset);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get employees
     */
    function find_with_search($limit, $offset, $query_array, $sort_by = 'emp_id', $sort_order = 'asc') {

        $sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';

        $sort_column = array('emp_id', 'emp_name', 'dep_name', 'des_name', 'emp_registration_id', 'emp_email_id', 'emp_contact_no', 'emp_location');

        $sort_by = (in_array($sort_by, $sort_column)) ? $sort_by : 'emp_id';

        $this->db->select('*');
        $this->db->from('employees');
        $this->db->join('departments', 'emp_department = dep_id', 'left');
        $this->db->join('designations', 'emp_designation = des_id', 'left');
        $this->db->limit($limit, $offset);
        $this->db->order_by($sort_by, $sort_order);

        if (isset($query_array['emp_name']) && strlen($query_array['emp_name'])) {

            $this->db->like('emp_name', $query_array['emp_name']);
        }

        if (isset($query_array['dep_name']) && strlen($query_array['dep_name'])) {

            $this->db->like('dep_name', $query_array['dep_name']);
        }

        if (isset($query_array['des_name']) && strlen($query_array['des_name'])) {

            $this->db->like('des_name', $query_array['des_name']);
        }



        if (isset($query_array['emp_registration_id']) && strlen($query_array['emp_registration_id'])) {

            $this->db->like('emp_registration_id', $query_array['emp_registration_id']);
        }

        if (isset($query_array['emp_email_id']) && strlen($query_array['emp_email_id'])) {

            $this->db->like('emp_email_id', $query_array['emp_email_id']);
        }

        if (isset($query_array['emp_contact_no']) && strlen($query_array['emp_contact_no'])) {

            $this->db->like('emp_contact_no', $query_array['emp_contact_no']);
        }

        if (isset($query_array['emp_location']) && strlen($query_array['emp_location'])) {

            $this->db->like('emp_location', $query_array['emp_location']);
        }

        if (isset($query_array['emp_featured_agent']) && strlen($query_array['emp_featured_agent'])) {

            $this->db->where('emp_featured_agent', $query_array['emp_featured_agent']);
        }

        if (isset($query_array['emp_department']) && strlen($query_array['emp_department'])) {

            $this->db->where('emp_department', $query_array['emp_department']);
        }

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
