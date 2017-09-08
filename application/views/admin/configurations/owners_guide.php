<div class="main-area">
    <!-- Header -->
    <?php echo form_open('admin/config/ownersguide'); ?>
    <div class="header-all-section">
        <div class="title-normal">
            <h2>Owners Guide</h2>
        </div>
        <div class="action-area">
            <button class="bt-add bt-form-normal" type="submit">
                    <i class="zmdi zmdi-save"></i>&nbsp;Save
            </button>
        </div>
    </div>
    <div class="add-new-form" style="float:left; width:100%">

        <ul  class="collapsible " data-collapsible="accordion" style="border: solid 1px #333 !important;">
            <li>
                <div class="collapsible-header waves-effect waves-teal active">
                    <a >SELLING PROCESS</a>
                </div>

                <div class="collapsible-body">
                    <textarea class="editor" name="own_guide_selling_process" id="own_guide_selling_process"><?php echo array_key_exists("own_guide_selling_process", $configurations)? htmlspecialchars_decode($configurations['own_guide_selling_process']):""; ?></textarea>
                </div>
            </li>
        </ul>
        <ul  class="collapsible " data-collapsible="accordion" style="border: solid 1px #333 !important;">
            <li>
                <div class="collapsible-header waves-effect waves-teal">
                    <a >LEASING PROCESS</a>
                </div>

                <div class="collapsible-body">
                    <textarea class="editor" name="own_guide_leasing_process" id="own_guide_leasing_process"><?php echo array_key_exists("own_guide_leasing_process", $configurations)? htmlspecialchars_decode($configurations['own_guide_leasing_process']):""; ?></textarea>
                </div>
            </li>
        </ul>
        <ul  class="collapsible " data-collapsible="accordion" style="border: solid 1px #333 !important;">
            <li>
                <div class="collapsible-header waves-effect waves-teal">
                    <a >WHY BRIDGES & ALLIES</a>
                </div>

                <div class="collapsible-body">
                    <textarea class="editor" name="own_guide_why_we_are" id="own_guide_why_we_are"><?php echo array_key_exists("own_guide_why_we_are", $configurations)? htmlspecialchars_decode($configurations['own_guide_why_we_are']):""; ?></textarea>
                </div>
            </li>
        </ul>
        <ul  class="collapsible " data-collapsible="accordion" style="border: solid 1px #333 !important;">
            <li>
                <div class="collapsible-header waves-effect waves-teal">
                    <a >FAQ</a>
                </div>

                <div class="collapsible-body">
                    <textarea class="editor" name="own_guide_faq" id="own_guide_faq"><?php echo array_key_exists("own_guide_faq", $configurations)? htmlspecialchars_decode($configurations['own_guide_faq']):""; ?></textarea>
                </div>
            </li>
        </ul>


    </div>
    <?php echo form_close(); ?>
</div>

