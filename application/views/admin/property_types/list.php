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
    </div>

    <div class="table">
        <table class="striped responsive-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Model</th>
                    <th>Added On</th>
                    <th class="width-150">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($property_types as $row) {
                    $i++;
                    echo '<tr>';
                    echo '<td>' . $i . '</td>';
                    echo '<td>' . $row['pt_name'] . '</td>';
                    echo '<td>' . $row['pt_model_name'] . '</td>';
                    echo '<td>' . $row['pt_created_at'] . '</td>';
                    echo '<td class="width-150 action-table">
                  <a href="' . site_url("admin") . '/propertytypes/update/' . $row['pt_id'] . '"><button class="edit"><i class="zmdi zmdi-edit"></i></button></a>  
                  <a href="' . site_url("admin") . '/propertytypes/delete/' . $row['pt_id'] . '"><button class="delete"><i class="zmdi zmdi-delete"></i></button></a>
                </td>';
                    echo '</tr>';
                }
                ?> 
            </tbody>
        </table>
        <?php echo $this->pagination->create_links(); ?>
    </div>

</div>