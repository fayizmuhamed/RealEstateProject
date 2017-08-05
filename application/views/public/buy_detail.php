<style>
    
    .image-buy-detail img {
        height:430px !important
    }
    .property-desc{
        height:70px;
        overflow: hidden;
    }
    .property-desc-more{
        height:auto;
        overflow: hidden;
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
                    <li><a href="<?php echo base_url(); ?>buy" class="active-bred">BUY</a></li>
                </ul>
            </div>
            <div class="col s2 m2 l2">
                <a href="<?php echo base_url(); ?>buy" class="back-link"><i class="zmdi zmdi-chevron-left"></i>&nbsp;Back</a>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            <div class="col l12 m12 s12">
                <div class="top-section-b">
                    <h2><?php echo isset($property->property_title) ? $property->property_title : '' ?></h2>
                    <div class="dicri">
<!--				<span><i class="icon-bed"></i>&nbsp;4 Bed</span>
                    <span><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</span>
                    <span><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</span>-->
                        <span><i class="zmdi zmdi-pin"></i>&nbsp;<?php echo (isset($property->property_name) ? $property->property_name . ',' : '') . (isset($property->property_community) ? $property->property_community : ''); ?></span>
                    </div>
                    <div class="refernce-number">Reference: <?php echo isset($property->property_ref_no) ? $property->property_ref_no : '' ?></div>
                    <div class="id-number">DLD Permit# <?php echo isset($property->property_permit_number) ? $property->property_permit_number : '' ?></div>
                </div>
            </div>

            <div class="col s12 l12 m12 margin-top">
                <div class="row">
                    <div class="col l9 m6 s12">
                        <div class="image-buy-detail">


                            <div class="flexslider">
                                <ul class="slides">
                                    <?php
                                    if (isset($property->property_images)) {

                                        $images = json_decode($property->property_images, TRUE);

                                        foreach ($images['image'] as $image) {
                                            echo '<li>';
                                            echo '<img src="' . $image . '">';
                                            echo '</li>';
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col l3 m6 s12">
                        <?php 
                        
                        if (isset($employee)) {
                            ?>
                            <div class="buy-agent-card">
                                <div class="agent-head"><img src="<?php echo base_url() . 'uploads/emp-profile/' . $employee['emp_profile_image']; ?>"></div>
                                <div class="agent-detail-sec">
                                    <h2><?php echo $employee['emp_name']; ?></h2>
                                    <span><?php echo $employee['des_name']; ?></span>
                                    <div class="spcial">
                                        <span><strong>Speaks</strong>:&nbsp;<?php echo $employee['emp_languages']; ?></span>
                                        <span><strong>From</strong>:&nbsp;<?php echo $employee['emp_location']; ?></span>
                                        <span><strong>Area Specializes in</strong>:&nbsp;<?php echo isset($employee['emp_area_specialized']) ? $employee['emp_area_specialized'] : '(Not Mandatory)'; ?></span>
                                    </div> 
                                    <button class="bt-half mg-right-5"><a href="#">SEND MESSAGE</a></button>
                                    <button class="bt-half"><a href="#">REQUEST FOR CALL BACK</a></button>
    <!--                                    <button class="bt-number"><a href="#"><i class="zmdi zmdi-phone"></i>&nbsp;9995540446</a></button>-->
                                </div>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="buy-agent-card">
                                <div class="agent-head"><img src="<?php echo isset($property->property_listing_agent_photo) ? $property->property_listing_agent_photo : '' ?>"></div>
                                <div class="agent-detail-sec">
                                    <h2><?php echo isset($property->property_listing_agent) ? $property->property_listing_agent : '' ?></h2>
                                    <span>N/A</span>
                                    <div class="spcial">
                                        <span><strong>Speaks</strong>:&nbsp;N/A</span>
                                        <span><strong>From</strong>:&nbsp;N/A</span>
                                        <span><strong>Area Specializes in</strong>:&nbsp;N/A</span>
                                    </div> 
                                    <button class="bt-half mg-right-5"><a href="#">SEND MESSAGE</a></button>
                                    <button class="bt-half"><a href="#">REQUEST FOR CALL BACK</a></button>
                                </div>
                            </div>
                        <?php }
                        ?>



                    </div>
                </div>
            </div>
        </div>

        <div class="col s12 m12 l12">
            <div class="row">
                <div class="col s12 l6 m6">
                    <div class="box-white facts">
                        <h2>FACTS</h2>
                        <ul>
                            <li><i class="zmdi zmdi-view-dashboard"></i><strong>Price</strong>:&nbsp;<?php echo isset($property->property_price) ? $property->property_price : '' ?> AED <?php echo isset($property->property_frequency) ? $property->property_frequency : '' ?></li>
                            <li><i class="icon-1"></i><strong>Type</strong>:&nbsp;&nbsp;<?php echo isset($property->property_unit_type) ? $property->property_unit_type : '' ?></li>
                            <li><i class="icon-bed"></i><strong>Bed</strong>:&nbsp;&nbsp;Yes</li>
                            <li><i class="zmdi zmdi-group"></i><strong>Maid</strong>:&nbsp;&nbsp;No</li>
                            <li class="border-none"><i class="zmdi zmdi-file-text"></i><strong>Study</strong>:&nbsp;&nbsp;Yes</li>
                        </ul>
                    </div>
                </div>
                <div class="col s12 l6 m6">
                    <div class="box-white aminities">
                        <h2>AMINITIES</h2>
                        <br>
                        <div class="row">
                            <?php
                            if (isset($property->property_facilities)) {

                                $facilities = json_decode($property->property_facilities, TRUE);

                                foreach ($facilities['facility'] as $facility) {
                                    echo '<div class="col s6 l4 m6">';
                                    echo '<div class="pads"><i class="zmdi zmdi-check-circle"></i>&nbsp;' . $facility . '</div>';
                                    echo '</div>';
                                }
                            }
                            ?>

                        </div>	
                    </div>
                </div>
            </div>
        </div>

        <div class="col s12 l12 m12">
            <div class="box-white section-d">
                <h2>RAS AL KHAIMAH</h2>
                <br>
                 <p id="property_desc_container" class="property-desc"><?php
                $remarks=isset($property->property_web_remarks) ? $property->property_web_remarks : '';
                $res = explode("PROPERTY FEATURES",$remarks); 
                echo $res[0];
                ?> </p>
                 <button id="btn_property_desc_more" data-more="0"><a href="#">READ MORE</a></button>
            </div>
        </div>

        <div class="col s12 l12 m12">
            <div class="box-white distance">
                <h2>Distance From</h2>
                <br>
                <span><i class="zmdi zmdi-bus"></i>Km to Metro</span>
                <span><i class="zmdi zmdi-car"></i>Km to Public Transort</span>
            </div>
        </div>

        <div class="col s12 l12 m12">
            <div class="row line-h2">
                <div class="col s12 l12 m12">
                    <h2>Location Map</h2>
                    <div class="map" id="map" width="100%" height="450px">
<!--                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462566.5898229724!2d54.947228699020094!3d25.07471674873841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai!5e0!3m2!1sen!2sae!4v1499253569396" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>-->

                    </div>
                    <script type="text/javascript">

                        function initialize() {
                            debugger;
                            var latitude = parseFloat("<?php echo isset($property->property_latitude) ? $property->property_latitude : '25.199514' ?>"); // Latitude get from above variable
                            var longitude = parseFloat("<?php echo isset($property->property_longitude) ? $property->property_longitude : '55.277397' ?>"); // Longitude from same
                            var title = "<?php echo isset($property->property_title) ? $property->property_title : 'Location' ?>";
                            var latlng = new google.maps.LatLng(latitude, longitude);
                            var myOptions = {
                                zoom: 8,
                                center: latlng,
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };
                            var map = new google.maps.Map(document.getElementById("map"),
                                    myOptions);

                            //Add the marker
                            var marker = new google.maps.Marker({
                                position: latlng,
                                map: map,
                                title: title
                            });
                        }
                        google.maps.event.addDomListener(window, "load", initialize);
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

