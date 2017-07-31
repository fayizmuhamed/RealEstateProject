

<!-- Send Message -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Send Message</h4>
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
                                    <li class="modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Send Message</a></li>
                                    <li><a href="#">Request call back</a></li>
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

                <div class="row mg-bt-none">
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
                                <img src="images/l7.png">
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
                                <img src="images/l8.png">
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
            </div>	

            <div class="col s12 more-button-block">
                <button class="bt-normal waves-effect waves-light"><a href="#">VIEW MORE</a></button>
            </div>


        </div>

    </div>
</section>
