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
    </div>

    <div class="table">
        <table class="striped responsive-table">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Sub location</th>
                    <th>Added On</th>
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
        <?php echo $this->pagination->create_links(); ?>
    </div>

</div>