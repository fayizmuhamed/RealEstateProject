<!DOCTYPE html>
<html>
    <head>
        <title>Bridges & Allies</title>
        <!-- style -->
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/materialize.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/screen.css">
<!--        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/select2.css">-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/public.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/animations.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/flexslider.css" type="text/css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyAVAx9nB-cldiFBNKNHu1cNF2Rn6bsbtdo" type="text/javascript"></script>


        <!-- JS file -->
<!--        <script src="<?php echo base_url(); ?>assets/js/jquery.easy-autocomplete.min.js"></script> -->

        <!-- CSS file -->
<!--        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/easy-autocomplete.min.css"> -->

<!--        <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>-->
<!--        <script src="<?php echo base_url(); ?>assets/js/select2.js"></script>-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    </head>
    <body class="inner-bg">
        <div class="loader" id="loader">
            <div class="loader-spinner">

            </div>
        </div>
        <!-- Make Enquiry Modal Structure -->
        <div id="make_enquiry_model" class="modal">
            <div class="modal-content">
                <h4>Make Enquiry</h4>
                <div class="b-m">
                    <?php $attributes = array('id' => 'frm_send_enquiry_model'); ?>
                    <?php echo form_open('', $attributes); ?>
                    <input type="hidden"  name="type" id="type" value="">
                    <input type="hidden"  name="ref_number" id="ref_number" value="">
                    <input type="hidden"  name="ref_name" id="ref_name" value="">
                    <div class="col l12 m12 s12"><input type="text" placeholder="Name" name="author_name"></div>
                    <div class="col l12 m12 s12"><input type="text" placeholder="Mobile Number" name="author_contact"></div>
                    <div class="col l12 m12 s12"><input type="text" placeholder="E-mail" name="author_email"></div>
                    <div class="col l12 m12 s12"><textarea placeholder="Message" name="author_message"></textarea></div>
                    <div class="col l12 m12 s12">
                        <button class="bt-normal auto waves-effect waves-light" type="submit">Send</button>
                        <button class="cancel modal-close waves-effect waves-light" type="button">Cancel</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <!-- Quick Contact -->
        <div id="quick_contact_model" class="modal">
            <div class="modal-content">
                <h4>Quick Contact</h4>
                <div class="b-m">
                    <form>
                        <div class="col l12 m12 s12"><input type="text" placeholder="Name" name=""></div>
                        <div class="col l12 m12 s12"><input type="text" placeholder="Mobile Number" name=""></div>
                        <div class="col l12 m12 s12"><input type="text" placeholder="E-mail" name=""></div>
                        <div class="col l12 m12 s12"><textarea placeholder="Message"></textarea></div>
                        <div class="col l12 m12 s12">
                            <button class="bt-normal auto waves-effect waves-light" type="submit">Send</button>
                            <button class="cancel modal-close waves-effect waves-light" type="button">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Send Message -->
        <div id="send_message" class="modal">
            <div class="modal-content">
                <h4>Send Message</h4>
                <div class="b-m">
                    <?php $attributes = array('id' => 'frm_send_message'); ?>
                    <?php echo form_open('', $attributes); ?>
                    <input type="hidden"  name="agent" id="agent" >
                    <input type="hidden"  name="property_ref_no" id="property_ref_no" >
                    <input type="hidden"  name="property_title" id="property_title" >
                    <div class="col l12 m12 s12"><input type="text" placeholder="Name" name="author_name"></div>
                    <div class="col l12 m12 s12"><input type="text" placeholder="Mobile Number" name="author_contact"></div>
                    <div class="col l12 m12 s12"><input type="text" placeholder="E-mail" name="author_email"></div>
                    <div class="col l12 m12 s12"><textarea placeholder="Message" name="author_message"></textarea></div>
                    <div class="col l12 m12 s12">
                        <button class="bt-normal auto waves-effect waves-light" type="submit">Send</button>
                        <button class="cancel modal-close waves-effect waves-light" type="button">Cancel</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <!-- Request callback -->
        <div id="request_call_back" class="modal">
            <div class="modal-content">
                <h4>Request Call Back</h4>
                <div class="b-m">
                    <?php $attributes = array('id' => 'frm_request_call_back'); ?>
                    <?php echo form_open('', $attributes); ?>
                    <input type="hidden"  name="agent" id="agent" >
                    <input type="hidden"  name="property_ref_no" id="property_ref_no" >
                    <input type="hidden"  name="property_title" id="property_title" >
                    <div class="col l12 m12 s12"><input type="text" placeholder="Name" name="author_name"></div>
                    <div class="col l12 m12 s12"><input type="text" placeholder="Mobile Number" name="author_contact"></div>
                    <div class="col l12 m12 s12"><input type="text" placeholder="E-mail" name="author_email"></div>
                    <div class="col l12 m12 s12"><input type="text" placeholder="Preferred call back time" name="author_call_back_time"></div>
                    <div class="col l12 m12 s12"><textarea placeholder="Message" name="author_message"></textarea></div>
                    <div class="col l12 m12 s12">
                        <button class="bt-normal auto waves-effect waves-light" type="submit">Send</button>
                        <button class="cancel modal-close waves-effect waves-light" type="button">Cancel</button>

                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>

        <!-- Modal Structure -->
        <div id="modal-filter-buy" class="modal bottom-sheet">
            <div class="modal-content">
                <h4>Filter</h4>
                <div class="filters">
                    <div class="input-field col s12">
                        <select  name="property_type[]" multiple>
                            <option value="" disabled selected>Property Type</option>
                            <?php
                            foreach ($property_types as $property_type) {

                                echo '<option value="' . $property_type['pt_name'] . '">' . $property_type['pt_name'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-field col s12">
                        <select class="js-example-responsive location-select" multiple="multiple" name="search_location" id="filter_location" name="filter_location">
                            <?php
                            $search_locations = isset($search_locations) ? $search_locations : array();
                            foreach ($locations as $location) {
                                $isSelected = (in_array($location['community_name'], $search_locations)) ? ' selected="selected"' : '';
                                echo '<option value="' . $location['community_name'] . '"' . $isSelected . '>' . $location['community_name'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>


                    <div class="input-field col s12">
                        <select name="bedrooms" multiple>
                            <option value="NA" disabled selected>Bed Rooms</option>
                            <?php
                            $search_bedrooms = isset($search_bedrooms) ? $search_bedrooms : array();
                            for ($i = 1; $i <= 10; $i++) {

                                $isSelected = (in_array($i, $search_bedrooms)) ? ' selected="selected"' : '';
                                echo '<option value="' . $i . '"' . $isSelected . '>' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="input-field col s12">

                        <select  name="budget" multiple>
                            <option value="NA" disabled selected>Budget</option>
                            <?php
                            $budgets = array('1' => 'Less than 1,000,000',
                                '2' => '1,000,000 – 1,500,000',
                                '3' => '1,500,000 – 2,000,000',
                                '4' => '2,000,000 – 2,500,000',
                                '5' => '2,500,000 – 3,000,000',
                                '6' => '3,000,000 – 3,500,000',
                                '7' => '3,500,000 – 4,000,000',
                                '8' => '4,000,000 – 4,500,000',
                                '9' => '4,500,000 – 5,000,000',
                                '10' => '5,000,000 – 6,000,000',
                                '11' => '6,000,000 – 7,000,000',
                                '12' => '7,000,000 – 8,000,000',
                                '13' => '8,000,000 – 9,000,000',
                                '14' => '9,000,000 – 10,000,000',
                                '15' => '10,000,000 – 15,000,000',
                                '16' => '15,000,000 – 20,000,000',
                                '17' => 'More than 20,000,000'
                            );
                            $search_budgets = isset($search_budgets) ? $search_budgets : array();
                            foreach ($budgets as $key => $value) {
                                $isSelected = (in_array($key, $search_budgets)) ? ' selected="selected"' : '';
                                echo '<option value="' . $key . '"' . $isSelected . '>' . $value . '</option>';
                            }
                            ?>
                        </select>
                    </div>


                    <p class="range-field">
                        <input type="text" placeholder="Size" />
                    </p>

                    <button><a href="#">Search</a></button>
                    <button class="cancel-b modal-close"><a href="#">Cancel</a></button>


                </div>
            </div>

        </div>

        <div id="modal-filter-rent" class="modal bottom-sheet">
            <div class="modal-content">
                <h4>Filter</h4>
                <div class="filters">
                    <div class="input-field col s12">
                        <select  name="property_type[]" multiple>
                            <option value="" disabled selected>Property Type</option>
                            <?php
                            foreach ($property_types as $property_type) {

                                echo '<option value="' . $property_type['pt_name'] . '">' . $property_type['pt_name'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-field col s12">
                        <select class="js-example-responsive location-select" multiple="multiple" name="search_location" id="filter_location" name="filter_location">
                            <?php
                            foreach ($communities as $community) {

                                echo '<option value="' . $community['community_name'] . '">' . $community['community_name'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>


                    <div class="input-field col s12">
                        <select name="bedrooms" multiple>
                            <option value="NA" disabled selected>Bed Rooms</option>
                            <?php
                            for ($i = 1; $i <= 10; $i++) {

                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="input-field col s12">
                        <select  name="budget" multiple>
                            <option value="NA" disabled selected>Budget</option>
                            <?php
                            $budgets = array('1' => 'Less than 50,000',
                                '2' => '50,000 – 75,000',
                                '3' => '75,000 – 100,000',
                                '4' => '100,000 – 125,000',
                                '5' => '125,000 – 150,000',
                                '6' => '150,000 – 175,000',
                                '7' => '175,000 – 200,000',
                                '8' => '200,000 – 250,000',
                                '9' => '300,000 – 350,000',
                                '10' => '350,000 – 400,000',
                                '11' => '400,000 – 450,000',
                                '12' => '450,000 – 500,000',
                                '13' => '500,000 – 600,000',
                                '14' => '600,000 – 700,000',
                                '15' => '700,000 – 800,000',
                                '16' => '800,000 – 900,000',
                                '17' => '900,000 – 1,000,000',
                                '18' => 'More than 1,000,000'
                            );
                            $search_budgets = isset($search_budgets) ? $search_budgets : array();
                            foreach ($budgets as $key => $value) {
                                $isSelected = (in_array($key, $search_budgets)) ? ' selected="selected"' : '';
                                echo '<option value="' . $key . '"' . $isSelected . '>' . $value . '</option>';
                            }
                            ?>
                        </select>
                    </div>


                    <p class="range-field">
                        <input type="text" placeholder="Size" />
                    </p>

                    <button><a href="#">Search</a></button>
                    <button class="cancel-b modal-close"><a href="#">Cancel</a></button>


                </div>
            </div>

        </div>

        <!-- Banner -->
        <section class="banner inner">
            <div class="container">

                <!--                Navigation -->
                <div class="header-inner">
                    <?php $this->load->view('includes/public/header_menu'); ?>
                </div>
            </div>
        </section>
