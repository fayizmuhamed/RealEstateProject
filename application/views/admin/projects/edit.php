<div class="main-area">
    <!-- Header -->
    <div class="header-all-section">
        <div class="title-full">
            <h2>Edit Project</h2>
        </div>
    </div>

    <!-- form -->
    <div class="add-new-form">

        <?php $attributes = array('id' => 'frm_edit_project'); ?>
        <?php echo form_open_multipart('', $attributes); ?>
        <div id="response" class="row">
        </div>

        <!-- Project Name Developer -->
        <div class="row">
            <div class="input-field col s4">
                <input id="project_reference" type="text" name="project_reference" class="validate" value="<?php echo $project['project_reference']; ?>">
                <label class="active" for="project_reference">Project Reference</label>
                <input type="hidden" id="project_id" name="project_id" value="<?php echo $project['project_id']; ?>"/>
            </div>
            <div class="input-field col s4">
                <input id="project_name" type="text" name="project_name" class="validate" value="<?php echo $project['project_name']; ?>">
                <label class="active" for="project_name">Project Name</label>
            </div>
            <div class="input-field col s4">
                <input id="project_developer" type="text" name="project_developer"  class="validate" value="<?php echo $project['project_developer']; ?>">
                <label class="active" for="project_developer">Developer</label>
            </div>
        </div>
        <!-- Property Type Property Location -->
        <div class="row">
            <div class="input-field col s4">
                <input id="project_property_type" type="text" name="project_property_type" class="validate" value="<?php echo set_value('project_property_type', $project['project_property_type']); ?>">
                <label class="active" for="project_property_type">Property type</label>

            </div>
            <div class="input-field col s4">
                <input id="project_location" type="text" name="project_location"  class="validate" value='<?php echo $project['project_location']; ?>'>
                <label class="active" for="project_location">Property Location</label>
            </div>
            <div class="input-field col s4">
                <input id="project_no_of_bedrooms" type="text" name="project_no_of_bedrooms"  class="validate" value="<?php echo set_value('project_no_of_bedrooms', $project['project_no_of_bedrooms']); ?>" >
                <label class="active" for="project_no_of_bedrooms">No of bedrooms</label>
            </div>
        </div>

        <!-- Start date End date -->
        <div class="row">
            <div class="input-field col s4">
                <input id="project_start_price" name="project_start_price"   type="number" value="<?php echo set_value('project_start_price', $project['project_start_price']); ?>"  step="any">
                <label for="project_start_price">Start Price</label>

            </div>
            <div class="input-field col s4">
                <label for="project_start_date">Start Date</label>
                <input id="project_start_date" name="project_start_date"  type="date" class="datepicker" value="<?php echo $project['project_start_date']; ?>">
            </div>
            <div class="input-field col s4">
                <label for="project_end_date">End Date</label>
                <input type="date" class="datepicker" id ="project_end_date" name="project_end_date" value="<?php echo $project['project_end_date']; ?>">
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6">
                <select class="icons" multiple name="project_agents[]">
                    <option value="" disabled selected>Choose Agents</option>
                    <?php
                    $project_agents = isset($project['project_agents']) ? json_decode($project['project_agents'], true) : array();
                    foreach ($employees as $employee) {
                        $isSelected = (in_array($employee['emp_id'], $project_agents)) ? ' selected="selected"' : '';
                        echo '<option value="' . $employee['emp_id'] . '" data-icon="' . (base_url() . 'uploads/emp-profile/' . $employee['emp_profile_image']) . '" class="circle" ' . $isSelected . '>' . $employee['emp_name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="project_description" class="materialize-textarea" name="project_description" ><?php echo $project['project_description']; ?></textarea>
                <label for="project_description">Description</label>
            </div>
        </div>
        <!-- Community Location -->
        <div class="row">

            <div class="input-field col s12">
                <input id="project_location_url" type="text" name="project_location_url"  class="validate" value="<?php echo set_value('project_location_url', htmlspecialchars_decode($project['project_location_url'])); ?>">
                <label class="active" for="project_location_url">Enter embed map url</label>
            </div>
        </div>
        <div class="row">


            <div class="file-field input-field col s6">
                <div class="btn normal-bt">
                    <span>File</span>
                    <!--                    data-max-width="300" data-max-height="300" data-min-width="300" data-min-height="300"-->
                    <input type="file" name="project_cover_image" class="image-upload" id="project_cover_image" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*" >
                    <input type="hidden" id="project_cover_image_hidden" name="project_cover_image_hidden" value="<?php echo $project['project_cover_image']; ?>"/>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate image-upload-text" type="text" placeholder="Upload cover image" value="<?php echo $project['project_cover_image']; ?>">
                    <span id="project_cover_image_error" class="image-upload-error"></span>
                </div>
            </div>
            <div class="file-field input-field col s6">
                <div class="btn normal-bt">
                    <span>File</span>
                    <!--                    data-max-width="300" data-max-height="300" data-min-width="300" data-min-height="300"-->
                    <input type="file" name="project_thumbnail_image[]" class="image-upload" id="project_thumbnail_image" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*"  multiple>

                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate image-upload-text" type="text" placeholder="Upload thumbnail image" >
                    <span  class="image-upload-error"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 l12 m12 thum-slid">
                <ul>
                    <?php
                    foreach ($project_thumbnails as $row_image) {

                        echo '<li>';
                        echo '<div id="images" class="thumbnail-card">';
                        echo '<a href="#"><img src="' . base_url() . 'uploads/project/thumbnail/' . $row_image['image'] . '"></a>';
                        echo '<button type="button"  class="del_photo delete_project_thumbnail" data-ref="' . $row_image['project_thumbnail_id'] . '"><i class="zmdi zmdi-delete"></i></button>';
                        echo '</div>';
                        echo '</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="file-field input-field col s6">
                <div class="btn normal-bt">
                    <span>File</span>
                    <input type="file" name="project_brochure"  id="project_brochure">
                    <input type="hidden" id="project_brochure_hidden" name="project_brochure_hidden" value="<?php echo $project['project_brochure']; ?>"/>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload brochure" value="<?php echo $project['project_brochure']; ?>">
                    <span id="project_brochure_error"></span>
                </div>
            </div>
            <div class="file-field input-field col s6">
                <div class="btn normal-bt">
                    <span>File</span>
                    <input type="file" name="project_floor_plan" id="project_floor_plan">
                    <input type="hidden" id="project_floor_plan_hidden" name="project_floor_plan_hidden" value="<?php echo $project['project_floor_plan']; ?>"/>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload floor plan" value="<?php echo $project['project_floor_plan']; ?>">
                    <span id="project_floor_plan_error"></span>
                </div>
            </div>
        </div>
        <section class="listing ">
            <ul  class="collapsible " data-collapsible="accordion" style="border: solid 1px #333 !important;">
                <li>
                    <div class="collapsible-header waves-effect waves-teal">
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
                                <input id="payment_plan_date" name="payment_plan_date"  type="text" >
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
                                    <?php
                                    $project_payment_plans = json_decode($project['project_payment_plans'], TRUE);

                                    if ($project_payment_plans == NULL) {
                                        
                                    } else {

                                        foreach ($project_payment_plans as $row_payment_plan) {
                                            echo '<tr id="test">';
                                            echo '<td>' . $row_payment_plan['head'] . '</td>';
                                            echo '<td>' . $row_payment_plan['date'] . '</td>';
                                            echo '<td>' . $row_payment_plan['amount'] . '</td>';
                                            echo '<td class="width-150 action-table">
                                        <button class="delete delete-payment-plan" type="button" id="test"><i class="zmdi zmdi-delete"></i></button>
                                        </td>';
                                            echo '</tr>';
                                        }
                                    }
                                    ?> 

                                </tbody>
                            </table>
                        </div>
                        <input type="hidden" id="project_payment_plan_hidden" name="project_payment_plan_hidden" value="<?php echo html_escape($project['project_payment_plans']); ?>"/>
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
                            $project_navigations = json_decode($project['project_navigations'], TRUE);
                            $navigations = navigation_list();

                            foreach ($navigations as $key => $value) {

                                echo '<div class="col s6 l4 m6" >';
                                echo '<input type="checkbox" class="naviagation" value="1" name="navigations[' . $key . ']" id="' . $value . '" ' . set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations[$value]) ) ? TRUE : FALSE) . ' />';
                                echo '<label for="' . $value . '">' . navigation_icon($value) . '&nbsp; </label>';
                                echo '<input type="text" name="navigation_values[' . $key . ']" class="browser-default" ' . ((!empty($project_navigations) && isset($project_navigations[$value]) ) ? '' : 'disabled') . ' value=" ' . ((!empty($project_navigations) && isset($project_navigations[$value]) ) ? $project_navigations[$value] : '') . '">';
                                echo '</div>';
                            }
                            ?>

                            <!--                            <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1" name="navigations[1]" id="navigation_airport" <?php echo set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations['navigation_airport']) ) ? TRUE : FALSE); ?>/>
                                                            <label for="navigation_airport"><i class="zmdi zmdi-local-airport tooltipped" data-tooltip="Airport"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[1]" class="browser-default" <?php echo (!empty($project_navigations) && isset($project_navigations['navigation_airport']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($project_navigations) && isset($project_navigations['navigation_airport']) ) ? $project_navigations['navigation_airport'] : ''; ?>">
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1" name="navigations[2]" id="navigation_metro" <?php echo set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations['navigation_metro']) ) ? TRUE : FALSE); ?>/>
                                                            <label for="navigation_metro"><i class="zmdi zmdi-railway tooltipped" data-tooltip="Metro"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[2]" class="browser-default" <?php echo (!empty($project_navigations) && isset($project_navigations['navigation_metro']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($project_navigations) && isset($project_navigations['navigation_metro']) ) ? $project_navigations['navigation_metro'] : ''; ?>">
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1" name="navigations[3]" id="navigation_public_transport" <?php echo set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations['navigation_public_transport']) ) ? TRUE : FALSE); ?>/>
                                                            <label for="navigation_public_transport"><i class="zmdi zmdi-bus tooltipped" data-tooltip="Public transport"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[3]" class="browser-default" <?php echo (!empty($project_navigations) && isset($project_navigations['navigation_public_transport']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($project_navigations) && isset($project_navigations['navigation_public_transport']) ) ? $project_navigations['navigation_public_transport'] : ''; ?>">
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1"  name="navigations[4]" id="navigation_park" <?php echo set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations['navigation_park']) ) ? TRUE : FALSE); ?>/>
                                                            <label for="navigation_park"><i class="zmdi zmdi-landscape tooltipped" data-tooltip="Park"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[4]" class="browser-default" <?php echo (!empty($project_navigations) && isset($project_navigations['navigation_park']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($project_navigations) && isset($project_navigations['navigation_park']) ) ? $project_navigations['navigation_park'] : ''; ?>">
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1" name="navigations[5]" id="navigation_lake" <?php echo set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations['navigation_lake']) ) ? TRUE : FALSE); ?>/>
                                                            <label for="navigation_lake"><i class="zmdi zmdi-bus tooltipped" data-tooltip="Lake"></i>&nbsp;</label>
                                                            <input type="text" name="navigation_values[5]" class="browser-default" <?php echo (!empty($project_navigations) && isset($project_navigations['navigation_lake']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($project_navigations) && isset($project_navigations['navigation_lake']) ) ? $project_navigations['navigation_lake'] : ''; ?>">
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1"  name="navigations[6]" id="navigation_beach" <?php echo set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations['navigation_beach']) ) ? TRUE : FALSE); ?>/>
                                                            <label for="navigation_beach"><i class="zmdi zmdi-local-see tooltipped" data-tooltip="Beach"></i>&nbsp;</label>
                                                            <input type="text" name="navigation_values[6]" class="browser-default" <?php echo (!empty($project_navigations) && isset($project_navigations['navigation_beach']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($project_navigations) && isset($project_navigations['navigation_beach']) ) ? $project_navigations['navigation_beach'] : ''; ?>">
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1"  name="navigations[7]" id="navigation_mall" <?php echo set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations['navigation_mall']) ) ? TRUE : FALSE); ?>/>
                                                            <label for="navigation_mall"><i class="zmdi zmdi-mall tooltipped" data-tooltip="Mall"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[7]" class="browser-default" <?php echo (!empty($project_navigations) && isset($project_navigations['navigation_mall']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($project_navigations) && isset($project_navigations['navigation_mall']) ) ? $project_navigations['navigation_mall'] : ''; ?>">
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1"  name="navigations[8]" id="navigation_restaurants" <?php echo set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations['navigation_restaurants']) ) ? TRUE : FALSE); ?>/>
                                                            <label for="navigation_restaurants"><i class="zmdi zmdi-hotel tooltipped" data-tooltip="Restaurants"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[8]" class="browser-default" <?php echo (!empty($project_navigations) && isset($project_navigations['navigation_restaurants']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($project_navigations) && isset($project_navigations['navigation_restaurants']) ) ? $project_navigations['navigation_restaurants'] : ''; ?>">
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1" name="navigations[9]"  id="navigation_super_market" <?php echo set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations['navigation_super_market']) ) ? TRUE : FALSE); ?>/>
                                                            <label for="navigation_super_market"><i class="zmdi zmdi-local-grocery-store tooltipped" data-tooltip="Supermarket"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[9]" class="browser-default" <?php echo (!empty($project_navigations) && isset($project_navigations['navigation_super_market']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($project_navigations) && isset($project_navigations['navigation_super_market']) ) ? $project_navigations['navigation_super_market'] : ''; ?>">
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1"  name="navigations[10]"  id="navigation_school" <?php echo set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations['navigation_school']) ) ? TRUE : FALSE); ?>/>
                                                            <label for="navigation_school"><i class="zmdi zmdi-graduation-cap tooltipped" data-tooltip="School"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[10]" class="browser-default" <?php echo (!empty($project_navigations) && isset($project_navigations['navigation_school']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($project_navigations) && isset($project_navigations['navigation_school']) ) ? $project_navigations['navigation_school'] : ''; ?>">
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1" name="navigations[11]"  id="navigation_hospital" <?php echo set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations['navigation_hospital']) ) ? TRUE : FALSE); ?>/>
                                                            <label for="navigation_hospital"><i class="zmdi zmdi-hospital tooltipped" data-tooltip="Hospital"></i>&nbsp;</label>
                                                            <input type="text" name="navigation_values[11]" class="browser-default" <?php echo (!empty($project_navigations) && isset($project_navigations['navigation_hospital']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($project_navigations) && isset($project_navigations['navigation_hospital']) ) ? $project_navigations['navigation_hospital'] : ''; ?>">
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox"  class="naviagation" value="1" name="navigations[12]"  id="navigation_leisure_center" <?php echo set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations['navigation_leisure_center']) ) ? TRUE : FALSE); ?>/>
                                                            <label for="navigation_leisure_center"><i class="zmdi zmdi-bus tooltipped" data-tooltip="Leisure Centre"></i>&nbsp;</label>
                                                            <input type="text" name="navigation_values[12]" class="browser-default" <?php echo (!empty($project_navigations) && isset($project_navigations['navigation_leisure_center']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($project_navigations) && isset($project_navigations['navigation_leisure_center']) ) ? $project_navigations['navigation_leisure_center'] : ''; ?>">
                            
                                                        </div>
                            
                            
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1"  name="navigations[13]" id="navigation_fitness_center" <?php echo set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations['navigation_fitness_center']) ) ? TRUE : FALSE); ?>/>
                                                            <label for="navigation_fitness_center"><i class="zmdi zmdi-fire tooltipped" data-tooltip="Fitness Centre"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[13]" class="browser-default" <?php echo (!empty($project_navigations) && isset($project_navigations['navigation_fitness_center']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($project_navigations) && isset($project_navigations['navigation_fitness_center']) ) ? $project_navigations['navigation_fitness_center'] : ''; ?>">
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1"  name="navigations[14]" id="navigation_motor_way" <?php echo set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations['navigation_motor_way']) ) ? TRUE : FALSE); ?>/>
                                                            <label for="navigation_motor_way"><i class="zmdi zmdi-railway tooltipped" data-tooltip="Motor Way / Highway"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[14]" class="browser-default" <?php echo (!empty($project_navigations) && isset($project_navigations['navigation_motor_way']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($project_navigations) && isset($project_navigations['navigation_motor_way']) ) ? $project_navigations['navigation_motor_way'] : ''; ?>">
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1" name="navigations[15]" id="navigation_burj_al_arab" <?php echo set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations['navigation_burj_al_arab']) ) ? TRUE : FALSE); ?>/>
                                                            <label for="navigation_burj_al_arab"><i class="zmdi zmdi-bus tooltipped" data-tooltip="Burj Al Arab"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[15]" class="browser-default" <?php echo (!empty($project_navigations) && isset($project_navigations['navigation_burj_al_arab']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($project_navigations) && isset($project_navigations['navigation_burj_al_arab']) ) ? $project_navigations['navigation_burj_al_arab'] : ''; ?>">
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1"  name="navigations[16]" id="navigation_palm_jumeirah" <?php echo set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations['navigation_palm_jumeirah']) ) ? TRUE : FALSE); ?>/>
                                                            <label for="navigation_palm_jumeirah"><i class="zmdi zmdi-airplane tooltipped" data-tooltip="Palm Jumeirah"></i>&nbsp; </label>
                                                            <input type="text" name="navigation_values[16]" class="browser-default" <?php echo (!empty($project_navigations) && isset($project_navigations['navigation_palm_jumeirah']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($project_navigations) && isset($project_navigations['navigation_palm_jumeirah']) ) ? $project_navigations['navigation_palm_jumeirah'] : ''; ?>">
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1" name="navigations[17]" id="navigation_burj_khalifa" <?php echo set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations['navigation_burj_khalifa']) ) ? TRUE : FALSE); ?>/>
                                                            <label for="navigation_burj_khalifa"><i class="zmdi zmdi-railway tooltipped" data-tooltip="Burj Khalifa"></i>&nbsp;</label>
                                                            <input type="text" name="navigation_values[17]" class="browser-default" <?php echo (!empty($project_navigations) && isset($project_navigations['navigation_burj_khalifa']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($project_navigations) && isset($project_navigations['navigation_burj_khalifa']) ) ? $project_navigations['navigation_burj_khalifa'] : ''; ?>">
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox"  class="naviagation" value="1" name="navigations[18]"  id="navigation_golf_course" <?php echo set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations['navigation_golf_course']) ) ? TRUE : FALSE); ?>/>
                                                            <label for="navigation_golf_course"><i class="zmdi zmdi-bus tooltipped" data-tooltip="Golf course"></i>&nbsp;</label>
                                                            <input type="text" name="navigation_values[18]" class="browser-default" <?php echo (!empty($project_navigations) && isset($project_navigations['navigation_golf_course']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($project_navigations) && isset($project_navigations['navigation_golf_course']) ) ? $project_navigations['navigation_golf_course'] : ''; ?>">
                            
                                                        </div>
                                                        <div class="col s6 l4 m6" >
                                                            <input type="checkbox" class="naviagation" value="1" name="navigations[19]" id="navigation_marina" <?php echo set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations['navigation_marina']) ) ? TRUE : FALSE); ?>/>
                                                            <label for="navigation_marina"><i class="zmdi zmdi-railway tooltipped" data-tooltip="Marina"></i>&nbsp;</label>
                                                            <input type="text" name="navigation_values[19]" class="browser-default" <?php echo (!empty($project_navigations) && isset($project_navigations['navigation_marina']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($project_navigations) && isset($project_navigations['navigation_marina']) ) ? $project_navigations['navigation_marina'] : ''; ?>">
                            
                                                        </div>
                                                        <div class="col s6 l4 m6 " >
                                                            <input type="checkbox" class="naviagation" value="1"  name="navigations[20]" id="navigation_expo_2020" <?php echo set_checkbox('navigations', "1", (!empty($project_navigations) && isset($project_navigations['navigation_expo_2020']) ) ? TRUE : FALSE); ?>/>
                                                            <label for="navigation_expo_2020"><i class="zmdi zmdi-bus tooltipped" data-tooltip="Expo 2020"></i>&nbsp;</label>
                                                            <input type="text" name="navigation_values[20]" class="browser-default" <?php echo (!empty($project_navigations) && isset($project_navigations['navigation_expo_2020']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($project_navigations) && isset($project_navigations['navigation_expo_2020']) ) ? $project_navigations['navigation_expo_2020'] : ''; ?>">
                            
                                                        </div>-->



                        </div>
                    </div>
                </li>
            </ul>

        </section>
        <div class="col s12">
            <br>
            <br>
            <button class="bt-form-normal negative"><a href="<?php echo site_url('admin/projects'); ?>">Cancel</a></button>
            <button class="bt-form-normal">Submit</button>
        </div>

        <?php echo form_close(); ?>

    </div>

</div>