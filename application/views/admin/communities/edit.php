

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
        <?php echo form_open_multipart('',$attributes); ?>
        <div id="response" class="row">
        </div>
        <!-- Community Name Property Type -->
        <div class="row">
            <div class="input-field col s6">
                <input id="project_name" type="text" name="community_name" class="validate" value="<?php echo set_value('community_name',$community['community_name']); ?>">
                <label class="active" for="community_name">Community Name</label>
                 <input type="hidden" id="community_id" name="community_id" value="<?php echo $community['community_id']; ?>"/>
            </div>
            <div class="input-field col s6">
                <select id="community_property_type" name="community_property_type" >
                    <option value="" disabled <?php echo set_select('community_property_type', "", TRUE); ?>>Property Type</option>
                    <?php
                     foreach ($property_types as $property_type) {
                        if ( $property_type['pt_id'] == $community['community_property_type']) {

                            echo '<option value="' . $property_type['pt_id']  . '" selected="selected">' . $property_type['pt_name'] . '</option>';
                        } else {

                            echo '<option value="' . $property_type['pt_id']  . '">' . $property_type['pt_name'] . '</option>';
                        }
                    }
                    
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="community_description" class="materialize-textarea" name="community_description" ><?php echo set_value('community_description',$community['community_description']); ?></textarea>
                <label for="community_description">Description</label>
            </div>
        </div>

        <!-- Community Location -->
        <div class="row">

            <div class="input-field col s12">
                <input id="community_location_url" type="text" name="community_location_url"  class="validate" value="<?php echo set_value('community_location_url',$community['community_location_url']); ?>">
                <label class="active" for="community_location_url">Community Location Map URL</label>
            </div>
        </div>

        <div class="row">

            <div class="input-field col s6">
                <input id="community_dis_from_metro" type="number" name="community_dis_from_metro"  class="validate" value="<?php echo set_value('community_dis_from_metro',$community['community_dis_from_metro']); ?>" step="any">
                <label class="active" for="community_dis_from_metro">Distance from metro</label>
            </div>
            <div class="input-field col s6">
                <input id="community_dis_from_public_transport" type="number" name="community_dis_from_public_transport"  class="validate" value="<?php echo set_value('community_dis_from_public_transport',$community['community_dis_from_public_transport']); ?>" step="any">
                <label class="active" for="community_dis_from_public_transport">Distance from public transport</label>
            </div>
        </div>





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
