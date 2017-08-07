<!DOCTYPE html>
<html>
    <head>
        <title>Bridges & Allies</title>
        <!-- style -->
         <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
<!--        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/materialize.css">-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/screen.css">
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

    </head>
    <body class="inner-bg">

        <!-- Make Enquiry Modal Structure -->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <h4>Make Enquiry</h4>
                <div class="b-m">
                    <form>
                        <div class="col l12 m12 s12"><input type="text" placeholder="Name" name=""></div>
                        <div class="col l12 m12 s12"><input type="text" placeholder="Mobile Number" name=""></div>
                        <div class="col l12 m12 s12"><input type="text" placeholder="E-mail" name=""></div>
                        <div class="col l12 m12 s12"><textarea placeholder="Message"></textarea></div>
                        <div class="col l12 m12 s12">
                            <button class="waves-effect waves-light"><a href="#">Send</a></button>
                            <button class="cancel modal-close waves-effect waves-light"><a href="#">Cancel</a></button>
                        </div>
                    </form>
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
