<div class="main-area">
    <!-- Header -->
    <div class="header-all-section">
        <div class="title">
            <h2>Departments</h2>
        </div>
        <div class="action-area">
            <button class="bt-add">
                <a href="<?php echo base_url(); ?>admin/departments/add">
                    <i class="zmdi zmdi-plus"></i>&nbsp;Add More
                </a>
            </button>
        </div>
        <div class="admin-search-box">
            <?php echo form_open('admin/departments') ?>
            <div class="filter-select">
                <?php echo form_dropdown('filter', array('dep_name' => 'Name'), set_value('filter'), 'id="filter",class="browser-default"')
                ?>

            </div>
            <div class="filter-text">
                <?php echo form_input('search_string', set_value('search_string'), array('id' => 'search_string', 'placeholder' => 'Search text')) ?>
            </div>
            <div class="filter-button">

                <?php
                echo form_button(
                        array('name' => 'search_department',
                            'id' => 'search_department',
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
                    <th><?php echo anchor('admin/departments/dep_name/' . (($sort_order == 'asc' && $sort_by == 'dep_name') ? 'desc' : 'asc'), 'Name'); ?></th>
                    <th><?php echo anchor('admin/departments/dep_created_at/' . (($sort_order == 'asc' && $sort_by == 'dep_created_at') ? 'desc' : 'asc'), 'Added On'); ?></th>

                    <th class="width-150">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($departments as $department) {
                    $i++;
                    echo '<tr>';
                    echo '<td>' . $i . '</td>';
                    echo '<td>' . $department['dep_name'] . '</td>';
                    echo '<td>' . $department['dep_created_at'] . '</td>';
                    echo '<td class="width-150 action-table">
                  <a href="' . site_url("admin") . '/departments/update/' . $department['dep_id'] . '"><button class="edit"><i class="zmdi zmdi-edit"></i></button></a>  
                  <a href="' . site_url("admin") . '/departments/delete/' . $department['dep_id'] . '"><button class="delete"><i class="zmdi zmdi-delete"></i></button></a>
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