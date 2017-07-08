

<div class="main-area">
    <!-- Header -->
    <div class="header-all-section">
        <div class="title-full">
            <h2>Add Project</h2>
        </div>
    </div>

    <!-- form -->
    <div class="add-new-form">
        <?php
        //flash messages
        if (isset($flash_message)) {
            if ($flash_message == TRUE) {
                echo '<div class="alert alert-success">';
                echo '<a class="close" data-dismiss="alert">×</a>';
                echo '<strong>Well done!</strong> new project created with success.';
                echo '</div>';
            } else {
                echo '<div class="alert alert-error">';
                echo '<a class="close" data-dismiss="alert">×</a>';
                echo '<strong>Oh snap!</strong> change a few things up and try submitting again.';
                echo '</div>';
            }
        }
        ?>
        <?php echo form_open_multipart('admin/projects/add'); ?>
        
        <!-- Project Name Developer -->
        <div class="row">
            <div class="input-field col s6">
                <input id="project_name" type="text" name="project_name" class="validate">
                <label class="active" for="project_name">Project Name</label>
            </div>
            <div class="input-field col s6">
                <input id="project_developer" type="text" name="project_developer"  class="validate">
                <label class="active" for="project_developer">Developer</label>
            </div>
        </div>
        <!-- Property Type Property Location -->
        <div class="row">
            <div class="input-field col s6">
                <select id="property_type" name="property_type" >
                    <option value="" disabled selected>Property Type</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
            </div>
            <div class="input-field col s6">
                <select id="project_location" name="project_location">
                    <option value="" disabled selected>Property Location</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
            </div>
        </div>

        <!-- Start date End date -->
        <div class="row">
            <div class="col s6">
                <label for="start_date">Start Date</label>
                <input id="start_date" name="start_date"  type="date" class="datepicker">
            </div>
            <div class="col s6">
                <label for="expected_end_date">End Date</label>
                <input type="date" class="datepicker" id ="expected_end_date" name="expected_end_date">
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <textarea id="description" class="materialize-textarea" name="description"></textarea>
                <label for="description">Description</label>
            </div>
        </div>

        <div class="row">
            <div class="file-field input-field col s6">
                <div class="btn normal-bt">
                    <span>File</span>
                    <input type="file" name="project_thumb_image"  id="project_thumb_image">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload Thumb Image">
                    <span id="project_thumb_image_error"></span>
                </div>
            </div>
            <div class="file-field input-field col s6">
                <div class="btn normal-bt">
                    <span>File</span>
                    <input type="file" name="project_detail_images" multiple>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload Detail Image">
                </div>
            </div>
        </div>

        <div class="col s12">
            <br>
            <br>
            <button class="bt-form-normal negative"><a href="<?php echo site_url('admin/projects'); ?>">Cancel</a></button>
            <button class="bt-form-normal">Submit</button>
        </div>

        <?php echo form_close(); ?>

    </div>

</div>