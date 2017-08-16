<div class="main-area">
    <!-- Header -->


    <div class="header-all-section">
        <div class="title-normal">
            <h2>Manage Your Password</h2>
        </div>
    </div>

    <div class="add-new-form" style="float:left; width:100%">
        <?php
        //flash messages
        if (isset($this->session->flash_message)) {
            if ($this->session->flash_message == TRUE) {
                echo '<div class="alert alert-success">';
                echo '<a class="close" data-dismiss="alert">*</a>';
                echo '<strong>Password Changed successfully</strong>';
                echo '</div>';
            } else {
                echo '<div class="alert alert-error">';
                echo validation_errors();
                echo '</div>';
            }
        }
        ?>
        <?php echo form_open('admin/changepassword'); ?>
        <div class="row">
            <div class="input-field col s6">
                <input id="current_password" type="text" name="current_password" class="validate" value="<?php echo set_value('current_password'); ?>">
                <label class="active" for="current_password">Current Password</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="new_password" type="text" name="new_password" class="validate" value="<?php echo set_value('new_password'); ?>">
                <label class="active" for="new_password">New Password</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="confirm_password" type="text" name="confirm_password" class="validate" value="<?php echo set_value('confirm_password'); ?>">
                <label class="active" for="confirm_password">Confirm Password</label>
            </div>
        </div>

        <div class="col s12">
            <br>
            <br>
            <button class="bt-form-normal negative"><a href="<?php echo site_url('admin/home'); ?>">Cancel</a></button>
            <button class="bt-form-normal" type="submit">Submit</button>
        </div>
        <?php echo form_close(); ?>
    </div>

</div>

