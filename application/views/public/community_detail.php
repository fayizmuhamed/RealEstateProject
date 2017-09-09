<style>

    .list-card{

        height:100%;
        float:left;
    }

</style>
<!-- FEATURED PROPERTIES FOR SALE -->
<section class="section-gap-inner">
    <div class="container">
        <div class="row bredcrums">
            <div class="col s10 m10 l10">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">HOME</a></li>
                    <li><i class="zmdi zmdi-chevron-right"></i></li>
                    <li><a href="#" class="active-bred">COMMUNITY</a></li>
                </ul>
            </div>
            <div class="col s2 m2 l2">
                <a href="<?php echo base_url(); ?>#community-sec" class="back-link"><i class="zmdi zmdi-chevron-left"></i>&nbsp;Back</a>
            </div>
        </div>
    </div>
</section>

<section class="inner-full-banner height-565">
    <img src="<?php echo base_url() . 'uploads/community/cover/' . $community[0]['community_cover_image']; ?>">
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col s12 l12 m12 thum-slid">
                <ul>
                    <?php
                    foreach ($community_thumbnails as $row) {

                        echo '<li><a href="#"><img src="' . base_url() . 'uploads/community/thumbnail/' . $row['image'] . '"></a></li>';
                    }
                    ?>
                </ul>
            </div>

            <div class="col s12 l12 m12">
                <div class="box-white">
                    <h2><?php echo $community[0]['community_name']; ?></h2>
                    <br>
                    <p><?php echo $community[0]['community_description']; ?>
                    </p>
                </div>
            </div>

            <div class="col s12 l12 m12">
                <div class="box-white property-type">
                    <span>Property Type&nbsp;&nbsp;: <strong><?php echo $community[0]['community_property_type']; ?></strong></span>
                </div>
            </div>


            <div class="col s12 l12 m12">
                <div class="box-white distance">
                    <h2>Distance From</h2>
                    <br>
                    <div class="row">
                        <?php
                        $community_navigations = json_decode($community[0]['community_navigations'], TRUE);

                        if (isset($community_navigations) && !empty($community_navigations)) {

                            $navigations = navigation_list();

                            foreach ($community_navigations as $key => $value) {
                                echo '<div class="col s4 l3 m4">';
                                echo '<span>' . navigation_icon($key) . '&nbsp;' . $value . ' Km to ' . navigation_display_name($key) . '</span>';
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col s12 l12 m12">
                <div class="row line-h2">
                    <div class="col s12 l12 m12">
                        <h2>Location Map</h2>
                        <div class="map">
                            <?php echo htmlspecialchars_decode(isset($community[0]['community_location_url']) ? $community[0]['community_location_url'] : ''); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s12 l12 m12">
                <div class="row agent-det">
                    <h2>Agent</h2>
                    <div class="row agent-det" id="community_employee_container">
                        <?php
                        foreach ($employees as $employee) {
                            ?>

                            <div class="col s12 m4 l3">
                                <div class="agent-card">
                                    <div class="agent-image">
                                        <div class="view"><button><a href="<?php echo base_url() . 'viewprofile/' . $employee['emp_id']; ?>">View Profile</a></button></div>
                                        <img src="<?php echo base_url() . 'uploads/emp-profile/' . $employee['emp_profile_image']; ?>">
                                    </div>
                                    <div class="agent-name">
                                        <h3><?php echo $employee['emp_name']; ?></h3>
                                        <span><?php echo $employee['des_name']; ?></span>
                                    </div>
                                    <div class="spcial">
                                        <span><strong>Area Specializes in</strong><?php echo $employee['emp_area_specialized']; ?></span>
                                        <span><strong>From</strong><?php echo $employee['emp_location']; ?></span>
                                        <span><strong>Speaks</strong><?php echo $employee['emp_languages']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <!-- more -->
                    <div class="col s12 more-button-block">
                        <button class="bt-normal waves-effect waves-light" id="btn_community_employee_add_more" data-page="1" data-community="<?php echo $community[0]['community_name']; ?>">VIEW MORE</button>
                    </div>

                </div>
            </div>

            <div class="col s12 l12 m12">
                <div class="row agent-det mg-bt-none">
                    <div class="col s12 l12 m12">
                        <h2>Property for Sale in <?php echo $community[0]['community_name']; ?></h2>
                    </div>
                    <div id="community_datail_sale_list_container">
                        <?php
                        foreach ($properties_sale as $property) {
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
                            echo '<button class="price">AED ' .number_format($property['property_price']) . '</button>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                    </div>

                    <!-- more -->
                    <div class="col s12 more-button-block">
                        <button class="bt-normal waves-effect waves-light" id="btn_community_detail_sale_add_more" data-page="1" data-community="<?php echo $community[0]['community_name']; ?>">VIEW MORE</button>
                    </div>
                </div>
            </div>

            <div class="col s12 l12 m12">
                <div class="row agent-det mg-bt-none">
                    <div class="col s12 l12 m12">
                        <h2>Property for Rent in <?php echo $community[0]['community_name']; ?></h2>
                    </div>
                    <div id="community_datail_rent_list_container">
                        <?php
                        foreach ($properties_rent as $property) {
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
                            echo '<button class="price">AED ' . number_format($property['property_price']) . '</button>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                    </div>

                    <!-- more -->
                    <div class="col s12 more-button-block">
                        <button class="bt-normal waves-effect waves-light" id="btn_community_detail_rent_add_more" data-page="1" data-community="<?php echo $community[0]['community_name']; ?>"><a href="#">VIEW MORE</a></button>
                    </div>
                </div>
            </div>




        </div>
    </div>
</section>

