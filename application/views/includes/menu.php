<!--  Menus -->
<div class="side-menus">

    <ul style="width:inherit" class="collapsible collapsible-no-boarder collapsible-accordion">
        <li class="bold ">
            <a href="<?php echo base_url(); ?>admin/propertytypes" class="<?php if($this->uri->segment(2) == 'propertytypes'){echo 'active';}?> waves-effect waves-teal">Property Type</a>
        </li>
        <li class="bold ">
            <a href="<?php echo base_url(); ?>admin/properties" class="<?php if($this->uri->segment(2) == 'properties'){echo 'active';}?> waves-effect waves-teal">Properties</a>
        </li>
        <li class="bold ">
            <a href="<?php echo base_url(); ?>admin/projects" class="<?php if($this->uri->segment(2) == 'projects'){echo 'active';}?> waves-effect waves-teal">Project</a>
        </li>
        <li class="bold">
            <a href="<?php echo base_url(); ?>admin/communities" class="<?php if($this->uri->segment(2) == 'communities'){echo 'active';}?> waves-effect waves-teal">Community</a>
        </li>
        
         <li class="bold">
            <a href="<?php echo base_url(); ?>admin/opportunities" class="<?php if($this->uri->segment(2) == 'opportunities'){echo 'active';}?> waves-effect waves-teal">Opportunities</a>
        </li>
         <li class="bold">
            <a href="<?php echo base_url(); ?>admin/testimonials" class="<?php if($this->uri->segment(2) == 'testimonials'){echo 'active';}?> waves-effect waves-teal">Testimonials</a>
        </li>
       
        <li class="bold">
            <a class="collapsible-header waves-effect waves-teal <?php if($this->uri->segment(2) == 'employees'||$this->uri->segment(2) == 'departments'||$this->uri->segment(2) == 'designations'){echo 'active';}?>">Organization</a>
            <div class="collapsible-body">
                <ul style=" width:100%">
                    <li >
                        <a href="<?php echo base_url(); ?>admin/designations" class="<?php if($this->uri->segment(2) == 'designations'){echo 'active';}?> waves-effect waves-teal">Designation</a>
                    </li>
                  <li>
                       <a href="<?php echo base_url(); ?>admin/departments" class="<?php if($this->uri->segment(2) == 'departments'){echo 'active';}?> waves-effect waves-teal">Department</a>
                  </li>
                   <li>
                       <a href="<?php echo base_url(); ?>admin/employees" class="<?php if($this->uri->segment(2) == 'employees'){echo 'active';}?> waves-effect waves-teal">Employee</a>
                  </li>
                </ul>
            </div>
        </li>
        <li class="bold">
            <a class="collapsible-header waves-effect waves-teal <?php if($this->uri->segment(2) == 'config'){echo 'active';}?>">Configurations</a>
            <div class="collapsible-body">
                <ul style=" width:100%">
                    <li>
                        <a href="<?php echo base_url(); ?>admin/config/about" class="<?php if($this->uri->segment(3) == 'about'){echo 'active';}?> waves-effect waves-teal">About us</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url(); ?>admin/config/buyersguide" class="<?php if($this->uri->segment(3) == 'buyersguide'){echo 'active';}?> waves-effect waves-teal">Buyers Guide</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url(); ?>admin/config/tenantsguide" class="<?php if($this->uri->segment(3) == 'tenantsguide'){echo 'active';}?> waves-effect waves-teal">Tenants Guide</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url(); ?>admin/config/ownersguide" class="<?php if($this->uri->segment(3) == 'ownersguide'){echo 'active';}?> waves-effect waves-teal">Owners Guide</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/config/infoguide" class="<?php if($this->uri->segment(3) == 'infoguide'){echo 'active';}?> waves-effect waves-teal">Info Guide</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>admin/config/careerguide" class="<?php if($this->uri->segment(3) == 'careerguide'){echo 'active';}?> waves-effect waves-teal">Career Guide</a>
                    </li>
                  <li>
                      <a href="grid.html">Contact us</a>
                  </li>
                </ul>
            </div>
        </li>
    </ul>
</div>