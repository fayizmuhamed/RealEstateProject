<div class="main-area">
    <!-- Header -->
    <?php echo form_open('admin/config/buyersguide'); ?>
    <div class="header-all-section">
        <div class="title-normal">
            <h2>Buyers Guide</h2>
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
                    <a >SELLING PROCEDURE</a>
                </div>

                <div class="collapsible-body">
                    <textarea class="editor" name="buy_guide_selling_procedure" id="buy_guide_selling_procedure"><?php echo array_key_exists("buy_guide_selling_procedure", $configurations)? $configurations['buy_guide_selling_procedure']:""; ?></textarea>
                </div>
            </li>
        </ul>
        <ul  class="collapsible " data-collapsible="accordion" style="border: solid 1px #333 !important;">
            <li>
                <div class="collapsible-header waves-effect waves-teal">
                    <a >UAE PROPERTY LAWS</a>
                </div>

                <div class="collapsible-body">
                    <textarea class="editor" name="buy_guide_uae_property_law" id="buy_guide_uae_property_law"><?php echo array_key_exists("buy_guide_uae_property_law", $configurations)? $configurations['buy_guide_uae_property_law']:""; ?></textarea>
                </div>
            </li>
        </ul>
        <ul  class="collapsible " data-collapsible="accordion" style="border: solid 1px #333 !important;">
            <li>
                <div class="collapsible-header waves-effect waves-teal">
                    <a >WHY BRIDGES & ALLIES</a>
                </div>

                <div class="collapsible-body">
                    <textarea class="editor" name="buy_guide_why_we_are" id="buy_guide_why_we_are"><?php echo array_key_exists("buy_guide_why_we_are", $configurations)? $configurations['buy_guide_why_we_are']:""; ?></textarea>
                </div>
            </li>
        </ul>
        <ul  class="collapsible " data-collapsible="accordion" style="border: solid 1px #333 !important;">
            <li>
                <div class="collapsible-header waves-effect waves-teal">
                    <a >FAQ</a>
                </div>

                <div class="collapsible-body">
                    <textarea class="editor" name="buy_guide_faq" id="buy_guide_faq"><?php echo array_key_exists("buy_guide_faq", $configurations)? $configurations['buy_guide_faq']:""; ?></textarea>
                </div>
            </li>
        </ul>


    </div>
    <?php echo form_close(); ?>
</div>

