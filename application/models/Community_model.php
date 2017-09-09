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
class Community_model extends CI_Model {

    function __construct() {

        $this->load->model('Community_thumbnail_model');
    }

    public function record_count($query_array) {
        //count query
        $this->db->select('COUNT(*) as count', FALSE);
        $this->db->from('communities');

        if (isset($query_array['community_name']) && strlen($query_array['community_name'])) {

            $this->db->like('community_name', $query_array['community_name']);
        }
        if (isset($query_array['community_id']) && strlen($query_array['community_id'])) {

            $this->db->where('community_id', $query_array['community_id']);
        }

        $temp = $this->db->get()->result();

        return $temp[0]->count;
    }

    /**
     * get community list 
     */
    function find_all() {

        $this->db->select('*');
        $this->db->from('communities');

        $this->db->order_by('community_id', 'Asc');

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get community list 
     */
    function find_with_limit($count) {

        $this->db->select('*');
        $this->db->from('communities');
        $this->db->order_by('community_updated_at', 'DESC');
        $this->db->limit($count);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get community list 
     */
    function find_by_id($id) {

        $this->db->select('*');
        $this->db->from('communities');
        $this->db->where('community_id', $id);

        $this->db->order_by('community_id', 'Asc');

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get community list with search by name
     */
    function find_with_search($limit, $offset, $query_array, $sort_by = 'community_id', $sort_order = 'asc') {

        $sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';

        $sort_column = array('community_id', 'community_name');

        $sort_by = (in_array($sort_by, $sort_column)) ? $sort_by : 'community_id';

        $this->db->select('*');
        $this->db->from('communities');
        $this->db->limit($limit, $offset);
        $this->db->order_by($sort_by, $sort_order);
      

        if (isset($query_array['community_name']) && strlen($query_array['community_name'])) {

           $this->db->like('community_name', $query_array['community_name']);
        }
        if (isset($query_array['community_id']) && strlen($query_array['community_id'])) {

            $this->db->where('community_id', $query_array['community_id']);
        }

        $query = $this->db->get();

        return $query->result_array();
    }
    
    /**
     * get community list with search by name
     */
    function find_with_priority($limit, $offset, $query_array) {


        $this->db->select('*');
        $this->db->from('communities');
        $this->db->limit($limit, $offset);
        $this->db->order_by('community_priority IS NULL , community_priority ASC','',FALSE);
      

        if (isset($query_array['community_name']) && strlen($query_array['community_name'])) {

           $this->db->like('community_name', $query_array['community_name']);
        }
        if (isset($query_array['community_id']) && strlen($query_array['community_id'])) {

            $this->db->where('community_id', $query_array['community_id']);
        }

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * Store the new community into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    function insert($data, $thumbnails) {

        $this->db->trans_start(); # Starting Transaction

        $this->db->trans_strict(FALSE);

        $this->db->insert('communities', $data);

        $community_id = $this->db->insert_id();

        $this->Community_thumbnail_model->insert($community_id, $thumbnails);

        return $this->db->trans_complete();
    }

    /**
     * Update community
     * @param array $data - associative array with data to store
     * @return boolean
     */
    function update($id, $data, $thumbnails) {

        $this->db->trans_start(); # Starting Transaction

        $this->db->trans_strict(FALSE);

        $this->db->where('community_id', $id);
        $this->db->update('communities', $data);

        $this->Community_thumbnail_model->insert($id, $thumbnails);

        return $this->db->trans_complete();
    }

    /**
     * Delete community
     * @param int $id - community id
     * @return boolean
     */
    function delete($id) {


        $this->db->trans_start(); # Starting Transaction

        $this->db->trans_strict(FALSE);

        $this->db->where('community_id', $id);

        $this->db->delete('communities');

        $this->Community_thumbnail_model->delete_by_community_id($id);

        return $this->db->trans_complete();
    }

}
