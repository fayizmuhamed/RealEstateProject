<style type="text/css">

    #images {
        display: inline-block;
        position: relative;


    }

    .thumbnail-card {
        width: 180px;
        height: 200px;
        background-color: #fff;
        border: 1px solid rgba(225, 225, 225, 0.73);
        float: left;
        margin: 5px 5px;
        text-align: center;
    }

    .del_photo {
        display: inline-block;
        float: right;
        margin: 10px 10px 0 0;
        position: absolute;
        top: 0;
        right: 0;
        color: pink;
    }
</style>


<div class="main-area">
    <!-- Header -->
    <div class="header-all-section">
        <div class="title-full">
            <h2>Edit Project</h2>
        </div>
    </div>

    <!-- form -->
    <div class="add-new-form">
        <?php
        //flash messages
        if (isset($flash_message)) {
            if ($flash_message == TRUE) {
                echo '<div class="alert alert-success">';
                echo '<a class="close" data-dismiss="alert">×</a>';
                echo '<strong>Well done!</strong> new project created with success.';
                echo '</div>';
            } else {
                echo '<div class="alert alert-error">';
                echo '<a class="close" data-dismiss="alert">×</a>';
                echo '<strong>Oh snap!</strong> change a few things up and try submitting again.';
                echo '</div>';
            }
        }
        ?>
        <?php echo form_open_multipart('admin/projects/update/' . $this->uri->segment(4) . ''); ?>

        <!-- Project Name Developer -->
        <div class="row">
            <div class="input-field col s4">
                <input id="project_reference" type="text" name="project_reference" class="validate" value="<?php echo $project[0]['project_reference']; ?>">
                <label class="active" for="project_reference">Project Reference</label>
            </div>
            <div class="input-field col s4">
                <input id="project_name" type="text" name="project_name" class="validate" value="<?php echo $project[0]['project_name']; ?>">
                <label class="active" for="project_name">Project Name</label>
            </div>
            <div class="input-field col s4">
                <input id="project_developer" type="text" name="project_developer"  class="validate" value="<?php echo $project[0]['project_developer']; ?>">
                <label class="active" for="project_developer">Developer</label>
            </div>
        </div>
        <!-- Property Type Property Location -->
        <div class="row">
            <div class="input-field col s4">
                <select id="project_property_type" name="project_property_type" >
                    <option value="" disabled selected>Property Type</option>
                    <?php
                    foreach ($property_types as $row) {

                        if ($row['pt_id'] == $project[0]['project_property_type']) {

                            echo '<option value="' . $row['pt_id'] . '" selected="selected">' . $row['pt_name'] . '</option>';
                        } else {

                            echo '<option value="' . $row['pt_id'] . '">' . $row['pt_name'] . '</option>';
                        }
                    }
                    ?>

                </select>
            </div>
            <div class="input-field col s4">
                <input id="project_location" type="text" name="project_location"  class="validate" value="<?php echo $project[0]['project_location']; ?>">
                <label class="active" for="project_location">Property Location</label>
            </div>
            <!--            <div class="input-field col s4">
                            <select id="project_location" name="project_location">
                                <option value="" disabled selected>Property Location</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>-->
            <div class="input-field col s4">
                <input id="project_no_of_bedrooms" type="number" name="project_no_of_bedrooms"  class="validate" value="<?php echo set_value($project[0]['project_no_of_bedrooms']); ?>">
                <label class="active" for="project_no_of_bedrooms">No of bedrooms</label>
            </div>
        </div>

        <!-- Start date End date -->
        <div class="row">
            <div class="input-field col s4">
                <input id="project_start_price" name="project_start_price"  type="number" value="<?php echo set_value($project[0]['project_start_price']); ?>">
                <label for="project_start_price">Start Price</label>

            </div>
            <div class="input-field col s4">
                <label for="project_start_date">Start Date</label>
                <input id="project_start_date" name="project_start_date"  type="date" class="datepicker" value="<?php echo $project[0]['project_start_date']; ?>">
            </div>
            <div class="input-field col s4">
                <label for="project_end_date">End Date</label>
                <input type="date" class="datepicker" id ="project_end_date" name="project_end_date" value="<?php echo $project[0]['project_end_date']; ?>">
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <textarea id="project_description" class="materialize-textarea" name="project_description" ><?php echo $project[0]['project_description']; ?></textarea>
                <label for="project_description">Description</label>
            </div>
        </div>
        <div class="row">


            <div class="file-field input-field col s6">
                <div class="btn normal-bt">
                    <span>File</span>
                    <!--                    data-max-width="300" data-max-height="300" data-min-width="300" data-min-height="300"-->
                    <input type="file" name="project_cover_image" class="image-upload" id="project_cover_image" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*" >
                    <input type="hidden" id="project_cover_image_hidden" name="project_cover_image_hidden" value="<?php echo $project[0]['project_cover_image']; ?>"/>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate image-upload-text" type="text" placeholder="Upload cover image" value="<?php echo $project[0]['project_cover_image']; ?>">
                    <span id="project_cover_image_error" class="image-upload-error"></span>
                </div>
            </div>
            <div class="file-field input-field col s6">
                <div class="btn normal-bt">
                    <span>File</span>
                    <!--                    data-max-width="300" data-max-height="300" data-min-width="300" data-min-height="300"-->
                    <input type="file" name="project_thumbnail_image[]" class="image-upload" id="project_thumbnail_image" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|images/*"  multiple>

                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate image-upload-text" type="text" placeholder="Upload thumbnail image" >
                    <span  class="image-upload-error"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 l12 m12 thum-slid">
                <ul>
                    <?php
                  

                    foreach ($project_thumbnails as $row_image) {

                        echo '<li>';
                        echo '<div id="images" class="thumbnail-card">';
                        echo '<a href="#"><img src="' . base_url() . 'uploads/project/thumbnail/' . $row_image['image'] . '"></a>';
                        echo '<button type="button"  class="del_photo delete_project_thumbnail" data-ref="' . $row_image['project_thumbnail_id'] . '"><i class="zmdi zmdi-delete"></i></button>';
                        echo '</div>';
                        echo '</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="file-field input-field col s6">
                <div class="btn normal-bt">
                    <span>File</span>
                    <input type="file" name="project_brochure"  id="project_brochure">
                    <input type="hidden" id="project_brochure_hidden" name="project_brochure_hidden" value="<?php echo $project[0]['project_brochure']; ?>"/>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload brochure" value="<?php echo $project[0]['project_brochure']; ?>">
                    <span id="project_brochure_error"></span>
                </div>
            </div>
            <div class="file-field input-field col s6">
                <div class="btn normal-bt">
                    <span>File</span>
                    <input type="file" name="project_floor_plan" id="project_floor_plan">
                    <input type="hidden" id="project_floor_plan_hidden" name="project_floor_plan_hidden" value="<?php echo $project[0]['project_floor_plan']; ?>"/>
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload floor plan" value="<?php echo $project[0]['project_floor_plan']; ?>">
                    <span id="project_floor_plan_error"></span>
                </div>
            </div>
        </div>
        <section class="listing ">
            <ul  class="collapsible " data-collapsible="accordion" style="border: solid 1px #333 !important;">
                <li>
                    <div class="collapsible-header waves-effect waves-teal">
                        <a >Payment Plan</a>
                    </div>

                    <div class="collapsible-body padd-10-0">
                        <div class="row">
                            <!--                                <div class="input-field col s3">
                                                                <label for="payment_plan_ins_number">Installment number</label>
                                                                <input id="payment_plan_ins_number" name="payment_plan_ins_number"  type="number"  >
                                                            </div>-->
                            <div class="input-field col s4">
                                <label for="payment_plan_date">Date</label>
                                <input id="payment_plan_date" name="payment_plan_date"  type="date" class="datepicker" >
                            </div>
                            <div class="input-field col s4">
                                <label for="payment_plan_amount">Amount/Percentage</label>
                                <input id="payment_plan_amount" name="payment_plan_amount"  type="text"  >
                            </div>
                            <div class="input-field col s4">
                                <button class="btn normal-bt add-payment-plan" type="button" >Add</button>
                            </div>
                        </div>
                        <div class="table row">
                            <table class="striped responsive-table input-field" id="table_payment_plan">
                                <thead>
                                    <tr>
<!--                                        <th class="width-100">Sl No</th>-->
                                        <th>Date</th>
                                        <th>Amount/Percentage</th>
                                        <th class="width-150" >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $project_payment_plans = json_decode($project[0]['project_payment_plans'], TRUE);

                                    if ($project_payment_plans == NULL) {
                                        
                                    } else {

                                        foreach ($project_payment_plans as $row_payment_plan) {
                                            echo '<tr id="test">';
                                            echo '<td>' . $row_payment_plan['date'] . '</td>';
                                            echo '<td>' . $row_payment_plan['amount'] . '</td>';
                                            echo '<td class="width-150 action-table">
                                        <button class="delete delete-payment-plan" type="button" id="test"><i class="zmdi zmdi-delete"></i></button>
                                        </td>';
                                            echo '</tr>';
                                        }
                                    }
                                    ?> 

                                </tbody>
                            </table>
                        </div>
                        <input type="hidden" id="project_payment_plan_hidden" name="project_payment_plan_hidden" value="<?php echo html_escape($project[0]['project_payment_plans']); ?>"/>
                    </div>
                </li>
            </ul>

        </section>
        <div class="col s12">
            <br>
            <br>
            <button class="bt-form-normal negative"><a href="<?php echo site_url('admin/projects'); ?>">Cancel</a></button>
            <button class="bt-form-normal">Submit</button>
        </div>

        <?php echo form_close(); ?>

    </div>

</div>