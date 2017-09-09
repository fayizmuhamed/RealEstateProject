

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
             <div class="input-field col s12 m4">
                <input id="community_priority" type="number" name="community_priority"  class="validate" value="<?php echo set_value('community_priority', isset($community['community_priority'])?$community['community_priority']:''); ?>">
                <label class="active" for="community_priority">Priority</label>
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
                <input id="community_location_url" type="text" name="community_location_url"  class="validate" value="<?php echo set_value('community_location_url', htmlspecialchars_decode($community['community_location_url'])); ?>">
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

                                echo '<div class="col s6 l4 m6 navigation-item" >';
                                echo '<input type="checkbox" class="navigation" value="1" name="navigations[' . $key . ']" id="' . $value . '" ' . set_checkbox('navigations', "1", (!empty($community_navigations) && isset($community_navigations[$value]) ) ? TRUE : FALSE) . ' />';
                                echo '<label for="' . $value . '">' . navigation_icon($value) . '&nbsp; </label>';
                                echo '<input type="text" name="navigation_values[' . $key . ']" class="browser-default" ' . ((!empty($community_navigations) && isset($community_navigations[$value]) ) ? '' : 'disabled') . ' value=" ' . ((!empty($community_navigations) && isset($community_navigations[$value]) ) ? $community_navigations[$value] : '') . '">';
                                echo '</div>';
                            }
                            ?>

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
