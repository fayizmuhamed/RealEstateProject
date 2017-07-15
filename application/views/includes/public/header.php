<!DOCTYPE html>
<html>
<head>
	<title>Bridges & Allies</title>
	<!-- style -->
	 <!--	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/materialize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/stylesheets/screen.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/animations.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/flexslider.css" type="text/css">
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
                    <!-- Navigation -->
                    <div class="header-inner">
                            <div class="row menu-bar">
                                    <div class="col s12">
                                            <div class="logo-header"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/header-logo.svg"></a></div>
                                            <div class="menu-header">
                                                    <ul id="dropdown1" class="dropdown-content">
                                                      <li><a href="#who">WHO WE ARE</a></li>
                                                      <li><a href="testimonial.html">TESTIMONIAL</a></li>
                                                      <li><a href="team.html">TEAMS</a></li>
                                                      <li><a href="contact.html">CONTACT</a></li>
                                                    </ul>
                                                    <ul class="main-menu">
                                                            <li><a href="#!" class="dropdown-button" data-activates="dropdown1">ABOUT</a></li>
                                                            <li><a href="buy.html">BUY</a></li>
                                                            <li><a href="#">RENT</a></li>
                                                            <li><a href="<?php echo base_url(); ?>projects">PROJECT</a></li>
                                                            <li><a href="property-owner.html">PROPERTY OWNER</a></li>
                                                            <li><a href="#">INFO GUIDE</a></li>
                                                            <li><a href="#">CAREER</a></li>
                                                    </ul>
                                                    <!-- Mobile Menu -->
                                                    <a href="#" data-activates="slide-out" class="button-collapse right mob-menu">
                                                    <span class="zmdi zmdi-menu"></span>
                                                    </a>
                                            </div>
                                            <div class="search">
                                                    <div class="filter-search">
                                                            <ul>
                                                                    <li><a href="#" class="active">BUY</a></li>
                                                                    <li><a href="#">RENT</a></li>
                                                            </ul>
                                                    </div>
                                                    <div class="search-form">
                                                            <form>
                                                            <div class="searchfeild">
                                                                    <div class="search-text"><input type="text" name="" placeholder=" Location or Building e.g. Downtown Dubai or Cayan Tower"></div>
                                                                    <div class="search-select">
                                                                            <select class="browser-default">
                                                                                <option value="" disabled selected>Bedrooms</option>
                                                                                <option value="1">Option 1</option>
                                                                                <option value="2">Option 2</option>
                                                                                <option value="3">Option 3</option>
                                                                             </select>
                                                                    </div>
                                                                    <div class="search-select">
                                                                            <select class="browser-default">
                                                                                <option value="" disabled selected>Budget</option>
                                                                                <option value="1">Option 1</option>
                                                                                <option value="2">Option 2</option>
                                                                                <option value="3">Option 3</option>
                                                                             </select>
                                                                    </div>

                                                            </div>
                                                            <div class="searchaction">
                                                                    <button>Search</button>
                                                            </div>
                                                            </form>
                                                    </div>
                                            </div>
                                    </div>
                            </div>

                    </div>
            </div>
    </section>
