<style>

    .list-card{

        height:100%;
        float:left;
    }

</style>
<!-- filter -->
<div class="filter">
    <a class="modal-trigger" href="#modal-filter"><img src="<?php echo base_url(); ?>assets/images/filter.svg"></a>
</div>
<!-- Modal Structure -->
<div id="modal-filter" class="modal bottom-sheet">
    <div class="modal-content">
        <h4>Flter</h4>
        <div class="filters">
            <div class="input-field col s12">
                <select multiple>
                    <option value="" selected>Property Type</option>
                    <option value="1">Apartment</option>
                    <option value="2">Villas</option>
                    <option value="3">Residential</option>
                    <option value="4">Retail</option>
                    <option value="5">Official</option>
                    <option value="6">Commercial</option>
                </select>
            </div>
            <div class="input-field col s12">
                <select multiple>
                    <option value="" selected>Bed Room</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
            <div class="input-field col s12">
                <select multiple>
                    <option value="" selected>Budget</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
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
                    <li class="tab"><a href="#" class="rent-tab" value="residential">READY RESIDNETIAL</a></li>
                    <li class="tab"><a href="#" class="rent-tab" value="commercial">READY COMMERCIAL</a></li>
                    <li class="tab"><a href="#" class="rent-tab" value="off_plan">OFFPLAN</a></li>
                    <li class="tab"><a href="#" class="rent-tab" value="featured">FEATURED</a></li>
                    <li class="tab"><a href="#" class="rent-tab" value="plots">PLOTS</a></li>
                    <li class="tab"><a href="<?php echo base_url(); ?>tenantsguide" target="_self">TENANT'S GUIDE</a></li>
                    <li class="tab"><a href="<?php echo base_url(); ?>teams" target="_self">MEET RENT TEAM</a></li>
                </ul>
            </div>

            <!-- OFFICE LOCATION -->
            <div id="test1" class="col s12">
                <div class="row mg-bt-none" id="rent-property-container">
                    <?php
                    foreach ($properties as $property) {
                        echo '<div class="col s12 l3 m6">';
                        echo '<div class="list-card">';
                        echo '<div class="over-card">';
                        echo '<ul>';
                        echo '<li><i class="icon-bed"></i>&nbsp;' . $property['property_unit_type'] . '</li>';
                        echo '<li><i class="icon-1"></i>&nbsp;' . $property['property_builtup_area'] . ' ' . $property['property_unit_measure'] . '</li>';
                        echo '<li><i class="icon-bath"></i>&nbsp;' . $property['property_rooms'] . ' Bed</li>';
                        echo '<li><i class="icon-bath"></i>&nbsp;' . $property['property_bathrooms'] . ' Baths</li>';
                        echo '<li><i class="zmdi zmdi-group"></i>&nbsp;' . ' Maid</li>';
                        echo '<li><i class="zmdi zmdi-file-text"></i>&nbsp;' . ' Study</li>';
                        echo '</ul>';
                        echo '<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>';
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
                        echo '<button class="price">AED ' . $property['property_price'] . '</button>';
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
