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
                <li><a href="<?php echo base_url(); ?>#community-sec">DUBAI COMMUNITIES</a></li>
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
            <?php echo form_open('properties/search'); ?>
            <div class="filter-search">
                <ul >
                    <?php
                    if (!isset($unit_category)) {

                        $unit_category = 'sale';
                    }
                    ?>
                    <li><a href="#" <?php echo(isset($unit_category) && $unit_category == 'sale') ? 'class="active"' : ''; ?> id="search_category_buy">BUY</a></li>
                    <li><a href="#" <?php echo(isset($unit_category) && $unit_category == 'rent') ? 'class="active"' : ''; ?> id="search_category_rent">RENT</a></li>
                    <input type="hidden" name="unit_category" id="unit_category" value="<?php echo $unit_category; ?>">
                </ul>
            </div>
            <div class="search-form">

                <div class="searchfeild">
                    <div class="search-text">
                        <select class="js-example-responsive location-select" multiple="multiple"  name="locations[]" id="header_search_locations" style="width:513px;">
                            <?php
                            $search_locations = isset($search_locations) ? $search_locations : array();
                            foreach ($locations as $location) {
                                $isSelected = (in_array($location['community_name'], $search_locations)) ? ' selected="selected"' : '';
                                echo '<option value="' . $location['community_name'] . '"' . $isSelected . '>' . $location['community_name'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
<!--                        <div class="search-text"><input type="text" name="" placeholder=" Location or Building e.g. Downtown Dubai or Cayan Tower"></div>-->
                    <div class="search-select-room">
                        <select  multiple name="bedrooms[]">
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
                    <div class="search-budget-select">
                        <select   multiple name="budgets[]" id="header_search_budgets">

                            <option value="NA" disabled selected>Budget</option>
                            <?php
                            if (isset($unit_category) && $unit_category == 'sale') {

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
                            } else {
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
                            }
                            $search_budgets = isset($search_budgets) ? $search_budgets : array();
                            foreach ($budgets as $key => $value) {
                                $isSelected = (in_array($key, $search_budgets)) ? ' selected="selected"' : '';
                                echo '<option value="' . $key . '"' . $isSelected . '>' . $value . '</option>';
                            }
                            ?>
                        </select>
                    </div>


                </div>
                <div class="searchaction">
                    <button class="waves-effect waves-light" type="submit">Search</button>
                </div>

            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
