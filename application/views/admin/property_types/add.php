

<div class="main-area">
    <!-- Header -->
    <div class="header-all-section">
        <div class="title-full">
            <h2>Add Property Type</h2>
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
                echo '<strong>Well done!</strong> new property type created with success.';
                echo '</div>';
            } else {
                echo '<div class="alert alert-error">';
                echo '<a class="close" data-dismiss="alert">×</a>';
                echo '<strong>Oh snap!</strong> change a few things up and try submitting again.';
                echo '</div>';
            }
        }
        ?>
        <?php echo form_open('admin/propertytypes/add'); ?>
        
        <!-- Project Name Developer -->
        <div class="row">
            <div class="input-field col s6">
                <input id="property_type_name" type="text" name="property_type_name" class="validate">
                <label class="active" for="property_type_name">Property Type Name</label>
            </div>
           
        </div>
        <!-- Property Type Property Location -->
        <div class="row">
            <div class="input-field col s6">
                <select id="parent_property_type" name="property_type_model" multiple="">
                    <option value="" disabled selected>Property Model</option>
                    <?php                            
                     foreach ($property_models as $row) {
                         
                          echo  '<option value="'.$row['pm_id'].'">'.$row['pm_name'].'</option>';
                     }?>
                </select>
            </div>
        </div>
        <div class="col s12">
            <br>
            <br>
            <button class="bt-form-normal negative"><a href="<?php echo site_url('admin/propertytypes'); ?>">Cancel</a></button>
            <button class="bt-form-normal">Submit</button>
        </div>

        <?php echo form_close(); ?>

    </div>

</div>