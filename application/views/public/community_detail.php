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

<section class="inner-full-banner">
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
                    <span>Property Type&nbsp;&nbsp;: <strong>Apartment</strong></span>
                </div>
            </div>

            <div class="col s12 l12 m12">
                <div class="box-white distance">
                    <h2>Distance From</h2>
                    <br>
                    <span><i class="zmdi zmdi-bus"></i><?php echo $community[0]['community_dis_from_metro']; ?>Km to Metro</span>
                    <span><i class="zmdi zmdi-car"></i><?php echo $community[0]['community_dis_from_public_transport']; ?>Km to Public Transort</span>
                </div>
            </div>

            <div class="col s12 l12 m12">
                <div class="row line-h2">
                    <div class="col s12 l12 m12">
                        <h2>Location Map</h2>
                        <div class="map">
                            <iframe src="<?php echo $community[0]['community_location_url']; ?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col s12 l12 m12">
                <div class="row agent-det">
                    <h2>Agent</h2>
                    <div class="col s12 m4 l3">
                        <div class="agent-card">
                            <div class="agent-image">
                                <div class="view"><button><a href="#">View Profile</a></button></div>
                                <img src="images/7.jpg">
                            </div>
                            <div class="agent-name">
                                <h3>Thomas Miller</h3>
                                <span>Business Development Manger</span>
                            </div>
                            <div class="spcial">
                                <span><strong>Speaks</strong>English, Hindi, Arabic</span>
                                <span><strong>Area Specializes in</strong>(Not Mandatory)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l3">
                        <div class="agent-card">
                            <div class="agent-image">
                                <div class="view"><button><a href="#">View Profile</a></button></div>
                                <img src="images/7.jpg">
                            </div>
                            <div class="agent-name">
                                <h3>Thomas Miller</h3>
                                <span>Business Development Manger</span>
                            </div>
                            <div class="spcial">
                                <span><strong>Speaks</strong>English, Hindi, Arabic</span>
                                <span><strong>Area Specializes in</strong>(Not Mandatory)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l3">
                        <div class="agent-card">
                            <div class="agent-image">
                                <div class="view"><button><a href="#">View Profile</a></button></div>
                                <img src="images/7.jpg">
                            </div>
                            <div class="agent-name">
                                <h3>Thomas Miller</h3>
                                <span>Business Development Manger</span>
                            </div>
                            <div class="spcial">
                                <span><strong>Speaks</strong>English, Hindi, Arabic</span>
                                <span><strong>Area Specializes in</strong>(Not Mandatory)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l3">
                        <div class="agent-card">
                            <div class="agent-image">
                                <div class="view"><button><a href="#">View Profile</a></button></div>
                                <img src="images/7.jpg">
                            </div>
                            <div class="agent-name">
                                <h3>Thomas Miller</h3>
                                <span>Business Development Manger</span>
                            </div>
                            <div class="spcial">
                                <span><strong>Speaks</strong>English, Hindi, Arabic</span>
                                <span><strong>Area Specializes in</strong>(Not Mandatory)</span>
                            </div>
                        </div>
                    </div>




                    <!-- more -->
                    <div class="col s12 more-button-block">
                        <button class="bt-normal"><a href="#">VIEW MORE</a></button>
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
                            echo '<button class="view-b"><a href="'.base_url().'buydetail/'.$property['property_id'].'">View Detail</a></button>';
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

                    <!-- more -->
                    <div class="col s12 more-button-block">
                        <button class="bt-normal waves-effect waves-light" id="btn_community_detail_sale_add_more" data-page="1" data-community="<?php echo $community[0]['community_name']; ?>"><a href="#">VIEW MORE</a></button>
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

                    <!-- more -->
                    <div class="col s12 more-button-block">
                        <button class="bt-normal waves-effect waves-light" id="btn_community_detail_rent_add_more" data-page="1" data-community="<?php echo $community[0]['community_name']; ?>"><a href="#">VIEW MORE</a></button>
                    </div>
                </div>
            </div>




        </div>
    </div>
</section>

