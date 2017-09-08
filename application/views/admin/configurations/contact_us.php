<div class="main-area">
    <!-- Header -->
    <?php echo form_open('admin/config/contactus'); ?>
    <div class="header-all-section">
        <div class="title-normal">
            <h2>Contact us</h2>
        </div>
        <div class="action-area">
            <button class="bt-add bt-form-normal" type="submit">
                    <i class="zmdi zmdi-save"></i>&nbsp;Save
            </button>
        </div>
    </div>
    <div class="add-new-form" style="float:left; width:100%">

        <div class="row">
            
            <div class="input-field col s12">
               <textarea class="materialize-textarea editor" name="contact_us_address" id="contact_us_address" height="400px"><?php echo array_key_exists("contact_us_address", $configurations)? $configurations['contact_us_address']:""; ?></textarea>
       
                <label class="active" for="contact_us_address">Address</label>
            </div>
        </div>
        <div class="row">
             <div class="input-field col s6">
                <input id="contact_us_email" type="text" name="contact_us_email" class="validate" value="<?php echo array_key_exists("contact_us_email", $configurations)? $configurations['contact_us_email']:""; ?>">
                <label class="active" for="contact_us_email">Email</label>
            </div>
            <div class="input-field col s6">
                <input id="contact_us_contact_no" type="text" name="contact_us_contact_no" class="validate" value="<?php echo array_key_exists("contact_us_contact_no", $configurations)? $configurations['contact_us_contact_no']:""; ?>">
                <label class="active" for="contact_us_contact_no">Contact number</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="contact_us_opening_hours" type="text" name="contact_us_opening_hours"  value="<?php echo array_key_exists("contact_us_opening_hours", $configurations)? $configurations['contact_us_opening_hours']:""; ?>">
                
                <label class="active" for="contact_us_opening_hours">Opening hours</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="contact_us_location" type="text" name="contact_us_location"  value='<?php echo set_value('contact_us_location',array_key_exists("contact_us_location", $configurations)? htmlspecialchars_decode($configurations['contact_us_location']):""); ?>'>
                <label class="active" for="contact_us_location">Location Map Url</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="contact_us_facebook" type="text" name="contact_us_facebook"  value="<?php echo array_key_exists("contact_us_facebook", $configurations)? htmlspecialchars_decode($configurations['contact_us_facebook']):""; ?>">
                <label class="active" for="contact_us_facebook">Facebook Url</label>
            </div>
            <div class="input-field col s6">
                <input id="contact_us_twitter" type="text" name="contact_us_twitter"  value="<?php echo array_key_exists("contact_us_twitter", $configurations)? htmlspecialchars_decode($configurations['contact_us_twitter']):""; ?>">
                <label class="active" for="contact_us_twitter">Twitter Url</label>
            </div>
        </div>
        <div class="row">
             <div class="input-field col s6">
                <input id="contact_us_linked_in" type="text" name="contact_us_linked_in" value="<?php echo array_key_exists("contact_us_linked_in", $configurations)? htmlspecialchars_decode($configurations['contact_us_linked_in']):""; ?>">
                <label class="active" for="contact_us_linked_in">Linked In Url</label>
            </div>
             <div class="input-field col s6">
                <input id="contact_us_instagram" type="text" name="contact_us_instagram"  value="<?php echo array_key_exists("contact_us_instagram", $configurations)? htmlspecialchars_decode($configurations['contact_us_instagram']):""; ?>">
                <label class="active" for="contact_us_instagram">Instagram Url</label>
            </div>

        </div>
        
    </div>
    <?php echo form_close(); ?>
</div>

