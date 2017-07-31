

<div class="main-area">
    <!-- Header -->
    <div class="header-all-section">
        <div class="title-full">
            <h2>Edit Employee</h2>
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
                echo '<strong>Well done!</strong> designation updated with success.';
                echo '</div>';
            } else {
                echo '<div class="alert alert-error">';
                echo validation_errors();
                echo '</div>';
            }
        }
        ?>
        <?php echo form_open('admin/designations/update/'.$this->uri->segment(4).''); ?>

        <!-- Project Name Developer -->
        <div class="row">
            <div class="input-field col s6">
                <input id="des_name" type="text" name="des_name" class="validate" value="<?php echo set_value('des_name', $designation['des_name']); ?>">
                <label class="active" for="des_name">Name</label>
            </div>

           

        </div>
        <div class="col s12">
            <br>
            <br>
            <button class="bt-form-normal negative"><a href="<?php echo site_url('admin/designations'); ?>">Cancel</a></button>
            <button class="bt-form-normal">Submit</button>
        </div>

        <?php echo form_close(); ?>

    </div>

</div>