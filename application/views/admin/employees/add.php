

<div class="main-area">
    <!-- Header -->
    <div class="header-all-section">
        <div class="title-full">
            <h2>Add Employee</h2>
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
                echo '<strong>Well done!</strong> new employee created with success.';
                echo '</div>';
            } else {
                echo '<div class="alert alert-error">';
                echo validation_errors();
                echo '</div>';
            }
        }
        ?>
        <?php echo form_open_multipart('admin/employees/add/'); ?>

        <!-- Project Name Developer -->
        <div class="row">
            <div class="input-field col s6">
                <input id="emp_name" type="text" name="emp_name" class="validate" value="<?php echo set_value('emp_name'); ?>">
                <label class="active" for="emp_name">Name</label>
            </div>

            <div class="file-field input-field col s6">
                <div class="btn normal-bt">
                    <span>File</span>
                    <!--                    data-max-width="300" data-max-height="300" data-min-width="300" data-min-height="300"-->
                    <input type="file" name="emp_profile_image" class="image-upload" id="emp_profile_image" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*" >
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate image-upload-text" type="text" placeholder="Upload profile image" value="<?php echo set_value('emp_profile_image'); ?>">
                    <span  class="image-upload-error"></span>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="input-field col s6">
                <select id="emp_department" name="emp_department">
                    <option value="" disabled selected>Choose department</option>
                    <?php
                    foreach ($departments as $department) {

                        echo '<option value="' . $department['dep_id'] . '"' . set_select('emp_department', $department['dep_id']) . '>' . $department['dep_name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="input-field col s6">
                <select id="emp_designation" name="emp_designation">
                    <option value="" disabled selected>Choose designation</option>
                    <?php
                    foreach ($designations as $designation) {

                        echo '<option value="' . $designation['des_id'] . '"' . set_select('emp_designation', $designation['des_id']) . '>' . $designation['des_name'] . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="emp_registration_id" type="text" name="emp_registration_id" value="<?php echo set_value('emp_registration_id'); ?>">
                <label  for="emp_registration_id">RERA ID</label>
            </div>
            <div class="input-field col s6">
                <input id="emp_location" type="text" name="emp_location" value="<?php echo set_value('emp_location'); ?>">
                <label  for="emp_location">Location</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="emp_contact_no" type="tel" name="emp_contact_no" class="validate" value="<?php echo set_value('emp_contact_no'); ?>">
                <label  for="emp_contact_no">Contact No</label>
            </div>
            <div class="input-field col s6">
                <input id="emp_email_id" type="email" name="emp_email_id" class="validate" value="<?php echo set_value('emp_email_id'); ?>">
                <label  for="emp_email_id" data-error="Enter valid email id">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="emp_area_specialized" type="text" name="emp_area_specialized" value="<?php echo set_value('emp_area_specialized'); ?>">
                <label  for="emp_area_specialized">Area Specialized</label>
            </div>
            <div class="input-field col s6">
                <input id="emp_languages" type="text" name="emp_languages" value="<?php echo set_value('emp_languages'); ?>">
                <label  for="emp_languages">Speaks</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <textarea id="emp_description" class="materialize-textarea" name="emp_description" ><?php echo set_value('emp_description'); ?></textarea>
                <label for="emp_description">Description</label>
            </div>
        </div>
        <div class="row">
            <div class="col s6" style="margin-top: 1rem;    position: relative;">
                <input type="checkbox" id="emp_featured_agent" class="filled-in" name="emp_featured_agent"  value="1" <?php echo set_checkbox('emp_featured_agent', "1"); ?> />
                <label for="emp_featured_agent">Featured Agent</label>
            </div>
        </div>
        <div class="col s12">
            <br>
            <br>
            <button class="bt-form-normal negative"><a href="<?php echo site_url('admin/employees'); ?>">Cancel</a></button>
            <button class="bt-form-normal">Submit</button>
        </div>

        <?php echo form_close(); ?>

    </div>

</div>