<!DOCTYPE html>
<html>
    <head>
        <title>Bridges & Allies</title>
        <!-- style -->
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/materialize.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/screen.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/public.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/animations.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/flexslider.css" type="text/css">
<!--        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
<!--        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>-->
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyAVAx9nB-cldiFBNKNHu1cNF2Rn6bsbtdo" type="text/javascript"></script>


        <!-- JS file -->
<!--        <script src="<?php echo base_url(); ?>assets/js/jquery.easy-autocomplete.min.js"></script> -->

        <!-- CSS file -->
<!--        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/easy-autocomplete.min.css"> -->

        <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>

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



        <!-- Banner -->
        <section class="banner inner">
            <div class="container">

                <!--                Navigation -->
                <div class="header-inner">
                    <?php $this->load->view('includes/public/header_menu'); ?>
                </div>
            </div>
        </section>
