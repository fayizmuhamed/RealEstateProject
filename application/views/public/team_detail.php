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
                    <li><a href="#">ABOUT</a></li>
                    <li><i class="zmdi zmdi-chevron-right"></i></li>
                    <li><a href="#" class="active-bred">TEAM</a></li>
                </ul>
            </div>
            <div class="col s2 m2 l2">
                <a href="#" class="back-link"><i class="zmdi zmdi-chevron-left"></i>&nbsp;Back</a>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="each-testimonial">
                    <div class="user-testi">
                        <img src="<?php echo base_url() . 'uploads/emp-profile/' . $employee['emp_profile_image']; ?>">
                    </div>
                    <div class="testi-content">
                        <div class="head-part">
                            <div class="name-dt">
                                <h1><?php echo $employee['emp_name']; ?></h1>
                                <i><?php echo $employee['des_name']; ?></i>
                                <br>
                                <strong><span>Area Specializes in</span><?php echo $employee['emp_area_specialized']; ?></strong>
                                <strong><span>From</span><?php echo $employee['emp_location']; ?></strong>
                                <strong><span>Speaks</span><?php echo $employee['emp_languages']; ?></strong>
                            </div>

                            <div class="action-bt">
                                <ul>
                                    <li><a class="modal-trigger" data-target="send_message"  onclick="sendMessage('<?php echo $employee['emp_id']; ?>',null,null);return false;">Send Message</a></li>
                                    <li><a class="modal-trigger" data-target="request_call_back" onclick="requestForCallBack('<?php echo $employee['emp_id']; ?>',null,null);return false;">Request call back</a></li>
                                    <li><a href="#property_list">View listing</a></li>
                                    <li><a href="<?php echo base_url() . 'testimonial/' . $employee['emp_id']; ?>">Read My testimonial</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


            <div class="col s12 m12 l12">
                <div class="box-white">
                    <h2>About <?php echo $employee['emp_name']; ?></h2>
                    <br>
                    <p><?php echo $employee['emp_description']; ?></p>
                </div>
            </div>

            <div class="col s12 more-button-block" id="property_list">

                <div class="row mg-bt-none" id="team_detail_property_container">
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
                        echo '<button class="mk-e modal-trigger waves-effect waves-light" data-target="make_enquiry_model"><a href="#" onclick="makeEnquiry(&#39;property&#39;,&#39;' . $property['property_title'] . '&#39;,&#39;' . $property['property_ref_no'] . '&#39;);return false;">Make Enquiry</a></button>';
                        echo '<button class="view-b"><a href="'.base_url().($property['property_ad_type']=='sale'?'buydetail/':'rentdetail/').$property['property_id'].'">View Detail</a></button>';
                        echo '</div>';
                        echo '<div class="property-thumb">';

                        $images = json_decode($property['property_images'], TRUE);
                        if ($images != null && count($images) > 0) {

                            echo '<img src="' . $images['image'][0] . '">';
                        }else{
                            
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
            </div>	

            <div class="col s12 more-button-block">
                <button class="bt-normal waves-effect waves-light" id="button_team_property_load_more" data-page="1" data-agent="<?php echo $employee['emp_email_id']; ?>"><a href="#">VIEW MORE</a></button>
            </div>


        </div>

    </div>
</section>
