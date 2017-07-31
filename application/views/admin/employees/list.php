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
    </div>

    <div class="table">
        <table class="striped responsive-table">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>Reg ID</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Contact No</th>
                     <th>Email</th>
                    <th>Added On</th>
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
        <?php echo $this->pagination->create_links(); ?>
    </div>

</div>