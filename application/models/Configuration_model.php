<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Configuration
 *
 * @author DELL
 */
class Configuration_model extends CI_Model {

    //put your code here

    function __construct() {
        
    }

    /**
     * get configuration list
     */
    function find_all() {

        $this->db->select('config_key');
        $this->db->select('config_value');
        $this->db->from('configurations');
        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get configuration by key
     */
    function find_by_key($key) {

        $this->db->select('config_key');
        $this->db->select('config_value');
        $this->db->from('configurations');
        $this->db->where('config_key', $key);
        $this->db->limit(1);
        $query = $this->db->get();

        return $query->row();
    }

    /**
     * get configuration map with key and value
     */
    function find_as_key_map() {

        $this->db->select('config_key');
        $this->db->select('config_value');
        $this->db->from('configurations');
        $query = $this->db->get();

        $result = $query->result_array();

        $config = array();
        foreach ($result as $value) {
            $config[$value['config_key']] = $value['config_value'];
        }

        return $config;
    }

    /**
     * Store the multiple configuration into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    function insert_multiple($data) {

        $this->db->trans_start(); # Starting Transaction

        $this->db->trans_strict(FALSE);

        foreach ($data as $data_each) {

            $row = $this->find_by_key($data_each['config_key']);
            
            if($row==NULL?$this->insert( $data_each):$this->update($data_each['config_key'], $data_each)){
                
                continue;
            }else{
                return FALSE;
            }

        }

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Store the new configuration into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    function insert($data) {
        $insert = $this->db->insert('configurations', $data);
        return $insert;
    }

    /**
     * Update configuration
     * @param array $data - associative array with data to store
     * @return boolean
     */
    function update($key, $data) {
        $this->db->where('config_key', $key);
        $this->db->update('configurations', $data);
        $report = array();
        $report['error'] = $this->db->error();
        if ($report !== 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Delete configuration by key
     * @param int $key - configuration key
     * @return boolean
     */
    function delete($key) {
        $this->db->where('config_key', $key);
        $this->db->delete('configurations');
    }

}
