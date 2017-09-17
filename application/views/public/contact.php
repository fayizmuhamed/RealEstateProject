<!-- FEATURED PROPERTIES FOR SALE -->
<section class="section-gap-inner">
    <div class="container">
        <div class="row bredcrums">
            <div class="col s10 m10 l10">
                <ul>
                    <li><a href="#">ABOUT</a></li>
                    <li><i class="zmdi zmdi-chevron-right"></i></li>
                    <li><a href="#" class="active-bred">CONTACT</a></li>
                </ul>
            </div>
            <div class="col s2 m2 l2">
                <a href="#" class="back-link"><i class="zmdi zmdi-chevron-left"></i>&nbsp;Back</a>
            </div>
        </div>
        <div class="row inner-tab">
            <div class="col s12">
                <ul class="tabs tabs-fixed-width">
                    <li class="tab"><a class="active" href="#test1">OFFICE LOCATION</a></li>
                    <li class="tab"><a href="#test2">MAKE ENQUIRY</a></li>
                    <li class="tab"><a href="#test3">LIST YOUR PROPERTY</a></li>
                    <li class="tab"><a href="#test4">REQUEST FREE VALUATION</a></li>
                    <li class="tab"><a href="#test5">SHARE B&A EXPERIENCE</a></li>
                </ul>
            </div>

            <!-- OFFICE LOCATION -->
            <div id="test1" class="col s12">
                <div class="row">
                    <div class="col s12 l8 m6 contact-map" ><?php echo htmlspecialchars_decode((isset($contact_us_location) ? $contact_us_location : '')); ?></div>
                    <div class="col s12 l4 m6">
                        <div class="contact-detail-bx">
                            <h2>Contact Details</h2>
                            <br>
                            <p><?php echo (isset($contact_us_address) ? $contact_us_address : ''); ?></p>
                            <span><i class="zmdi zmdi-email"></i><?php echo (isset($contact_us_email) ? $contact_us_email : ''); ?></span>
                            <span><i class="zmdi zmdi-phone"></i><?php echo (isset($contact_us_contact_no) ? $contact_us_contact_no : ''); ?></span>
                            <br>
                            <span class="navy"><i class="zmdi zmdi-time"></i>Opening Hours</span>
                            <span class="navy big">Sunday - Thursday</span>
                            <span class="navy big">8.00 AM - 7.30 PM</span>
                            <br>
                            <span class="navy big">Friday & Saturday </span>
                            <span class="navy big">10 AM - 5.30 PM</span>
<!--                            <div class="navy big"><?php echo (isset($contact_us_opening_hours) ? $contact_us_opening_hours : ''); ?></div>-->
<!--                            <span class="navy big"><?php echo (isset($contact_us_opening_hours) ? $contact_us_opening_hours : ''); ?></span>-->
                            <ul class="social">
                                <li><a href="<?php echo ((isset($contact_us_facebook) && strlen($contact_us_facebook)) ? $contact_us_facebook : '#'); ?>"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="<?php echo ((isset($contact_us_twitter) && strlen($contact_us_twitter)) ? $contact_us_twitter : '#'); ?>"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="<?php echo ((isset($contact_us_linked_in) && strlen($contact_us_linked_in)) ? $contact_us_linked_in : '#'); ?>"><i class="zmdi zmdi-linkedin"></i></a></li>
                                <li><a href="<?php echo ((isset($contact_us_instagram) && strlen($contact_us_instagram)) ? $contact_us_instagram : '#'); ?>"><i class="zmdi zmdi-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MAKE ENQUIRY -->
            <div id="test2" class="col s12">
                <div class="row">
                    <div class="col s12 l6 m6">
                        <div class="form-bx">
                            <h3>Buy</h3>
                            <br>
                            <?php echo form_open('', array('id' => 'frm_contact_make_enquiry_buy')); ?>
                            <input type="hidden"  name="enquiry_type" id="type" value="buy">
                            <div class="row">
                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Name" name="author_name">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="E-mail" name="author_email">
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Mobile Number" name="author_contact">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select  name="property_type">
                                            <option value="" disabled selected>Property Type</option>
                                            <?php
                                            foreach ($property_types as $property_type) {

                                                echo '<option value="' . $property_type['pt_name'] . '">' . $property_type['pt_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Location" name="location">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select  name="bedrooms">
                                            <option value="" disabled selected>Bed Rooms</option>
                                            <option value="Studio">Studio</option>
                                            <?php
                                            for ($i = 1; $i <= 10; $i++) {

                                                echo '<option value="' . $i . '">' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <select  name="study_or_maid">
                                            <option value="NA" disabled selected>Maid’s / Study Room</option>
                                            <option value="None">None</option>
                                            <option value="Study Room">Study Room</option>
                                            <option value="Maid Room">Maid's Room</option>
                                            <option value="Both">Both</option>
                                        </select>
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select  name="furnish">
                                            <option value="NA" disabled selected>Furnished / Unfurnished</option>
                                            <option value="Furnished">Furnished</option>
                                            <option value="Unfurnished">Unfurnished</option>
                                            <option value="Both">Both</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <select  name="budget">
                                            <option value="NA" disabled selected>Budget</option>
                                            <option value="Less than 1,000,000">Less than 1,000,000</option>
                                            <option value="1,000,000 – 1,500,000">1,000,000 – 1,500,000</option>
                                            <option value="1,500,000 – 2,000,000">1,500,000 – 2,000,000</option>
                                            <option value="2,000,000 – 2,500,000">2,000,000 – 2,500,000</option>
                                            <option value="2,500,000 – 3,000,000">2,500,000 – 3,000,000</option>
                                            <option value="3,000,000 – 3,500,000">3,000,000 – 3,500,000</option>
                                            <option value="3,500,000 – 4,000,000">3,500,000 – 4,000,000</option>
                                            <option value="4,000,000 – 4,500,000">4,000,000 – 4,500,000</option>
                                            <option value="4,500,000 – 5,000,000">4,500,000 – 5,000,000</option>
                                            <option value="5,000,000 – 6,000,000">5,000,000 – 6,000,000</option>
                                            <option value="6,000,000 – 7,000,000">6,000,000 – 7,000,000</option>
                                            <option value="7,000,000 – 8,000,000">7,000,000 – 8,000,000</option>
                                            <option value="8,000,000 – 9,000,000">8,000,000 – 9,000,000</option>
                                            <option value="9,000,000 – 10,000,000">9,000,000 – 10,000,000</option>
                                            <option value="10,000,000 – 15,000,000">10,000,000 – 15,000,000</option>
                                            <option value="15,000,000 – 20,000,000">15,000,000 – 20,000,000</option>
                                            <option value="More than 20,000,000">More than 20,000,000</option>
                                        </select>
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select class="icons" name="agent">
                                            <option value="" disabled selected>Choose Agent </option>
                                            <?php
                                            foreach ($employees as $employee) {

                                                echo '<option value="' . $employee['emp_id'] . '" data-icon="' . (base_url() . 'uploads/emp-profile/' . $employee['emp_profile_image']) . '" class="circle">' . $employee['emp_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="bloc-f">
                                    <div class="col s12 m12 l12" >
                                        <input type="text" placeholder="Preferred Call Back Time" name="preferred_call_back_time">
                                    </div>
                                </div>
                                <br>
                                <div class="bloc-f">
                                    <div class="col s12 m12 l12" >
                                        <textarea placeholder="Mesage" name="author_message"></textarea>
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m12 l12">
                                        <button class="waves-effect waves-light" type="submit">SUBMIT</button>
                                    </div>
                                </div>

                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                    <div class="col s12 l6 m6">
                        <div class="form-bx">
                            <h3>Rent</h3>
                            <br>
                            <?php echo form_open('', array('id' => 'frm_contact_make_enquiry_rent')); ?>
                            <input type="hidden"  name="enquiry_type" id="type" value="rent">
                            <div class="row">
                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Name" name="author_name">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="E-mail" name="author_email">
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Mobile Number" name="author_contact">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select  name="property_type">
                                            <option value="" disabled selected>Property Type</option>
                                            <?php
                                            foreach ($property_types as $property_type) {

                                                echo '<option value="' . $property_type['pt_name'] . '">' . $property_type['pt_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Location" name="location">
                                    </div>
                                   <div class="col s12 m6 l6">
                                        <select  name="bedrooms">
                                            <option value="" disabled selected>Bed Rooms</option>
                                            <option value="Studio">Studio</option>
                                            <?php
                                            for ($i = 1; $i <= 10; $i++) {

                                                echo '<option value="' . $i . '">' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <select  name="study_or_maid">
                                            <option value="NA" disabled selected>Maid’s / Study Room</option>
                                            <option value="None">None</option>
                                            <option value="Study Room">Study Room</option>
                                            <option value="Maid Room">Maid's Room</option>
                                            <option value="Both">Both</option>
                                        </select>
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select  name="furnish">
                                            <option value="NA" disabled selected>Furnished / Unfurnished</option>
                                            <option value="Furnished">Furnished</option>
                                            <option value="Unfurnished">Unfurnished</option>
                                            <option value="Both">Both</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <select  name="budget" >
                                            <option value="NA" disabled selected>Budget</option>
                                            <option value="Less than 50,000">Less than 50,000</option>
                                            <option value="50,000 – 75,000">50,000 – 75,000</option>
                                            <option value="75,000 – 100,000">75,000 – 100,000</option>
                                            <option value="100,000 – 125,000">100,000 – 125,000</option>
                                            <option value="125,000 – 150,000">125,000 – 150,000</option>
                                            <option value="150,000 – 175,000">150,000 – 175,000</option>
                                            <option value="175,000 – 200,000">175,000 – 200,000</option>
                                            <option value="200,000 – 250,000">200,000 – 250,000</option>
                                            <option value="250,000 – 300,000">250,000 – 300,000</option>
                                            <option value="300,000 – 350,000">300,000 – 350,000</option>
                                            <option value="350,000 – 400,000">350,000 – 400,000</option>
                                            <option value="400,000 – 450,000">400,000 – 450,000</option>
                                            <option value="450,000 – 500,000">450,000 – 500,000</option>
                                            <option value="500,000 – 600,000">500,000 – 600,000</option>
                                            <option value="600,000 – 700,000">600,000 – 700,000</option>
                                            <option value="700,000 – 800,000">700,000 – 800,000</option>
                                            <option value="800,000 – 900,000">800,000 – 900,000</option>
                                            <option value="900,000 – 1,000,000">900,000 – 1,000,000</option>
                                            <option value="More than 1,000,000">More than 1,000,000</option>
                                        </select>
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select class="icons" name="agent">
                                            <option value="" disabled selected>Choose Agent </option>
                                            <?php
                                            foreach ($employees as $employee) {

                                                echo '<option value="' . $employee['emp_id'] . '" data-icon="' . (base_url() . 'uploads/emp-profile/' . $employee['emp_profile_image']) . '" class="circle">' . $employee['emp_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="bloc-f">
                                    <div class="col s12 m12 l12" >
                                        <input type="text" placeholder="Preferred Call Back Time" name="preferred_call_back_time">
                                    </div>
                                </div>
                                <br>
                                <div class="bloc-f">
                                    <div class="col s12 m12 l12" >
                                        <textarea placeholder="Mesage" name="author_message"></textarea>
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m12 l12">
                                        <button class="waves-effect waves-light" type="submit">SUBMIT</button>
                                    </div>
                                </div>

                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div id="test3" class="col s12">
                <div class="row">
                    <div class="col s12 l6 m6">
                        <div class="form-bx">
                            <h3>Buy</h3>
                            <br>
                            <?php echo form_open('', array('id' => 'frm_list_your_property_buy')); ?>
                            <input type="hidden"  name="type" id="type" value="buy">
                            <div class="row">
                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Name" name="author_name">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="E-mail" name="author_email">
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Mobile Number" name="author_contact">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select  name="property_type">
                                            <option value="" disabled selected>Property Type</option>
                                            <?php
                                            foreach ($property_types as $property_type) {

                                                echo '<option value="' . $property_type['pt_name'] . '">' . $property_type['pt_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Location" name="location">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select  name="bedrooms">
                                            <option value="" disabled selected>Bed Rooms</option>
                                            <option value="Studio">Studio</option>
                                            <?php
                                            for ($i = 1; $i <= 10; $i++) {

                                                echo '<option value="' . $i . '">' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <select  name="study_or_maid">
                                            <option value="NA" disabled selected>Maid’s / Study Room</option>
                                            <option value="None">None</option>
                                            <option value="Study Room">Study Room</option>
                                            <option value="Maid Room">Maid's Room</option>
                                            <option value="Both">Both</option>
                                        </select>
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select  name="furnish">
                                            <option value="NA" disabled selected>Furnished / Unfurnished</option>
                                            <option value="Furnished">Furnished</option>
                                            <option value="Unfurnished">Unfurnished</option>
                                            <option value="Both">Both</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Unit Number " name="unit_number">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Street Number" name="street_number">
                                    </div>

                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Expected Sales Price" name="expected_price">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select class="icons" name="agent">
                                            <option value="" disabled selected>Choose Agent </option>
                                            <?php
                                            foreach ($employees as $employee) {

                                                echo '<option value="' . $employee['emp_id'] . '" data-icon="' . (base_url() . 'uploads/emp-profile/' . $employee['emp_profile_image']) . '" class="circle">' . $employee['emp_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m12 l12">
                                        <input type="text" placeholder="Preferred Call Back Time" name="preferred_call_back_time">
                                    </div>
                                </div>
                                <br>
                                <div class="bloc-f">
                                    <div class="col s12 m12 l12">
                                        <textarea placeholder="Mesage" name="author_message"></textarea>
                                    </div>
                                </div>
                                <div class="bloc-f">
                                    <div class="col l12 s12 m12">
                                        <div class="file-field input-field">
                                            <div class="bt-file">
                                                <span>File</span>
                                                <input type="file" name="title_deed"  id="title_deed">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Title Deed / Oqood / SPA "  >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bloc-f">
                                    <div class="col l12 s12 m12">
                                        <div class="file-field input-field">
                                            <div class="bt-file">
                                                <span>File</span>
                                                <input type="file" name="owners_passport"  id="owners_passport">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Owner’s Passport "  >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bloc-f">
                                    <div class="col l12 s12 m12">
                                        <div class="file-field input-field">
                                            <div class="bt-file">
                                                <span>File</span>
                                                <input type="file" name="other_documents[]"  id="other_documents" multiple>
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Other Documents "  >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m12 l12">
                                        <button class="waves-effect waves-light" type="submit">SUBMIT</button>
                                    </div>
                                </div>

                            </div>

                            <?php echo form_close(); ?>
                        </div>
                    </div>
                    <div class="col s12 l6 m6">
                        <div class="form-bx">
                            <h3>Rent</h3>
                            <br>
                            <?php echo form_open('', array('id' => 'frm_list_your_property_rent')); ?>
                            <input type="hidden"  name="type" id="type" value="rent">
                            <div class="row">
                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Name" name="author_name">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="E-mail" name="author_email">
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Mobile Number" name="author_contact">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select  name="property_type">
                                            <option value="" disabled selected>Property Type</option>
                                            <?php
                                            foreach ($property_types as $property_type) {

                                                echo '<option value="' . $property_type['pt_name'] . '">' . $property_type['pt_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Location" name="location">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select  name="bedrooms">
                                            <option value="" disabled selected>Bed Rooms</option>
                                            <option value="Studio">Studio</option>
                                            <?php
                                            for ($i = 1; $i <= 10; $i++) {

                                                echo '<option value="' . $i . '">' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <select  name="study_or_maid">
                                            <option value="NA" disabled selected>Maid’s / Study Room</option>
                                            <option value="None">None</option>
                                            <option value="Study Room">Study Room</option>
                                            <option value="Maid Room">Maid's Room</option>
                                            <option value="Both">Both</option>
                                        </select>
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select  name="furnish">
                                            <option value="NA" disabled selected>Furnished / Unfurnished</option>
                                            <option value="Furnished">Furnished</option>
                                            <option value="Unfurnished">Unfurnished</option>
                                            <option value="Both">Both</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Unit Number " name="unit_number">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Street Number" name="street_number">
                                    </div>

                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Expected Rent Price" name="expected_price">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select class="icons" name="agent">
                                            <option value="" disabled selected>Choose Agent </option>
                                            <?php
                                            foreach ($employees as $employee) {

                                                echo '<option value="' . $employee['emp_id'] . '" data-icon="' . (base_url() . 'uploads/emp-profile/' . $employee['emp_profile_image']) . '" class="circle">' . $employee['emp_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m12 l12">
                                        <input type="text" placeholder="Preferred Call Back Time" name="preferred_call_back_time">
                                    </div>
                                </div>
                                <br>
                                <div class="bloc-f">
                                    <div class="col s12 m12 l12">
                                        <textarea placeholder="Mesage" name="author_message"></textarea>
                                    </div>
                                </div>
                                <div class="bloc-f">
                                    <div class="col l12 s12 m12">
                                        <div class="file-field input-field">
                                            <div class="bt-file">
                                                <span>File</span>
                                                <input type="file" name="title_deed"  id="title_deed">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Title Deed / Oqood / SPA "  >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bloc-f">
                                    <div class="col l12 s12 m12">
                                        <div class="file-field input-field">
                                            <div class="bt-file">
                                                <span>File</span>
                                                <input type="file" name="owners_passport"  id="owners_passport">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Owner’s Passport "  >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bloc-f">
                                    <div class="col l12 s12 m12">
                                        <div class="file-field input-field">
                                            <div class="bt-file">
                                                <span>File</span>
                                                <input type="file" name="other_documents[]"  id="other_documents" multiple>
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Other Documents "  >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bloc-f">
                                    <div class="col s12 m12 l12">
                                        <button class="waves-effect waves-light" type="submit">SUBMIT</button>
                                    </div>
                                </div>

                            </div>

                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div id="test4" class="col s12">
                <div class="row">
                    <div class="col s12 l6 m6">
                        <div class="form-bx">
                            <h3>Buy</h3>
                            <br>
                            <?php echo form_open('', array('id' => 'frm_request_pre_valuation_buy')); ?>
                            <input type="hidden"  name="type" id="type" value="buy">
                            <div class="row">
                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Name" name="author_name">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="E-mail" name="author_email">
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Mobile Number" name="author_contact">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select  name="property_type">
                                            <option value="" disabled selected>Property Type</option>
                                            <?php
                                            foreach ($property_types as $property_type) {

                                                echo '<option value="' . $property_type['pt_name'] . '">' . $property_type['pt_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Location" name="location">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select  name="bedrooms">
                                            <option value="" disabled selected>Bed Rooms</option>
                                            <option value="Studio">Studio</option>
                                            <?php
                                            for ($i = 1; $i <= 10; $i++) {

                                                echo '<option value="' . $i . '">' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <select  name="study_or_maid">
                                            <option value="NA" disabled selected>Maid’s / Study Room</option>
                                            <option value="None">None</option>
                                            <option value="Study Room">Study Room</option>
                                            <option value="Maid Room">Maid's Room</option>
                                            <option value="Both">Both</option>
                                        </select>
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select  name="furnish">
                                            <option value="NA" disabled selected>Furnished / Unfurnished</option>
                                            <option value="Furnished">Furnished</option>
                                            <option value="Unfurnished">Unfurnished</option>
                                            <option value="Both">Both</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Unit Number " name="unit_number">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Street Number" name="street_number">
                                    </div>

                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Primary View" name="primary_view">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select class="icons" name="agent">
                                            <option value="" disabled selected>Choose Agent </option>
                                            <?php
                                            foreach ($employees as $employee) {

                                                echo '<option value="' . $employee['emp_id'] . '" data-icon="' . (base_url() . 'uploads/emp-profile/' . $employee['emp_profile_image']) . '" class="circle">' . $employee['emp_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m12 l12">
                                        <input type="text" placeholder="Preferred Call Back Time" name="preferred_call_back_time">
                                    </div>
                                </div>
                                <br>
                                <div class="bloc-f">
                                    <div class="col s12 m12 l12">
                                        <textarea placeholder="Mesage" name="author_message"></textarea>
                                    </div>
                                </div>
                                <div class="bloc-f">
                                    <div class="col l12 s12 m12">
                                        <div class="file-field input-field">
                                            <div class="bt-file">
                                                <span>File</span>
                                                <input type="file" name="title_deed"  id="title_deed">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Title Deed / Oqood / SPA "  >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m12 l12">
                                        <button class="waves-effect waves-light" type="submit">SUBMIT</button>
                                    </div>
                                </div>

                            </div>

                            <?php echo form_close(); ?>
                        </div>
                    </div>
                    <div class="col s12 l6 m6">
                        <div class="form-bx">
                            <h3>Rent</h3>
                            <br>
                            <?php echo form_open('', array('id' => 'frm_request_pre_valuation_rent')); ?>
                            <input type="hidden"  name="type" id="type" value="rent">
                            <div class="row">
                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Name" name="author_name">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="E-mail" name="author_email">
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Mobile Number" name="author_contact">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select  name="property_type">
                                            <option value="" disabled selected>Property Type</option>
                                            <?php
                                            foreach ($property_types as $property_type) {

                                                echo '<option value="' . $property_type['pt_name'] . '">' . $property_type['pt_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Location" name="location">
                                    </div>
                                   <div class="col s12 m6 l6">
                                        <select  name="bedrooms">
                                            <option value="" disabled selected>Bed Rooms</option>
                                            <option value="Studio">Studio</option>
                                            <?php
                                            for ($i = 1; $i <= 10; $i++) {

                                                echo '<option value="' . $i . '">' . $i . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <select  name="study_or_maid">
                                            <option value="NA" disabled selected>Maid’s / Study Room</option>
                                            <option value="None">None</option>
                                            <option value="Study Room">Study Room</option>
                                            <option value="Maid Room">Maid's Room</option>
                                            <option value="Both">Both</option>
                                        </select>
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select  name="furnish">
                                            <option value="NA" disabled selected>Furnished / Unfurnished</option>
                                            <option value="Furnished">Furnished</option>
                                            <option value="Unfurnished">Unfurnished</option>
                                            <option value="Both">Both</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Unit Number " name="unit_number">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Street Number" name="street_number">
                                    </div>

                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Primary View" name="primary_view">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select class="icons" name="agent">
                                            <option value="" disabled selected>Choose Agent </option>
                                            <?php
                                            foreach ($employees as $employee) {

                                                echo '<option value="' . $employee['emp_id'] . '" data-icon="' . (base_url() . 'uploads/emp-profile/' . $employee['emp_profile_image']) . '" class="circle">' . $employee['emp_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>

                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m12 l12">
                                        <input type="text" placeholder="Preferred Call Back Time" name="preferred_call_back_time">
                                    </div>
                                </div>
                                <br>
                                <div class="bloc-f">
                                    <div class="col s12 m12 l12">
                                        <textarea placeholder="Mesage" name="author_message"></textarea>
                                    </div>
                                </div>
                                <div class="bloc-f">
                                    <div class="col l12 s12 m12">
                                        <div class="file-field input-field">
                                            <div class="bt-file">
                                                <span>File</span>
                                                <input type="file" name="title_deed"  id="title_deed">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Title Deed / Oqood / SPA "  >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bloc-f">
                                    <div class="col s12 m12 l12">
                                        <button class="waves-effect waves-light" type="submit">SUBMIT</button>
                                    </div>
                                </div>

                            </div>

                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div id="test5" class="col s12">
                <div class="row">

                    <div class="col s12 l12 m12">
                        <div class="form-bx">
                            <h4>Share your Bridges & Allies Experience.</h4>
                            <br>
                            <div id="message" >
                            </div>
                            <?php $attributes = array('id' => 'frm_send_feedback'); ?>
                            <?php echo form_open('', $attributes); ?>

                            <div class="row">
                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Name" name="testimonial_author_name" id="testimonial_author_name">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="E-mail" name="testimonial_author_email" id="testimonial_author_email">
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <input type="text" placeholder="Mobile Number" name="testimonial_author_contact" id="testimonial_author_contact">
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select  name="testimonial_property_type">
                                            <option value="" selected>Property Type</option>
                                            <?php
                                            foreach ($property_types as $property_type) {

                                                echo '<option value="' . $property_type['pt_id'] . '">' . $property_type['pt_name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m6 l6">
                                        <select  name="testimonial_author_relation" id="testimonial_author_relation">
                                            <option value="" disabled selected>Your Bridges & Allies Experience as a?</option>
                                            <option value="buyer">Buyer</option>
                                            <option value="tenant">Tenant</option>
                                            <option value="seller">Seller</option>
                                            <option value="landlord">Landlord</option>
                                        </select>
                                    </div>
                                    <div class="col s12 m6 l6">
                                        <select class="icons" name="testimonial_agent" id="testimonial_agent">
                                            <option value="" disabled selected>Your Agent? </option>
                                            <?php
                                            foreach ($employees as $employee) {

                                                echo '<option value="' . $employee['emp_id'] . '" data-icon="' . (base_url() . 'uploads/emp-profile/' . $employee['emp_profile_image']) . '" class="circle">' . $employee['emp_name'] . '</option>';
                                            }
                                            ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m12 l12">
                                        <textarea placeholder="Share your Bridges and Allies Experience" name="testimonial_message" id="testimonial_message"></textarea>
                                    </div>
                                </div>

                                <div class="bloc-f">
                                    <div class="col s12 m12 l12">
                                        <button class="waves-effect waves-light" type="submit">SUBMIT</button>
                                    </div>
                                </div>

                            </div>

                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>     
        </div>
    </div>
</section>
