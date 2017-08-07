<div class="main-area">
    <!-- Header -->
    <div class="header-all-section">
        <div class="title">
            <h2>Projects</h2>
        </div>
        <div class="action-area">
            <button class="bt-add">
                <a href="<?php echo base_url(); ?>admin/projects/add">
                    <i class="zmdi zmdi-plus"></i>&nbsp;Add More
                </a>
            </button>
        </div>
        <div class="admin-search-box">
            <?php echo form_open('admin/projects') ?>
            <div class="filter-select">
                <?php echo form_dropdown('filter', array('project_name' => 'Name','project_reference' => 'Ref no','project_location' => 'Location','project_developer' => 'Developer'), set_value('filter'), 'id="filter",class="browser-default"')
                ?>

            </div>
            <div class="filter-text">
                <?php echo form_input('search_string', set_value('search_string'), array('id' => 'search_string', 'placeholder' => 'Search text')) ?>
            </div>
            <div class="filter-button">

                <?php
                echo form_button(
                        array('name' => 'search_project',
                            'id' => 'search_project',
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
                    <th><?php echo anchor('admin/projects/project_name/' . (($sort_order == 'asc' && $sort_by == 'project_name') ? 'desc' : 'asc'), 'Name'); ?></th>
                    <th><?php echo anchor('admin/projects/project_reference/' . (($sort_order == 'asc' && $sort_by == 'project_reference') ? 'desc' : 'asc'), 'Reference'); ?></th>
                    <th><?php echo anchor('admin/projects/project_location/' . (($sort_order == 'asc' && $sort_by == 'project_location') ? 'desc' : 'asc'), 'Location'); ?></th>
                    <th><?php echo anchor('admin/projects/project_developer/' . (($sort_order == 'asc' && $sort_by == 'project_developer') ? 'desc' : 'asc'), 'Developer'); ?></th>
                    
                    <th class="width-150">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($projects as $row) {
                    $i++;
                    echo '<tr>';
                    echo '<td>' . $i . '</td>';
                    echo '<td>' . $row['project_name'] . '</td>';
                    echo '<td>' . $row['project_reference'] . '</td>';
                    echo '<td>' . $row['project_location'] . '</td>';
                    echo '<td>' . $row['project_developer'] . '</td>';
                    echo '<td class="width-150 action-table">
                  <a href="' . site_url("admin") . '/project/edit/' . $row['project_id'] . '"><button class="edit"><i class="zmdi zmdi-edit"></i></button></a>  
                  <a href="' . site_url("admin") . '/project/delete/' . $row['project_id'] . '"><button class="delete"><i class="zmdi zmdi-delete"></i></button></a>
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