

<div class="main-area">
    <!-- Header -->
    <div class="header-all-section">
        <div class="title-full">
            <h2>Add Community</h2>
        </div>
    </div>

    <!-- form -->
    <div class="add-new-form">

        <?php $attributes = array('id' => 'frm_edit_community'); ?>
        <?php echo form_open_multipart('', $attributes); ?>
        <div id="response" class="row">
        </div>
        <!-- Community Name Property Type -->
        <div class="row">
            <div class="input-field col s6">
                <input id="community_name" type="text" name="community_name" class="validate" value="<?php echo set_value('community_name', $community['community_name']); ?>">
                <label class="active" for="community_name">Community Name</label>
                <input type="hidden" id="community_id" name="community_id" value="<?php echo $community['community_id']; ?>"/>
            </div>
            <div class="input-field col s6">
                <input id="community_property_type" type="text" name="community_property_type" class="validate" value="<?php echo set_value('community_property_type', $community['community_property_type']); ?>">
                <label class="active" for="community_property_type">Property type</label>

            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="community_description" class="materialize-textarea" name="community_description" ><?php echo set_value('community_description', $community['community_description']); ?></textarea>
                <label for="community_description">Description</label>
            </div>
        </div>

        <!-- Community Location -->
        <div class="row">

            <div class="input-field col s12">
                <input id="community_location_url" type="text" name="community_location_url"  class="validate" value="<?php echo set_value('community_location_url', $community['community_location_url']); ?>">
                <label class="active" for="community_location_url">Enter embed map url</label>
            </div>
        </div>



        <section class="listing ">
            <ul  class="collapsible" data-collapsible="accordion" >
                <li >
                    <div class="collapsible-header active waves-effect waves-teal">
                        <a >Navigation details</a>
                    </div>


                    <div class="collapsible-body pads">
                        <div class="row">
                             <?php
                            $community_navigations = json_decode($community['community_navigations'], TRUE);
                            $navigations = navigation_list();

                            foreach ($navigations as $key => $value) {

                                echo '<div class="col s6 l4 m6" >';
                                echo '<input type="checkbox" class="naviagation" value="1" name="navigations[' . $key . ']" id="' . $value . '" ' . set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations[$value]) ) ? TRUE : FALSE) . ' />';
                                echo '<label for="' . $value . '">' . navigation_icon($value) . '&nbsp; </label>';
                                echo '<input type="text" name="navigation_values[' . $key . ']" class="browser-default" ' . ((!empty($community_navigations) && isset($community_navigations[$value]) ) ? '' : 'disabled') . ' value=" ' . ((!empty($community_navigations) && isset($community_navigations[$value]) ) ? $community_navigations[$value] : '') . '">';
                                echo '</div>';
                            }
                            ?>
                            
<!--                            <div class="col s6 l4 m6" >
                                <input type="checkbox" class="naviagation" value="1" name="navigations[1]" id="navigation_airport" <?php echo set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations['navigation_airport']) ) ? TRUE : FALSE); ?>/>
                                <label for="navigation_airport"><i class="zmdi zmdi-local-airport tooltipped" data-tooltip="Airport"></i>&nbsp; </label>
                                <input type="text" name="navigation_values[1]" class="browser-default" <?php echo (!empty($community_navigations) && isset($community_navigations['navigation_airport']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($community_navigations) && isset($community_navigations['navigation_airport']) ) ? $community_navigations['navigation_airport'] : ''; ?>">
                            </div>
                            <div class="col s6 l4 m6" >
                                <input type="checkbox" class="naviagation" value="1" name="navigations[2]" id="navigation_metro" <?php echo set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations['navigation_metro']) ) ? TRUE : FALSE); ?>/>
                                <label for="navigation_metro"><i class="zmdi zmdi-railway tooltipped" data-tooltip="Metro"></i>&nbsp; </label>
                                <input type="text" name="navigation_values[2]" class="browser-default" <?php echo (!empty($community_navigations) && isset($community_navigations['navigation_metro']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($community_navigations) && isset($community_navigations['navigation_metro']) ) ? $community_navigations['navigation_metro'] : ''; ?>">

                            </div>
                            <div class="col s6 l4 m6" >
                                <input type="checkbox" class="naviagation" value="1" name="navigations[3]" id="navigation_public_transport" <?php echo set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations['navigation_public_transport']) ) ? TRUE : FALSE); ?>/>
                                <label for="navigation_public_transport"><i class="zmdi zmdi-bus tooltipped" data-tooltip="Public transport"></i>&nbsp; </label>
                                <input type="text" name="navigation_values[3]" class="browser-default" <?php echo (!empty($community_navigations) && isset($community_navigations['navigation_public_transport']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($community_navigations) && isset($community_navigations['navigation_public_transport']) ) ? $community_navigations['navigation_public_transport'] : ''; ?>">

                            </div>
                            <div class="col s6 l4 m6" >
                                <input type="checkbox" class="naviagation" value="1"  name="navigations[4]" id="navigation_park" <?php echo set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations['navigation_park']) ) ? TRUE : FALSE); ?>/>
                                <label for="navigation_park"><i class="zmdi zmdi-landscape tooltipped" data-tooltip="Park"></i>&nbsp; </label>
                                <input type="text" name="navigation_values[4]" class="browser-default" <?php echo (!empty($community_navigations) && isset($community_navigations['navigation_park']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($community_navigations) && isset($community_navigations['navigation_park']) ) ? $community_navigations['navigation_park'] : ''; ?>">

                            </div>
                            <div class="col s6 l4 m6" >
                                <input type="checkbox" class="naviagation" value="1" name="navigations[5]" id="navigation_lake" <?php echo set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations['navigation_lake']) ) ? TRUE : FALSE); ?>/>
                                <label for="navigation_lake"><i class="zmdi zmdi-bus tooltipped" data-tooltip="Lake"></i>&nbsp;</label>
                                <input type="text" name="navigation_values[5]" class="browser-default" <?php echo (!empty($community_navigations) && isset($community_navigations['navigation_lake']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($community_navigations) && isset($community_navigations['navigation_lake']) ) ? $community_navigations['navigation_lake'] : ''; ?>">

                            </div>
                            <div class="col s6 l4 m6" >
                                <input type="checkbox" class="naviagation" value="1"  name="navigations[6]" id="navigation_beach" <?php echo set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations['navigation_beach']) ) ? TRUE : FALSE); ?>/>
                                <label for="navigation_beach"><i class="zmdi zmdi-local-see tooltipped" data-tooltip="Beach"></i>&nbsp;</label>
                                <input type="text" name="navigation_values[6]" class="browser-default" <?php echo (!empty($community_navigations) && isset($community_navigations['navigation_beach']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($community_navigations) && isset($community_navigations['navigation_beach']) ) ? $community_navigations['navigation_beach'] : ''; ?>">

                            </div>
                            <div class="col s6 l4 m6" >
                                <input type="checkbox" class="naviagation" value="1"  name="navigations[7]" id="navigation_mall" <?php echo set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations['navigation_mall']) ) ? TRUE : FALSE); ?>/>
                                <label for="navigation_mall"><i class="zmdi zmdi-mall tooltipped" data-tooltip="Mall"></i>&nbsp; </label>
                                <input type="text" name="navigation_values[7]" class="browser-default" <?php echo (!empty($community_navigations) && isset($community_navigations['navigation_mall']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($community_navigations) && isset($community_navigations['navigation_mall']) ) ? $community_navigations['navigation_mall'] : ''; ?>">

                            </div>
                            <div class="col s6 l4 m6" >
                                <input type="checkbox" class="naviagation" value="1"  name="navigations[8]" id="navigation_restaurants" <?php echo set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations['navigation_restaurants']) ) ? TRUE : FALSE); ?>/>
                                <label for="navigation_restaurants"><i class="zmdi zmdi-hotel tooltipped" data-tooltip="Restaurants"></i>&nbsp; </label>
                                <input type="text" name="navigation_values[8]" class="browser-default" <?php echo (!empty($community_navigations) && isset($community_navigations['navigation_restaurants']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($community_navigations) && isset($community_navigations['navigation_restaurants']) ) ? $community_navigations['navigation_restaurants'] : ''; ?>">

                            </div>
                            <div class="col s6 l4 m6" >
                                <input type="checkbox" class="naviagation" value="1" name="navigations[9]"  id="navigation_super_market" <?php echo set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations['navigation_super_market']) ) ? TRUE : FALSE); ?>/>
                                <label for="navigation_super_market"><i class="zmdi zmdi-local-grocery-store tooltipped" data-tooltip="Supermarket"></i>&nbsp; </label>
                                <input type="text" name="navigation_values[9]" class="browser-default" <?php echo (!empty($community_navigations) && isset($community_navigations['navigation_super_market']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($community_navigations) && isset($community_navigations['navigation_super_market']) ) ? $community_navigations['navigation_super_market'] : ''; ?>">

                            </div>
                            <div class="col s6 l4 m6" >
                                <input type="checkbox" class="naviagation" value="1"  name="navigations[10]"  id="navigation_school" <?php echo set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations['navigation_school']) ) ? TRUE : FALSE); ?>/>
                                <label for="navigation_school"><i class="zmdi zmdi-graduation-cap tooltipped" data-tooltip="School"></i>&nbsp; </label>
                                <input type="text" name="navigation_values[10]" class="browser-default" <?php echo (!empty($community_navigations) && isset($community_navigations['navigation_school']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($community_navigations) && isset($community_navigations['navigation_school']) ) ? $community_navigations['navigation_school'] : ''; ?>">

                            </div>
                            <div class="col s6 l4 m6" >
                                <input type="checkbox" class="naviagation" value="1" name="navigations[11]"  id="navigation_hospital" <?php echo set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations['navigation_hospital']) ) ? TRUE : FALSE); ?>/>
                                <label for="navigation_hospital"><i class="zmdi zmdi-hospital tooltipped" data-tooltip="Hospital"></i>&nbsp;</label>
                                <input type="text" name="navigation_values[11]" class="browser-default" <?php echo (!empty($community_navigations) && isset($community_navigations['navigation_hospital']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($community_navigations) && isset($community_navigations['navigation_hospital']) ) ? $community_navigations['navigation_hospital'] : ''; ?>">

                            </div>
                            <div class="col s6 l4 m6" >
                                <input type="checkbox"  class="naviagation" value="1" name="navigations[12]"  id="navigation_leisure_center" <?php echo set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations['navigation_leisure_center']) ) ? TRUE : FALSE); ?>/>
                                <label for="navigation_leisure_center"><i class="zmdi zmdi-bus tooltipped" data-tooltip="Leisure Centre"></i>&nbsp;</label>
                                <input type="text" name="navigation_values[12]" class="browser-default" <?php echo (!empty($community_navigations) && isset($community_navigations['navigation_leisure_center']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($community_navigations) && isset($community_navigations['navigation_leisure_center']) ) ? $community_navigations['navigation_leisure_center'] : ''; ?>">

                            </div>


                            <div class="col s6 l4 m6" >
                                <input type="checkbox" class="naviagation" value="1"  name="navigations[13]" id="navigation_fitness_center" <?php echo set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations['navigation_fitness_center']) ) ? TRUE : FALSE); ?>/>
                                <label for="navigation_fitness_center"><i class="zmdi zmdi-fire tooltipped" data-tooltip="Fitness Centre"></i>&nbsp; </label>
                                <input type="text" name="navigation_values[13]" class="browser-default" <?php echo (!empty($community_navigations) && isset($community_navigations['navigation_fitness_center']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($community_navigations) && isset($community_navigations['navigation_fitness_center']) ) ? $community_navigations['navigation_fitness_center'] : ''; ?>">

                            </div>
                            <div class="col s6 l4 m6" >
                                <input type="checkbox" class="naviagation" value="1"  name="navigations[14]" id="navigation_motor_way" <?php echo set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations['navigation_motor_way']) ) ? TRUE : FALSE); ?>/>
                                <label for="navigation_motor_way"><i class="zmdi zmdi-railway tooltipped" data-tooltip="Motor Way / Highway"></i>&nbsp; </label>
                                <input type="text" name="navigation_values[14]" class="browser-default" <?php echo (!empty($community_navigations) && isset($community_navigations['navigation_motor_way']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($community_navigations) && isset($community_navigations['navigation_motor_way']) ) ? $community_navigations['navigation_motor_way'] : ''; ?>">

                            </div>
                            <div class="col s6 l4 m6" >
                                <input type="checkbox" class="naviagation" value="1" name="navigations[15]" id="navigation_burj_al_arab" <?php echo set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations['navigation_burj_al_arab']) ) ? TRUE : FALSE); ?>/>
                                <label for="navigation_burj_al_arab"><i class="zmdi zmdi-bus tooltipped" data-tooltip="Burj Al Arab"></i>&nbsp; </label>
                                <input type="text" name="navigation_values[15]" class="browser-default" <?php echo (!empty($community_navigations) && isset($community_navigations['navigation_burj_al_arab']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($community_navigations) && isset($community_navigations['navigation_burj_al_arab']) ) ? $community_navigations['navigation_burj_al_arab'] : ''; ?>">

                            </div>
                            <div class="col s6 l4 m6" >
                                <input type="checkbox" class="naviagation" value="1"  name="navigations[16]" id="navigation_palm_jumeirah" <?php echo set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations['navigation_palm_jumeirah']) ) ? TRUE : FALSE); ?>/>
                                <label for="navigation_palm_jumeirah"><i class="zmdi zmdi-airplane tooltipped" data-tooltip="Palm Jumeirah"></i>&nbsp; </label>
                                <input type="text" name="navigation_values[16]" class="browser-default" <?php echo (!empty($community_navigations) && isset($community_navigations['navigation_palm_jumeirah']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($community_navigations) && isset($community_navigations['navigation_palm_jumeirah']) ) ? $community_navigations['navigation_palm_jumeirah'] : ''; ?>">

                            </div>
                            <div class="col s6 l4 m6" >
                                <input type="checkbox" class="naviagation" value="1" name="navigations[17]" id="navigation_burj_khalifa" <?php echo set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations['navigation_burj_khalifa']) ) ? TRUE : FALSE); ?>/>
                                <label for="navigation_burj_khalifa"><i class="zmdi zmdi-railway tooltipped" data-tooltip="Burj Khalifa"></i>&nbsp;</label>
                                <input type="text" name="navigation_values[17]" class="browser-default" <?php echo (!empty($community_navigations) && isset($community_navigations['navigation_burj_khalifa']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($community_navigations) && isset($community_navigations['navigation_burj_khalifa']) ) ? $community_navigations['navigation_burj_khalifa'] : ''; ?>">

                            </div>
                            <div class="col s6 l4 m6" >
                                <input type="checkbox"  class="naviagation" value="1" name="navigations[18]"  id="navigation_golf_course" <?php echo set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations['navigation_golf_course']) ) ? TRUE : FALSE); ?>/>
                                <label for="navigation_golf_course"><i class="zmdi zmdi-bus tooltipped" data-tooltip="Golf course"></i>&nbsp;</label>
                                <input type="text" name="navigation_values[18]" class="browser-default" <?php echo (!empty($community_navigations) && isset($community_navigations['navigation_golf_course']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($community_navigations) && isset($community_navigations['navigation_golf_course']) ) ? $community_navigations['navigation_golf_course'] : ''; ?>">

                            </div>
                            <div class="col s6 l4 m6" >
                                <input type="checkbox" class="naviagation" value="1" name="navigations[19]" id="navigation_marina" <?php echo set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations['navigation_marina']) ) ? TRUE : FALSE); ?>/>
                                <label for="navigation_marina"><i class="zmdi zmdi-railway tooltipped" data-tooltip="Marina"></i>&nbsp;</label>
                                <input type="text" name="navigation_values[19]" class="browser-default" <?php echo (!empty($community_navigations) && isset($community_navigations['navigation_marina']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($community_navigations) && isset($community_navigations['navigation_marina']) ) ? $community_navigations['navigation_marina'] : ''; ?>">

                            </div>
                            <div class="col s6 l4 m6 " >
                                <input type="checkbox" class="naviagation" value="1"  name="navigations[20]" id="navigation_expo_2020" <?php echo set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations['navigation_expo_2020']) ) ? TRUE : FALSE); ?>/>
                                <label for="navigation_expo_2020"><i class="zmdi zmdi-bus tooltipped" data-tooltip="Expo 2020"></i>&nbsp;</label>
                                <input type="text" name="navigation_values[20]" class="browser-default" <?php echo (!empty($community_navigations) && isset($community_navigations['navigation_expo_2020']) ) ? '' : 'disabled'; ?> value="<?php echo (!empty($community_navigations) && isset($community_navigations['navigation_expo_2020']) ) ? $community_navigations['navigation_expo_2020'] : ''; ?>">

                            </div>-->



                        </div>
                    </div>
                </li>
            </ul>

        </section>




        <div class="row">
            <div class="file-field input-field col s6">
                <div class="btn normal-bt">
                    <span>File</span>
                    <!--                    data-max-width="300" data-max-height="300" data-min-width="300" data-min-height="300"-->
                    <input type="file" name="community_cover_image" class="image-upload" id="community_cover_image" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*" >
                    <input type="hidden" id="community_cover_image_hidden" name="community_cover_image_hidden" value="<?php echo $community['community_cover_image']; ?>"/>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate image-upload-text" type="text" placeholder="Upload cover image" value="<?php echo $community['community_cover_image']; ?>">
                    <span  class="image-upload-error"></span>
                </div>
            </div>
            <div class="file-field input-field col s6">
                <div class="btn normal-bt">
                    <span>File</span>
                    <!--                    data-max-width="300" data-max-height="300" data-min-width="300" data-min-height="300"-->
                    <input type="file" name="community_thumbnail_image[]" class="image-upload" id="community_thumbnail_image" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*" multiple>
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
                    foreach ($community_thumbnails as $row_image) {

                        echo '<li>';
                        echo '<div id="images" class="thumbnail-card">';
                        echo '<a href="#"><img src="' . base_url() . 'uploads/community/thumbnail/' . $row_image['image'] . '"></a>';
                        echo '<button type="button"  class="del_photo delete_community_thumbnail" data-ref="' . $row_image['community_thumbnail_id'] . '"><i class="zmdi zmdi-delete"></i></button>';
                        echo '</div>';
                        echo '</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="col s12">
            <br>
            <br>
            <button class="bt-form-normal negative"><a href="<?php echo site_url('admin/communities'); ?>">Cancel</a></button>
            <button class="bt-form-normal">Submit</button>
        </div>
        <?php echo form_close(); ?>

    </div>

</div>
