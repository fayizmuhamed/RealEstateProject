<div class="row menu-bar">
    <div class="col s12">
        <div class="logo-header"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/header-logo.svg"></a></div>
        <div class="menu-header">
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="<?php echo base_url(); ?>#who">WHO WE ARE</a></li>
                <li><a href="<?php echo base_url(); ?>testimonial">TESTIMONIAL</a></li>
                <li><a href="<?php echo base_url(); ?>teams">TEAMS</a></li>
                <li><a href="<?php echo base_url(); ?>contact">CONTACT</a></li>
            </ul>
            <ul class="main-menu">
                <li><a href="#!" class="dropdown-button" data-activates="dropdown1" data-hover="true">ABOUT</a></li>
                <li><a href="<?php echo base_url(); ?>buy">BUY</a></li>
                <li><a href="<?php echo base_url(); ?>rent">RENT</a></li>
                <li><a href="<?php echo base_url(); ?>projects">PROJECT</a></li>
                <li><a href="<?php echo base_url(); ?>propertyowner">PROPERTY OWNER</a></li>
                <li><a href="<?php echo base_url(); ?>infoguide">INFO GUIDE</a></li>
                <li><a href="<?php echo base_url(); ?>career">CAREER</a></li>
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
                        <button class="waves-effect waves-light">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
