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
<section class="section-gap-inner">
    <div class="container">
        <div class="row bredcrums">
            <div class="col s10 m10 l10">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">HOME</a></li>
                    <li><i class="zmdi zmdi-chevron-right"></i></li>
                    <li><a href="#" class="active-bred">BUY</a></li>
                </ul>
            </div>
            <div class="col s2 m2 l2">
                <a href="<?php echo base_url(); ?>" class="back-link"><i class="zmdi zmdi-chevron-left"></i>&nbsp;Back</a>
            </div>
        </div>
        <div class="row inner-tab">
            <div class="col s12">
                <ul class="tabs tabs-fixed-width">
                    <li class="tab"><a class="active buy-tab" href="#" value="" >ALL</a></li>
                    <!--                    <li class="tab"><a href="#" value="residential" class="buy-tab" >READY RESIDENTIAL</a></li>
                                        <li class="tab"><a href="#" value="commercial" class="buy-tab" >READY COMMERCIAL</a></li>-->

                    <li class="tab"><a href="<?php echo base_url(); ?>buy/sub/residential" value="residential" class="buy-tabs" target="_self">READY RESIDENTIAL</a></li>
                    <li class="tab"><a href="<?php echo base_url(); ?>buy/sub/commercial" value="commercial" class="buy-tabs" target="_self">READY COMMERCIAL</a></li>
                    <li class="tab"><a href="#" value="off_plan" class="buy-tab">OFFPLAN</a></li>
                    <li class="tab"><a href="#" value="featured" class="buy-tab">FEATURED</a></li>
                    <li class="tab"><a href="<?php echo base_url(); ?>buy/sub/plots" value="plots" class="buy-tabs" target="_self">PLOTS</a></li>
                    <li class="tab"><a href="<?php echo base_url(); ?>buyersguide" target="_self">BUYERS GUIDE</a></li>
                    <li class="tab"><a href="<?php echo base_url(); ?>teams/sales" target="_self">MEET SALES TEAM</a></li>
                </ul>
            </div>
            <!-- OFFICE LOCATION -->
            <div id="test1" class="col s12">
                <div class="row mg-bt-none" id="buy-property-container">
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
                        echo '<li><i class="zmdi zmdi-hotel"></i>&nbsp;' . $property['property_rooms'] . ' Bed</li>';
                        echo '<li><i class="zmdi zmdi-seat"></i>&nbsp;' . $property['property_bathrooms'] . ' Baths</li>';
                        if ($is_maid_room) {
                            echo '<li><i class="zmdi zmdi-group"></i>&nbsp;' . ' Maid</li>';
                        }
                        if ($is_study_room) {
                            echo '<li><i class="zmdi zmdi-file-text"></i>&nbsp;' . ' Study</li>';
                        }
                        echo '</ul>';
                        echo '<button class="mk-e modal-trigger waves-effect waves-light" data-target="make_enquiry_model"><a href="#" onclick="makeEnquiry(&#39;property&#39;,&#39;' . $property['property_title'] . '&#39;,&#39;' . $property['property_ref_no'] . '&#39;);return false;">Make Enquiry</a></button>';
                        echo '<button class="view-b"><a href="' . base_url() . 'buydetail/' . $property['property_id'] . '">View Detail</a></button>';
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
                        echo '<button class="price">AED ' . number_format($property['property_price']) . '</button>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>

                <div class="col s12 more-button-block">
                    <button id="button_buy_load_more" class="bt-normal waves-effect waves-light" data-page="1">VIEW MORE</button>
                </div>

            </div>

        </div>
    </div>
</section>

<script type="text/javascript">


    $(document).ready(function () {

        //  searchProperties('sale', null, null, null, null, null, null, null, null, 0);
    });

</script>
