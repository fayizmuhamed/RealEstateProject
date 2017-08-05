
<style>

    .agent-box img{

        width: inherit;
        height: inherit;
    }
    .listing .flex-viewport {
        height: 100%;
    }

    .list-card{

        height:100%;
        float:left;
    }

</style>
<!-- Make Enquiry Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Make Enquiry</h4>
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

<!-- Quick Contact -->
<div id="quick_contact_model" class="modal">
    <div class="modal-content">
        <h4>Quick Contact</h4>
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

<!-- Quick Contact -->
<div class="quick-contact">
    <a class="modal-trigger" data-target="quick_contact_model" ><img src="<?php echo base_url(); ?>assets/images/contact.svg"></a>
</div>

<!-- Banner -->
<section class="banner">
    <div class="container">
        <!-- Navigation -->
        <header id="header">
            <div class="container">
                <?php $this->load->view('includes/public/header_menu'); ?>
            </div>
        </header>
        <div class="banner-text">
            <div class="logo"><img src="<?php echo base_url(); ?>assets/images/logo.svg"></div>
            <h1>Local Expertise, Quality and Trust... <br>We got what you need</h1>
            <br>
            <a href="#tst">
                <i class="zmdi zmdi-chevron-down btn-floating pulse"></i>
                <span id="tst"></span>
            </a>
        </div>
    </div>
    <div class="testimonials">
        <div class="container">
            <div class="slider-testimonials">
                <div class="flexslider">
                    <ul class="slides">
                        <?php
                        foreach ($testimonials as $testimonial) {

                            echo '<li>';
                            echo '<p class="content-testi">'.$testimonial['testimonial_message'].'</p>';
                            echo '<h2>'.$testimonial['testimonial_author_name'].'</h2>';
                            echo '<span>'.$testimonial['testimonial_property_location'].'</span>';
                            echo '</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- LATEST LOUNCH -->
<section class="section-gap" id="project-hero">

    <div class="heading_block">
        <h2>LATEST LAUNCH</h2>
        <span><i></i></span>
    </div>
    <!-- project -->
    <div class="flexslider">
        <ul class="slides">


            <?php
            foreach ($projects as $row) {

                echo '<li>';
                echo '<div class="project">';
                echo '<div class="top-over-lay">';
                echo '<div class="project-detail">';
                echo '<h1>' . $row['project_name'] . '</h1>';
                echo '<span><i class="zmdi zmdi-pin"></i>&nbsp;Location: ' . $row['project_location'] . '</span>';
                echo '<span><i class="zmdi zmdi-aspect-ratio-alt"></i>&nbsp;Developer: ' . $row['project_developer'] . '</span>';
                echo '<span><i class="zmdi zmdi-widgets"></i>&nbsp;Property Type: ' . $row['pt_name'] . '</span>';
                echo '<span><i class="icon-bed"></i>&nbsp;No of Bed Rooms: ' . $row['project_no_of_bedrooms'] . '</span>';
                echo '<span><i class="zmdi zmdi-money-box"></i>&nbsp;Starting Price: ' . number_format($row['project_start_price']) . '</span>';
                echo '<span><i class="zmdi zmdi-calendar-alt"></i>&nbsp;Completion Date: ' . date('d M Y', strtotime($row['project_end_date'])) . '</span>';
                echo '<br>';
                echo '<button class="waves-effect waves-light"><a href="' . base_url() . 'projects/' . $row['project_id'] . '">VIEW DETAILS</a></button>';
                echo '<button class="waves-effect waves-light modal-trigger" data-target="modal1"><a href="#">MAKE ENQUIRY</a></button>';
                echo '</div>';
                echo '</div>';
                echo '<img src="' . base_url() . 'uploads/project/cover/' . $row['project_cover_image'] . '">';
                echo '</div>';
                echo '</li>';
            }
            ?>
        </ul>
    </div>


    <div class="col s12 more-button-block">
        <button class="bt-normal waves-effect waves-light"><a href="<?php echo base_url() . 'projects' ?>">VIEW ALL PROJECTS</a></button>
    </div>
</section>





<!-- FEATURED PROPERTIES FOR SALE -->
<section class="listing section-gap featured">
    <div class="container">
        <div class="heading_block-white">
            <h2>FEATURED PROPERTIES FOR SALE</h2>
            <span><i></i></span>
        </div>
        <div class="flexslider">
            <ul class="slides">
                <?php
                $sale_properties_set = array_chunk($featured_sales, 4);
                foreach ($sale_properties_set as $properties) {
                    echo '<li>';
                    echo '<div class="row">';

                    foreach ($properties as $property) {
                        echo '<div class="col s12 l3 m6">';
                        echo '<div class="list-card">';
                        echo '<div class="over-card">';
                        echo '<ul>';
                        echo '<li><i class="zmdi zmdi-view-dashboard"></i>&nbsp;' . $property['property_unit_type'] . '</li>';
                        echo '<li><i class="icon-1"></i>&nbsp;' . $property['property_builtup_area'] . ' ' . $property['property_unit_measure'] . '</li>';
                        echo '<li><i class="icon-bath"></i>&nbsp;' . $property['property_rooms'] . ' Bed</li>';
                        echo '<li><i class="icon-bath"></i>&nbsp;' . $property['property_bathrooms'] . ' Baths</li>';
                        echo '<li><i class="zmdi zmdi-group"></i>&nbsp;' . ' Maid</li>';
                        echo '<li><i class="zmdi zmdi-file-text"></i>&nbsp;' . ' Study</li>';
                        echo '</ul>';
                        echo '<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>';
                        echo '<button class="view-b"><a href="#">View Detail</a></button>';
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
                    echo '</div>';
                    echo '</li>';
                }
                ?>
            </ul>
        </div>
        <div class="col s12 more-button-block">
            <button class="bt-normal-red"><a href="<?php echo base_url(); ?>buy">VIEW ALL PROPERTIES</a></button>
        </div>

    </div>
</section>

<!-- FEATURED PROPERTIES FOR RENT -->
<section class="listing section-gap rent-list">
    <div class="container">
        <div class="heading_block">
            <h2>FEATURED PROPERTIES FOR RENT</h2>
            <span><i></i></span>
        </div>
        <div class="flexslider" >
            <ul class="slides">
                <?php
                $rent_properties_set = array_chunk($featured_rents, 4);
                foreach ($rent_properties_set as $properties) {
                    echo '<li>';
                    echo '<div class="row">';

                    foreach ($properties as $property) {
                        echo '<div class="col s12 l3 m6">';
                        echo '<div class="list-card" >';
                        echo '<div class="over-card">';
                        echo '<ul>';
                        echo '<li><i class="zmdi zmdi-view-dashboard"></i>&nbsp;' . $property['property_unit_type'] . '</li>';
                        echo '<li><i class="icon-1"></i>&nbsp;' . $property['property_builtup_area'] . ' ' . $property['property_unit_measure'] . '</li>';
                        echo '<li><i class="icon-bath"></i>&nbsp;' . $property['property_rooms'] . ' Bed</li>';
                        echo '<li><i class="icon-bath"></i>&nbsp;' . $property['property_bathrooms'] . ' Baths</li>';
                        echo '<li><i class="zmdi zmdi-group"></i>&nbsp;' . ' Maid</li>';
                        echo '<li><i class="zmdi zmdi-file-text"></i>&nbsp;' . ' Study</li>';
                        echo '</ul>';
                        echo '<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>';
                        echo '<button class="view-b"><a href="#">View Detail</a></button>';
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
                    echo '</div>';
                    echo '</li>';
                }
                ?>
            </ul>
        </div>
        <div class="col s12 more-button-block">
            <button class="bt-normal waves-effect waves-light"><a href="<?php echo base_url(); ?>rent">VIEW ALL PROPERTIES</a></button>
        </div>

    </div>
</section>

<!-- DUBAI COMMUNITY -->
<section class="section-gap community" id="community-sec">
    <div class="container">
        <div class="heading_block-white">
            <h2>DUBAI COMMUNITIES</h2>
            <span><i></i></span>
        </div>

        <div class="row" >
            <div class="row" id="community_container">
                <?php
                foreach ($communities as $community) {

                    echo '<div class="col s12 l3 m6">';
                    echo '<a href="' . base_url() . 'communities/' . $community['community_id'] . '">';
                    echo '<div class="community-card">';
                    echo '<div class="overlay-bx">';
                    echo '<h3>' . $community['community_name'] . '</h3>';
                    echo '</div>';
                    echo '<img src="' . base_url() . 'uploads/community/cover/' . $community['community_cover_image'] . '">';
                    echo '</div>';
                    echo '</a>';
                    echo '</div>';
                }
                ?>
            </div>

            <!-- More -->
            <div class="col s12 more-button-block">
                <button id="button_community_load_more" class="bt-normal-red auto waves-effect waves-light" type="button" data-val="2">MORE DUBAI COMMUNITIES</button>
            </div>

        </div>

    </div>
</section>

<!-- WHO WE ARE -->
<section class="section-gap who-we-are" id="who">
    <div class="container">
        <div class="heading_block">
            <h2>WHO WE ARE</h2>
            <span><i></i></span>
        </div>

        <div class="row">
            <div class="col s12">
                <p class="para">
                    <?php
                    echo isset($about_us_who_we_are) ? $about_us_who_we_are : '';
// array_key_exists("about_us_who_we_are", var_dump($configurations)) ? var_dump($configurations)['about_us_who_we_are'] : ""; 
                    ?></p>
                <ul class="tabs">
                    <li class="tab col s4"><a class="active" href="#vision">VISION</a></li>
                    <li class="tab col s4"><a href="#mission">MISSION</a></li>
                    <li class="tab col s4"><a href="#value">VALUE</a></li>
                </ul>
            </div>
            <div id="vision" class="col s12">
                <h1>Vision</h1>
                <p><?php
                    echo isset($about_us_vision) ? $about_us_vision : '';
//echo  array_key_exists("about_us_vision", $this->$configurations) ? $this->$configurations['about_us_vision'] : ""; 
                    ?></p>
            </div>

            <!-- Mission -->
            <div id="mission" class="col s12">
                <h1>Mission</h1>
                <p><?php
                    echo isset($about_us_mission) ? $about_us_mission : '';
//echo $about_us_mission;array_key_exists("about_us_mission", $configurations) ? $configurations['about_us_mission'] : ""; 
                    ?></p>
            </div>

            <!-- Value -->
            <div id="value" class="col s12">
                <h1>Value</h1>
                <p><?php
                    echo isset($about_us_value) ? $about_us_value : '';
//echo array_key_exists("about_us_value", $configurations) ? $configurations['about_us_value'] : ""; 
                    ?></p>
            </div>

        </div>
    </div>
</section>

<!-- WHO WE ARE -->
<section class="section-gap what-we-do">
    <div class="container">
        <div class="heading_block">
            <h2>WHAT WE DO</h2>
            <span><i></i></span>
        </div>
        <div class="row svs">
            <div class="col s12 l12 m12">
                <div class="col s12 l4 m4">
                    <div class="icon-box">
                        <i class="zmdi zmdi-city-alt"></i>
                    </div>
                    <h3>Renting</h3>
                </div>
                <div class="col s12 l4 m4">
                    <div class="icon-box">
                        <i class="zmdi zmdi-money-box"></i>
                    </div>
                    <h3>Investment Advice</h3>
                </div>
                <div class="col s12 l4 m4">
                    <div class="icon-box">
                        <i class="zmdi zmdi-view-dashboard"></i>
                    </div>
                    <h3>Portfolio Management</h3>
                </div>
                <div class="col s12 l4 m4">
                    <div class="icon-box">
                        <i class="zmdi zmdi-view-quilt"></i>
                    </div>
                    <h3>Project Management</h3>
                </div>
                <div class="col s12 l4 m4">
                    <div class="icon-box">
                        <i class="zmdi zmdi-city"></i>
                    </div>
                    <h3>Property Management</h3>
                </div>
                <div class="col s12 l4 m4">
                    <div class="icon-box">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                    <h3>Buying/Selling</h3>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- WE CAN ALSO HELP YOU WITH -->
<section class="section-gap">
    <div class="container">
        <div class="heading_block">
            <h2>WE CAN ALSO HELP YOU WITH</h2>
            <span><i></i></span>
        </div>
        <div class="row svs">
            <div class="col s12 l4 m4">
                <div class="icon-box">
                    <i class="zmdi zmdi-labels"></i>
                </div>
                <h3>Sales Progression</h3>
            </div>
            <div class="col s12 l4 m4">
                <div class="icon-box">
                    <i class="zmdi zmdi-shape"></i>
                </div>
                <h3>Property Maintenance </h3>
            </div>
            <div class="col s12 l4 m4">
                <div class="icon-box">
                    <i class="zmdi zmdi-store"></i>
                </div>
                <h3>Interior Design</h3>
            </div>
            <div class="col s12 l4 m4">
                <div class="icon-box">
                    <i class="zmdi zmdi-group"></i>
                </div>
                <h3>Company and Office Set Up</h3>
            </div>
            <div class="col s12 l4 m4">
                <div class="icon-box">
                    <i class="zmdi zmdi-shield-check"></i>
                </div>
                <h3>Legal Services</h3>
            </div>
            <div class="col s12 l4 m4">
                <div class="icon-box">
                    <i class="zmdi zmdi-account-box-o"></i>
                </div>
                <h3>Citizenship</h3>
            </div>

        </div>

    </div>
</section>

<!-- FEATURED AGENT -->
<section class="section-gap featured-agent">
    <div class="container">
        <div class="heading_block-white">
            <h2>FEATURED AGENT</h2>
            <span><i></i></span>
        </div>
        <div class="row">
            <?php
            foreach ($employees as $employee) {

                echo '<div class="col s12 l6 m6">';
                echo '<div class="agent-box">';
                echo '<div class="over-agent">';
                echo '<button><a href="' . base_url() . 'viewprofile/' . $employee['emp_id'] . '">View Profile</a></button>';
                echo '</div>';
                echo '<img src="' . base_url() . 'uploads/emp-profile/' . $employee['emp_profile_image'] . '" >';
                echo '</div>';
                echo '<div class="agent-detail-home">';
                echo '<h3>' . $employee['emp_name'] . '</h3>';
                echo '<span>' . $employee['des_name'] . '</span>';
                echo '<p>Area Specialized in : ' . $employee['emp_area_specialized'] . '</p>';
                echo '</div>';
                echo '</div>';
            }
            ?>

            <!-- More -->
            <div class="col s12 more-button-block">
                <button class="bt-normal waves-effect waves-light"><a href="<?php base_url(); ?>teams">MEET THE TEAM</a></button>
            </div>

        </div>
    </div>
</section>

<!-- CAREER -->        
<section class="section-gap career">
    <div class="container">
        <div class="heading_block">
            <h2>CAREER</h2>
            <span><i></i></span>
        </div>
        <div class="row">
            <div class="col s12 l12 m12">
                <p>If you are the best person you know to do your job, then you should be at bridges & allies Group!</p>
                <div class="career-box">
                    <div class="hal-f-box bg-left">
                        <div class="career-over-ly">
                            <h4>Our reputation has been built on our capability and professionalism, which is all driven by the quality of the people we hire!</h4>
                        </div>
                    </div>
                    <div class="hal-f-box career-content">
                        <h2>Our philosophy for making this happen.</h2>
                        <ul>
                            <li>Hire the best</li>
                            <li>Create an environment which values integrity, trust, and quality of life</li>
                            <li>Provide employees with autonomy, responsibility, and the best resources available</li>
                            <li>Create value in the marketplace for our stakeholders</li>
                            <li>Recognize and reward employees for their achievements</li>
                        </ul>
                        <p>If you have more to offer, so do we. So, join a winning team and share the success!</p>
                    </div>
                </div>
            </div>
            <!-- More -->
            <div class="col s12 more-button-block">
                <button class="bt-normal auto waves-effect waves-light"><a href="#">MORE OPERTUNITIES</a></button>
            </div>
        </div>
    </div>
</section>   

<!-- LOGOS -->
<section class="logos">
    <div class="conatiner">
        <div class="row">
            <div class="col s12">
                <ul>
                    <li><img src="<?php echo base_url(); ?>assets/images/emp1.png"></li>
                    <li><img src="<?php echo base_url(); ?>assets/images/emp2.png"></li>
                    <li><img src="<?php echo base_url(); ?>assets/images/emp3.png"></li>
                </ul>
            </div>
        </div>
    </div>
</section>


