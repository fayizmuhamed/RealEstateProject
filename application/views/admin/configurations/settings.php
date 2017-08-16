<div class="main-area">
    <!-- Header -->
    <?php echo form_open('admin/config/settings'); ?>
    <div class="header-all-section">
        <div class="title-normal">
            <h2>Settings</h2>
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
                <input id="admin_email" type="text" name="admin_email" class="validate" value="<?php echo array_key_exists("admin_email", $configurations) ? $configurations['admin_email'] : ""; ?>">
                <label class="active" for="admin_email">Admin Email</label>
            </div>
        </div>
        <ul  class="collapsible " data-collapsible="accordion" style="border: solid 1px #333 !important;">
            <li>
                <div class="collapsible-header waves-effect waves-teal active">
                    <a >MAIL SERVER CONFIGURATIONS</a>
                </div>

                <div class="collapsible-body">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="mailserver_url" type="text" name="mailserver_url"  value="<?php echo array_key_exists("mailserver_url", $configurations) ? $configurations['mailserver_url'] : ""; ?>">
                            <label class="active" for="mailserver_url">SMTP Host</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="mailserver_port" type="text" name="mailserver_port"  value="<?php echo array_key_exists("mailserver_port", $configurations) ? $configurations['mailserver_port'] : ""; ?>">
                            <label class="active" for="mailserver_port">SMTP Port</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="mailserver_login" type="text" name="mailserver_login"  value="<?php echo array_key_exists("mailserver_login", $configurations) ? $configurations['mailserver_login'] : ""; ?>">
                            <label class="active" for="mailserver_login">User name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="mailserver_password" type="password" name="mailserver_password"  value="<?php echo array_key_exists("mailserver_password", $configurations) ? $configurations['mailserver_password'] : ""; ?>">
                            <label class="active" for="mailserver_password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col s6" style="margin-top: 1rem;    position: relative;">
                            <input type="checkbox" id="mailserver_tls_or_ssl" class="filled-in" name="mailserver_tls_or_ssl"  value="yes" <?php echo set_checkbox('mailserver_tls_or_ssl', "yes", (array_key_exists("mailserver_tls_or_ssl", $configurations)&&!empty($configurations['mailserver_tls_or_ssl']) && $configurations['mailserver_tls_or_ssl'] == "yes" ? TRUE : FALSE)); ?>/>
                            <label for="mailserver_tls_or_ssl">Enable TLS/SSL</label>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

    </div>
    <?php echo form_close(); ?>
</div>

