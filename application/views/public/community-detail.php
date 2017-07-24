
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
                        <h2>Property for Sale in Down Town</h2>
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
                                <img src="images/l5.png">
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
                                <img src="images/l1.png">
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
                                <img src="images/l2.png">
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
                                <img src="images/l6.png">
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

                    <!-- more -->
                    <div class="col s12 more-button-block">
                        <button class="bt-normal"><a href="#">VIEW MORE</a></button>
                    </div>
                </div>
            </div>

            <div class="col s12 l12 m12">
                <div class="row agent-det mg-bt-none">
                    <div class="col s12 l12 m12">
                        <h2>Property for Rent in Down Town</h2>
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
                                <img src="images/l5.png">
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
                                <img src="images/l1.png">
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
                                <img src="images/l2.png">
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
                                <img src="images/l6.png">
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

                    <!-- more -->
                    <div class="col s12 more-button-block">
                        <button class="bt-normal"><a href="#">VIEW MORE</a></button>
                    </div>
                </div>
            </div>




        </div>
    </div>
</section>

