<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of property_types
 *
 * @author DELL
 */
class Property extends AdminController {
    //put your code here

    /**
     * Responsible for auto load the model
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('Configuration_model');
        $this->load->model('Property_type_model');
        $this->load->model('Property_model');
    }

    /**
     * Load the main view with all the current model model's data.
     * @return void
     */
    public function index() {
        //all the posts sent by the view
        $search_string = $this->input->post('search_string');
        $order = $this->input->post('order');
        $order_type = $this->input->post('order_type');

        //pagination settings
        $config['per_page'] = 20;
        $config['base_url'] = base_url() . 'admin/properties';
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 20;

        //limit end
        $page = $this->uri->segment(3);

        //math to get the initial record to be select in the database
        $offset = ($page * $config['per_page']) - $config['per_page'];
        if ($offset < 0) {
            $offset = 0;
        }

        $properties = $this->Property_model->find_with_search($config['per_page'], $offset, $search_string, $order, $order_type);


        $config['total_rows'] = $properties == null ? 0 : count($properties);

        //initializate the panination helper 
        $this->pagination->initialize($config);

        $data['properties'] = $properties;

        //load the view
        $data['content'] = 'admin/properties/list';

        $this->load->view('includes/admin_template', $data);
    }

    public function add() {
        
    }

    /**
     * Update item by his id
     * @return void
     */
    public function update($id) {
        
    }

    //update
    /**
     * Delete product by his id
     * @return void
     */
    public function delete($id) {
        
    }

    function getUrl() {

        $config = $this->Configuration_model->find_by_key('xml_url');

        if ($config) {

            return $config->config_value;
        } else {
            return null;
        }
    }

    function getPropertyModel($name) {

        $propertyType = $this->Property_type_model->find_by_name($name);

        if ($propertyType) {

            return (isset($propertyType->pm_name) ? $propertyType->pm_name : '');
        } else {
            return 'Residential';
        }
    }

    function getExistingProperty($refNo) {

        $property = $this->Property_model->find_by_ref_no($refNo);

        return $property;
    }

    function property_sync() {

        $this->load->helper('xml');

        $context = stream_context_create(array('http' => array('header' => 'Accept: application/xml')));
        
        $url = $this->getUrl();

        if ($url) {


            //get the raw textdata of sample.xml
            $xmlRaw = file_get_contents($url, false, $context);

            if ($xmlRaw) {

                $xml = simplexml_load_string($xmlRaw, null, LIBXML_NOCDATA);
                $json = json_encode($xml);
                $array = json_decode($json, TRUE);

                $listings = $array['Listing'];

                if ($listings) {

                    foreach ($listings as $item) {


                        $ad_type = array_key_exists('Ad_Type', $item) ? $item['Ad_Type'] : "";

                        $property_title = array_key_exists('Property_Title', $item) ? $item['Property_Title'] : "";
                        $property_ref_no = array_key_exists('Property_Ref_No', $item) ? $item['Property_Ref_No'] : "";
                        $permit_number = array_key_exists('permit_number', $item) ? $item['permit_number'] : "";
                        $property_name = array_key_exists('Property_Name', $item) ? $item['Property_Name'] : "";
                        $emirate = array_key_exists('Emirate', $item) ? $item['Emirate'] : "";
                        $community = array_key_exists('Community', $item) ? $item['Community'] : "";
                        $unit_builtup_Area = array_key_exists('Unit_Builtup_Area', $item) ? $item['Unit_Builtup_Area'] : "";
                        $plot_area = array_key_exists('Plot_Area', $item) ? $item['Plot_Area'] : "";
                        $unit_measure = array_key_exists('unit_measure', $item) ? $item['unit_measure'] : "";
                        $unit_type = array_key_exists('Unit_Type', $item) ? $item['Unit_Type'] : "";
                        //$unit_model = array_key_exists('Unit_Model', $item) ? $item['Unit_Model'] : "";
                        $primary_view = array_key_exists('Primary_View', $item) ? $item['Primary_View'] : "";
                        $no_of_rooms = array_key_exists('No_of_Rooms', $item) ? $item['No_of_Rooms'] : "";
                        $no_of_bathroom = array_key_exists('No_of_Bathroom', $item) ? $item['No_of_Bathroom'] : "";
                        $parking = array_key_exists('Parking', $item) ? $item['Parking'] : "";
                        $price = array_key_exists('Price', $item) ? $item['Price'] : "";
                        $frequency = array_key_exists('Frequency', $item) ? $item['Frequency'] : "";
                        $featured = array_key_exists('Featured', $item) ? $item['Featured'] : "";
                        $off_plan = array_key_exists('off_plan', $item) ? $item['off_plan'] : "";
                        $fitted = array_key_exists('Fitted', $item) ? $item['Fitted'] : "";
                        $web_remarks = array_key_exists('Web_Remarks', $item) ? $item['Web_Remarks'] : "";
                        $latitude = array_key_exists('Latitude', $item) ? $item['Latitude'] : "";
                        $longitude = array_key_exists('Longitude', $item) ? $item['Longitude'] : "";
                        $images = array_key_exists('Images', $item) ? $item['Images'] : "";
                        $facilities = array_key_exists('Facilities', $item) ? $item['Facilities'] : "";

                        $listing_agent = array_key_exists('Listing_Agent', $item) ? $item['Listing_Agent'] : "";
                        $listing_agent_phone = array_key_exists('Listing_Agent_Phone', $item) ? $item['Listing_Agent_Phone'] : "";
                        $listing_agent_email = array_key_exists('Listing_Agent_Email', $item) ? $item['Listing_Agent_Email'] : "";
                        $listing_agent_photo = array_key_exists('Listing_Agent_Photo', $item) ? $item['Listing_Agent_Photo'] : "";

//            if (is_null($unit_model)||empty($unit_model) ||$unit_model=="") {
//
//                $unit_model = $this->getPropertyModel($unit_type);
//            }

                        $unit_model = $this->getPropertyModel($unit_type);

                        $projectRefNos[] = $property_ref_no;

                        $data_to_store = array(
                            'property_ad_type' => is_null($ad_type) || empty($ad_type) ? "" : $ad_type,
                            'property_ref_no' => is_null($property_ref_no) || empty($property_ref_no) ? "" : $property_ref_no,
                            'property_title' => is_null($property_title) || empty($property_title) ? "" : $property_title,
                            'property_name' => is_null($property_name) || empty($property_name) ? "" : $property_name,
                            'property_permit_number' => is_null($permit_number) || empty($permit_number) ? "" : $permit_number,
                            'property_emirate' => is_null($emirate) || empty($emirate) ? "" : $emirate,
                            'property_community' => is_null($community) || empty($community) ? "" : $community,
                            'property_unit_type' => is_null($unit_type) || empty($unit_type) ? "" : $unit_type,
                            'property_unit_model' => is_null($unit_model) || empty($unit_model) ? "" : $unit_model,
                            'property_builtup_area' => is_null($unit_builtup_Area) || empty($unit_builtup_Area) ? "" : $unit_builtup_Area,
                            'property_plot_area' => is_null($plot_area) || empty($plot_area) ? "" : $plot_area,
                            'property_unit_measure' => is_null($unit_measure) || empty($unit_measure) ? "" : $unit_measure,
                            'property_primary_view' => is_null($primary_view) || empty($primary_view) ? "" : $primary_view,
                            'property_rooms' => is_null($no_of_rooms) || empty($no_of_rooms) ? "" : $no_of_rooms,
                            'property_bathrooms' => is_null($no_of_bathroom) || empty($no_of_bathroom) ? "" : $no_of_bathroom,
                            'property_parking' => is_null($parking) || empty($parking) ? "" : $parking,
                            'property_price' => is_null($price) || empty($price) ? "" : $price,
                            'property_frequency' => is_null($frequency) || empty($frequency) ? "" : $frequency,
                            'property_featured' => is_null($featured) || empty($featured) ? 0 : $featured,
                            'property_off_plan' => is_null($off_plan) || empty($off_plan) ? 0 : $off_plan,
                            'property_fitted' => is_null($fitted) || empty($fitted) ? 0 : $fitted,
                            'property_latitude' => is_null($latitude) || empty($latitude) ? "" : $latitude,
                            'property_longitude' => is_null($longitude) || empty($longitude) ? "" : $longitude,
                            'property_listing_agent' => is_null($listing_agent) || empty($listing_agent) ? "" : $listing_agent,
                            'property_listing_agent_phone' => is_null($listing_agent_phone) || empty($listing_agent_phone) ? "" : $listing_agent_phone,
                            'property_listing_agent_email' => is_null($listing_agent_email) || empty($listing_agent_email) ? "" : $listing_agent_email,
                            'property_listing_agent_photo' => is_null($listing_agent_photo) || empty($listing_agent_photo) ? "" : $listing_agent_photo,
                            'property_web_remarks' => is_null($web_remarks) || empty($web_remarks) ? "" : $web_remarks,
                            'property_images' => is_null($images) || empty($images) ? "" : json_encode($images),
                            'property_facilities' => is_null($facilities) || empty($facilities) ? "" : json_encode($facilities)
                        );

                        $property = $this->getExistingProperty($property_ref_no);

                        if ($property == null) {

                            //if the insert has returned true then we show the flash message
                            if (!$this->Property_model->insert($data_to_store)) {

                                log_message('error', 'Property insertion  failed for'+var_export($data_to_store, TRUE));
                                
                            }
                        } else {

                            //if the insert has returned true then we show the flash message
                            if (!$this->Property_model->update($property->property_id, $data_to_store)) {

                                log_message('error', 'Property updation  failed for '+var_export($data_to_store, TRUE));
                            }
                        }
                    }
                    
                    $this->session->set_flashdata('flash_message', 'success');
                }
            } else {
                log_message('error', 'Unable to connect to xml url');
                $this->session->set_flashdata('flash_message', 'Unable to connect to xml url');
            }
        } else {
            log_message('error', 'XML integration url not configured');
            $this->session->set_flashdata('flash_message', 'XML integration url not configured');
        }
        
        redirect('admin/properties');
    }

    //        $doc = new DOMDocument();
//        $doc->load($url);
//
//        foreach ($doc->getElementsByTagName('Listing') as $node) {
//            
//            $count = $node->getElementsByTagName('count')->item(0)->nodeValue;
//
//            $ad_type = $node->getElementsByTagName('Ad_Type')->item(0)->nodeValue;
//
//            $property_title = $node->getElementsByTagName('Property_Title')->item(0)->nodeValue;
//            $property_ref_no = $node->getElementsByTagName('Property_Ref_No')->item(0)->nodeValue;
//            $permit_number = $node->getElementsByTagName('permit_number')->item(0)->nodeValue;
//            $property_name = $node->getElementsByTagName('Property_Name')->item(0)->nodeValue;
//            $emirate = $node->getElementsByTagName('Emirate')->item(0)->nodeValue;
//            $community = $node->getElementsByTagName('Community')->item(0)->nodeValue;
//            $unit_builtup_Area = $node->getElementsByTagName('Unit_Builtup_Area')->item(0)->nodeValue;
//            $plot_area = $node->getElementsByTagName('Plot_Area')->item(0)->nodeValue;
//            $unit_measure = $node->getElementsByTagName('unit_measure')->item(0)->nodeValue;
//            $unit_type = $node->getElementsByTagName('Unit_Type')->item(0)->nodeValue;
//            $unit_model = $node->getElementsByTagName('Unit_Model')->item(0)->nodeValue;
//            $primary_view = $node->getElementsByTagName('Primary_View')->item(0)->nodeValue;
//            $no_of_rooms = $node->getElementsByTagName('No_of_Rooms')->item(0)->nodeValue;
//            $no_of_bathroom = $node->getElementsByTagName('No_of_Bathroom')->item(0)->nodeValue;
//            $parking = $node->getElementsByTagName('Parking')->item(0)->nodeValue;
//            $price = $node->getElementsByTagName('Price')->item(0)->nodeValue;
//            $frequency = $node->getElementsByTagName('Frequency')->item(0)->nodeValue;
//            $featured = $node->getElementsByTagName('Featured')->item(0)->nodeValue;
//            $off_plan = $node->getElementsByTagName('off_plan')->item(0)->nodeValue;
//            $fitted = $node->getElementsByTagName('Fitted')->item(0)->nodeValue;
//            $Web_Remarks = $node->getElementsByTagName('Web_Remarks')->item(0)->nodeValue;
//            $latitude = $node->getElementsByTagName('Latitude')->item(0)->nodeValue;
//            $longitude = $node->getElementsByTagName('Longitude')->item(0)->nodeValue;
//            $images = $node->getElementsByTagName('Images')->item(0)->nodeValue;
//            $facilities = $node->getElementsByTagName('Facilities')->item(0)->nodeValue;
//
//
//            $listing_agent = $node->getElementsByTagName('Listing_Agent')->item(0)->nodeValue;
//            $listing_agent_phone = $node->getElementsByTagName('Listing_Agent_Phone')->item(0)->nodeValue;
//            $listing_agent_email = $node->getElementsByTagName('Listing_Agent_Email')->item(0)->nodeValue;
//            $listing_agent_photo = $node->getElementsByTagName('Listing_Agent_Photo')->item(0)->nodeValue;
//
//            if ($unit_model == "") {
//
//                $unit_model = $this->getPropertyModel($unit_type);
//            }
//            
//            $projectRefNos[]=$property_ref_no;
//
//            $data_to_store = array(
//                'property_ad_type' =>is_null($ad_type)?"":$ad_type ,
//                'property_ref_no' =>is_null($property_ref_no)?"":$property_ref_no ,
//                'property_title' => is_null($property_title)?"":$property_title,
//                'property_name' =>is_null($property_name)?"":$property_name ,
//                'property_permit_number' =>is_null($permit_number)?"":$permit_number ,
//                'property_emirate' =>is_null($emirate)?"":$emirate ,
//                'property_community' =>is_null($community)?"":$community ,
//                'property_unit_type' =>is_null($unit_type)?"":$unit_type ,
//                'property_unit_model' =>is_null($unit_model)?"":$unit_model ,
//                'property_builtup_area' =>is_null($unit_builtup_Area)?"":$unit_builtup_Area ,
//                'property_plot_area' =>is_null($plot_area)?"":$plot_area ,
//                'property_unit_measure' =>is_null($unit_measure)?"":$unit_measure ,
//                'property_primary_view' =>is_null($primary_view)?"":$primary_view ,
//                'property_rooms' =>is_null($no_of_rooms)?"":$no_of_rooms ,
//                'property_bathrooms' =>is_null($no_of_bathroom)?"":$no_of_bathroom ,
//                'property_parking' =>is_null($parking)?"":$parking ,
//                'property_price' =>is_null($price)?"":$price ,
//                'property_frequency' =>is_null($frequency)?"":$frequency ,
//                'property_featured' =>is_null($featured)?0:$property_title ,
//                'property_off_plan' =>is_null($off_plan)?0:$off_plan ,
//                'property_fitted' =>is_null($fitted)?0:$fitted ,
//                'property_latitude' =>is_null($latitude)?"":$latitude ,
//                'property_longitude' =>is_null($longitude)?"":$longitude ,
//                'property_listing_agent' =>is_null($listing_agent)?"":$listing_agent ,
//                'property_listing_agent_phone' =>is_null($listing_agent_phone)?"":$listing_agent_phone ,
//                'property_listing_agent_email' =>is_null($listing_agent_email)?"":$listing_agent_email ,
//                'property_listing_agent_photo' =>is_null($listing_agent_photo)?"":$listing_agent_photo ,
//                'property_web_remarks' =>is_null($Web_Remarks)?"":$Web_Remarks ,
//            );
//
//            $property = $this->getExistingProperty($property_ref_no);
//
//            if ($property == null) {
//
//                //if the insert has returned true then we show the flash message
//                if (!$this->Property_model->insert($data_to_store)) {
//                    
//                     log_message('error', 'Property insertion  failed');
//                }
//                
//            } else {
//                
//                //if the insert has returned true then we show the flash message
//                if (!$this->Property_model->update($property->property_id,$data_to_store)) {
//                    
//                     log_message('error', 'Property updation  failed');
//                }
//            }
//        }
//        
}
