<div class="main-area">
    <!-- Header -->
    <div class="header-all-section">
        <div class="title">
            <h2>Team members</h2>
        </div>
        <div class="action-area">
            <button class="bt-add">
                <a href="<?php echo base_url(); ?>admin/employees/add">
                    <i class="zmdi zmdi-plus"></i>&nbsp;Add More
                </a>
            </button>
        </div>
        <div class="admin-search-box">
            <?php echo form_open('admin/employees') ?>
            <div class="filter-select">
                <?php echo form_dropdown('filter', array('emp_name' => 'Name', 'emp_registration_id' => 'Reg ID', 'emp_email_id' => 'Email', 'dep_name' => 'Department'), set_value('filter'), 'id="filter",class="browser-default"')
                ?>

            </div>
            <div class="filter-text">
                <?php echo form_input('search_string', set_value('search_string'), array('id' => 'search_string', 'placeholder' => 'Search text')) ?>
            </div>
            <div class="filter-button">

                <?php
                echo form_button(
                        array('name' => 'search_employee',
                            'id' => 'search_employee',
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
                    <th><?php echo anchor('admin/employees/emp_name/' . (($sort_order == 'asc' && $sort_by == 'emp_name') ? 'desc' : 'asc'), 'Name'); ?></th>
                    <th><?php echo anchor('admin/employees/emp_registration_id/' . (($sort_order == 'asc' && $sort_by == 'emp_registration_id') ? 'desc' : 'asc'), 'Reg ID'); ?></th>
                    <th><?php echo anchor('admin/employees/dep_name/' . (($sort_order == 'asc' && $sort_by == 'dep_name') ? 'desc' : 'asc'), 'Department'); ?></th>
                    <th><?php echo anchor('admin/employees/des_name/' . (($sort_order == 'asc' && $sort_by == 'des_name') ? 'desc' : 'asc'), 'Designation'); ?></th>
                    <th><?php echo anchor('admin/employees/emp_contact_no/' . (($sort_order == 'asc' && $sort_by == 'emp_contact_no') ? 'desc' : 'asc'), 'Contact No'); ?></th>
                    <th><?php echo anchor('admin/employees/emp_email_id/' . (($sort_order == 'asc' && $sort_by == 'emp_email_id') ? 'desc' : 'asc'), 'Email'); ?></th>
                    <th><?php echo anchor('admin/employees/emp_created_at/' . (($sort_order == 'asc' && $sort_by == 'emp_created_at') ? 'desc' : 'asc'), 'Added On'); ?></th>

                    <th class="width-100">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($employees as $row) {
                    $i++;
                    echo '<tr>';
                    echo '<td>' . $i . '</td>';
                    echo '<td>' . $row['emp_name'] . '</td>';
                    echo '<td>' . $row['emp_registration_id'] . '</td>';
                    echo '<td>' . $row['dep_name'] . '</td>';
                    echo '<td>' . $row['des_name'] . '</td>';
                    echo '<td>' . $row['emp_contact_no'] . '</td>';
                    echo '<td>' . $row['emp_email_id'] . '</td>';
                    echo '<td>' . $row['emp_created_at'] . '</td>';
                    echo '<td class="width-100 action-table">
                  <a href="' . site_url("admin") . '/employees/update/' . $row['emp_id'] . '"><button class="edit"><i class="zmdi zmdi-edit"></i></button></a>  
                  <a href="' . site_url("admin") . '/employees/delete/' . $row['emp_id'] . '"><button class="delete"><i class="zmdi zmdi-delete"></i></button></a>
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