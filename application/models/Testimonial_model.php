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
class Testimonial_model extends CI_Model {

    function __construct() {
        
    }

    /**
     * get testimonials list
     */
    function find_all() {

        $this->db->select('*');
        $this->db->from('testimonials');
        $this->db->join('employees', 'testimonial_agent = emp_id', 'left');
        $this->db->join('departments', 'emp_department = dep_id', 'left');
        $this->db->join('designations', 'emp_designation = des_id', 'left');
        $this->db->join('property_types', 'testimonial_property_type = pt_id', 'left');
        $this->db->order_by('tes_id', 'Asc');


        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get testimonial by id
     */
    function find_by_Id($id) {

        $this->db->select('*');
        $this->db->from('testimonials');
        $this->db->where('testimonial_id', $id);
        $this->db->join('employees', 'testimonial_agent = emp_id', 'left');
        $this->db->join('departments', 'emp_department = dep_id', 'left');
        $this->db->join('designations', 'emp_designation = des_id', 'left');
        $this->db->join('property_types', 'testimonial_property_type = pt_id', 'left');
        $this->db->limit(1);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get testimonial list with search conditions
     */
    function find_with_search($limit, $offset, $filter = null, $search_string = null, $order = null, $order_type = 'Asc') {

        $this->db->select('*');
        $this->db->from('testimonials');
        $this->db->join('employees', 'testimonial_agent = emp_id', 'left');
        $this->db->join('departments', 'emp_department = dep_id', 'left');
        $this->db->join('designations', 'emp_designation = des_id', 'left');
        $this->db->join('property_types', 'testimonial_property_type = pt_id', 'left');

        if ($filter && ($search_string!==null && $search_string !== "")) {

            if ($filter === 'testimonial_agent') {
                $this->db->like('testimonial_agent', $search_string);
            }
        }

        if ($order) {

            $this->db->order_by($order, $order_type);
        } else {

            $this->db->order_by('testimonial_id', $order_type);
        }

        $this->db->limit($limit, $offset);

        $query = $this->db->get();

        return $query->result_array();
    }

    
    /**
     * get testimonial list with search conditions
     */
    function find_approved_testimonial_with_search($limit, $offset, $filter = null, $search_string = null, $order = null, $order_type = 'Asc') {

        $this->db->select('*');
        $this->db->from('testimonials');
        $this->db->join('employees', 'testimonial_agent = emp_id', 'left');
        $this->db->join('departments', 'emp_department = dep_id', 'left');
        $this->db->join('designations', 'emp_designation = des_id', 'left');
        $this->db->join('property_types', 'testimonial_property_type = pt_id', 'left');
        $this->db->like('testimonial_approved', 1);

        if ($filter && ($search_string!==null && $search_string !== "")) {

            if ($filter === 'testimonial_agent') {
                $this->db->like('testimonial_agent', $search_string);
            }
        }

        if ($order) {

            $this->db->order_by($order, $order_type);
        } else {

            $this->db->order_by('testimonial_id', $order_type);
        }

        $this->db->limit($limit, $offset);

        $query = $this->db->get();

        return $query->result_array();
    }
    
    /**
     * Store the testimonial into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    function insert($data) {
        $insert = $this->db->insert('testimonials', $data);
        return $insert;
    }

    /**
     * Update testimonial
     * @param type $id - testimonial id
     * @param type $data - array with testimonial details
     * @return boolean
     */
    function update($id, $data) {
        $this->db->where('testimonial_id', $id);
        $this->db->update('testimonials', $data);
        $report = array();
        $report['error'] = $this->db->error();
        if ($report !== 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Delete testimonial
     * @param int $id - testimonial id
     * @return boolean
     */
    function delete($id) {
        $this->db->where('testimonial_id', $id);
        $this->db->delete('testimonials');
    }

}
