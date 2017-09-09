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
class Property_model extends CI_Model {

    function __construct() {

        $this->load->model('Property_navigation_model');
    }

    function find_by_id($id) {

        $this->db->select('*');
        $this->db->from('properties');
        $this->db->where('property_id', $id);
        $this->db->limit(1);

        $query = $this->db->get();

        return $query->row();
    }

    function find_by_ref_no($ref_no) {

        $this->db->select('*');
        $this->db->from('properties');
        $this->db->where('property_ref_no', $ref_no);
        $this->db->limit(1);

        $query = $this->db->get();

        return $query->row();
    }

    function find_by_agent_email_id($limit, $offset, $email_id, $order = 'property_last_updated', $order_type = 'DESC') {

        $this->db->select('*');
        $this->db->from('properties');
        $this->db->where('property_listing_agent_email', $email_id);
        if ($order) {

            $this->db->order_by($order, $order_type);
        } else {

            $this->db->order_by('property_id', $order_type);
        }

        $this->db->limit($limit, $offset);

        $query = $this->db->get();

        return $query->result_array();
    }

    function find_by_community_and_ad_type($limit, $offset, $community, $ad_type, $order = 'property_last_updated', $order_type = 'DESC') {

        $this->db->select('*');
        $this->db->from('properties');
        $this->db->where('property_community', $community);
        $this->db->where('property_ad_type', $ad_type);
        if ($order) {

            $this->db->order_by($order, $order_type);
        } else {

            $this->db->order_by('property_id', $order_type);
        }

        $this->db->limit($limit, $offset);

        $query = $this->db->get();

        return $query->result_array();
    }

    function find_by_community_and_ad_type_except_one($limit, $offset, $community, $ad_type, $property_id, $order = 'property_last_updated', $order_type = 'DESC') {

        $this->db->select('*');
        $this->db->from('properties');
        $this->db->where('property_community', $community);
        $this->db->where('property_ad_type', $ad_type);
        $this->db->where('property_id !=', $property_id);
        if ($order) {

            $this->db->order_by($order, $order_type);
        } else {

            $this->db->order_by('property_id', $order_type);
        }

        $this->db->limit($limit, $offset);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get property list by parent id
     */
    function find_all() {

        $this->db->select('*');
        $this->db->select('properties');


        $query = $this->db->get();

        return $query->result_array();
    }

    public function record_count($query_array) {
        //count query
        $this->db->select('COUNT(*) as count', FALSE);
        $this->db->from('properties');

        if (isset($query_array['property_ref_no']) && strlen($query_array['property_ref_no'])) {

            $this->db->like('property_ref_no', $query_array['property_ref_no']);
        }
        if (isset($query_array['property_title']) && strlen($query_array['property_title'])) {

            $this->db->like('property_title', $query_array['property_title']);
        }

        if (isset($query_array['property_ad_type']) && strlen($query_array['property_ad_type'])) {

            $this->db->like('property_ad_type', $query_array['property_ad_type']);
        }

        if (isset($query_array['property_unit_model']) && strlen($query_array['property_unit_model'])) {

            $this->db->like('property_unit_model', $query_array['property_unit_model']);
        }

        if (isset($query_array['property_community']) && strlen($query_array['property_community'])) {

            $this->db->like('property_community', $query_array['property_community']);
        }

        if (isset($query_array['property_unit_type']) && strlen($query_array['property_unit_type'])) {

            $this->db->like('property_unit_type', $query_array['property_unit_type']);
        }

        if (isset($query_array['property_listing_agent_phone']) && strlen($query_array['property_listing_agent_phone'])) {

            $this->db->like('property_listing_agent_phone', $query_array['property_listing_agent_phone']);
        }

        if (isset($query_array['property_listing_agent_email']) && strlen($query_array['property_listing_agent_email'])) {

            $this->db->like('property_listing_agent_email', $query_array['property_listing_agent_email']);
        }


        $temp = $this->db->get()->result();

        return $temp[0]->count;
    }

    /**
     * get property list by parent id
     */
    function find_with_search($limit, $offset, $query_array, $sort_by = 'property_last_updated', $sort_order = 'DESC') {

        $sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';

        $sort_column = array('property_ref_no', 'property_title', 'property_ad_type', 'property_unit_model', 'property_community', 'property_unit_type', 'property_listing_agent_phone', 'property_listing_agent_email', 'property_last_updated');

        $sort_by = (in_array($sort_by, $sort_column)) ? $sort_by : 'property_last_updated';

        $this->db->select('*');
        $this->db->from('properties');
        $this->db->limit($limit, $offset);
        $this->db->order_by($sort_by, $sort_order);

        if (isset($query_array['property_ref_no']) && strlen($query_array['property_ref_no'])) {

            $this->db->like('property_ref_no', $query_array['property_ref_no']);
        }
        if (isset($query_array['property_title']) && strlen($query_array['property_title'])) {

            $this->db->like('property_title', $query_array['property_title']);
        }

        if (isset($query_array['property_ad_type']) && strlen($query_array['property_ad_type'])) {

            $this->db->like('property_ad_type', $query_array['property_ad_type']);
        }

        if (isset($query_array['property_unit_model']) && strlen($query_array['property_unit_model'])) {

            $this->db->like('property_unit_model', $query_array['property_unit_model']);
        }

        if (isset($query_array['property_community']) && strlen($query_array['property_community'])) {

            $this->db->like('property_community', $query_array['property_community']);
        }

        if (isset($query_array['property_unit_type']) && strlen($query_array['property_unit_type'])) {

            $this->db->like('property_unit_type', $query_array['property_unit_type']);
        }

        if (isset($query_array['property_listing_agent_phone']) && strlen($query_array['property_listing_agent_phone'])) {

            $this->db->like('property_listing_agent_phone', $query_array['property_listing_agent_phone']);
        }

        if (isset($query_array['property_listing_agent_email']) && strlen($query_array['property_listing_agent_email'])) {

            $this->db->like('property_listing_agent_email', $query_array['property_listing_agent_email']);
        }

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * Store the new property  into the database
     * @param array $data - associative array with data to store
     * @return boolean 
     */
    function insert($data) {
        $insert = $this->db->insert('properties', $data);
        return $insert;
    }

    /**
     * Update property 
     * @param array $data - associative array with data to store
     * @return boolean
     */
    function update($id, $data) {
        $this->db->where('property_id', $id);
        $this->db->update('properties', $data);
        $report = array();
        $report['error'] = $this->db->error();
        if ($report !== 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Delete property 
     * @param int $id - product id
     * @return boolean
     */
    function delete($id) {
        $this->db->where('property_id', $id);
        $this->db->delete('properties');
    }

    /**
     * Delete property 
     * @param int $id - product id
     * @return boolean
     */
    function delete_except_listed_property_ref($values) {
        $this->db->where_not_in('property_ref_no', $values);

        $this->db->delete('properties');
    }

    function fetch_featured_property_by_ad_type($ad_type) {

        $this->db->select('*');
        $this->db->from('properties');
        $this->db->where('property_featured', 1);
        $this->db->where('property_ad_type', $ad_type);

        $query = $this->db->get();

        return $query->result_array();
    }

    /**
     * get property list by parent id
     */
    function search_properties($limit, $offset, $unit_category = null, $unit_model = null, $property_type = null, $bedrooms = null, $budgets = null, $size = null, $off_plan, $featured, $search_string, $agent, $community, $property_id, $order = 'property_last_updated', $order_type = 'DESC') {

        $this->db->select('*');
        $this->db->from('properties');

        if ($unit_category) {

            $this->db->where('property_ad_type', $unit_category);

            if ($budgets) {

                $count = count($budgets);

                if ($unit_category == "sale" && $count > 0) {

                    $this->db->group_start();

                    $is_first = true;

                    for ($i = 0; $i < $count; $i++) {

                        $budget = $budgets[$i];

                        $property_price_query = $this->mapSalePriceRange($budget);
                        if ($is_first) {

                            $this->db->where($property_price_query, NULL, TRUE);

                            $is_first = false;
                        } else {

                            $this->db->or_where($property_price_query, NULL, TRUE);
                        }
                    }
                    $this->db->group_end();
                } else if ($unit_category == "rent" && $count > 0) {

                    $this->db->group_start();

                    $is_first = true;

                    for ($i = 0; $i < $count; $i++) {

                        $budget = $budgets[$i];

                        $property_price_query = $this->mapRentPriceRange($budget);

                        if ($is_first) {

                            $this->db->where($property_price_query, NULL, TRUE);

                            $is_first = false;
                        } else {

                            $this->db->or_where($property_price_query, NULL, TRUE);
                        }
                    }

                    $this->db->group_end();
                }
            }
        }

        if ($unit_model) {

            $this->db->where('property_unit_model', $unit_model);
        }

        if ($property_type) {

            $this->db->where('property_unit_type', $property_type);
        }

        if ($bedrooms) {

            $this->db->where_in('property_rooms', $bedrooms);
        }

        if ($off_plan != null) {

            $this->db->where_in('property_off_plan', $off_plan);
        }

        if ($featured) {

            $this->db->where_in('property_featured', $featured);
        }

        if ($agent) {

            $this->db->where_in('property_listing_agent_email', $agent);
        }

        if ($community) {

            $this->db->where_in('property_community', $community);
        }

        if ($property_id) {

            $this->db->where('property_id !=', $property_id);
        }


        if ($order) {

            $this->db->order_by($order, $order_type);
        } else {

            $this->db->order_by('property_id', $order_type);
        }
      //  $this->db->order_by('type', 1);

        $this->db->limit($limit, $offset);

        $query = $this->db->get();

        return $query->result_array();
    }

    function mapRentPriceRange($budget) {

        $property_price_query = '';

        switch ($budget) {

            case '1':
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) <=50000";
                break;
            case '2':
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 50000 AND 75000";
                break;
            case '3':
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 75000 AND 100000";
                break;
            case '4':
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 100000 AND 125000";
                break;
            case '5':
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 125000 AND 150000";
                break;
            case '6':
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 150000 AND 175000";
                break;
            case '7':
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 175000 AND 200000";
                break;
            case '8':
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 200000 AND 250000";
                break;
            case '9':
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 300000 AND 350000";
                break;
            case '10':
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 350000 AND 400000";
                break;
            case '11':
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 450000 AND 500000";
                break;
            case '12':
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 500000 AND 600000 ";
                break;
            case '12':
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 600000 AND 700000 ";
                break;
            case '12':
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 700000 AND 800000 ";
                break;
            case '12':
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 800000 AND 900000 ";
                break;
            case '12':
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 900000 AND 1000000";
                break;
            case '12':
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) >= 1000000 ";
                break;
            default : $property_price_query = "";
        }

        return $property_price_query;
    }

    function mapSalePriceRange($budget) {

        $property_price_query = '';

        switch ($budget) {

            case "1":
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) <=1000000";
                break;
            case "2":
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 1000000 AND 1500000";
                break;
            case "3":
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 1500000 AND 2000000";
                break;
            case "4":
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 2000000 AND 2500000";
                break;
            case "5":
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 2500000 AND 3000000";
                break;
            case "6":
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 3000000 AND 3500000";
                break;
            case "7":
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 3500000 AND 4000000";
                break;
            case "8":
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 4000000 AND 4500000";
                break;
            case "9":
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 4500000 AND 5000000";
                break;
            case "10":
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 5000000 AND 6000000";
                break;
            case "11":
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 6000000 AND 7000000";
                break;
            case "12":
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 7000000 AND 8000000 ";
                break;
            case "13":
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 8000000 AND 9000000 ";
                break;
            case "14":
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 9000000 AND 10000000 ";
                break;
            case "15":
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 10000000 AND 15000000 ";
                break;
            case "16":
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) BETWEEN 15000000 AND 20000000";
                break;
            case "17":
                $property_price_query = "CONVERT(SUBSTRING_INDEX(property_price,'-',-1),UNSIGNED INTEGER) >= 20000000 ";
                break;
            default : $property_price_query = "";
        }

        return $property_price_query;
    }

    function find_agents_from_properties($limit, $offset, $community, $order = 'property_last_updated', $order_type = 'DESC') {

        $this->db->distinct();
        $this->db->select('employees.*,dep_name,des_name');
        $this->db->from('properties');
        $this->db->where('property_community', $community);
        $this->db->join('employees', 'property_listing_agent_email = emp_email_id', 'inner');
        $this->db->join('departments', 'emp_department = dep_id', 'left');
        $this->db->join('designations', 'emp_designation = des_id', 'left');

        if ($order) {

            $this->db->order_by($order, $order_type);
        } else {

            $this->db->order_by('property_id', $order_type);
        }

        $this->db->limit($limit, $offset);

        $query = $this->db->get();

        return $query->result_array();
    }

}
