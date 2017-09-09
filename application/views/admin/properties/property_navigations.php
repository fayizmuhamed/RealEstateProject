

<div class="main-area">
    <!-- Header -->
    <div class="header-all-section">
        <div class="title-full">
            <h2>Property navigations</h2>
        </div>
    </div>

    <!-- form -->
    <div class="add-new-form">
        <?php
        //flash messages
        if (isset($this->session->flash_message)) {
            if ($this->session->flash_message == TRUE) {
                echo '<div class="alert alert-success">';
                echo '<a class="close" data-dismiss="alert">×</a>';
                echo '<strong>Well done!</strong> new employee created with success.';
                echo '</div>';
            } else {
                echo '<div class="alert alert-error">';
                echo validation_errors();
                echo '</div>';
            }
        }
        ?>
        <?php echo form_open('admin/properties/navigations/' . $this->uri->segment(4) . ''); ?>

        <!-- Project Name Developer -->
        <div class="row">
            <div class="input-field col s6">
                <input id="property_ref_no" type="text" name="property_ref_no"  value="<?php echo (isset($property->property_ref_no)?$property->property_ref_no:''); ?>" disabled>
                <label class="active" for="property_ref_no">Property Ref No</label>
            </div>
            <div class="input-field col s6">
                <input id="property_title" type="text" name="property_title"  value="<?php echo (isset($property->property_title)?$property->property_title:''); ?>" disabled>
                <label class="active" for="property_title">Property Title</label>
            </div>


        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="property_community" type="text" name="property_community"  value="<?php echo (isset($property->property_community)?$property->property_community:''); ?>" disabled>
                <label class="active" for="property_community">Location</label>
            </div>
            <div class="input-field col s6">
                <input id="property_name" type="text" name="property_name"  value="<?php echo (isset($property->property_name)?$property->property_name:''); ?>" disabled>
                <label class="active" for="property_name">Sub Location</label>
            </div>


        </div>
        <section class="listing ">
            <ul  class="collapsible" data-collapsible="accordion" >
                <li >
                    <div class="collapsible-header active waves-effect waves-teal">
                        <a >Navigation details</a>
                    </div>


                    <div class="collapsible-body pads">
                        <div class="row">
                            <?php
                            $property_navigation_list = json_decode($property_navigations, TRUE);
                            $navigations = navigation_list();

                            foreach ($navigations as $key => $value) {

                                echo '<div class="col s6 l4 m6 navigation-item" >';
                                echo '<input type="checkbox" class="navigation" value="1" name="navigations[' . $key . ']" id="' . $value . '" ' . set_checkbox('navigations', "1", (!empty($property_navigation_list) && isset($property_navigation_list[$value]) ) ? TRUE : FALSE) . ' />';
                                echo '<label for="' . $value . '">' . navigation_icon($value) . '&nbsp; </label>';
                                echo '<input type="text" name="navigation_values[' . $key . ']" class="browser-default" ' . ((!empty($property_navigation_list) && isset($property_navigation_list[$value]) ) ? '' : 'disabled') . ' value=" ' . ((!empty($property_navigation_list) && isset($property_navigation_list[$value]) ) ? $property_navigation_list[$value] : '') . '">';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                </li>
            </ul>

        </section>
        
        <div class="col s12">
            <br>
            <br>
            <button class="bt-form-normal negative"><a href="<?php echo site_url('admin/properties'); ?>">Cancel</a></button>
            <button class="bt-form-normal">Submit</button>
        </div>

        <?php echo form_close(); ?>

    </div>

</div>