<?php

defined('BASEPATH') OR exit('No direct script access allowed');


if (!function_exists('navigation_icon')) {

    /**
     * Element
     *
     * Lets you determine whether an array index is set and whether it has a value.
     * If the element is empty it returns NULL (or whatever you specify as the default value.)
     *
     * @param	string
     * @param	array
     * @param	mixed
     * @return	mixed	depends on what the array contains
     */
    function navigation_icon($item) {

        $icon = '';
        switch ($item) {

            case 'navigation_airport':
                $icon = '<i class="icon-Airport-01 tooltipped width-20" data-tooltip="Airport"></i>';
                break;
            case 'navigation_metro':
                $icon = '<i class="icon-Highway-01 tooltipped width-20" data-tooltip="Metro"></i>';
                break;
            case 'navigation_public_transport':
                $icon = '<i class="icon-Public-Transport-01 tooltipped width-20" data-tooltip="Public Transport"></i>';
                break;
            case 'navigation_park':
                $icon = '<i class="icon-Park-01 tooltipped width-20" data-tooltip="Park"></i>';
                break;
            case 'navigation_lake':
                $icon = '<i class="icon-Lake-01 tooltipped width-20" data-tooltip="Lake"></i>';
                break;
            case 'navigation_beach':
                $icon = '<i class="icon-Beach-01 tooltipped width-20" data-tooltip="Beach"></i>';
                break;
            case 'navigation_mall':
                $icon = '<i class="icon-Mall-01 tooltipped width-20" data-tooltip="Mall"></i>';
                break;
            case 'navigation_restaurants':
                $icon = '<i class="icon-Restaurants-01 tooltipped width-20" data-tooltip="Restaurants"></i>';
                break;
            case 'navigation_super_market':
                $icon = '<i class="icon-Supermarket-01 tooltipped width-20" data-tooltip="Supermarket"></i>';
                break;
            case 'navigation_school':
                $icon = '<i class="icon-School-01 tooltipped width-20" data-tooltip="School"></i>';
                break;
            case 'navigation_hospital':
                $icon = '<i class="icon-Hospital-01 tooltipped width-20" data-tooltip="Hospital"></i>';
                break;
            case 'navigation_leisure_center':
                $icon = '<i class="icon-Leisure-Centre-01 tooltipped width-20" data-tooltip="Leisure Centre"></i>';
                break;
            case 'navigation_fitness_center':
                $icon = '<i class="icon-Fitness-Centre-01 tooltipped width-20" data-tooltip="Fitness Centre"></i>';
                break;
            case 'navigation_motor_way':
                $icon = '<i class="icon-Motor-Way tooltipped width-20" data-tooltip="Motor Way / Highway"></i>';
                break;
            case 'navigation_burj_al_arab':
                $icon = '<i class="icon-Burj-Al-Arab-01 tooltipped width-20" data-tooltip="Burj Al Arab"></i>';
                break;
            case 'navigation_palm_jumeirah':
                $icon = '<i class="icon-Palm-Jumeirah-01 tooltipped width-20" data-tooltip="Palm Jumeirah"></i>';
                break;
            case 'navigation_burj_khalifa':
                $icon = '<i class="icon-Burj-Khalifa-01 tooltipped width-20" data-tooltip="Burj Khalifa"></i>';
                break;
            case 'navigation_golf_course':
                $icon = '<i class="icon-Golf-course-01 tooltipped width-20" data-tooltip="Golf course"></i>';
                break;
            case 'navigation_marina':
                $icon = '<i class="icon-Marina-01 tooltipped width-20" data-tooltip="Marina"></i>';
                break;
            case 'navigation_expo_2020':
                $icon = '<i class="icon-Expo-2020-01 tooltipped width-20" data-tooltip="Expo 2020"></i>';
                break;
            
//            case 'navigation_metro':
//                $icon = '<i class="zmdi zmdi-railway tooltipped width-20" data-tooltip="Metro"></i>';
//                break;
//            case 'navigation_public_transport':
//                $icon = '<i class="zmdi zmdi-bus tooltipped width-20" data-tooltip="Public transport"></i>';
//                break;
//            case 'navigation_park':
//                $icon = '<i class="zmdi zmdi-landscape tooltipped width-20" data-tooltip="Park"></i>';
//                break;
//            case 'navigation_lake':
//                $icon = '<i class="zmdi zmdi-bus tooltipped width-20" data-tooltip="Lake"></i>';
//                break;
//            case 'navigation_beach':
//                $icon = '<i class="zmdi zmdi-local-see tooltipped width-20" data-tooltip="Beach"></i>';
//                break;
//            case 'navigation_mall':
//                $icon = '<i class="zmdi zmdi-mall tooltipped width-20" data-tooltip="Mall"></i>';
//                break;
//            case 'navigation_restaurants':
//                $icon = '<i class="zmdi zmdi-hotel tooltipped width-20" data-tooltip="Restaurants"></i>';
//                break;
//            case 'navigation_super_market':
//                $icon = '<i class="zmdi zmdi-local-grocery-store tooltipped width-20" data-tooltip="Supermarket"></i>';
//                break;
//            case 'navigation_school':
//                $icon = '<i class="zmdi zmdi-graduation-cap tooltipped width-20" data-tooltip="School"></i>';
//                break;
//            case 'navigation_hospital':
//                $icon = '<i class="zmdi zmdi-hospital tooltipped width-20" data-tooltip="Hospital"></i>';
//                break;
//            case 'navigation_leisure_center':
//                $icon = '<i class="zmdi zmdi-bus tooltipped width-20" data-tooltip="Leisure Centre"></i>';
//                break;
//            case 'navigation_fitness_center':
//                $icon = '<i class="zmdi zmdi-fire tooltipped width-20" data-tooltip="Fitness Centre"></i>';
//                break;
//            case 'navigation_motor_way':
//                $icon = '<i class="zmdi zmdi-railway tooltipped width-20" data-tooltip="Motor Way / Highway"></i>';
//                break;
//            case 'navigation_burj_al_arab':
//                $icon = '<i class="zmdi zmdi-bus tooltipped width-20" data-tooltip="Burj Al Arab"></i>';
//                break;
//            case 'navigation_palm_jumeirah':
//                $icon = '<i class="zmdi zmdi-airplane tooltipped width-20" data-tooltip="Palm Jumeirah"></i>';
//                break;
//            case 'navigation_burj_khalifa':
//                $icon = '<i class="zmdi zmdi-railway tooltipped width-20" data-tooltip="Burj Khalifa"></i>';
//                break;
//            case 'navigation_golf_course':
//                $icon = '<i class="zmdi zmdi-bus tooltipped width-20" data-tooltip="Golf course"></i>';
//                break;
//            case 'navigation_marina':
//                $icon = '<i class="zmdi zmdi-railway tooltipped width-20" data-tooltip="Marina"></i>';
//                break;
//            case 'navigation_expo_2020':
//                $icon = '<i class="zmdi zmdi-bus tooltipped width-20" data-tooltip="Expo 2020"></i>';
//                break;
        }

        return $icon;
    }

}


if (!function_exists('navigation_list')) {

    /**
     * Element
     *
     * Lets you determine whether an array index is set and whether it has a value.
     * If the element is empty it returns NULL (or whatever you specify as the default value.)
     *
     * @param	string
     * @param	array
     * @param	mixed
     * @return	mixed	depends on what the array contains
     */
    function navigation_list() {

        $navigations = array('1' => 'navigation_airport',
            '2' => 'navigation_metro',
            '3' => 'navigation_public_transport',
            '4' => 'navigation_park',
            '5' => 'navigation_lake',
            '6' => 'navigation_beach',
            '7' => 'navigation_mall',
            '8' => 'navigation_restaurants',
            '9' => 'navigation_super_market',
            '10' => 'navigation_school',
            '11' => 'navigation_hospital',
            '12' => 'navigation_leisure_center',
            '13' => 'navigation_fitness_center',
            '14' => 'navigation_motor_way',
            '15' => 'navigation_burj_al_arab',
            '16' => 'navigation_palm_jumeirah',
            '17' => 'navigation_burj_khalifa',
            '18' => 'navigation_golf_course',
            '19' => 'navigation_marina',
            '20' => 'navigation_expo_2020',
        );
        
        return $navigations;
    }

}

if (!function_exists('navigation_display_name')) {

    /**
     * Element
     *
     * Lets you determine whether an array index is set and whether it has a value.
     * If the element is empty it returns NULL (or whatever you specify as the default value.)
     *
     * @param	string
     * @param	array
     * @param	mixed
     * @return	mixed	depends on what the array contains
     */
    function navigation_display_name($item) {

        $name = '';
        switch ($item) {

            case 'navigation_airport':
                $name = 'Airport';
                break;
            case 'navigation_metro':
                $name = 'Metro';
                break;
            case 'navigation_public_transport':
                $name = 'Public transport';
                break;
            case 'navigation_park':
                $name = 'Park';
                break;
            case 'navigation_lake':
                $name = 'Lake';
                break;
            case 'navigation_beach':
                $name = 'Beach';
                break;
            case 'navigation_mall':
                $name = 'Mall';
                break;
            case 'navigation_restaurants':
                $name = 'Restaurants';
                break;
            case 'navigation_super_market':
                $name = 'Supermarket';
                break;
            case 'navigation_school':
                $name = 'School';
                break;
            case 'navigation_hospital':
                $name = 'Hospital';
                break;
            case 'navigation_leisure_center':
                $name = 'Leisure Centre';
                break;
            case 'navigation_fitness_center':
                $name = 'Fitness Centre';
                break;
            case 'navigation_motor_way':
                $name = 'Motor Way / Highway';
                break;
            case 'navigation_burj_al_arab':
                $name = 'Burj Al Arab';
                break;
            case 'navigation_palm_jumeirah':
                $name = 'Palm Jumeirah';
                break;
            case 'navigation_burj_khalifa':
                $name = 'Burj Khalifa';
                break;
            case 'navigation_golf_course':
                $name = 'Golf course';
                break;
            case 'navigation_marina':
                $name = 'Marina';
                break;
            case 'navigation_expo_2020':
                $name = 'Expo 2020';
                break;
        }

        return $name;
    }

}
