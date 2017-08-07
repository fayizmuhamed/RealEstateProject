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

    public function record_count($query_array) {
        //count query
        $this->db->select('COUNT(*) as count', FALSE);
        $this->db->from('testimonials');
        $this->db->join('employees', 'testimonial_agent = emp_id', 'left');

        if (isset($query_array['testimonial_author_name']) && strlen($query_array['testimonial_author_name'])) {

            $this->db->like('testimonial_author_name', $query_array['testimonial_author_name']);
        }
        if (isset($query_array['testimonial_author_email']) && strlen($query_array['testimonial_author_email'])) {

            $this->db->like('testimonial_author_email', $query_array['testimonial_author_email']);
        }

        if (isset($query_array['testimonial_author_contact']) && strlen($query_array['testimonial_author_contact'])) {

            $this->db->like('testimonial_author_contact', $query_array['testimonial_author_contact']);
        }

        if (isset($query_array['emp_name']) && strlen($query_array['emp_name'])) {

            $this->db->like('emp_name', $query_array['emp_name']);
        }

        if (isset($query_array['testimonial_approved']) && strlen($query_array['testimonial_approved'])) {

            if ($query_array['testimonial_approved'] == 'yes') {

                $this->db->where('testimonial_approved', 1);
            } else if ($query_array['testimonial_approved'] == 'no') {

                $this->db->where('testimonial_approved', 0);
            }
        }

        $temp = $this->db->get()->result();

        return $temp[0]->count;
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
    function find_with_search($limit, $offset, $query_array, $sort_by = 'testimonial_id', $sort_order = 'desc') {

        $sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';

        $sort_column = array('testimonial_id', 'testimonial_author_name', 'testimonial_author_email', 'testimonial_author_contact', 'emp_name','testimonial_created_at');

        $sort_by = (in_array($sort_by, $sort_column)) ? $sort_by : 'testimonial_id';


        $this->db->select('*');
        $this->db->from('testimonials');
        $this->db->join('employees', 'testimonial_agent = emp_id', 'left');
        $this->db->join('departments', 'emp_department = dep_id', 'left');
        $this->db->join('designations', 'emp_designation = des_id', 'left');
        $this->db->join('property_types', 'testimonial_property_type = pt_id', 'left');
        $this->db->limit($limit, $offset);
        $this->db->order_by($sort_by, $sort_order);
        
        
        if (isset($query_array['testimonial_author_name']) && strlen($query_array['testimonial_author_name'])) {

            $this->db->like('testimonial_author_name', $query_array['testimonial_author_name']);
        }
        if (isset($query_array['testimonial_author_email']) && strlen($query_array['testimonial_author_email'])) {

            $this->db->like('testimonial_author_email', $query_array['testimonial_author_email']);
        }

        if (isset($query_array['testimonial_author_contact']) && strlen($query_array['testimonial_author_contact'])) {

            $this->db->like('testimonial_author_contact', $query_array['testimonial_author_contact']);
        }

        if (isset($query_array['emp_name']) && strlen($query_array['emp_name'])) {

            $this->db->like('emp_name', $query_array['emp_name']);
        }

        if (isset($query_array['testimonial_approved']) && strlen($query_array['testimonial_approved'])) {

            if ($query_array['testimonial_approved'] == 'yes') {

                $this->db->where('testimonial_approved', 1);
            } else if ($query_array['testimonial_approved'] == 'no') {

                $this->db->where('testimonial_approved', 0);
            }
        }

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get testimonial list with search conditions
     */
    function find_approved_testimonial_by_agent($limit, $offset, $agent = null, $order = 'testimonial_updated_at', $order_type = 'desc') {

        $this->db->select('*');
        $this->db->from('testimonials');
        $this->db->join('employees', 'testimonial_agent = emp_id', 'left');
        $this->db->join('departments', 'emp_department = dep_id', 'left');
        $this->db->join('designations', 'emp_designation = des_id', 'left');
        $this->db->join('property_types', 'testimonial_property_type = pt_id', 'left');
        $this->db->like('testimonial_approved', 1);

        if ($agent) {

            $this->db->where('testimonial_agent', $agent);
           
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
