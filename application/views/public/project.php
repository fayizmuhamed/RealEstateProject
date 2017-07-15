
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

<!-- FEATURED PROPERTIES FOR SALE -->
<section class="section-gap-inner">
    <div>
        <div class="row bredcrums">
            <div class="col s12 m10 l10">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">HOME</a></li>
                    <li><i class="zmdi zmdi-chevron-right"></i></li>
                    <li><a href="#" class="active-bred">PROJECT</a></li>
                </ul>
            </div>
            <div class="col s12 m2 l2">
                <a href="<?php echo base_url(); ?>" class="back-link"><i class="zmdi zmdi-chevron-left"></i>&nbsp;Back</a>
            </div>
        </div>
        <div class="row">
            <?php
            $i = 0;
            foreach ($projects as $row) {

                if ($i % 2 == 0) {
                    ?>
                    <div class="col s12 m12 l12">
                        <div class="each-project">
                            <div class="project-image">
                                <img src="<?php echo base_url() . 'uploads/project/cover/' . $row['project_cover_image']; ?>"/>
                            </div>
                            <div class="project-detail">
                                <h1><?php echo $row['project_name']; ?></h1>
                                <span>
                                    <i class="zmdi zmdi-pin"></i>
                                    <strong>Location</strong>: <?php echo $row['project_location']; ?>
                                </span>

                                <span>
                                    <i class="zmdi zmdi-aspect-ratio-alt"></i>
                                    <strong>Developer</strong>: <?php echo $row['project_developer']; ?>
                                </span>

                                <span>
                                    <i class="zmdi zmdi-widgets"></i>
                                    <strong>Property Type</strong>: <?php echo $row['pt_name']; ?>
                                </span>

                                <span>
                                    <i class="icon-bed"></i>
                                    <strong>No of Bed Rooms</strong>: <?php echo $row['project_no_of_bedrooms']; ?>
                                </span>

                                <span>
                                    <i class="zmdi zmdi-money-box"></i>
                                    <strong>Starting Price</strong>: <?php echo $row['project_start_price']; ?>
                                </span>

                                <span>
                                    <i class="zmdi zmdi-calendar-alt"></i>
                                    <strong>Completion Date</strong>:  <?php echo date('d M Y', strtotime($row['project_end_date'])); ?>
                                </span>

                                <br>
                                <button><a href="<?php echo base_url() . 'projects/' . $row['project_id']; ?>">VIEW DETAILS</a></button>
                                <button class="navy-bt modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>

                            </div>
                        </div>
                    </div>
                    <?php
                } else {
                    ?>

                    <div class="col s12 m12 l12">
                        <div class="each-project">
                            
                            <div class="project-detail">
                                <h1><?php echo $row['project_name']; ?></h1>
                                <span>
                                    <i class="zmdi zmdi-pin"></i>
                                    <strong>Location</strong>: <?php echo $row['project_location']; ?>
                                </span>

                                <span>
                                    <i class="zmdi zmdi-aspect-ratio-alt"></i>
                                    <strong>Developer</strong>: <?php echo $row['project_developer']; ?>
                                </span>

                                <span>
                                    <i class="zmdi zmdi-widgets"></i>
                                    <strong>Property Type</strong>: <?php echo $row['pt_name']; ?>
                                </span>

                                <span>
                                    <i class="icon-bed"></i>
                                    <strong>No of Bed Rooms</strong>: <?php echo $row['project_no_of_bedrooms']; ?>
                                </span>

                                <span>
                                    <i class="zmdi zmdi-money-box"></i>
                                    <strong>Starting Price</strong>: <?php echo $row['project_start_price']; ?>
                                </span>

                                <span>
                                    <i class="zmdi zmdi-calendar-alt"></i>
                                    <strong>Completion Date</strong>:  <?php echo date('d M Y', strtotime($row['project_end_date'])); ?>
                                </span>

                                <br>
                                <button><a href="<?php echo base_url() . 'projects/' . $row['project_id']; ?>">VIEW DETAILS</a></button>
                                <button class="navy-bt modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>

                            </div>
                            <div class="project-image">
                                <img src="<?php echo base_url() . 'uploads/project/cover/' . $row['project_cover_image']; ?>"/>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                
                $i++;
            }
            ?> 

            <!--            <div class="col s12 m12 l12">
                            <div class="each-project">
                                <div class="project-image">
                                    <img src="<?php echo base_url(); ?>assets/images/project1.png">
                                </div>
                                
                                <div class="project-detail">
                                    <h1>Park Heights Tower1</h1>
                                    <span>
                                        <i class="zmdi zmdi-pin"></i>
                                        <strong>Location</strong>: Downtown Dubai
                                    </span>
            
                                    <span>
                                        <i class="zmdi zmdi-aspect-ratio-alt"></i>
                                        <strong>Developer</strong>: Emaar Properties
                                    </span>
            
                                    <span>
                                        <i class="zmdi zmdi-widgets"></i>
                                        <strong>Property Type</strong>: Full & Half Floors Only
                                    </span>
            
                                    <span>
                                        <i class="icon-bed"></i>
                                        <strong>No of Bed Rooms</strong>: 3
                                    </span>
            
                                    <span>
                                        <i class="zmdi zmdi-money-box"></i>
                                        <strong>Starting Price</strong>: 2,600
                                    </span>
            
                                    <span>
                                        <i class="zmdi zmdi-calendar-alt"></i>
                                        <strong>Completion Date</strong>: 12 Jan 2017
                                    </span>
            
                                    <br>
                                    <button><a href="<?php echo base_url(); ?>projects/view">VIEW DETAILS</a></button>
                                    <button class="navy-bt modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
            
                                </div>
                            </div>
                        </div>-->
            <!--            <div class="col s12 m12 l12">
                            <div class="each-project">
                                <div class="project-detail">
                                    <h1>Park Heights Tower1</h1>
                                    <span>
                                        <i class="zmdi zmdi-pin"></i>
                                        <strong>Location</strong>: Downtown Dubai
                                    </span>
            
                                    <span>
                                        <i class="zmdi zmdi-aspect-ratio-alt"></i>
                                        <strong>Developer</strong>: Emaar Properties
                                    </span>
            
                                    <span>
                                        <i class="zmdi zmdi-widgets"></i>
                                        <strong>Property Type</strong>: Full & Half Floors Only
                                    </span>
            
                                    <span>
                                        <i class="icon-bed"></i>
                                        <strong>No of Bed Rooms</strong>: 3
                                    </span>
            
                                    <span>
                                        <i class="zmdi zmdi-money-box"></i>
                                        <strong>Starting Price</strong>: 2,600
                                    </span>
            
                                    <span>
                                        <i class="zmdi zmdi-calendar-alt"></i>
                                        <strong>Completion Date</strong>: 12 Jan 2017
                                    </span>
            
                                    <br>
                                    <button><a href="<?php echo base_url(); ?>projects/view">VIEW DETAILS</a></button>
                                    <button class="navy-bt modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
                                </div>
                                <div class="project-image">
                                    <img src="<?php echo base_url(); ?>assets/images/a2.png">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 l12">
                            <div class="each-project">
                                <div class="project-image">
                                    <img src="<?php echo base_url(); ?>assets/images/a1.png">
                                </div>
                                <div class="project-detail">
                                    <h1>Park Heights Tower1</h1>
                                    <span>
                                        <i class="zmdi zmdi-pin"></i>
                                        <strong>Location</strong>: Downtown Dubai
                                    </span>
            
                                    <span>
                                        <i class="zmdi zmdi-aspect-ratio-alt"></i>
                                        <strong>Developer</strong>: Emaar Properties
                                    </span>
            
                                    <span>
                                        <i class="zmdi zmdi-widgets"></i>
                                        <strong>Property Type</strong>: Full & Half Floors Only
                                    </span>
            
                                    <span>
                                        <i class="icon-bed"></i>
                                        <strong>No of Bed Rooms</strong>: 3
                                    </span>
            
                                    <span>
                                        <i class="zmdi zmdi-money-box"></i>
                                        <strong>Starting Price</strong>: 2,600
                                    </span>
            
                                    <span>
                                        <i class="zmdi zmdi-calendar-alt"></i>
                                        <strong>Completion Date</strong>: 12 Jan 2017
                                    </span>
            
                                    <br>
                                    <button><a href="<?php echo base_url(); ?>projects/view">VIEW DETAILS</a></button>
                                    <button class="navy-bt modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
                                </div>
                            </div>
                        </div>-->
        </div>

    </div>
</section>

