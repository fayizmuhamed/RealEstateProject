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
                <a href="<?php echo base_url(); ?>rent" class="back-link"><i class="zmdi zmdi-chevron-left"></i>&nbsp;Back</a>
            </div>
        </div>
        <div class="row inner-tab">
            <div class="col s12">
                <ul class="tabs tabs-fixed-width">
                    <input type="hidden"  name="rent_unit_model" id="rent_unit_model" value="<?php echo $unit_model;?>">
                <ul class="tabs tabs-fixed-width">
                    <li class="tab"><a  class="rent-sub-tab " value="" href="#" >ALL</a></li>
                    <?php
                    foreach ($property_types as $property_type) {

                        echo '<li class="tab" ><a value="' . $property_type['pt_name'] . '" href="#" class=" rent-sub-tab ">' . $property_type['pt_name'] . '</a></li>';
                    }
                    ?>
                </ul>
                </ul>
            </div>

            <!-- OFFICE LOCATION -->
            <div id="test1" class="col s12">
                <div class="row mg-bt-none" id="rent-sub-property-container">
                    <?php
                    foreach ($properties as $property) {
                        echo '<div class="col s12 l3 m6">';
                        echo '<div class="list-card">';
                        echo '<div class="over-card">';
                        echo '<ul>';
                        echo '<li><i class="icon-bed"></i>&nbsp;' . $property['property_unit_type'] . '</li>';
                        echo '<li><i class="icon-1"></i>&nbsp;' . $property['property_builtup_area'] . ' ' . $property['property_unit_measure'] . '</li>';
                        echo '<li><i class="zmdi zmdi-hotel"></i>&nbsp;' . $property['property_rooms'] . ' Bed</li>';
                        echo '<li><i class="zmdi zmdi-seat"></i>&nbsp;' . $property['property_bathrooms'] . ' Baths</li>';
                        echo '<li><i class="zmdi zmdi-group"></i>&nbsp;' . ' Maid</li>';
                        echo '<li><i class="zmdi zmdi-file-text"></i>&nbsp;' . ' Study</li>';
                        echo '</ul>';
                        echo '<button class="mk-e modal-trigger waves-effect waves-light" data-target="make_enquiry_model"><a href="#" onclick="makeEnquiry(&#39;property&#39;,&#39;' . $property['property_title'] . '&#39;,&#39;' . $property['property_ref_no'] . '&#39;);return false;">Make Enquiry</a></button>';
                        echo '<button class="view-b"><a href="'.base_url().'rentdetail/'.$property['property_id'].'">View Detail</a></button>';
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
                    <button id="button_rent_sub_load_more" class="bt-normal waves-effect waves-light" data-page="1" >VIEW MORE</button>
                </div>

            </div>

        </div>
    </div>
</section>
