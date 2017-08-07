<div class="main-area">
    <!-- Header -->
    <div class="header-all-section">
        <div class="title">
            <h2>Testimonial</h2>
        </div>
        <div class="action-area">
            <button class="bt-add">
                <a href="<?php echo base_url(); ?>admin/testimonials/add">
                    <i class="zmdi zmdi-plus"></i>&nbsp;Add More
                </a>
            </button>
        </div>
        <div class="admin-search-box">
            <?php echo form_open('admin/testimonials') ?>
            <div class="filter-select">
                <?php echo form_dropdown('filter', array('testimonial_author_name' => 'Name','testimonial_author_email' => 'Email','testimonial_author_contact' => 'Contact','testimonial_approved' => 'Approved'), set_value('filter'), 'id="filter",class="browser-default"')
                ?>

            </div>
            <div class="filter-text">
                <?php echo form_input('search_string', set_value('search_string'), array('id' => 'search_string', 'placeholder' => 'Search text')) ?>
            </div>
            <div class="filter-button">

                <?php
                echo form_button(
                        array('name' => 'search_testimonial',
                            'id' => 'search_testimonial',
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
                    <th><?php echo anchor('admin/testimonials/testimonial_author_name/' . (($sort_order == 'asc' && $sort_by == 'testimonial_author_name') ? 'desc' : 'asc'), 'Author'); ?></th>
                    <th><?php echo anchor('admin/testimonials/testimonial_author_email/' . (($sort_order == 'asc' && $sort_by == 'testimonial_author_email') ? 'desc' : 'asc'), 'Email'); ?></th>
                    <th><?php echo anchor('admin/testimonials/testimonial_author_contact/' . (($sort_order == 'asc' && $sort_by == 'testimonial_author_contact') ? 'desc' : 'asc'), 'Contact'); ?></th>
                    <th><?php echo anchor('admin/testimonials/emp_name/' . (($sort_order == 'asc' && $sort_by == 'emp_name') ? 'desc' : 'asc'), 'Agent'); ?></th>
                    <th>Approved</th>
                    <th><?php echo anchor('admin/testimonials/testimonial_created_at/' . (($sort_order == 'asc' && $sort_by == 'testimonial_created_at') ? 'desc' : 'asc'), 'Added On'); ?></th>
                    <th class="width-150">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($testimonials as $testimonial) {
                    $i++;
                    echo '<tr>';
                    echo '<td>' . $i . '</td>';
                    echo '<td>' . $testimonial['testimonial_author_name'] . '</td>';
                    echo '<td>' . $testimonial['testimonial_author_email'] . '</td>';
                    echo '<td>' . $testimonial['testimonial_author_contact'] . '</td>';
                    echo '<td>' . $testimonial['emp_name'] . '</td>';
                    echo '<td>' . ((isset($testimonial['testimonial_approved']) && $testimonial['testimonial_approved'] === '1') ? 'Yes' : 'No') . '</td>';
                    echo '<td>' . $testimonial['testimonial_created_at'] . '</td>';
                    echo '<td class="width-150 action-table">
                  <a href="' . site_url("admin") . '/testimonials/update/' . $testimonial['testimonial_id'] . '"><button class="edit tooltipped" data-tooltip="Edit"><i class="zmdi zmdi-edit"></i></button></a>  
                  <a href="' . site_url("admin") . '/testimonials/delete/' . $testimonial['testimonial_id'] . '"><button class="delete tooltipped" data-tooltip="Delete"><i class="zmdi zmdi-delete"></i></button></a>
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