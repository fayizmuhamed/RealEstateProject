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
    </div>

    <div class="table">
        <table class="striped responsive-table">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Author</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Agent</th>
                    <th>Approved</th>
                    <th>Added On</th>
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
                    echo '<td>' . ((isset($testimonial['testimonial_approved']) && $testimonial['testimonial_approved']==='1')?'Yes':'No') . '</td>';
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
        <?php echo $this->pagination->create_links(); ?>
    </div>

</div>