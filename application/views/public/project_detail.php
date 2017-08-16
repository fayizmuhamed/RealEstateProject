

<!-- FEATURED PROPERTIES FOR SALE -->
<section class="section-gap-inner">
    <div class="container">
        <div class="row bredcrums">
            <div class="col s10 m10 l10">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">HOME</a></li>
                    <li><i class="zmdi zmdi-chevron-right"></i></li>
                    <li><a href="<?php echo base_url(); ?>projects" class="active-bred">PROJECT</a></li>
                </ul>
            </div>
            <div class="col s2 m2 l2">
                <a href="<?php echo base_url(); ?>projects" class="back-link"><i class="zmdi zmdi-chevron-left"></i>&nbsp;Back</a>
            </div>
        </div>
    </div>
</section>

<section class="inner-full-banner ">

    <div class="over-innr-pg">
        <div class="project-inner">
            <div class="top-over-lay">
                <div class="project-detail">
                    <h1><?php echo $project[0]['project_name']; ?></h1>
                    <span><i class="zmdi zmdi-pin"></i>&nbsp;Location: <?php echo $project[0]['project_location']; ?></span>
                    <span><i class="zmdi zmdi-aspect-ratio-alt"></i>&nbsp;Developer: <?php echo $project[0]['project_developer']; ?></span>
                    <span><i class="zmdi zmdi-widgets"></i>&nbsp;Property Type: <?php echo $project[0]['project_property_type']; ?></span>
                    <span><i class="icon-bed"></i>&nbsp;No of Bed Rooms: <?php echo $project[0]['project_no_of_bedrooms']; ?></span>
                    <span><i class="zmdi zmdi-money-box"></i>&nbsp;Starting Price: <?php echo number_format($project[0]['project_start_price']); ?></span>
                    <span><i class="zmdi zmdi-calendar-alt"></i>&nbsp;Completion Date: <?php echo date('d M Y', strtotime($project[0]['project_end_date'])); ?></span>
                    <br>
                    <!--				<button class="waves-effect waves-light"><a href="#">VIEW DETAILS</a></button>-->
                    <!--				<button class="navy-bt modal-trigger waves-effect waves-light" data-target="modal2"><a href="#">Make Enquiry</a></button>-->
                </div>
            </div>
        </div>

        <div class="postion-form project-enquiry">
            <h2>Quick Enquiry</h2>
            <?php $attributes = array('id' => 'frm_project_detail_send_enquiry'); ?>
            <?php echo form_open('', $attributes); ?>
            <input type="hidden"  name="type" id="type" value="project">
            <input type="hidden"  name="ref_number" id="ref_number" value="<?php echo $project[0]['project_reference']; ?>">
            <input type="hidden"  name="ref_name" id="ref_name" value="<?php echo $project[0]['project_name']; ?>">
            <div class="bloc-f"><input type="text" placeholder="Name"  name="author_name"></div>
            <div class="bloc-f"><input type="text" placeholder="Mobile Number"  name="author_contact"></div>
            <div class="bloc-f"><input type="text" placeholder="Email"  name="author_email"></div>
            <div class="bloc-f"><textarea placeholder="Message"  name="author_message"></textarea></div>
            <div class="bloc-f"><button type="submit">SUBMIT</button></div>
            <?php echo form_close(); ?>
        </div>
    </div>
    <img src="<?php echo base_url() . 'uploads/project/cover/' . $project[0]['project_cover_image']; ?>">
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col s12 l12 m12 thum-slid">
                <ul>
                    <?php
                    foreach ($project_thumbnails as $row) {

                        echo '<li><a href="#"><img src="' . base_url() . 'uploads/project/thumbnail/' . $row['image'] . '"></a></li>';
                    }
                    ?>
                </ul>
            </div>

            <div class="col s12 l12 m12">
                <div class="box-white">
                    <p><?php echo $project[0]['project_description']; ?>
                    </p>
                </div>
            </div>

            <div class="col s12 l12 m12">
                <div class="box-white">
                    <h2>Payment Plan</h2>
                    <div class="plans">
                        <?php
                        $project_payment_plans = json_decode($project[0]['project_payment_plans'], TRUE);

                        if ($project_payment_plans == NULL) {
                            
                        } else {
                            $i = 0;
                            foreach ($project_payment_plans as $row_payment_plan) {
                                $i++;
                                echo '<div class="instalment-card">';
                                echo '<div class="top">';
                                echo '<h1>' . $i . date('S', mktime(1, 1, 1, 1, ( (($i >= 10) + ($i >= 20) + ($i == 0)) * 10 + $i % 10))) . '</h1>';
                                echo '<span>Installment</span>';
                                echo ' </div>';
                                echo '<div class="percentage">' . $row_payment_plan['amount'] . '</div>';
                                echo '<i>' . date('d M Y', strtotime($row_payment_plan['date'])) . '</i>';
                                echo '</div>';
                            }
                        }
                        ?>

                        <p class="plan-footer">
                            Estimated Construction Completion date <br>Project No. <?php echo $project[0]['project_reference']; ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col s12 l12 m12">
                <div class="box-white distance">
                    <h2>Distance From</h2>
                    <br>
                    <div class="row">
                        <?php
                        $project_navigations = json_decode($project[0]['project_navigations'], TRUE);
                        if (isset($project_navigations) && !empty($project_navigations)) {

                            $navigations = navigation_list();

                            foreach ($project_navigations as $key => $value) {
                                echo '<div class="col s4 l3 m4">';
                                echo '<span>' . navigation_icon($key) . '&nbsp;' . $value . ' Km to ' . navigation_display_name($key) . '</span>';
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col s12 l6 m6">
                <button class="half-button"><a href="<?php echo empty($project[0]['project_brochure']) ? "#" : base_url() . 'uploads/project/brochure/' . $project[0]['project_brochure']; ?>" download><i class="zmdi zmdi-file"></i>&nbsp;Full Project Brochure</a></button>
            </div>
            <div class="col s12 l6 m6">
                <button class="half-button-navy"><a href="<?php echo empty($project[0]['project_floor_plan']) ? "#" : base_url() . 'uploads/project/floor_plan/' . $project[0]['project_floor_plan']; ?>" download><i class="zmdi zmdi-file"></i>&nbsp;Floor Plan</a></button>
            </div>

            
            <div class="col s12 l12 m12">
             
                <button class="full-button modal-trigger waves-effect waves-light" data-target="make_enquiry_model" ><a href="#" onclick="makeEnquiry('project', '<?php echo $project[0]['project_name']; ?>','<?php echo $project[0]['project_reference']; ?>');return false;">Make Enquiry</a></button>
            </div>

            <div class="col s12 l12 m12">
                <div class="row line-h2">
                    <div class="col s12 l12 m12">
                        <h2>Location Map</h2>
                        <div class="map">
                            <?php echo (isset($project[0]['project_location_url']) ? $project[0]['project_location_url'] : ''); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 l12 m12">
                <div class="row agent-det">
                    <h2>Agent</h2>


                    <div class="col s12 l12 m12">
                        <div class="row agent-det">
                            <div class="col s12 m4 l3">
                                <div class="agent-card">
                                    <div class="agent-image">
                                        <div class="view"><button><a href="#">View Profile</a></button></div>
                                        <img src="<?php echo base_url(); ?>assets/images/7.jpg">
                                    </div>
                                    <div class="agent-name">
                                        <h3>Thomas Miller</h3>
                                        <span>Business Development Manger</span>
                                    </div>
                                    <div class="spcial">
                                        <span><strong>Area Specializes in</strong>(Not Mandatory)</span>
                                        <span><strong>From</strong>United Arab Emirates</span>
                                        <span><strong>Speaks</strong>English, Hindi, Arabic</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4 l3">
                                <div class="agent-card">
                                    <div class="agent-image">
                                        <div class="view"><button><a href="#">View Profile</a></button></div>
                                        <img src="<?php echo base_url(); ?>assets/images/7.jpg">
                                    </div>
                                    <div class="agent-name">
                                        <h3>Thomas Miller</h3>
                                        <span>Business Development Manger</span>
                                    </div>
                                    <div class="spcial">
                                        <span><strong>Area Specializes in</strong>(Not Mandatory)</span>
                                        <span><strong>From</strong>United Arab Emirates</span>
                                        <span><strong>Speaks</strong>English, Hindi, Arabic</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4 l3">
                                <div class="agent-card">
                                    <div class="agent-image">
                                        <div class="view"><button><a href="#">View Profile</a></button></div>
                                        <img src="<?php echo base_url(); ?>assets/images/7.jpg">
                                    </div>
                                    <div class="agent-name">
                                        <h3>Thomas Miller</h3>
                                        <span>Business Development Manger</span>
                                    </div>
                                    <div class="spcial">
                                        <span><strong>Area Specializes in</strong>(Not Mandatory)</span>
                                        <span><strong>From</strong>United Arab Emirates</span>
                                        <span><strong>Speaks</strong>English, Hindi, Arabic</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4 l3">
                                <div class="agent-card">
                                    <div class="agent-image">
                                        <div class="view"><button><a href="#">View Profile</a></button></div>
                                        <img src="<?php echo base_url(); ?>assets/images/7.jpg">
                                    </div>
                                    <div class="agent-name">
                                        <h3>Thomas Miller</h3>
                                        <span>Business Development Manger</span>
                                    </div>
                                    <div class="spcial">
                                        <span><strong>Area Specializes in</strong>(Not Mandatory)</span>
                                        <span><strong>From</strong>United Arab Emirates</span>
                                        <span><strong>Speaks</strong>English, Hindi, Arabic</span>
                                    </div>
                                </div>
                            </div>


                            <!-- more -->
                            <div class="col s12 more-center">
                                <button class="bt-normal"><a href="#">VIEW MORE</a></button>
                            </div>

                        </div>
                    </div>








                </div>
            </div>


        </div>
    </div>
</section>

<script type="text/javascript">
    $('.tap-target').tapTarget('open');
    $('.tap-target').tapTarget('close');
</script>

<!--<script type="text/javascript">
    $(function () {
        var slider = document.getElementById('test5');
        noUiSlider.create(slider, {
            start: [20, 80],
            connect: true,
            step: 1,
            range: {
                'min': 0,
                'max': 100
            },
            format: wNumb({
                decimals: 0
            })
        });
    })
</script>-->