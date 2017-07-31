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
    function find_with_search($limit, $offset, $search_string = null, $order = null, $order_type = 'Asc') {

        $this->db->select('*');
        $this->db->from('communities');

        if ($search_string) {

            $this->db->like('community_name', $search_string);
        }

        if ($order) {

            $this->db->order_by($order, $order_type);
        } else {

            $this->db->order_by('community_id', $order_type);
        }

        $this->db->limit($limit, $offset);

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
