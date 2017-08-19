<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- style -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
<!--        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/materialize.css">-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/screen.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/admin.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/croppie.css" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
        <!--Import jQuery before materialize.js-->
<!--        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquary.js"></script>-->
<!--        <script src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>-->

    </head>
    <body >
        <div class="loader" id="loader">
            <div class="loader-spinner">

            </div>
        </div>
        <!-- Header -->
        <header class="admin_menu">
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="<?php echo base_url(); ?>admin/changepassword"><i class="zmdi zmdi-lock-open"></i>CHANGE PASSWORD</a></li>
                <li><a href="<?php echo base_url(); ?>admin/config/settings"><i class="zmdi zmdi-settings"></i>SETTINGS</a></li>
                <li><a href="<?php echo base_url(); ?>admin/logout"><i class="zmdi zmdi-power-off"></i>LOGOUT</a></li>
            </ul>
            <div class="logo"><a href="<?php echo base_url(); ?>admin/home"><i><img src="<?php echo base_url(); ?>assets/images/logo.svg"></i></a></div>
            <div class="logout"><a href="#!" class="dropdown-button" data-activates="dropdown1" data-hover="true"><i class="zmdi zmdi-account"></i></a></div>
        </header>
        <!-- Main Area-->
        <div class="main-sec">
