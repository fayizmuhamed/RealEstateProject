<!--  Menus -->
<div class="side-menus">

    <ul style="width:inherit" class="collapsible collapsible-accordion">
        <li class="bold "><a href="<?php echo base_url(); ?>admin/propertytypes" class="<?php if($this->uri->segment(2) == 'propertytypes'){echo 'active';}?> waves-effect waves-teal">Property Type</a></li>
        <li class="bold "><a href="<?php echo base_url(); ?>admin/projects" class="<?php if($this->uri->segment(2) == 'projects'){echo 'active';}?> waves-effect waves-teal">Project</a></li>
        <li class="bold"><a href="#" class="waves-effect waves-teal">Community</a></li>
        <li class="bold"><a href="#" class="waves-effect waves-teal">Agent</a></li>
        <li class="bold"><a class="collapsible-header waves-effect waves-teal <?php if($this->uri->segment(2) == 'config'){echo 'active';}?>">Configurations</a>
              <div class="collapsible-body">
                <ul style=" width:100%">
                    <li ><a href="<?php echo base_url(); ?>admin/config/about" class="<?php if($this->uri->segment(3) == 'about'){echo 'active';}?> waves-effect waves-teal">About us</a></li>
                  <li><a href="grid.html">Contact us</a></li>
                </ul>
              </div>
            </li>
<!--            <a href="#!" class="dropdown-button" data-activates="dropdown1">Configuration</a>-->
           
        
        </li>
    </ul>
</div>