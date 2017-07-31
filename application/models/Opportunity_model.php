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
class Opportunity_model extends CI_Model {

    function __construct() {
        
    }

    /**
     * get opportunities list
     */
    function find_all() {

        $this->db->select('*');
        $this->db->from('opportunities');
        $this->db->order_by('opportunity_id', 'Asc');
        

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get opportunities by id
     */
    function find_by_Id($id) {

        $this->db->select('*');
        $this->db->from('opportunities');
        $this->db->where('opportunity_id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get opportunities list with search conditions
     */
    function find_with_search($limit, $offset, $search_string = null, $order = null, $order_type = 'Asc') {

        $this->db->select('*');
        $this->db->from('opportunities');

        if ($search_string) {

            $this->db->like('opportunity_title', $search_string);
        }

        if ($order) {

            $this->db->order_by($order, $order_type);
        } else {

            $this->db->order_by('opportunity_id', $order_type);
        }

        $this->db->limit($limit, $offset);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * Store the opportunities into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    function insert($data) {
        $insert = $this->db->insert('opportunities', $data);
        return $insert;
    }

    /**
     * Update opportunities
     * @param type $id - opportunity id
     * @param type $data - array with opportunity details
     * @return boolean
     */
    function update($id, $data) {
        $this->db->where('opportunity_id', $id);
        $this->db->update('opportunities', $data);
        $report = array();
        $report['error'] = $this->db->error();
        if ($report !== 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Delete opportunities
     * @param int $id - opportunity id
     * @return boolean
     */
    function delete($id) {
        $this->db->where('opportunity_id', $id);
        $this->db->delete('opportunities');
    }

}
