
<div class="main-area">
    <!-- Header -->
    <div class="header-all-section">
        <div class="title">
            <h2>Property Types</h2>
        </div>
        
        <div class="action-area">
            <button class="bt-add">
                <a href="<?php echo base_url(); ?>admin/propertytypes/add">
                    <i class="zmdi zmdi-plus"></i>&nbsp;Add More
                </a>
            </button>
        </div>
        <div class="admin-search-box">
            <?php echo form_open('admin/propertytypes') ?>
            <div class="filter-select">
                <?php echo form_dropdown('filter', array('pt_name' => 'Name', 'pm_name' => 'Unit model'), set_value('filter'), 'id="filter",class="browser-default"')
                ?>

            </div>
            <div class="filter-text">
                <?php echo form_input('search_string', set_value('search_string'), array('id' => 'search_string', 'placeholder' => 'Search text')) ?>
            </div>
            <div class="filter-button">

                <?php
                echo form_button(
                        array('name' => 'search_property_type',
                            'id' => 'search_property_type',
                            'value' => 'true',
                            'type' => 'submit',
                            'class' => 'btn waves-effect waves-light btn-search',
                            'content' => '<i class="zmdi zmdi-search"></i>'));
                ?>

            </div>
            <?php echo form_close() ?>
        </div>
    </div>

    <div class="table">
        <table class="striped responsive-table">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th><?php echo anchor('admin/propertytypes/pt_name/' . (($sort_order == 'asc' && $sort_by == 'pt_name') ? 'desc' : 'asc'), 'Name'); ?></th>
                    <th><?php echo anchor('admin/propertytypes/pm_name/' . (($sort_order == 'asc' && $sort_by == 'pm_name') ? 'desc' : 'asc'), 'Model'); ?></th>
                    <th><?php echo anchor('admin/propertytypes/pt_created_at/' . (($sort_order == 'asc' && $sort_by == 'pt_created_at') ? 'desc' : 'asc'), 'Added On'); ?></th>
                    <th class="width-150">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($property_types as $property_type) {
                    $i++;
                    echo '<tr>';
                    echo '<td>' . $i . '</td>';
                    echo '<td>' . $property_type['pt_name'] . '</td>';
                    echo '<td>' . $property_type['pt_model_name'] . '</td>';
                    echo '<td>' . $property_type['pt_created_at'] . '</td>';
                    echo '<td class="width-150 action-table">
                  <a href="' . site_url("admin") . '/propertytypes/update/' . $property_type['pt_id'] . '"><button class="edit"><i class="zmdi zmdi-edit"></i></button></a>  
                  <a href="' . site_url("admin") . '/propertytypes/delete/' . $property_type['pt_id'] . '"><button class="delete"><i class="zmdi zmdi-delete"></i></button></a>
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