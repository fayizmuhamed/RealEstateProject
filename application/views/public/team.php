<section class="section-gap-inner">
    <div class="container">
        <div class="row bredcrums">
            <div class="col s10 m10 l10">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">ABOUT</a></li>
                    <li><i class="zmdi zmdi-chevron-right"></i></li>
                    <li><a href="#" class="active-bred">TEAM</a></li>
                </ul>
            </div>
            <div class="col s2 m2 l2">
                <a href="<?php echo base_url(); ?>" class="back-link"><i class="zmdi zmdi-chevron-left"></i>&nbsp;Back</a>
            </div>
        </div>
        <div class="row inner-tab">
            <div class="col s12">
                <ul class="tabs tabs-fixed-width">
                    
                    <li class="tab"><a  class="department-filter <?php echo ((strcasecmp($selected_department, 'all') == 0)?'active':''); ?>" value="" href="#" >ALL</a></li>
                    <?php
                    foreach ($departments as $department) {

                        echo '<li class="tab" ><a value="' . $department['dep_id'] . '" href="#" class=" department-filter '. ((strcasecmp($selected_department, $department['dep_name']) == 0)?'active':'').'">' . $department['dep_name'] . '</a></li>';
                    }
                    ?>
                </ul>
            </div>

            <!-- OFFICE LOCATION -->
            <div id="test1" class="col s12">
                <div class="row">
                    <div class="col s12 l12 m12">
                        <div class="row agent-det" id="team_employee_container">
                            <?php
                            foreach ($employees as $employee) {
                                ?>
                                <div class="col s12 m4 l3">
                                    <div class="agent-card">
                                        <div class="agent-image">
                                            <div class="view"><button><a href="<?php echo base_url() . 'viewprofile/' . $employee['emp_id']; ?>">View Profile</a></button></div>
                                            <img src="<?php echo base_url() . 'uploads/emp-profile/' . $employee['emp_profile_image']; ?>">
                                        </div>
                                        <div class="agent-name">
                                            <h3><?php echo $employee['emp_name']; ?></h3>
                                            <span><?php echo $employee['des_name']; ?></span>
                                        </div>
                                        <div class="spcial">
                                            <span><strong>Area Specializes in</strong><?php echo $employee['emp_area_specialized']; ?></span>
                                            <span><strong>From</strong><?php echo $employee['emp_location']; ?></span>
                                            <span><strong>Speaks</strong><?php echo $employee['emp_languages']; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>



                        </div>
                        <!-- more -->
                        <div class="col s12 more-center">
                            <button id="button_team_load_more" class="bt-normal auto waves-effect waves-light" type="button" data-val="2">VIEW MORE</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MAKE ENQUIRY -->
            <!--		   <div id="test2" class="col s12">
                                    <div class="row">
                                    <div class="col s12 l12 m12">
                                            <div class="row agent-det">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
            
                                                     more 
                                                    <div class="col s12 more-center">
                                                            <button class="bt-normal"><a href="#">VIEW MORE</a></button>
                                                    </div>
            
                                            </div>
                                    </div>
                                </div>
                                </div>
            
                                <div id="test3" class="col s12">
                                    <div class="row">
                                    <div class="col s12 l12 m12">
                                            <div class="row agent-det">
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
            
                                                     more 
                                                    <div class="col s12 more-button-block">
                                                            <button class="bt-normal"><a href="#">VIEW MORE</a></button>
                                                    </div>
            
                                            </div>
                                    <div class="row">
                                    <div class="col s12 l12 m12">
                                            <div class="row agent-det">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
            
                                                     more 
                                                    <div class="col s12 more-center">
                                                            <button class="bt-normal"><a href="#">VIEW MORE</a></button>
                                                    </div>
            
                                            </div>
                                    </div>
                                </div>
                                </div>
            
                                <div id="test4" class="col s12">
                                    <div class="row">
                                    <div class="col s12 l12 m12">
                                            <div class="row agent-det">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
            
                                                     more 
                                                    <div class="col s12 more-center">
                                                            <button class="bt-normal"><a href="#">VIEW MORE</a></button>
                                                    </div>
            
                                            </div>
                                    </div>
                                </div>
                                </div>
            
                                <div id="test5" class="col s12">
                                    <div class="row">
                                    <div class="col s12 l12 m12">
                                            <div class="row agent-det">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
                                                                            <img src="images/7.jpg">
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
            
                                                     more 
                                                    <div class="col s12 more-center">
                                                            <button class="bt-normal"><a href="#">VIEW MORE</a></button>
                                                    </div>
            
                                            </div>
                                    </div>
                                </div>
                                </div>
            
            
                            </div>
                    </div>-->
            </section>
