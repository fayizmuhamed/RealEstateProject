

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
<div id="modal2" class="modal">
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
    <a class="modal-trigger" data-target="modal2"><img src="<?php echo base_url(); ?>assets/images/contact.svg"></a>
</div>

<!-- Banner -->
<section class="banner">
    <div class="container">
        <!-- Navigation -->
        <header id="header">
            <div class="container">
                <div class="row menu-bar">
                    <div class="col s12">
                        <div class="logo-header"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/header-logo.svg"></a></div>
                        <div class="menu-header">
                            <ul id="dropdown1" class="dropdown-content">
                                <li><a href="#who">WHO WE ARE</a></li>
                                <li><a href="testimonial.html">TESTIMONIAL</a></li>
                                <li><a href="team.html">TEAMS</a></li>
                                <li><a href="contact.html">CONTACT</a></li>
                            </ul>
                            <ul class="main-menu">
                                <li><a href="#!" class="dropdown-button" data-activates="dropdown1">ABOUT</a></li>
                                <li><a href="buy.html">BUY</a></li>
                                <li><a href="#">RENT</a></li>
                                <li><a href="<?php echo base_url(); ?>projects">PROJECT</a></li>
                                <li><a href="property-owner.html">PROPERTY OWNER</a></li>
                                <li><a href="#">INFO GUIDE</a></li>
                                <li><a href="#">CAREER</a></li>
                            </ul>
                            <!-- Mobile Menu -->
                            <a href="#" data-activates="slide-out" class="button-collapse right mob-menu">
                                <span class="zmdi zmdi-menu"></span>
                            </a>
                        </div>
                        <div class="search">
                            <div class="filter-search">
                                <ul>
                                    <li><a href="#" class="active">BUY</a></li>
                                    <li><a href="#">RENT</a></li>
                                </ul>
                            </div>
                            <div class="search-form">
                                <form>
                                    <div class="searchfeild">
                                        <div class="search-text"><input type="text" name="" placeholder=" Location or Building e.g. Downtown Dubai or Cayan Tower"></div>
                                        <div class="search-select">
                                            <select class="browser-default">
                                                <option value="" disabled selected>Bedrooms</option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                            </select>
                                        </div>
                                        <div class="search-select">
                                            <select class="browser-default">
                                                <option value="" disabled selected>Budget</option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                                <option value="3">Option 3</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="searchaction">
                                        <button class="waves-effect waves-light">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <li>
                            <p class="content-testi">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <h2>Thomas Miller</h2>
                            <span>Doun Town Village Dubai</span>
                        </li>
                        <li>
                            <p class="content-testi">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <h2>Thomas Miller</h2>
                            <span>Doun Town Village Dubai</span>
                        </li>
                        <li>
                            <p class="content-testi">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <h2>Thomas Miller</h2>
                            <span>Doun Town Village Dubai</span>
                        </li>
                        <li>
                            <p class="content-testi">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <h2>Thomas Miller</h2>
                            <span>Doun Town Village Dubai</span>
                        </li>
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
                echo '<span><i class="zmdi zmdi-money-box"></i>&nbsp;Starting Price: ' . $row['project_start_price'] . '</span>';
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
                <li>
                    <div class="row">

                        <div class="col s12 l3 m6">
                            <div class="list-card">

                                <div class="over-card">
                                    <ul>
                                        <li><i class="zmdi zmdi-view-dashboard"></i>s&nbsp;Villas</li>
                                        <li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
                                        <li><i class="icon-bed"></i>&nbsp;4 Bed</li>
                                        <li><i class="icon-bath"></i>&nbsp;3 Baths</li>
                                        <li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
                                        <li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
                                    </ul>
                                    <button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
                                    <button class="view-b"><a href="#">View Detail</a></button>
                                </div>

                                <div class="property-thumb">
                                    <img src="<?php echo base_url(); ?>assets/images/l1.png">
                                </div>
                                <div class="property-list-details">
                                    <h3>4552 LYNN AVENUE</h3>
                                    <span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
                                    <div class="button-block">
                                        <button class="price">$1,500</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 l3 m6">
                            <div class="list-card">

                                <div class="over-card">
                                    <ul>
                                        <li><i class="zmdi zmdi-view-dashboard"></i>s&nbsp;Villas</li>
                                        <li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
                                        <li><i class="icon-bed"></i>&nbsp;4 Bed</li>
                                        <li><i class="icon-bath"></i>&nbsp;3 Baths</li>
                                        <li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
                                        <li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
                                    </ul>
                                    <button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1">Make Enquiry</button>
                                    <button class="view-b"><a href="#">View Detail</a></button>
                                </div>

                                <div class="property-thumb">
                                    <img src="<?php echo base_url(); ?>assets/images/l2.png">
                                </div>
                                <div class="property-list-details">
                                    <h3>4552 LYNN AVENUE</h3>
                                    <span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
                                    <div class="button-block">
                                        <button class="price">$1,500</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 l3 m6">
                            <div class="list-card">

                                <div class="over-card">
                                    <ul>
                                        <li><i class="zmdi zmdi-view-dashboard"></i>s&nbsp;Villas</li>
                                        <li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
                                        <li><i class="icon-bed"></i>&nbsp;4 Bed</li>
                                        <li><i class="icon-bath"></i>&nbsp;3 Baths</li>
                                        <li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
                                        <li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
                                    </ul>
                                    <button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
                                    <button class="view-b"><a href="#">View Detail</a></button>
                                </div>

                                <div class="property-thumb">
                                    <img src="<?php echo base_url(); ?>assets/images/l3.png">
                                </div>
                                <div class="property-list-details">
                                    <h3>4552 LYNN AVENUE</h3>
                                    <span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
                                    <div class="button-block">
                                        <button class="price">$1,500</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 l3 m6">
                            <div class="list-card">

                                <div class="over-card">
                                    <ul>
                                        <li><i class="zmdi zmdi-view-dashboard"></i>&nbsp;Villas</li>
                                        <li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
                                        <li><i class="icon-bed"></i>&nbsp;4 Bed</li>
                                        <li><i class="icon-bath"></i>&nbsp;3 Baths</li>
                                        <li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
                                        <li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
                                    </ul>
                                    <button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
                                    <button class="view-b"><a href="#">View Detail</a></button>
                                </div>

                                <div class="property-thumb">
                                    <img src="<?php echo base_url(); ?>assets/images/l4.png">
                                </div>
                                <div class="property-list-details">
                                    <h3>4552 LYNN AVENUE</h3>
                                    <span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
                                    <div class="button-block">
                                        <button class="price">$1,500</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">

                        <div class="col s12 l3 m6">
                            <div class="list-card">

                                <div class="over-card">
                                    <ul>
                                        <li><i class="zmdi zmdi-view-dashboard"></i>&nbsp;Villas</li>
                                        <li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
                                        <li><i class="icon-bed"></i>&nbsp;4 Bed</li>
                                        <li><i class="icon-bath"></i>&nbsp;3 Baths</li>
                                        <li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
                                        <li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
                                    </ul>
                                    <button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
                                    <button class="view-b"><a href="#">View Detail</a></button>
                                </div>

                                <div class="property-thumb">
                                    <img src="<?php echo base_url(); ?>assets/images/l5.png">
                                </div>
                                <div class="property-list-details">
                                    <h3>4552 LYNN AVENUE</h3>
                                    <span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
                                    <div class="button-block">
                                        <button class="price">$1,500</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 l3 m6">
                            <div class="list-card">

                                <div class="over-card">
                                    <ul>
                                        <li><i class="zmdi zmdi-view-dashboard"></i>&nbsp;Villas</li>
                                        <li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
                                        <li><i class="icon-bed"></i>&nbsp;4 Bed</li>
                                        <li><i class="icon-bath"></i>&nbsp;3 Baths</li>
                                        <li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
                                        <li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
                                    </ul>
                                    <button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
                                    <button class="view-b"><a href="#">View Detail</a></button>
                                </div>

                                <div class="property-thumb">
                                    <img src="<?php echo base_url(); ?>assets/images/l6.png">
                                </div>
                                <div class="property-list-details">
                                    <h3>4552 LYNN AVENUE</h3>
                                    <span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
                                    <div class="button-block">
                                        <button class="price">$1,500</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 l3 m6">
                            <div class="list-card">

                                <div class="over-card">
                                    <ul>
                                        <li><i class="zmdi zmdi-view-dashboard"></i>&nbsp;Villas</li>
                                        <li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
                                        <li><i class="icon-bed"></i>&nbsp;4 Bed</li>
                                        <li><i class="icon-bath"></i>&nbsp;3 Baths</li>
                                        <li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
                                        <li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
                                    </ul>
                                    <button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
                                    <button class="view-b"><a href="#">View Detail</a></button>
                                </div>

                                <div class="property-thumb">
                                    <img src="<?php echo base_url(); ?>assets/images/l7.png">
                                </div>
                                <div class="property-list-details">
                                    <h3>4552 LYNN AVENUE</h3>
                                    <span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
                                    <div class="button-block">
                                        <button class="price">$1,500</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 l3 m6">
                            <div class="list-card">

                                <div class="over-card">
                                    <ul>
                                        <li><i class="zmdi zmdi-view-dashboard"></i>&nbsp;Villas</li>
                                        <li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
                                        <li><i class="icon-bed"></i>&nbsp;4 Bed</li>
                                        <li><i class="icon-bath"></i>&nbsp;3 Baths</li>
                                        <li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
                                        <li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
                                    </ul>
                                    <button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
                                    <button class="view-b"><a href="#">View Detail</a></button>
                                </div>

                                <div class="property-thumb">
                                    <img src="<?php echo base_url(); ?>assets/images/l8.png">
                                </div>
                                <div class="property-list-details">
                                    <h3>4552 LYNN AVENUE</h3>
                                    <span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
                                    <div class="button-block">
                                        <button class="price">$1,500</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <div class="col s12 more-button-block">
            <button class="bt-normal-red"><a href="#">VIEW ALL PROPERTIES</a></button>
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
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <div class="row">

                        <div class="col s12 l3 m6">
                            <div class="list-card">

                                <div class="over-card">
                                    <ul>
                                        <li><i class="icon-bed"></i>&nbsp;Villas</li>
                                        <li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
                                        <li><i class="icon-bed"></i>&nbsp;4 Bed</li>
                                        <li><i class="icon-bath"></i>&nbsp;3 Baths</li>
                                        <li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
                                        <li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
                                    </ul>
                                    <button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
                                    <button class="view-b"><a href="#">View Detail</a></button>
                                </div>

                                <div class="property-thumb">
                                    <img src="<?php echo base_url(); ?>assets/images/l1.png">
                                </div>
                                <div class="property-list-details">
                                    <h3>4552 LYNN AVENUE</h3>
                                    <span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
                                    <div class="button-block">
                                        <button class="price">$1,500</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 l3 m6">
                            <div class="list-card">

                                <div class="over-card">
                                    <ul>
                                        <li><i class="icon-bed"></i>&nbsp;Villas</li>
                                        <li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
                                        <li><i class="icon-bed"></i>&nbsp;4 Bed</li>
                                        <li><i class="icon-bath"></i>&nbsp;3 Baths</li>
                                        <li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
                                        <li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
                                    </ul>
                                    <button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
                                    <button class="view-b"><a href="#">View Detail</a></button>
                                </div>

                                <div class="property-thumb">
                                    <img src="<?php echo base_url(); ?>assets/images/l2.png">
                                </div>
                                <div class="property-list-details">
                                    <h3>4552 LYNN AVENUE</h3>
                                    <span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
                                    <div class="button-block">
                                        <button class="price">$1,500</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 l3 m6">
                            <div class="list-card">

                                <div class="over-card">
                                    <ul>
                                        <li><i class="icon-bed"></i>&nbsp;Villas</li>
                                        <li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
                                        <li><i class="icon-bed"></i>&nbsp;4 Bed</li>
                                        <li><i class="icon-bath"></i>&nbsp;3 Baths</li>
                                        <li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
                                        <li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
                                    </ul>
                                    <button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
                                    <button class="view-b"><a href="#">View Detail</a></button>
                                </div>

                                <div class="property-thumb">
                                    <img src="<?php echo base_url(); ?>assets/images/l3.png">
                                </div>
                                <div class="property-list-details">
                                    <h3>4552 LYNN AVENUE</h3>
                                    <span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
                                    <div class="button-block">
                                        <button class="price">$1,500</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 l3 m6">
                            <div class="list-card">

                                <div class="over-card">
                                    <ul>
                                        <li><i class="icon-bed"></i>&nbsp;Villas</li>
                                        <li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
                                        <li><i class="icon-bed"></i>&nbsp;4 Bed</li>
                                        <li><i class="icon-bath"></i>&nbsp;3 Baths</li>
                                        <li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
                                        <li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
                                    </ul>
                                    <button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
                                    <button class="view-b"><a href="#">View Detail</a></button>
                                </div>

                                <div class="property-thumb">
                                    <img src="<?php echo base_url(); ?>assets/images/l4.png">
                                </div>
                                <div class="property-list-details">
                                    <h3>4552 LYNN AVENUE</h3>
                                    <span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
                                    <div class="button-block">
                                        <button class="price">$1,500</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">

                        <div class="col s12 l3 m6">
                            <div class="list-card">

                                <div class="over-card">
                                    <ul>
                                        <li><i class="icon-bed"></i>&nbsp;Villas</li>
                                        <li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
                                        <li><i class="icon-bed"></i>&nbsp;4 Bed</li>
                                        <li><i class="icon-bath"></i>&nbsp;3 Baths</li>
                                        <li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
                                        <li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
                                    </ul>
                                    <button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
                                    <button class="view-b"><a href="#">View Detail</a></button>
                                </div>

                                <div class="property-thumb">
                                    <img src="<?php echo base_url(); ?>assets/images/l5.png">
                                </div>
                                <div class="property-list-details">
                                    <h3>4552 LYNN AVENUE</h3>
                                    <span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
                                    <div class="button-block">
                                        <button class="price">$1,500</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 l3 m6">
                            <div class="list-card">

                                <div class="over-card">
                                    <ul>
                                        <li><i class="icon-bed"></i>&nbsp;Villas</li>
                                        <li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
                                        <li><i class="icon-bed"></i>&nbsp;4 Bed</li>
                                        <li><i class="icon-bath"></i>&nbsp;3 Baths</li>
                                        <li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
                                        <li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
                                    </ul>
                                    <button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
                                    <button class="view-b"><a href="#">View Detail</a></button>
                                </div>

                                <div class="property-thumb">
                                    <img src="<?php echo base_url(); ?>assets/images/l6.png">
                                </div>
                                <div class="property-list-details">
                                    <h3>4552 LYNN AVENUE</h3>
                                    <span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
                                    <div class="button-block">
                                        <button class="price">$1,500</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 l3 m6">
                            <div class="list-card">

                                <div class="over-card">
                                    <ul>
                                        <li><i class="icon-bed"></i>&nbsp;Villas</li>
                                        <li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
                                        <li><i class="icon-bed"></i>&nbsp;4 Bed</li>
                                        <li><i class="icon-bath"></i>&nbsp;3 Baths</li>
                                        <li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
                                        <li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
                                    </ul>
                                    <button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
                                    <button class="view-b"><a href="#">View Detail</a></button>
                                </div>

                                <div class="property-thumb">
                                    <img src="<?php echo base_url(); ?>assets/images/l7.png">
                                </div>
                                <div class="property-list-details">
                                    <h3>4552 LYNN AVENUE</h3>
                                    <span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
                                    <div class="button-block">
                                        <button class="price">$1,500</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 l3 m6">
                            <div class="list-card">

                                <div class="over-card">
                                    <ul>
                                        <li><i class="icon-bed"></i>&nbsp;Villas</li>
                                        <li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
                                        <li><i class="icon-bed"></i>&nbsp;4 Bed</li>
                                        <li><i class="icon-bath"></i>&nbsp;3 Baths</li>
                                        <li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
                                        <li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
                                    </ul>
                                    <button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
                                    <button class="view-b"><a href="#">View Detail</a></button>
                                </div>

                                <div class="property-thumb">
                                    <img src="<?php echo base_url(); ?>assets/images/l8.png">
                                </div>
                                <div class="property-list-details">
                                    <h3>4552 LYNN AVENUE</h3>
                                    <span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
                                    <div class="button-block">
                                        <button class="price">$1,500</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <div class="col s12 more-button-block">
            <button class="bt-normal waves-effect waves-light"><a href="#">VIEW ALL PROPERTIES</a></button>
        </div>

    </div>
</section>

<!-- DUBAI COMMUNITY -->
<section class="section-gap community">
    <div class="container">
        <div class="heading_block-white">
            <h2>DUBAI COMMUNITIES</h2>
            <span><i></i></span>
        </div>

        <div class="row">
            <div class="col s12 l3 m6">
                <a href="community-detai.html">
                    <div class="community-card">
                        <div class="overlay-bx">
                            <h3>DUBAI</h3>
                        </div>
                        <img src="<?php echo base_url(); ?>assets/images/c1.png">
                    </div>
                </a>
            </div>
            <div class="col s12 l3 m6">
                <a href="community-detai.html">
                    <div class="community-card">
                        <div class="overlay-bx">
                            <h3>DUBAI</h3>
                        </div>
                        <img src="<?php echo base_url(); ?>assets/images/c2.png">
                    </div>
                </a>
            </div>
            <div class="col s12 l3 m6">
                <a href="community-detai.html">
                    <div class="community-card">
                        <div class="overlay-bx">
                            <h3>DUBAI</h3>
                        </div>
                        <img src="<?php echo base_url(); ?>assets/images/c3.png">
                    </div>
                </a>
            </div>
            <div class="col s12 l3 m6">
                <a href="community-detai.html">
                    <div class="community-card">
                        <div class="overlay-bx">
                            <h3>DUBAI</h3>
                        </div>
                        <img src="<?php echo base_url(); ?>assets/images/c4.png">
                    </div>
                </a>
            </div>
            <div class="col s12 l3 m6">
                <a href="#">
                    <div class="community-card">
                        <div class="overlay-bx">
                            <h3>DUBAI</h3>
                        </div>
                        <img src="<?php echo base_url(); ?>assets/images/c5.png">
                    </div>
                </a>
            </div>
            <div class="col s12 l3 m6">
                <a href="community-detai.html">
                    <div class="community-card">
                        <div class="overlay-bx">
                            <h3>DUBAI</h3>
                        </div>
                        <img src="<?php echo base_url(); ?>assets/images/c6.png">
                    </div>
                </a>
            </div>
            <div class="col s12 l3 m6">
                <a href="community-detai.html">
                    <div class="community-card">
                        <div class="overlay-bx">
                            <h3>DUBAI</h3>
                        </div>
                        <img src="<?php echo base_url(); ?>assets/images/c7.png">
                    </div>
                </a>
            </div>
            <div class="col s12 l3 m6">
                <a href="community-detai.html">
                    <div class="community-card">
                        <div class="overlay-bx">
                            <h3>DUBAI</h3>
                        </div>
                        <img src="<?php echo base_url(); ?>assets/images/c8.png">
                    </div>
                </a>
            </div>

            <!-- More -->
            <div class="col s12 more-button-block">
                <button class="bt-normal-red auto waves-effect waves-light"><a href="#">MORE DUBAI COMMUNITES</a></button>
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
                <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                <ul class="tabs">
                    <li class="tab col s4"><a class="active" href="#test1">VISION</a></li>
                    <li class="tab col s4"><a href="#test2">MISSION</a></li>
                    <li class="tab col s4"><a href="#test3">VALUE</a></li>
                </ul>
            </div>
            <!-- Vission -->
            <div id="test1" class="col s12">
                <h1>Vission</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>

            <!-- Mission -->
            <div id="test2" class="col s12">
                <h1>Mission</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>

            <!-- Value -->
            <div id="test3" class="col s12">
                <h1>Value</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
            <div class="col s12 l6 m6">

                <div class="agent-box">
                    <div class="over-agent">
                        <button><a href="#">View Profile</a></button>
                    </div>
                    <img src="<?php echo base_url(); ?>assets/images/7.jpg">
                </div>

                <div class="agent-detail-home">
                    <h3>Thomas Miller</h3>
                    <span>Marketing Manger</span>
                    <p>Area Specialized in : N/A</p>
                </div>
            </div>
            <div class="col s12 l6 m6">
                <a href="#">
                    <div class="agent-box">
                        <div class="over-agent">
                            <button><a href="#">View Profile</a></button>
                        </div>
                        <img src="<?php echo base_url(); ?>assets/images/9.jpg">
                    </div>
                </a>
                <div class="agent-detail-home">
                    <h3>Thomas Miller</h3>
                    <span>Marketing Manger</span>
                    <p>Area Specialized in : N/A</p>
                </div>
            </div>

            <!-- More -->
            <div class="col s12 more-button-block">
                <button class="bt-normal waves-effect waves-light"><a href="#">MEET THE TEAM</a></button>
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


