<div class="main-area">
    <!-- Header -->
    <?php echo form_open('admin/config/about'); ?>
    <div class="header-all-section">
        <div class="title">
            <h2>About us</h2>
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
                    <a >WHO WE ARE</a>
                </div>

                <div class="collapsible-body">
                    <textarea class="editor" name="about_us_who_we_are" id="about_us_who_we_are"><?php echo array_key_exists("about_us_who_we_are", $configurations)? $configurations['about_us_who_we_are']:""; ?></textarea>
                </div>
            </li>
        </ul>
        <ul  class="collapsible " data-collapsible="accordion" style="border: solid 1px #333 !important;">
            <li>
                <div class="collapsible-header waves-effect waves-teal">
                    <a >VISION</a>
                </div>

                <div class="collapsible-body">
                    <textarea class="editor" name="about_us_vision" id="about_us_vision"><?php echo array_key_exists("about_us_vision", $configurations)? $configurations['about_us_vision']:""; ?></textarea>
                </div>
            </li>
        </ul>
        <ul  class="collapsible " data-collapsible="accordion" style="border: solid 1px #333 !important;">
            <li>
                <div class="collapsible-header waves-effect waves-teal">
                    <a >MISSION</a>
                </div>

                <div class="collapsible-body">
                    <textarea class="editor" name="about_us_mission" id="about_us_mission"><?php echo array_key_exists("about_us_mission", $configurations)? $configurations['about_us_mission']:""; ?></textarea>
                </div>
            </li>
        </ul>
        <ul  class="collapsible " data-collapsible="accordion" style="border: solid 1px #333 !important;">
            <li>
                <div class="collapsible-header waves-effect waves-teal">
                    <a >VALUE</a>
                </div>

                <div class="collapsible-body">
                    <textarea class="editor" name="about_us_value" id="about_us_value"><?php echo array_key_exists("about_us_value", $configurations)? $configurations['about_us_value']:""; ?></textarea>
                </div>
            </li>
        </ul>


    </div>
    <?php echo form_close(); ?>
</div>

