

<div class="main-area">
    <!-- Header -->
    <div class="header-all-section">
        <div class="title-full">
            <h2>Add Opportunity</h2>
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
                echo '<strong>Well done!</strong> new opportunity created with success.';
                echo '</div>';
            } else {
                echo '<div class="alert alert-error">';
                echo validation_errors();
                echo '</div>';
            }
        }
        ?>
        <?php echo form_open('admin/opportunities/add/'); ?>

        <!-- Project Name Developer -->
        <div class="row">
            <div class="input-field col s6">
                <input id="opportunity_title" type="text" name="opportunity_title" class="validate" value="<?php echo set_value('opportunity_title'); ?>">
                <label class="active" for="opportunity_title">Title</label>
            </div>

        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="opportunity_location" type="text" name="opportunity_location" class="validate" value="<?php echo set_value('opportunity_location'); ?>">
                <label class="active" for="opportunity_location">Location</label>
            </div>
             <div class="input-field col s6">
                <input id="opportunity_sub_location" type="text" name="opportunity_sub_location"  value="<?php echo set_value('opportunity_sub_location'); ?>">
                <label class="active" for="opportunity_sub_location">Sub Location</label>
            </div>

        </div>
        <div class="row">
            <div class="col s12"><label for="opportunity_description" >Description</label></div>
            <div class="input-field col s12">
                
                 <textarea id="opportunity_description" class="editor" name="opportunity_description" ><?php echo set_value('opportunity_description'); ?></textarea>
                 
            </div>

        </div>
        <div class="col s12">
            <br>
            <br>
            <button class="bt-form-normal negative"><a href="<?php echo site_url('admin/opportunities'); ?>">Cancel</a></button>
            <button class="bt-form-normal">Submit</button>
        </div>

        <?php echo form_close(); ?>

    </div>

</div>