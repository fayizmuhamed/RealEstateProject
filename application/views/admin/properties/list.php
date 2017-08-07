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
        <div class="admin-search-box">
            <?php echo form_open('admin/properties') ?>
            <div class="filter-select">
                <?php echo form_dropdown('filter', array('property_ref_no' => 'Ref no', 'property_title' => 'Title', 'property_ad_type' => 'Category', 'property_unit_model' => 'Model', 'property_community' => 'Location'), set_value('filter'), 'id="filter",class="browser-default"')
                ?>

            </div>
            <div class="filter-text">
                <?php echo form_input('search_string', set_value('search_string'), array('id' => 'search_string', 'placeholder' => 'Search text')) ?>
            </div>
            <div class="filter-button">

                <?php
                echo form_button(
                        array('name' => 'search_property',
                            'id' => 'search_property',
                            'value' => 'true',
                            'type' => 'submit',
                            'class' => 'btn waves-effect waves-light btn-search',
                            'content' => '<i class="zmdi zmdi-search"></i>'));
                ?>

            </div>
            <?php echo form_close() ?>
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

    <div class="table">
        <table class="striped responsive-table">
            <thead>
                <tr>
                    <th><?php echo anchor('admin/properties/property_ref_no/' . (($sort_order == 'asc' && $sort_by == 'property_ref_no') ? 'desc' : 'asc'), 'Ref No'); ?></th>
                    <th><?php echo anchor('admin/properties/property_title/' . (($sort_order == 'asc' && $sort_by == 'property_title') ? 'desc' : 'asc'), 'Title'); ?></th>
                    <th><?php echo anchor('admin/properties/property_ad_type/' . (($sort_order == 'asc' && $sort_by == 'property_ad_type') ? 'desc' : 'asc'), 'Category'); ?></th>
                    <th><?php echo anchor('admin/properties/property_unit_model/' . (($sort_order == 'asc' && $sort_by == 'property_unit_model') ? 'desc' : 'asc'), 'Model'); ?></th>
                    <th><?php echo anchor('admin/properties/property_unit_type/' . (($sort_order == 'asc' && $sort_by == 'property_unit_type') ? 'desc' : 'asc'), 'Type'); ?></th>
                    <th><?php echo anchor('admin/properties/property_community/' . (($sort_order == 'asc' && $sort_by == 'property_community') ? 'desc' : 'asc'), 'Location'); ?></th>
                    <th><?php echo anchor('admin/properties/property_listing_agent/' . (($sort_order == 'asc' && $sort_by == 'property_listing_agent') ? 'desc' : 'asc'), 'Agent'); ?></th>
                    <th><?php echo anchor('admin/properties/property_last_updated/' . (($sort_order == 'asc' && $sort_by == 'property_last_updated') ? 'desc' : 'asc'), 'Updated On'); ?></th>

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
                         <a href="' . site_url("admin") . '/properties/navigations/' . $property['property_ref_no'] . '"><button class="delete tooltipped" data-tooltip="Property navigations"><i class="zmdi zmdi-navigation"></i></button></a>  
                 
                </td>';
                    echo '</tr>';
                }
                ?> 
            </tbody>
        </table>

        <br />
        <div class="clear pagination">
            <ul>
                <p><?php echo $this->pagination->create_links(); ?></p>
            </ul>    
        </div>
    </div>

</div>