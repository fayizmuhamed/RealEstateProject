

<div class="main-area">
    <!-- Header -->
    <div class="header-all-section">
        <div class="title-full">
            <h2>Add Project</h2>
        </div>
    </div>

    <!-- form -->
    <div class="add-new-form">


        <?php $attributes = array('id' => 'frm_add_project'); ?>
        <?php echo form_open_multipart('', $attributes); ?>

        <div id="response" class="row">
        </div>

        <!-- Project Name Developer -->
        <div class="row">
            <div class="input-field col s4">
                <input id="project_reference" type="text" name="project_reference" class="validate" value="<?php echo set_value('project_reference'); ?>" >
                <label class="active" for="project_reference">Project Reference</label>
            </div>
            <div class="input-field col s4">
                <input id="project_name" type="text" name="project_name" class="validate" value="<?php echo set_value('project_name'); ?>">
                <label class="active" for="project_name">Project Name</label>
            </div>
            <div class="input-field col s4">
                <input id="project_developer" type="text" name="project_developer"  class="validate" value="<?php echo set_value('project_developer'); ?>">
                <label class="active" for="project_developer">Developer</label>
            </div>
        </div>
        <!-- Property Type Property Location -->
        <div class="row">
            <div class="input-field col s4">
                <input id="project_property_type" type="text" name="project_property_type" class="validate" value="<?php echo set_value('project_property_type'); ?>">
                <label class="active" for="project_property_type">Property type</label>

            </div>
            <div class="input-field col s4">
                <input id="project_location" type="text" name="project_location"  class="validate" value="<?php echo set_value('project_location'); ?>">
                <label class="active" for="project_location">Property Location</label>
            </div>
            <!--            <div class="input-field col s4">
                            <select id="project_location" name="project_location">
                                <option value="" disabled selected>Property Location</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>-->
            <div class="input-field col s4">
                <input id="project_no_of_bedrooms" type="text" name="project_no_of_bedrooms"  class="validate" value="<?php echo set_value('project_no_of_bedrooms'); ?>">
                <label class="active" for="project_no_of_bedrooms">No of bedrooms</label>
            </div>
        </div>

        <!-- Start date End date -->
        <div class="row">
            <div class="input-field col s4">
                <input id="project_start_price" name="project_start_price"  type="number" value="<?php echo set_value('project_start_price'); ?>" step="any">
                <label for="project_start_price">Start Price</label>

            </div>
            <div class="input-field col s4">
                <label for="project_start_date">Start Date</label>
                <input id="project_start_date" name="project_start_date"  type="date" class="datepicker" value="<?php echo set_value('project_start_date'); ?>">
            </div>
            <div class="input-field col s4">
                <label for="project_end_date">End Date</label>
                <input type="date" class="datepicker" id ="project_end_date" name="project_end_date" value="<?php echo set_value('project_end_date'); ?>">
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m6">
                <select class="icons" multiple name="project_agents[]">
                    <option value="" disabled selected>Choose Agents</option>
                    <?php
                    foreach ($employees as $employee) {

                        echo '<option value="' . $employee['emp_id'] . '" data-icon="' . (base_url() . 'uploads/emp-profile/' . $employee['emp_profile_image']) . '" class="circle">' . $employee['emp_name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="input-field col s12 m6">
                  <input id="project_priority" type="number" name="project_priority"  class="validate" value="<?php echo set_value('project_priority'); ?>">
                <label class="active" for="project_priority">Priority</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <textarea id="project_description" class="materialize-textarea" name="project_description" value="<?php echo set_value('project_description'); ?>"></textarea>
                <label for="project_description">Description</label>
            </div>
        </div>

        <!-- Community Location -->
        <div class="row">

            <div class="input-field col s12">
                <input id="project_location_url" type="text" name="project_location_url"  class="validate" value="<?php echo set_value('project_location_url'); ?>">
                <label class="active" for="project_location_url">Enter embed map url</label>
            </div>
        </div>

        <div class="row">
            <div class="file-field input-field col s6">
                <div class="btn normal-bt">
                    <span>File</span>
                    <!--                    data-max-width="300" data-max-height="300" data-min-width="300" data-min-height="300"-->
                    <input type="file" name="project_cover_image" class="image-upload" id="project_cover_image" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*" >
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate image-upload-text" type="text" placeholder="Upload cover image" >
                    <span  class="image-upload-error"></span>
                </div>
            </div>
            <div class="file-field input-field col s6">
                <div class="btn normal-bt">
                    <span>File</span>
                    <!--                    data-max-width="300" data-max-height="300" data-min-width="300" data-min-height="300"-->
                    <input type="file" name="project_thumbnail_image[]" class="image-upload" id="project_thumbnail_image" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*" multiple>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate image-upload-text" type="text" placeholder="Upload thumbnail image" >
                    <span  class="image-upload-error"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="file-field input-field col s6">
                <div class="btn normal-bt">
                    <span>File</span>
                    <input type="file" name="project_brochure"  id="project_brochure">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload brochure">
                    <span id="project_brochure_error"></span>
                </div>
            </div>
            <div class="file-field input-field col s6">
                <div class="btn normal-bt">
                    <span>File</span>
                    <input type="file" name="project_floor_plan" id="project_floor_plan">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload floor plan">
                    <span id="project_floor_plan_error"></span>
                </div>
            </div>
        </div>
        <section class="listing ">
            <ul  class="collapsible" data-collapsible="accordion" >
                <li >
                    <div class="collapsible-header active waves-effect waves-teal">
                        <a >Payment Plan</a>
                    </div>

                    <div class="collapsible-body padd-10-0">
                        <div class="row">
                            <div class="input-field col s3">
                                <select id="payment_plan_head" name="payment_plan_head">
                                    <option value="" disabled selected>Choose Payment Head</option>
                                    <option value="Booking Amount">Booking Amount</option>
                                    <option value="1st Installment">1st Installment</option>
                                    <option value="2nd Installment">2nd Installment</option>
                                    <option value="3rd Installment">3rd Installment</option>
                                    <option value="4th Installment">4th Installment</option>
                                    <option value="5th Installment">5th Installment</option>
                                    <option value="6th Installment">6th Installment</option>
                                    <option value="7th Installment">7th Installment</option>
                                    <option value="8th Installment">8th Installment</option>
                                    <option value="9th Installment">9th Installment</option>
                                    <option value="10th Installment">10th Installment</option>
                                </select>
                            </div>
                            <div class="input-field col s3">
                                <label for="payment_plan_date">Date</label>
                                <input id="payment_plan_date" name="payment_plan_date"  type="text"  >
                            </div>
                            <div class="input-field col s3">
                                <label for="payment_plan_amount">Amount/Percentage</label>
                                <input id="payment_plan_amount" name="payment_plan_amount"  type="text"  >
                            </div>
                            <div class="input-field col s3">
                                <button class="btn normal-bt add-payment-plan" type="button" >Add</button>
                            </div>
                        </div>
                        <div class="table row">
                            <table class="striped responsive-table input-field" id="table_payment_plan">
                                <thead>
                                    <tr>
                                        <th>Head</th>
                                        <th>Date</th>
                                        <th>Amount/Percentage</th>
                                        <th class="width-150" >Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <input type="hidden" id="project_payment_plan_hidden" name="project_payment_plan_hidden"/>
                    </div>
                </li>
            </ul>

        </section>
        <section class="listing ">
            <ul  class="collapsible" data-collapsible="accordion" >
                <li >
                    <div class="collapsible-header active waves-effect waves-teal">
                        <a >Navigation details</a>
                    </div>

                    <div class="collapsible-body pads">
                        <div class="row">
                            
                            <?php
                            $navigations = navigation_list();

                            foreach ($navigations as $key => $value) {

                                echo '<div class="col s6 l4 m6 navigation-item" >';
                                echo '<input type="checkbox" class="navigation" value="1" name="navigations[' . $key . ']" id="' . $value . '" />';
                                echo '<label for="' . $value . '">' . navigation_icon($value) . '&nbsp; </label>';
                                echo '<input type="text" name="navigation_values[' . $key . ']" class="browser-default" disabled>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                </li>
            </ul>

        </section>
        <div class="col s12">
            <br>
            <br>
            <button class="bt-form-normal negative"><a href="<?php echo site_url('admin/projects'); ?>">Cancel</a></button>
            <button class="bt-form-normal" id="btnAddNewProjectSubmit" >Submit</button>
        </div>
        <?php echo form_close(); ?>

    </div>

</div>
