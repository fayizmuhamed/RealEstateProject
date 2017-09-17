<!-- FEATURED PROPERTIES FOR SALE -->
<section class="section-gap-inner">
    <div class="container">
        <div class="row bredcrums">
            <div class="col s10 m10 l10">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><i class="zmdi zmdi-chevron-right"></i></li>
                    <li><a href="#" class="active-bred">PROPERTY OWNER</a></li>
                </ul>
            </div>
            <div class="col s2 m2 l2">
                <a href="<?php echo base_url(); ?>" class="back-link"><i class="zmdi zmdi-chevron-left"></i>&nbsp;Back</a>
            </div>
        </div>
        <div class="row inner-tab">
            <div class="col s12">
                <ul class="tabs tabs-fixed-width">
                    <li class="tab"><a class="active" href="#list_your_property">LIST YOUR PROPERTY</a></li>
                    <li class="tab"><a href="#request_pre_valuation">REQUEST PRE VALUATION</a></li>
                    <li class="tab"><a href="<?php echo base_url(); ?>ownersguide" target="_self">OWNERS GUIDE</a></li>
                    <li class="tab"><a href="<?php echo base_url(); ?>teams" target="_self">MEET TEAM</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="banner-in">

</section>


<!-- FEATURED PROPERTIES FOR SALE -->
<section class="section-gap-inner">
    <div class="container">
        <div class="row inner-tab">
            <!-- OFFICE LOCATION -->
            <div id="list_your_property" class="col s12">
                <div class="row mg-bt-none">

                    <div class="col s12 l6 m6">
                        <div class="form-bx">
                            <h3>Buy</h3>
                            <br>
                            <?php echo form_open('', array('id' => 'frm_owner_list_your_property_buy')); ?>
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
                            <?php echo form_open('', array('id' => 'frm_owner_list_your_property_rent')); ?>
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

            <!-- MAKE ENQUIRY -->
            <div id="request_pre_valuation" class="col s12">
                <div class="row mg-bt-none">
                    <div class="col s12 l6 m6">
                        <div class="form-bx">
                            <h3>Buy</h3>
                            <br>
                            <?php echo form_open('', array('id' => 'frm_owner_request_pre_valuation_buy')); ?>
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
                            <?php echo form_open('', array('id' => 'frm_owner_request_pre_valuation_rent')); ?>
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



        </div>
    </div>
</section>
