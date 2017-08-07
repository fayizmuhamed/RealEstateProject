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

    public function record_count($query_array) {
        //count query
        $this->db->select('COUNT(*) as count', FALSE);
        $this->db->from('opportunities');

        if (isset($query_array['opportunity_title']) && strlen($query_array['opportunity_title'])) {

            $this->db->like('opportunity_title', $query_array['opportunity_title']);
        }
        if (isset($query_array['opportunity_location']) && strlen($query_array['opportunity_location'])) {

            $this->db->like('opportunity_location', $query_array['opportunity_location']);
        }

        $temp = $this->db->get()->result();

        return $temp[0]->count;
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
    function find_with_search($limit, $offset, $query_array, $sort_by = 'opportunity_id', $sort_order = 'asc') {


        $sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';

        $sort_column = array('opportunity_id', 'opportunity_title', 'opportunity_location', 'opportunity_sub_location', 'opportunity_created_at');

        $sort_by = (in_array($sort_by, $sort_column)) ? $sort_by : 'opportunity_id';

        $this->db->select('*');
        $this->db->from('opportunities');
        $this->db->limit($limit, $offset);
        $this->db->order_by($sort_by, $sort_order);

        if (isset($query_array['opportunity_title']) && strlen($query_array['opportunity_title'])) {

            $this->db->like('opportunity_title', $query_array['opportunity_title']);
        }
        if (isset($query_array['opportunity_location']) && strlen($query_array['opportunity_location'])) {

            $this->db->like('opportunity_location', $query_array['opportunity_location']);
        }

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
