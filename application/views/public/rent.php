<style>

    .list-card{

        height:100%;
        float:left;
        min-height: 355px;
    }

</style>
<!-- filter -->
<div class="filter">
    <a class="modal-trigger" href="#modal-filter"><img src="<?php echo base_url(); ?>assets/images/filter.svg"></a>
</div>
<!-- Modal Structure -->
<div id="modal-filter" class="modal bottom-sheet">
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
                    <option value="Less than 50,000">Less than 50,000</option>
                    <option value="50,000 – 75,000">50,000 – 75,000</option>
                    <option value="75,000 – 100,000">75,000 – 100,000</option>
                    <option value="100,000 – 125,000">100,000 – 125,000</option>
                    <option value="125,000 – 150,000">125,000 – 150,000</option>
                    <option value="150,000 – 175,000">150,000 – 175,000</option>
                    <option value="175,000 – 200,000">175,000 – 200,000</option>
                    <option value="200,000 – 250,000">200,000 – 250,000</option>
                    <option value="250,000 – 300,000">250,000 – 300,000</option>
                    <option value="300,000 – 350,000">300,000 – 350,000</option>
                    <option value="350,000 – 400,000">350,000 – 400,000</option>
                    <option value="400,000 – 450,000">400,000 – 450,000</option>
                    <option value="450,000 – 500,000">450,000 – 500,000</option>
                    <option value="500,000 – 600,000">500,000 – 600,000</option>
                    <option value="600,000 – 700,000">600,000 – 700,000</option>
                    <option value="700,000 – 800,000">700,000 – 800,000</option>
                    <option value="800,000 – 900,000">800,000 – 900,000</option>
                    <option value="900,000 – 1,000,000">900,000 – 1,000,000</option>
                    <option value="More than 1,000,000">More than 1,000,000</option>
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
<!-- FEATURED PROPERTIES FOR SALE -->
<section class="section-gap-inner">
    <div class="container">
        <div class="row bredcrums">
            <div class="col s10 m10 l10">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">HOME</a></li>
                    <li><i class="zmdi zmdi-chevron-right"></i></li>
                    <li><a href="#" class="active-bred">RENT</a></li>
                </ul>
            </div>
            <div class="col s2 m2 l2">
                <a href="<?php echo base_url(); ?>" class="back-link"><i class="zmdi zmdi-chevron-left"></i>&nbsp;Back</a>
            </div>
        </div>
        <div class="row inner-tab">
            <div class="col s12">
                <ul class="tabs tabs-fixed-width">
                    <li class="tab"><a class="active rent-tab" href="#" value="">ALL</a></li>
                    <li class="tab"><a href="<?php echo base_url(); ?>rent/sub/residential" class="rent-tabs" value="residential" target="_self">RESIDNETIAL</a></li>
                    <li class="tab"><a href="<?php echo base_url(); ?>rent/sub/commercial" class="rent-tabs" value="commercial" target="_self">COMMERCIAL</a></li>
                    <li class="tab"><a href="#" class="rent-tab" value="featured">FEATURED</a></li>
                    <li class="tab"><a href="<?php echo base_url(); ?>rent/sub/plots" class="rent-tabs" value="plots" target="_self">PLOTS</a></li>
                    <li class="tab"><a href="<?php echo base_url(); ?>tenantsguide" target="_self">TENANT'S GUIDE</a></li>
                    <li class="tab"><a href="<?php echo base_url(); ?>teams/rental" target="_self">MEET RENT TEAM</a></li>
                </ul>
            </div>

            <!-- OFFICE LOCATION -->
            <div id="test1" class="col s12">
                <div class="row mg-bt-none" id="rent-property-container">
                    <?php
                    foreach ($properties as $property) {
                        $is_maid_room = FALSE;
                        $is_study_room = FALSE;
                        if (isset($property['property_facilities'])) {

                            $facilities = json_decode($property['property_facilities'], TRUE);



                            if (isset($facilities['facility'])) {

                                $is_maid_room = in_array("Maid's room", $facilities['facility']) ? TRUE : FALSE;
                                $is_study_room = in_array("Study", $facilities['facility']) ? TRUE : FALSE;
                            }
                        }
                        echo '<div class="col s12 l3 m6">';
                        echo '<div class="list-card">';
                        echo '<div class="over-card">';
                        echo '<ul>';
                        echo '<li><i class="icon-bed"></i>&nbsp;' . $property['property_unit_type'] . '</li>';
                        echo '<li><i class="icon-1"></i>&nbsp;' . $property['property_builtup_area'] . ' ' . $property['property_unit_measure'] . '</li>';
                        echo '<li><i class="icon-bath"></i>&nbsp;' . $property['property_rooms'] . ' Bed</li>';
                        echo '<li><i class="icon-bath"></i>&nbsp;' . $property['property_bathrooms'] . ' Baths</li>';
                        if ($is_maid_room) {
                            echo '<li><i class="zmdi zmdi-group"></i>&nbsp;' . ' Maid</li>';
                        }
                        if ($is_study_room) {
                            echo '<li><i class="zmdi zmdi-file-text"></i>&nbsp;' . ' Study</li>';
                        }
                        echo '</ul>';
                        echo '<button class="mk-e modal-trigger waves-effect waves-light" data-target="make_enquiry_model"><a href="#" onclick="makeEnquiry(&#39;property&#39;,&#39;' . $property['property_title'] . '&#39;,&#39;' . $property['property_ref_no'] . '&#39;);return false;">Make Enquiry</a></button>';
                        echo '<button class="view-b"><a href="' . base_url() . 'rentdetail/' . $property['property_id'] . '">View Detail</a></button>';
                        echo '</div>';
                        echo '<div class="property-thumb">';

                        $images = json_decode($property['property_images'], TRUE);
                        if ($images != null && count($images) > 0) {

                            echo '<img src="' . $images['image'][0] . '">';
                        } else {

                            echo '<img src="#">';
                        }

                        echo '</div>';
                        echo '<div class="property-list-details">';
                        echo '<h3>' . $property['property_title'] . '</h3>';
                        echo '<span><i class="zmdi zmdi-pin"></i>&nbsp;' . $property['property_name'] . ',' . $property['property_community'] . '</span>';
                        echo '<div class="button-block">';
                        echo '<button class="price">AED ' . number_format($property['property_price'])  . '</button>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>

                <div class="col s12 more-button-block">
                    <button id="button_rent_load_more" class="bt-normal waves-effect waves-light" data-page="1" >VIEW MORE</button>
                </div>

            </div>

        </div>
    </div>
</section>
