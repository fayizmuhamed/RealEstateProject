

<div class="main-area">
    <!-- Header -->
    <div class="header-all-section">
        <div class="title-full">
            <h2>Edit Testimonial</h2>
        </div>
    </div>

    <!-- form -->
    <div class="add-new-form">
        <?php
        //flash messages
        if (isset($this->session->flash_message)) {
            if ($this->session->flash_message == TRUE) {
                echo '<div class="alert alert-success">';
                echo '<a class="close" data-dismiss="alert">×</a>';
                echo '<strong>Well done!</strong> testimonial updated with success.';
                echo '</div>';
            } else {
                echo '<div class="alert alert-error">';
                echo validation_errors();
                echo '</div>';
            }
        }
        ?>
        <?php echo form_open_multipart('admin/testimonials/update/' . $this->uri->segment(4) . ''); ?>

        <!-- Project Name Developer -->
        <div class="row">
            <div class="input-field col s6">
                <input id="testimonial_author_name" type="text" name="testimonial_author_name" class="validate" value="<?php echo set_value('testimonial_author_name', $testimonial['testimonial_author_name']); ?>">

                <label class="active" for="testimonial_author_name">Author Name</label>
            </div>
            <div class="input-field col s6">
                <input id="testimonial_author_email" type="text" name="testimonial_author_email" class="validate" value="<?php echo set_value('testimonial_author_email', $testimonial['testimonial_author_email']); ?>">

                <label class="active" for="testimonial_author_email">Author Email</label>
            </div>


        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="testimonial_author_contact" type="text" name="testimonial_author_contact" class="validate" value="<?php echo set_value('testimonial_author_contact', $testimonial['testimonial_author_contact']); ?>">

                <label class="active" for="testimonial_author_contact">Author Contact No</label>
            </div>
            <div class="input-field col s6">
                <select id="testimonial_author_relation" name="testimonial_author_relation">
                    <option value="" disabled selected>Bridges & Allies Experience as</option>
                    <option value="buyer" selected<?php echo set_select('testimonial_author_relation', 'buyer',( !empty($testimonial['testimonial_author_relation']) && $testimonial['testimonial_author_relation'] == "buyer" ? TRUE : FALSE )); ?>>Buyer</option>
                    <option value="tenant" <?php echo set_select('testimonial_author_relation','tenant',( !empty($testimonial['testimonial_author_relation']) && $testimonial['testimonial_author_relation'] == "tenant" ? TRUE : FALSE )); ?>>Tenant</option>
                    <option value="seller" <?php echo set_select('testimonial_author_relation','seller',( !empty($testimonial['testimonial_author_relation']) && $testimonial['testimonial_author_relation'] == "seller" ? TRUE : FALSE )); ?>>Seller</option>
                    <option value="landlord" <?php echo set_select('testimonial_author_relation','landlord',( !empty($testimonial['testimonial_author_relation']) && $testimonial['testimonial_author_relation'] == "landlord" ? TRUE : FALSE) ); ?>>Landlord</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <select id="testimonial_agent" name="testimonial_agent">
                    <option value="" disabled selected>Agent</option>
                    <?php
                    foreach ($employees as $employee) {

                        if ($employee['emp_id'] == $testimonial['testimonial_agent']) {

                            echo '<option value="' . $employee['emp_id'] . '" selected="selected">' . $employee['emp_name'] . '</option>';
                        } else {
                            echo '<option value="' . $employee['emp_id'] . '">' . $employee['emp_name'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            <div class=" col s6" style="margin-top: 1rem;    position: relative;">
                <input type="checkbox" id="testimonial_approved" class="filled-in" name="testimonial_approved"  value="1" <?php echo set_checkbox('testimonial_approved', "1",( !empty($testimonial['testimonial_approved']) && $testimonial['testimonial_approved'] == "1" ? TRUE : FALSE) );  ?>/>
                <label for="testimonial_approved">Approved</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="testimonial_message" class="materialize-textarea" name="testimonial_message" ><?php echo set_value('testimonial_message', $testimonial['testimonial_message']); ?></textarea>
                <label for="testimonial_message">Message</label>
            </div>
        </div>
        <ul  class="collapsible " data-collapsible="accordion" style="border: solid 1px #333 !important;">
            <li>
                <div class="collapsible-header waves-effect waves-teal ">
                    <a >PROPERTY DETAILS</a>
                </div>

                <div class="collapsible-body">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="testimonial_property_number" type="text" name="testimonial_property_number"  value="<?php echo set_value('testimonial_property_number', $testimonial['testimonial_property_number']); ?>">

                            <label class="active" for="testimonial_property_number">Property Number</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="testimonial_property_name" type="text" name="testimonial_property_name"  value="<?php echo set_value('testimonial_property_name', $testimonial['testimonial_property_name']); ?>">

                            <label class="active" for="testimonial_property_name">Property Name</label>
                        </div>


                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <select id="testimonial_property_type" name="testimonial_property_type">
                                <option value="" disabled selected>Property Type</option>
                                <?php
                                foreach ($property_types as $property_type) {
                                    if ($property_type['pt_id'] == $testimonial['testimonial_property_type']) {

                                        echo '<option value="' . $property_type['pt_id'] . '" selected="selected">' . $property_type['pt_name'] . '</option>';
                                    } else {
                                        echo '<option value="' . $property_type['pt_id'] . '">' . $property_type['pt_name'] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-field col s6">
                            <input id="testimonial_property_location" type="text" name="testimonial_property_location"  value="<?php echo set_value('testimonial_property_location', $testimonial['testimonial_property_location']); ?>">

                            <label class="active" for="testimonial_property_location">Property Location</label>
                        </div>


                    </div>
                    <div class="row">
                        <div class="file-field input-field col s6">
                            <div class="btn normal-bt">
                                <span>File</span>
                                <input type="file" name="testimonial_image" class="image-upload" id="testimonial_image" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*" >
                                 <input type="hidden" id="testimonial_image_hidden" name="testimonial_image_hidden" value="<?php echo set_value('testimonial_image_hidden', $testimonial['testimonial_image']); ?>"/>
               
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate image-upload-text" type="text" placeholder="Upload image" value="<?php echo set_value('testimonial_image', $testimonial['testimonial_image']); ?>">
                                <span  class="image-upload-error"></span>
                            </div>
                        </div>
                        <div class=" col s6" style="margin-top: 1rem;    position: relative;">
                            <input type="radio" id="testimonial_property_status_sold" class="with-gap" name="testimonial_property_status" value="1"  <?php echo set_checkbox('testimonial_property_status', "1",( !empty($testimonial['testimonial_property_status']) && $testimonial['testimonial_property_status'] == "1" ? TRUE : FALSE) );  ?>/>
                            <label for="testimonial_property_status_sold">Sold</label>
                            <input type="radio" id="testimonial_property_status_rent" class="with-gap" name="testimonial_property_status" value="2"  <?php echo set_checkbox('testimonial_property_status', "2",( !empty($testimonial['testimonial_property_status']) && $testimonial['testimonial_property_status'] == "2" ? TRUE : FALSE) );  ?>/>
                            <label for="testimonial_property_status_rent">Rent</label>
                            
                        </div>

                    </div>
                </div>
            </li>
        </ul>


        <div class="col s12">
            <br>
            <br>
            <button class="bt-form-normal negative"><a href="<?php echo site_url('admin/testimonials'); ?>">Cancel</a></button>
            <button class="bt-form-normal">Submit</button>
        </div>

        <?php echo form_close(); ?>

    </div>

</div>