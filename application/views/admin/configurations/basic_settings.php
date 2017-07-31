<div class="main-area">
    <!-- Header -->
    <?php echo form_open('admin/config/basic'); ?>
    <div class="header-all-section">
        <div class="title">
            <h2>Basic Settings</h2>
        </div>
        <div class="action-area">
            <button class="bt-add bt-form-normal" type="submit">
                    <i class="zmdi zmdi-save"></i>&nbsp;Save
            </button>
        </div>
    </div>
    <div class="add-new-form" style="float:left; width:100%">

        <div class="row">
            <div class="input-field col s6">
                <input id="dep_name" type="text" name="dep_name" class="validate" value="<?php echo set_value('dep_name'); ?>">
                <label class="active" for="dep_name">Admin Email</label>
            </div>

        </div>
        
    </div>
    <?php echo form_close(); ?>
</div>

