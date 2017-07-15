<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Admin</title>
        <!-- style -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/screen.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    </head>
    <body>

        <!-- Main Area-->
        <div class="login">
            <div class="head">
                <i><img src="<?php echo base_url(); ?>assets/images/logo2.svg"></i>
            </div>
            <div class="form">
                <?php echo form_open('admin/login/validate_credentials'); ?>
                <?php
                echo "<div class='error_msg'>";
                if (isset($error_message)) {
                echo $error_message;
                }
                echo validation_errors();
                echo "</div>";
                ?>
                <div>
                    <div class="input-field">
                        <input id="username" type="text"  name="username" class="active validate" required="" aria-required="true">
                        <label for="username" data-error="Enter username">Username</label>
                    </div>
                </div>
                <div>
                    <div class="input-field">
                        <input id="password" type="password"  name="password" class="validate" required="" aria-required="true">
                        <label for="password" data-error="Enter password">Password</label>
                    </div>
                </div>
                <div >
                    <div class="input-field">
                        <button value="Login">Login</button>
                    </div>
                </div>
                </form>
            </div>

            <!--Import jQuery before materialize.js-->
           <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/index.js"></script>
            <script type="text/javascript">
                $(".button-collapse").sideNav();
                $(".dropdown-button").dropdown();
            </script>
    </body>
</html>
