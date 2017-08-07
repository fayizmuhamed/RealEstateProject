<div class="main-area">
    <!-- Header -->
    <div class="header-all-section">
        <div class="title">
            <h2>Opportunities</h2>
        </div>
        <div class="action-area">
            <button class="bt-add">
                <a href="<?php echo base_url(); ?>admin/opportunities/add">
                    <i class="zmdi zmdi-plus"></i>&nbsp;Add More
                </a>
            </button>
        </div>
        <div class="admin-search-box">
            <?php echo form_open('admin/opportunities') ?>
            <div class="filter-select">
                <?php echo form_dropdown('filter', array('opportunity_title' => 'Title','opportunity_location' => 'Location'), set_value('filter'), 'id="filter",class="browser-default"')
                ?>

            </div>
            <div class="filter-text">
                <?php echo form_input('search_string', set_value('search_string'), array('id' => 'search_string', 'placeholder' => 'Search text')) ?>
            </div>
            <div class="filter-button">

                <?php
                echo form_button(
                        array('name' => 'search_opportunity',
                            'id' => 'search_opportunity',
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
                    <th><?php echo anchor('admin/opportunities/opportunity_title/' . (($sort_order == 'asc' && $sort_by == 'opportunity_title') ? 'desc' : 'asc'), 'Title'); ?></th>
                    <th><?php echo anchor('admin/opportunities/opportunity_location/' . (($sort_order == 'asc' && $sort_by == 'opportunity_location') ? 'desc' : 'asc'), 'Location'); ?></th>
                    <th><?php echo anchor('admin/opportunities/opportunity_sub_location/' . (($sort_order == 'asc' && $sort_by == 'opportunity_sub_location') ? 'desc' : 'asc'), 'Sub location'); ?></th>
                    <th><?php echo anchor('admin/opportunities/opportunity_created_at/' . (($sort_order == 'asc' && $sort_by == 'opportunity_created_at') ? 'desc' : 'asc'), 'Added On'); ?></th>
                    <th class="width-150">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($opportunities as $opportunity) {
                    $i++;
                    echo '<tr>';
                    echo '<td>' . $i . '</td>';
                    echo '<td>' . $opportunity['opportunity_title'] . '</td>';
                    echo '<td>' . $opportunity['opportunity_location'] . '</td>';
                    echo '<td>' . $opportunity['opportunity_sub_location'] . '</td>';
                    echo '<td>' . $opportunity['opportunity_created_at'] . '</td>';
                    echo '<td class="width-150 action-table">
                  <a href="' . site_url("admin") . '/opportunities/update/' . $opportunity['opportunity_id'] . '"><button class="edit"><i class="zmdi zmdi-edit"></i></button></a>  
                  <a href="' . site_url("admin") . '/opportunities/delete/' . $opportunity['opportunity_id'] . '"><button class="delete"><i class="zmdi zmdi-delete"></i></button></a>
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