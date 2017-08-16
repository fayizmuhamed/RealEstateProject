<!DOCTYPE html>
<html>
    <head>
        <title>Bridges & Allies</title>
        <!-- style -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
<!--        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/materialize.css">-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/screen.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/public.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Meie+Script" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/animations.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/flexslider.css" type="text/css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
<!--        <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>-->

    </head>
    <body>
        <div class="loader" id="loader">
            <div class="preloader-wrapper small active">
                <div class="spinner-layer spinner-green-only">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                        <div class="circle"></div>
                    </div><div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
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
                    <?php $attributes = array('id' => 'frm_quick_contact'); ?>
                    <?php echo form_open('', $attributes); ?>
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
