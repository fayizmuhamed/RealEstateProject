

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
            <div class="input-field col s12 m6">
                <input id="property_type_name" type="text" name="property_type_name" class="validate">
                <label class="active" for="property_type_name">Property Type Name</label>
            </div>
           
        </div>
        <!-- Property Type Property Location -->
        <div class="row">
            <div class="input-field col s12 m6">
                <select id="property_type_model" name="property_type_model">
                    <option value="" disabled selected>Property Model</option>
                    <?php                            
                     foreach ($property_models as $property_model) {
                         
                          echo  '<option value="'.$property_model['pm_id'].'"'. set_select('property_type_model',$property_model['pm_id']) . '>' .$property_model['pm_name'].'</option>';
                     }?>
                </select>
            </div>
        </div>
         <div class="row">
             <div class="input-field col s12 m6">
                  <input id="pt_priority" type="number" name="pt_priority"  class="validate" value="<?php echo set_value('pt_priority'); ?>">
                <label class="active" for="pt_priority">Priority</label>
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