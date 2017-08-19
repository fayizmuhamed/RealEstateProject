

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
                <input id="project_no_of_bedrooms" type="number" name="project_no_of_bedrooms"  class="validate" value="<?php echo set_value('project_no_of_bedrooms'); ?>">
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

                        echo '<option value="' . $employee['emp_id'] . '" data-icon="'.(base_url() . 'uploads/emp-profile/' . $employee['emp_profile_image']).'" class="circle">' . $employee['emp_name'] . '</option>';
                    }
                    ?>
                </select>
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
                            <!--                                <div class="input-field col s3">
                                                                <label for="payment_plan_ins_number">Installment number</label>
                                                                <input id="payment_plan_ins_number" name="payment_plan_ins_number"  type="number"  >
                                                            </div>-->
                            <div class="input-field col s4">
                                <label for="payment_plan_date">Date</label>
                                <input id="payment_plan_date" name="payment_plan_date"  type="date" class="datepicker" >
                            </div>
                            <div class="input-field col s4">
                                <label for="payment_plan_amount">Amount/Percentage</label>
                                <input id="payment_plan_amount" name="payment_plan_amount"  type="text"  >
                            </div>
                            <div class="input-field col s4">
                                <button class="btn normal-bt add-payment-plan" type="button" >Add</button>
                            </div>
                        </div>
                        <div class="table row">
                            <table class="striped responsive-table input-field" id="table_payment_plan">
                                <thead>
                                    <tr>
<!--                                        <th class="width-100">Sl No</th>-->
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

                                echo '<div class="col s6 l4 m6" >';
                                echo '<input type="checkbox" class="naviagation" value="1" name="navigations[' . $key . ']" id="' . $value . '" />';
                                echo '<label for="' . $value . '">' . navigation_icon($value) . '&nbsp; </label>';
                                echo '<input type="text" name="navigation_values[' . $key . ']" class="browser-default" disabled>';
                                echo '</div>';
                            }
                            ?>
                            <!--                            <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1" name="navigations[1]" id="navigation_airport" />
                                                            <label for="navigation_airport"><i class="zmdi zmdi-local-airport tooltipped" data-tooltip="Airport"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[1]" class="browser-default" disabled>
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1" name="navigations[2]" id="navigation_metro" />
                                                            <label for="navigation_metro"><i class="zmdi zmdi-railway tooltipped" data-tooltip="Metro"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[2]" class="browser-default" disabled>
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1" name="navigations[3]" id="navigation_public_transport" />
                                                            <label for="navigation_public_transport"><i class="zmdi zmdi-bus tooltipped" data-tooltip="Public transport"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[3]" class="browser-default" disabled>
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1"  name="navigations[4]" id="navigation_park" />
                                                            <label for="navigation_park"><i class="zmdi zmdi-landscape tooltipped" data-tooltip="Park"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[4]" class="browser-default" disabled>
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1" name="navigations[5]" id="navigation_lake"/>
                                                            <label for="navigation_lake"><i class="zmdi zmdi-bus tooltipped" data-tooltip="Lake"></i>&nbsp;</label>
                                                            <input type="text" name="navigation_values[5]" class="browser-default" disabled>
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1"  name="navigations[6]" id="navigation_beach"/>
                                                            <label for="navigation_beach"><i class="zmdi zmdi-local-see tooltipped" data-tooltip="Beach"></i>&nbsp;</label>
                                                            <input type="text" name="navigation_values[6]" class="browser-default" disabled>
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1"  name="navigations[7]" id="navigation_mall" />
                                                            <label for="navigation_mall"><i class="zmdi zmdi-mall tooltipped" data-tooltip="Mall"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[7]" class="browser-default" disabled>
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1"  name="navigations[8]" id="navigation_restaurants" />
                                                            <label for="navigation_restaurants"><i class="zmdi zmdi-hotel tooltipped" data-tooltip="Restaurants"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[8]" class="browser-default" disabled>
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1" name="navigations[9]"  id="navigation_super_market" />
                                                            <label for="navigation_super_market"><i class="zmdi zmdi-local-grocery-store tooltipped" data-tooltip="Supermarket"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[9]" class="browser-default" disabled>
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1"  name="navigations[10]"  id="navigation_school" />
                                                            <label for="navigation_school"><i class="zmdi zmdi-graduation-cap tooltipped" data-tooltip="School"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[10]" class="browser-default" disabled>
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1" name="navigations[11]"  id="navigation_hospital"/>
                                                            <label for="navigation_hospital"><i class="zmdi zmdi-hospital tooltipped" data-tooltip="Hospital"></i>&nbsp;</label>
                                                            <input type="text" name="navigation_values[11]" class="browser-default" disabled>
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox"  class="naviagation" value="1" name="navigations[12]"  id="navigation_leisure_center"/>
                                                            <label for="navigation_leisure_center"><i class="zmdi zmdi-bus tooltipped" data-tooltip="Leisure Centre"></i>&nbsp;</label>
                                                            <input type="text" name="navigation_values[12]" class="browser-default" disabled>
                            
                                                        </div>
                                                        
                                                        
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1"  name="navigations[13]" id="navigation_fitness_center" />
                                                            <label for="navigation_fitness_center"><i class="zmdi zmdi-fire tooltipped" data-tooltip="Fitness Centre"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[13]" class="browser-default" disabled>
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1"  name="navigations[14]" id="navigation_motor_way" />
                                                            <label for="navigation_motor_way"><i class="zmdi zmdi-railway tooltipped" data-tooltip="Motor Way / Highway"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[14]" class="browser-default" disabled>
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1" name="navigations[15]" id="navigation_burj_al_arab" />
                                                            <label for="navigation_burj_al_arab"><i class="zmdi zmdi-bus tooltipped" data-tooltip="Burj Al Arab"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[15]" class="browser-default" disabled>
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1"  name="navigations[16]" id="navigation_palm_jumeirah" />
                                                            <label for="navigation_palm_jumeirah"><i class="zmdi zmdi-airplane tooltipped" data-tooltip="Palm Jumeirah"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[16]" class="browser-default" disabled>
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1" name="navigations[17]" id="navigation_burj_khalifa"/>
                                                            <label for="navigation_burj_khalifa"><i class="zmdi zmdi-railway tooltipped" data-tooltip="Burj Khalifa"></i>&nbsp;</label>
                                                            <input type="text" name="navigation_values[17]" class="browser-default" disabled>
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox"  class="naviagation" value="1" name="navigations[18]"  id="navigation_golf_course"/>
                                                            <label for="navigation_golf_course"><i class="zmdi zmdi-bus tooltipped" data-tooltip="Golf course"></i>&nbsp;</label>
                                                            <input type="text" name="navigation_values[18]" class="browser-default" disabled>
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1" name="navigations[19]" id="navigation_marina"/>
                                                            <label for="navigation_marina"><i class="zmdi zmdi-railway tooltipped" data-tooltip="Marina"></i>&nbsp;</label>
                                                            <input type="text" name="navigation_values[19]" class="browser-default" disabled>
                            
                                                        </div>
                                                        <div class="col s6 l4 m6 " >
                                                            <input type="checkbox" class="naviagation" value="1"  name="navigations[20]" id="navigation_expo_2020"/>
                                                            <label for="navigation_expo_2020"><i class="zmdi zmdi-bus tooltipped" data-tooltip="Expo 2020"></i>&nbsp;</label>
                                                            <input type="text" name="navigation_values[20]" class="browser-default" disabled>
                            
                                                        </div>
                            -->


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
