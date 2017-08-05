<div class="main-area">
    <!-- Header -->
    <div class="header-all-section">
        <div class="title">
            <h2>Properties</h2>
        </div>
        <div class="action-area">
            <button class="bt-add red">
                <a href="<?php echo base_url(); ?>admin/properties/sync">
                    <i class="zmdi zmdi-refresh-sync"></i>&nbsp;SYNC
                </a>
            </button>

        </div>

    </div>
    <?php
    //flash messages
    if (isset($this->session->flash_message)) {
        if ($this->session->flash_message == 'success') {
            echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Well done!</strong> Sync from xml completed';
            echo '</div>';
        } else {
            echo '<div class="alert alert-error">';
            echo $this->session->flash_message;
            echo '</div>';
        }
    }
    ?>
    <?php echo form_open_multipart('admin/employees/add/'); ?>

    <div class="table">
        <table class="striped responsive-table">
            <thead>
                <tr>
                    <th>Ref No</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Model</th>
                    <th>Type</th>
                    <th>Location</th>
                    <th>Agent</th>
                    <th>Updated On</th>
                    <th class="width-100">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($properties as $property) {
                    $i++;
                    echo '<tr>';
                    echo '<td>' . $property['property_ref_no'] . '</td>';
                    echo '<td>' . $property['property_title'] . '</td>';
                    echo '<td>' . $property['property_ad_type'] . '</td>';
                    echo '<td>' . $property['property_unit_model'] . '</td>';
                    echo '<td>' . $property['property_unit_type'] . '</td>';
                    echo '<td>' . $property['property_community'] . '</td>';
                    echo '<td>' . $property['property_listing_agent'] . '</td>';
                    echo '<td>' . $property['property_last_updated'] . '</td>';
                    echo '<td class="width-100 action-table">
                </td>';
                    echo '</tr>';
                }
                ?> 
            </tbody>
        </table>
        <?php echo $this->pagination->create_links(); ?>
    </div>

</div>