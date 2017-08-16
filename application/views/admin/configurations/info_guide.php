<div class="main-area">
    <!-- Header -->
    <?php echo form_open('admin/config/infoguide'); ?>
    <div class="header-all-section">
        <div class="title-normal">
            <h2>Info Guide</h2>
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
                    <a >DUBAI</a>
                </div>

                <div class="collapsible-body">
                    <textarea class="editor" name="info_guide_dubai" id="info_guide_dubai"><?php echo array_key_exists("info_guide_dubai", $configurations)? $configurations['info_guide_dubai']:""; ?></textarea>
                </div>
            </li>
        </ul>
        <ul  class="collapsible " data-collapsible="accordion" style="border: solid 1px #333 !important;">
            <li>
                <div class="collapsible-header waves-effect waves-teal">
                    <a >NEWS & REPORTS</a>
                </div>

                <div class="collapsible-body">
                    <textarea class="editor" name="info_guide_news_and_reports" id="info_guide_news_and_reports"><?php echo array_key_exists("info_guide_news_and_reports", $configurations)? $configurations['info_guide_news_and_reports']:""; ?></textarea>
                </div>
            </li>
        </ul>
        <ul  class="collapsible " data-collapsible="accordion" style="border: solid 1px #333 !important;">
            <li>
                <div class="collapsible-header waves-effect waves-teal">
                    <a >INVESTOR VISA</a>
                </div>

                <div class="collapsible-body">
                    <textarea class="editor" name="info_guide_investor_visa" id="info_guide_investor_visa"><?php echo array_key_exists("info_guide_investor_visa", $configurations)? $configurations['info_guide_investor_visa']:""; ?></textarea>
                </div>
            </li>
        </ul>
        <ul  class="collapsible " data-collapsible="accordion" style="border: solid 1px #333 !important;">
            <li>
                <div class="collapsible-header waves-effect waves-teal">
                    <a >RERA UPDATES</a>
                </div>

                <div class="collapsible-body">
                    <textarea class="editor" name="info_guide_rera_updates" id="info_guide_rera_updates"><?php echo array_key_exists("info_guide_rera_updates", $configurations)? $configurations['info_guide_rera_updates']:""; ?></textarea>
                </div>
            </li>
        </ul>
         <ul  class="collapsible " data-collapsible="accordion" style="border: solid 1px #333 !important;">
            <li>
                <div class="collapsible-header waves-effect waves-teal">
                    <a >FAQs</a>
                </div>

                <div class="collapsible-body">
                    <textarea class="editor" name="info_guide_faq" id="info_guide_faq"><?php echo array_key_exists("info_guide_faq", $configurations)? $configurations['info_guide_faq']:""; ?></textarea>
                </div>
            </li>
        </ul>


    </div>
    <?php echo form_close(); ?>
</div>

