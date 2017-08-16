

<!-- Make Enquiry Modal Structure -->
<div id="team_send_message" class="modal">
    <div class="modal-content">
        <h4>Sent Message</h4>
        <div class="b-m">
            <form>
                <div class="col l12 m12 s12"><input type="text" placeholder="Name" name=""></div>
                <div class="col l12 m12 s12"><input type="text" placeholder="Mobile Number" name=""></div>
                <div class="col l12 m12 s12"><input type="text" placeholder="E-mail" name=""></div>
                <div class="col l12 m12 s12"><textarea placeholder="Message"></textarea></div>
                <div class="col l12 m12 s12">
                    <button class="waves-effect waves-light"><a href="#">Send</a></button>
                    <button class="cancel modal-close waves-effect waves-light"><a href="#">Cancel</a></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Make Enquiry Modal Structure -->
<div id="team_request_call_back" class="modal">
    <div class="modal-content">
        <h4>Preferred Call Back Time</h4>
        <div class="b-m">
            <form>
                <div class="col l12 m12 s12"><input type="text" placeholder="Name" name=""></div>
                <div class="col l12 m12 s12"><input type="text" placeholder="Mobile Number" name=""></div>
                <div class="col l12 m12 s12"><input type="text" placeholder="E-mail" name=""></div>
                <div class="col l12 m12 s12"><input type="text" placeholder="Callback Time" name=""></div>
                <div class="col l12 m12 s12"><textarea placeholder="Message"></textarea></div>
                <div class="col l12 m12 s12">
                    <button class="waves-effect waves-light"><a href="#">Send</a></button>
                    <button class="cancel modal-close waves-effect waves-light"><a href="#">Cancel</a></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- FEATURED PROPERTIES FOR SALE -->
<section class="section-gap-inner">
    <div class="container">
        <div class="row bredcrums">
            <div class="col s10 m10 l10">
                <ul>
                    <li><a href="#">ABOUT</a></li>
                    <li><i class="zmdi zmdi-chevron-right"></i></li>
                    <li><a href="#" class="active-bred">AGENT TESTIMONIAL</a></li>
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
                        <div class="over-lay-view">
                            <button><a href="<?php echo base_url() . 'viewprofile/' . $employee['emp_id']; ?>">View Profile</a></button>
                        </div>
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
                                    <li class="modal-trigger waves-effect waves-light" data-target="team_send_message" ><a href="#">Send Message</a></li>
                                    <li class="modal-trigger waves-effect waves-light" data-target="team_request_call_back"><a href="#"  >Request call back</a></li>
                                    <li><a href="<?php echo base_url() . 'viewprofile/' . $employee['emp_id']; ?>#property_list">View listing,</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <section id="testimonial_list">
                <?php
                foreach ($testimonials as $testimonial) {

                    echo '<div class="col s12 m12 l12">';
                    echo '<div class="test-reviw">';
                    echo '<p>' . $testimonial['testimonial_message'] . '</p>';
                    echo '<span>' . $testimonial['testimonial_author_name'] . '</span>';
                    echo '</div>';
                    echo '<div class="property-card">';
                    echo $testimonial['testimonial_property_status'] === '1' ? '<dir class="label"></dir>' : '';
                    echo '<div class="main-bx-p">';
                    echo '<div class="p-detail">';
                    echo '<h2>' . $testimonial['testimonial_property_number'] . '&nbsp;' . $testimonial['testimonial_property_name'] . '</h2>';
                    echo '<span><i class="zmdi zmdi-pin"></i>&nbsp;' . $testimonial['testimonial_property_location'] . '</span>';
                    echo '</div>';
                    echo '<img src="' . base_url() . 'uploads/testimonial/' . $testimonial['testimonial_image'] . '">';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>

            </section>
            <!-- more -->
            <div class="col s12 more-center">
                <button id="button_team_testimonial_load_more" class="bt-normal" data-page="2" data-agent="<?php echo $employee['emp_id']; ?>"><a href="#">VIEW MORE</a></button>
            </div>
        </div>

    </div>
</section>
