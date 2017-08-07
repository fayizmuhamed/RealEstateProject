<div class="main-area">
    <!-- Header -->
    <div class="header-all-section">
        <div class="title">
            <h2>Communities</h2>
        </div>

        <div class="action-area">
            <button class="bt-add">
                <a href="<?php echo base_url(); ?>admin/communities/add">
                    <i class="zmdi zmdi-plus"></i>&nbsp;Add More
                </a>
            </button>
        </div>
        <div class="admin-search-box">
            <?php echo form_open('admin/communities') ?>
            <div class="filter-select">
                <?php echo form_dropdown('filter', array('community_name' => 'Name'), set_value('filter'), 'id="filter",class="browser-default"')
                ?>

            </div>
            <div class="filter-text">
                <?php echo form_input('search_string', set_value('search_string'), array('id' => 'search_string', 'placeholder' => 'Search text')) ?>
            </div>
            <div class="filter-button">

                <?php
                echo form_button(
                        array('name' => 'search_community',
                            'id' => 'search_community',
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
                     <th><?php echo anchor('admin/communities/community_name/' . (($sort_order == 'asc' && $sort_by == 'community_name') ? 'desc' : 'asc'), 'Name'); ?></th>
                    <th><?php echo anchor('admin/communities/community_created_at/' . (($sort_order == 'asc' && $sort_by == 'community_created_at') ? 'desc' : 'asc'), 'Added On'); ?></th>
                    <th><?php echo anchor('admin/communities/community_updated_at/' . (($sort_order == 'asc' && $sort_by == 'community_updated_at') ? 'desc' : 'asc'), 'Updated On'); ?></th>
                    <th class="width-150">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($communities as $community) {
                    $i++;
                    echo '<tr>';
                    echo '<td>' . $i . '</td>';
                    echo '<td>' . $community['community_name'] . '</td>';
                    echo '<td>' . $community['community_created_at'] . '</td>';
                    echo '<td>' . $community['community_updated_at'] . '</td>';
                    echo '<td class="width-150 action-table">
                  <a href="' . site_url("admin") . '/communities/edit/' . $community['community_id'] . '"><button class="edit"><i class="zmdi zmdi-edit"></i></button></a>  
                  <a href="' . site_url("admin") . '/communities/delete/' . $community['community_id'] . '"><button class="delete"><i class="zmdi zmdi-delete"></i></button></a>
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