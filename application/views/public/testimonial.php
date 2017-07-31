<!-- FEATURED PROPERTIES FOR SALE -->
<section class="section-gap-inner">
    <div class="container">
        <div class="row bredcrums">
            <div class="col s10 m10 l10">
                <ul>
                    <li><a href="#">ABOUT</a></li>
                    <li><i class="zmdi zmdi-chevron-right"></i></li>
                    <li><a href="#" class="active-bred">TESTIMONIAL</a></li>
                </ul>
            </div>
            <div class="col s2 m2 l2">
                <a href="#" class="back-link"><i class="zmdi zmdi-chevron-left"></i>&nbsp;Back</a>
            </div>
        </div>
        <div class="row" id="testimonial_container">
            <?php
            $i = 0;
            foreach ($testimonials as $testimonial) {

                if ($i % 2 == 0) {
                    ?>
                    <div class="col s12 m12 l12">
                        <div class="each-testimonial">
                            <div class="user-testi">
                                <div class="over-lay-view">
                                    <button><a href="<?php echo base_url() . 'viewprofile/' . $testimonial['emp_id']; ?>">View Profile</a></button>
                                </div>
                                <img src="<?php echo base_url() . 'uploads/emp-profile/' . $testimonial['emp_profile_image']; ?>">
                            </div>
                            <div class="testi-content">
                                <div class="head-part">
                                    <div class="name-dt">
                                        <h1><?php echo $testimonial['emp_name']; ?></h1>
                                        <i><?php echo $testimonial['des_name']; ?></i>
                                        <br>
                                        <strong><span>Area Specializes in</span><?php echo $testimonial['emp_area_specialized']; ?></strong>
                                        <strong><span>From</span><?php echo $testimonial['emp_location']; ?></strong>
                                        <strong><span>Speaks</span><?php echo $testimonial['emp_languages']; ?></strong>

                                    </div>
                                    <div class="bt-dt">
                                        <button><a href="<?php echo base_url() . 'testimonial/' . $testimonial['emp_id']; ?>">Read My Testimonial</a></button>
                                    </div>
                                </div>
                                <p><?php echo $testimonial['testimonial_message']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="col s12 m12 l12">
                        <div class="each-testimonial">
                            <div class="testi-content">
                                <div class="head-part">
                                    <div class="name-dt">
                                        <h1><?php echo $testimonial['emp_name']; ?></h1>
                                        <i><?php echo $testimonial['des_name']; ?></i>
                                        <br>
                                        <strong><span>Area Specializes in</span><?php echo $testimonial['emp_area_specialized']; ?></strong>
                                        <strong><span>From</span><?php echo $testimonial['emp_location']; ?></strong>
                                        <strong><span>Speaks</span><?php echo $testimonial['emp_languages']; ?></strong>

                                    </div>
                                    <div class="bt-dt">
                                        <button><a href="<?php echo base_url() . 'testimonial/' . $testimonial['emp_id']; ?>">Read My Testimonial</a></button>
                                    </div>
                                </div>
                                <p><?php echo $testimonial['testimonial_message']; ?></p>
                            </div>
                            <div class="user-testi">
                                <div class="over-lay-view">
                                    <button><a href="<?php echo base_url() . 'viewprofile/' . $testimonial['emp_id']; ?>">View Profile</a></button>
                                </div>
                                <img src="<?php echo base_url() . 'uploads/emp-profile/' . $testimonial['emp_profile_image']; ?>">
                            </div>

                        </div>
                    </div>
                    <?php
                }

                $i++;
            }
            ?> 

            <!--
                        <div class="col s12 m12 l12">
                            <div class="each-testimonial">
                                <div class="user-testi">
                                    <div class="over-lay-view">
                                        <button><a href="view-profile.html">View Profile</a></button>
                                    </div>
                                    <img src="images/9.png">
                                </div>
                                <div class="testi-content">
                                    <div class="head-part">
                                        <div class="name-dt">
                                            <h1>Alexander Poal</h1>
                                            <i>Sales Manager</i>
                                            <br>
                                            <strong><span>Area Specializes in</span>N/A</strong>
                                            <strong><span>From</span>United Arab Emirates</strong>
                                            <strong><span>Speaks</span>English, Hindi, Arabic</strong>
            
                                        </div>
                                        <div class="bt-dt">
                                            <button><a href="<?php echo base_url(); ?>testimonial/1">Read My Testimonial</a></button>
                                        </div>
                                    </div>
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 l12">
                            <div class="each-testimonial">
                                <div class="testi-content">
                                    <div class="head-part">
                                        <div class="name-dt">
                                            <h1>Alexander Poal</h1>
                                            <i>Sales Manager</i>
                                            <br>
                                            <strong><span>Area Specializes in</span>N/A</strong>
                                            <strong><span>From</span>United Arab Emirates</strong>
                                            <strong><span>Speaks</span>English, Hindi, Arabic</strong>
            
                                        </div>
                                        <div class="bt-dt">
                                            <button><a href="<?php echo base_url(); ?>testimonial/1">Read My Testimonial</a></button>
                                        </div>
                                    </div>
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                                <div class="user-testi">
                                    <div class="over-lay-view">
                                        <button><a href="view-profile.html">View Profile</a></button>
                                    </div>
                                    <img src="images/9.png">
                                </div>
                            </div>
                        </div>
            
                        <div class="col s12 m12 l12">
                            <div class="each-testimonial">
                                <div class="user-testi">
                                    <div class="over-lay-view">
                                        <button><a href="view-profile.html">View Profile</a></button>
                                    </div>
                                    <img src="images/9.png">
                                </div>
                                <div class="testi-content">
                                    <div class="head-part">
                                        <div class="name-dt">
                                            <h1>Alexander Poal</h1>
                                            <i>Sales Manager</i>
                                            <br>
                                            <strong><span>Area Specializes in</span>N/A</strong>
                                            <strong><span>From</span>United Arab Emirates</strong>
                                            <strong><span>Speaks</span>English, Hindi, Arabic</strong>
            
                                        </div>
                                        <div class="bt-dt">
                                            <button><a href="<?php echo base_url(); ?>testimonial/1">Read My Testimonial</a></button>
                                        </div>
                                    </div>
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                        </div>
            
                        <div class="col s12 m12 l12">
                            <div class="each-testimonial">
                                <div class="testi-content">
                                    <div class="head-part">
                                        <div class="name-dt">
                                            <h1>Alexander Poal</h1>
                                            <i>Sales Manager</i>
                                            <br>
                                            <strong><span>Area Specializes in</span>N/A</strong>
                                            <strong><span>From</span>United Arab Emirates</strong>
                                            <strong><span>Speaks</span>English, Hindi, Arabic</strong>
            
                                        </div>
                                        <div class="bt-dt">
                                            <button><a href="view-profile.html">Read My Testimonial</a></button>
                                        </div>
                                    </div>
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                                <div class="user-testi">
                                    <div class="over-lay-view">
                                        <button><a href="view-profile.html">View Profile</a></button>
                                    </div>
                                    <img src="images/9.png">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 l12">
                            <div class="each-testimonial">
                                <div class="user-testi">
                                    <div class="over-lay-view">
                                        <button><a href="view-profile.html">View Profile</a></button>
                                    </div>
                                    <img src="images/9.png">
                                </div>
                                <div class="testi-content">
                                    <div class="head-part">
                                        <div class="name-dt">
                                            <h1>Alexander Poal</h1>
                                            <i>Sales Manager</i>
                                            <br>
                                            <strong><span>Area Specializes in</span>N/A</strong>
                                            <strong><span>From</span>United Arab Emirates</strong>
                                            <strong><span>Speaks</span>English, Hindi, Arabic</strong>
            
                                        </div>
                                        <div class="bt-dt">
                                            <button><a href="#">Read My Testimonial</a></button>
                                        </div>
                                    </div>
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                        </div>
            
                        <div class="col s12 m12 l12">
                            <div class="each-testimonial">
                                <div class="testi-content">
                                    <div class="head-part">
                                        <div class="name-dt">
                                            <h1>Alexander Poal</h1>
                                            <i>Sales Manager</i>
                                            <br>
                                            <strong><span>Area Specializes in</span>N/A</strong>
                                            <strong><span>From</span>United Arab Emirates</strong>
                                            <strong><span>Speaks</span>English, Hindi, Arabic</strong>
            
                                        </div>
                                        <div class="bt-dt">
                                            <button><a href="view-profile.html">Read My Testimonial</a></button>
                                        </div>
                                    </div>
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                                <div class="user-testi">
                                    <div class="over-lay-view">
                                        <button><a href="view-profile.html">View Profile</a></button>
                                    </div>
                                    <img src="images/9.png">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 l12">
                            <div class="each-testimonial">
                                <div class="user-testi">
                                    <div class="over-lay-view">
                                        <button><a href="view-profile.html">View Profile</a></button>
                                    </div>
                                    <img src="images/9.png">
                                </div>
                                <div class="testi-content">
                                    <div class="head-part">
                                        <div class="name-dt">
                                            <h1>Alexander Poal</h1>
                                            <i>Sales Manager</i>
                                            <br>
                                            <strong><span>Area Specializes in</span>N/A</strong>
                                            <strong><span>From</span>United Arab Emirates</strong>
                                            <strong><span>Speaks</span>English, Hindi, Arabic</strong>
            
                                        </div>
                                        <div class="bt-dt">
                                            <button><a href="#">Read My Testimonial</a></button>
                                        </div>
                                    </div>
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                        </div>
            
                        <div class="col s12 m12 l12">
                            <div class="each-testimonial">
                                <div class="testi-content">
                                    <div class="head-part">
                                        <div class="name-dt">
                                            <h1>Alexander Poal</h1>
                                            <i>Sales Manager</i>
                                            <br>
                                            <strong><span>Area Specializes in</span>N/A</strong>
                                            <strong><span>From</span>United Arab Emirates</strong>
                                            <strong><span>Speaks</span>English, Hindi, Arabic</strong>
            
                                        </div>
                                        <div class="bt-dt">
                                            <button><a href="view-profile.html">Read My Testimonial</a></button>
                                        </div>
                                    </div>
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                                <div class="user-testi">
                                    <div class="over-lay-view">
                                        <button><a href="view-profile.html">View Profile</a></button>
                                    </div>
                                    <img src="images/9.png">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 l12">
                            <div class="each-testimonial">
                                <div class="user-testi">
                                    <div class="over-lay-view">
                                        <button><a href="view-profile.html">View Profile</a></button>
                                    </div>
                                    <img src="images/9.png">
                                </div>
                                <div class="testi-content">
                                    <div class="head-part">
                                        <div class="name-dt">
                                            <h1>Alexander Poal</h1>
                                            <i>Sales Manager</i>
                                            <br>
                                            <strong><span>Area Specializes in</span>N/A</strong>
                                            <strong><span>From</span>United Arab Emirates</strong>
                                            <strong><span>Speaks</span>English, Hindi, Arabic</strong>
            
                                        </div>
                                        <div class="bt-dt">
                                            <button><a href="#">Read My Testimonial</a></button>
                                        </div>
                                    </div>
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                        </div>
            
                        <div class="col s12 m12 l12">
                            <div class="each-testimonial">
                                <div class="testi-content">
                                    <div class="head-part">
                                        <div class="name-dt">
                                            <h1>Alexander Poal</h1>
                                            <i>Sales Manager</i>
                                            <br>
                                            <strong><span>Area Specializes in</span>N/A</strong>
                                            <strong><span>From</span>United Arab Emirates</strong>
                                            <strong><span>Speaks</span>English, Hindi, Arabic</strong>
            
                                        </div>
                                        <div class="bt-dt">
                                            <button><a href="view-profile.html">Read My Testimonial</a></button>
                                        </div>
                                    </div>
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                                <div class="user-testi">
                                    <div class="over-lay-view">
                                        <button><a href="view-profile.html">View Profile</a></button>
                                    </div>
                                    <img src="images/9.png">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 l12">
                            <div class="each-testimonial">
                                <div class="user-testi">
                                    <div class="over-lay-view">
                                        <button><a href="view-profile.html">View Profile</a></button>
                                    </div>
                                    <img src="images/9.png">
                                </div>
                                <div class="testi-content">
                                    <div class="head-part">
                                        <div class="name-dt">
                                            <h1>Alexander Poal</h1>
                                            <i>Sales Manager</i>
                                            <br>
                                            <strong><span>Area Specializes in</span>N/A</strong>
                                            <strong><span>From</span>United Arab Emirates</strong>
                                            <strong><span>Speaks</span>English, Hindi, Arabic</strong>
            
                                        </div>
                                        <div class="bt-dt">
                                            <button><a href="#">Read My Testimonial</a></button>
                                        </div>
                                    </div>
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                        </div>
            
                        <div class="col s12 m12 l12">
                            <div class="each-testimonial">
                                <div class="testi-content">
                                    <div class="head-part">
                                        <div class="name-dt">
                                            <h1>Alexander Poal</h1>
                                            <i>Sales Manager</i>
                                            <br>
                                            <strong><span>Area Specializes in</span>N/A</strong>
                                            <strong><span>From</span>United Arab Emirates</strong>
                                            <strong><span>Speaks</span>English, Hindi, Arabic</strong>
            
                                        </div>
                                        <div class="bt-dt">
                                            <button><a href="view-profile.html">Read My Testimonial</a></button>
                                        </div>
                                    </div>
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                                <div class="user-testi">
                                    <div class="over-lay-view">
                                        <button><a href="view-profile.html">View Profile</a></button>
                                    </div>
                                    <img src="images/9.png">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 l12">
                            <div class="each-testimonial">
                                <div class="user-testi">
                                    <div class="over-lay-view">
                                        <button><a href="view-profile.html">View Profile</a></button>
                                    </div>
                                    <img src="images/9.png">
                                </div>
                                <div class="testi-content">
                                    <div class="head-part">
                                        <div class="name-dt">
                                            <h1>Alexander Poal</h1>
                                            <i>Sales Manager</i>
                                            <br>
                                            <strong><span>Area Specializes in</span>N/A</strong>
                                            <strong><span>From</span>United Arab Emirates</strong>
                                            <strong><span>Speaks</span>English, Hindi, Arabic</strong>
            
                                        </div>
                                        <div class="bt-dt">
                                            <button><a href="#">Read My Testimonial</a></button>
                                        </div>
                                    </div>
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                        </div>
            
                        <div class="col s12 m12 l12">
                            <div class="each-testimonial">
                                <div class="testi-content">
                                    <div class="head-part">
                                        <div class="name-dt">
                                            <h1>Alexander Poal</h1>
                                            <i>Sales Manager</i>
                                            <br>
                                            <strong><span>Area Specializes in</span>N/A</strong>
                                            <strong><span>From</span>United Arab Emirates</strong>
                                            <strong><span>Speaks</span>English, Hindi, Arabic</strong>
            
                                        </div>
                                        <div class="bt-dt">
                                            <button><a href="view-profile.html">Read My Testimonial</a></button>
                                        </div>
                                    </div>
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                                <div class="user-testi">
                                    <div class="over-lay-view">
                                        <button><a href="view-profile.html">View Profile</a></button>
                                    </div>
                                    <img src="images/9.png">
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m12 l12">
                            <div class="each-testimonial">
                                <div class="user-testi">
                                    <div class="over-lay-view">
                                        <button><a href="view-profile.html">View Profile</a></button>
                                    </div>
                                    <img src="images/9.png">
                                </div>
                                <div class="testi-content">
                                    <div class="head-part">
                                        <div class="name-dt">
                                            <h1>Alexander Poal</h1>
                                            <i>Sales Manager</i>
                                            <br>
                                            <strong><span>Area Specializes in</span>N/A</strong>
                                            <strong><span>From</span>United Arab Emirates</strong>
                                            <strong><span>Speaks</span>English, Hindi, Arabic</strong>
            
                                        </div>
                                        <div class="bt-dt">
                                            <button><a href="#">Read My Testimonial</a></button>
                                        </div>
                                    </div>
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                        </div>
            
                        <div class="col s12 m12 l12">
                            <div class="each-testimonial">
                                <div class="testi-content">
                                    <div class="head-part">
                                        <div class="name-dt">
                                            <h1>Alexander Poal</h1>
                                            <i>Sales Manager</i>
                                            <br>
                                            <strong><span>Area Specializes in</span>N/A</strong>
                                            <strong><span>From</span>United Arab Emirates</strong>
                                            <strong><span>Speaks</span>English, Hindi, Arabic</strong>
            
                                        </div>
                                        <div class="bt-dt">
                                            <button><a href="view-profile.html">Read My Testimonial</a></button>
                                        </div>
                                    </div>
                                    <p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                                <div class="user-testi">
                                    <div class="over-lay-view">
                                        <button><a href="view-profile.html">View Profile</a></button>
                                    </div>
                                    <img src="images/9.png">
                                </div>
                            </div>
                        </div>-->

            <!-- more -->



        </div>
        <div class="col s12 more-center">
            <button class="bt-normal"  id="button_testimonial_load_more" class="bt-normal" data-page="2" ><a href="#">VIEW MORE</a></button>
        </div>
    </div>
</section>
