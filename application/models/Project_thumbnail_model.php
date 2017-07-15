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
class Project_thumbnail_model extends CI_Model {

    function __construct() {
        
    }

    /**
     * get project thumbnail list 
     */
    function get_project_thumbnails($project_id) {

        $this->db->select('*');
        $this->db->from('project_thumbnails');
        $this->db->where('project_id', $project_id);

        $this->db->order_by('project_thumbnail_id', 'Asc');

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get project thumbnail list 
     */
    function get_project_thumbnail_by_id($project_thumbnail_id) {

        $this->db->select('*');
        $this->db->from('project_thumbnails');
        $this->db->where('project_thumbnail_id', $project_thumbnail_id);
        $this->db->order_by('project_thumbnail_id', 'Asc');
        $this->db->limit(1);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * Store the new project thumbnail into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    function insert_project_thumbnail($project_id, $filenames) {

        if ($filenames != '') {
            $filename = explode(',', $filenames);
            foreach ($filename as $file) {
                $file_data = array(
                    'project_id' => $project_id,
                    'image' => $file
                );
                $insert = $this->db->insert('project_thumbnails', $file_data);

                if ($insert) {
                    continue;
                } else {

                    return FALSE;
                }
            }
        }
    }

    /**
     * Delete project thumbnail
     * @param int $project_thumbnail_id - project thumbnail id
     * @return boolean
     */
    function delete_project_thumbnail($project_thumbnail_id) {
        $row = $this->get_project_thumbnail_by_id($project_thumbnail_id);
        if (!empty($row)) {
            
            $this->db->where('project_thumbnail_id', $project_thumbnail_id);
            $this->db->delete('project_thumbnails');
            unlink("uploads/project/thumbnail/" . $row[0]['image']);
        }
    }

    /**
     * Delete project thumbnail
     * @param int $project_thumbnail_id - project thumbnail id
     * @return boolean
     */
    function delete_project_thumbnail_by_project_id($project_id) {
        $this->db->where('project_id', $project_id);
        $this->db->delete('project_thumbnails');
    }

}
