<div class="main-area">
    <!-- Header -->
    <?php echo form_open('admin/config/careerguide'); ?>
    <div class="header-all-section">
        <div class="title-normal">
            <h2>Career Guide</h2>
        </div>
        <div class="action-area">
            <button class="bt-add bt-form-normal" type="submit">
                    <i class="zmdi zmdi-save"></i>&nbsp;Save
            </button>
        </div>
    </div>
    <div class="add-new-form" style="float:left; width:100%">
     <textarea class="editor" name="career_guide_description" id="career_guide_description" height="400px"><?php echo array_key_exists("career_guide_description", $configurations)? htmlspecialchars_decode($configurations['career_guide_description']):""; ?></textarea>
             


    </div>
    <?php echo form_close(); ?>
</div>

