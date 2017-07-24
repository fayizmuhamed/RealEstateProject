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
    </div>

    <div class="table">
        <table class="striped responsive-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Added On</th>
                    <th>Updated On</th>
                    <th class="width-150">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($communities as $row) {
                    $i++;
                    echo '<tr>';
                    echo '<td>' . $i . '</td>';
                    echo '<td>' . $row['community_name'] . '</td>';
                    echo '<td>' . $row['community_created_at'] . '</td>';
                    echo '<td>' . $row['community_updated_at'] . '</td>';
                    echo '<td class="width-150 action-table">
                  <a href="' . site_url("admin") . '/communities/edit/' . $row['community_id'] . '"><button class="edit"><i class="zmdi zmdi-edit"></i></button></a>  
                  <a href="' . site_url("admin") . '/communities/delete/' . $row['community_id'] . '"><button class="delete"><i class="zmdi zmdi-delete"></i></button></a>
                </td>';
                    echo '</tr>';
                }
                ?> 
            </tbody>
        </table>
        <?php echo $this->pagination->create_links(); ?>
    </div>

</div>