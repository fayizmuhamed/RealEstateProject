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
class Community_thumbnail_model extends CI_Model {

    function __construct() {
        
    }

    /**
     * get community thumbnail list 
     */
    function find_all($community_id) {

        $this->db->select('*');
        $this->db->from('community_thumbnails');
        $this->db->where('community_id', $community_id);

        $this->db->order_by('community_thumbnail_id', 'Asc');

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get community thumbnail list 
     */
    function find_by_id($community_thumbnail_id) {

        $this->db->select('*');
        $this->db->from('community_thumbnails');
        $this->db->where('community_thumbnail_id', $community_thumbnail_id);
        $this->db->order_by('community_thumbnail_id', 'Asc');
        $this->db->limit(1);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * Store the new community thumbnail into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    function insert($community_id, $filenames) {

        if ($filenames != '') {
            $filename = explode(',', $filenames);
            foreach ($filename as $file) {
                $file_data = array(
                    'community_id' => $community_id,
                    'image' => $file
                );
                $insert = $this->db->insert('community_thumbnails', $file_data);

                if ($insert) {
                    continue;
                } else {

                    return FALSE;
                }
            }
        }
    }

    /**
     * Delete community thumbnail
     * @param int $community_thumbnail_id - community thumbnail id
     * @return boolean
     */
    function delete($community_thumbnail_id) {
        $row = $this->find_by_id($community_thumbnail_id);
        if (!empty($row)) {
            
            $this->db->where('community_thumbnail_id', $community_thumbnail_id);
            $this->db->delete('community_thumbnails');
            unlink("uploads/community/thumbnail/" . $row[0]['image']);
        }
    }

    /**
     * Delete community thumbnail
     * @param int $community_id - community  id
     * @return boolean
     */
    function delete_by_community_id($community_id) {
        $this->db->where('community_id', $community_id);
        $this->db->delete('community_thumbnails');
    }

}
