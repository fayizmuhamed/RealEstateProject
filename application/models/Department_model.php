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

    public function record_count($query_array) {
        //count query
        $this->db->select('COUNT(*) as count', FALSE);
        $this->db->from('departments');

        if (isset($query_array['dep_name']) && strlen($query_array['dep_name'])) {

            $this->db->like('dep_name', $query_array['dep_name']);
        }

        $temp = $this->db->get()->result();

        return $temp[0]->count;
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
    function find_with_search($limit, $offset, $query_array, $sort_by = 'dep_id', $sort_order = 'asc') {

        $sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';

        $sort_column = array('dep_id', 'dep_name', 'dep_created_at');

        $sort_by = (in_array($sort_by, $sort_column)) ? $sort_by : 'dep_id';

        $this->db->select('*');
        $this->db->from('departments');
        $this->db->limit($limit, $offset);
        $this->db->order_by($sort_by, $sort_order);

        if (isset($query_array['dep_name']) && strlen($query_array['dep_name'])) {

            $this->db->like('dep_name', $query_array['dep_name']);
        }


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
