
<!-- FEATURED PROPERTIES FOR SALE -->
<section class="section-gap-inner">
    <div class="container">
        <div class="row bredcrums">
            <div class="col s10 m10 l10">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><i class="zmdi zmdi-chevron-right"></i></li>
                    <li><a href="#" class="active-bred">CAREER</a></li>
                </ul>
            </div>
            <div class="col s2 m2 l2">
                <a href="#" class="back-link"><i class="zmdi zmdi-chevron-left"></i>&nbsp;Back</a>
            </div>
        </div>
        <div class="row inner-tab">
            <div class="col s12">
                <ul class="tabs tabs-fixed-width">
                    <li class="tab"><a class="active" href="#test1">OPPORTUNITES</a></li>
                    <li class="tab"><a href="#test2">CAREER GUIDE</a></li>
                    <li class="tab"><a href="#test3">DROP MY CV</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="banner-in">
    <img src="<?php echo base_url(); ?>assets/images/career.png">
</section>


<!-- FEATURED PROPERTIES FOR SALE -->
<section class="section-gap-inner">
    <div class="container">
        <div class="row inner-tab">
            <!-- OFFICE LOCATION -->
            <div id="test1" class="col s12">
                <div class="row mg-bt-none">
                    <div class="col s12 l12 m12">
                        <ul class="collapsible" data-collapsible="accordion">
                            <?php
                            foreach ($opportunities as $opportunity) {

                                echo '<li>';
                                echo '<div class="collapsible-header">';
                                echo '<h2>' . $opportunity['opportunity_title'] . '<br><span>LOCATION : ' . (isset($opportunity['opportunity_sub_location']) ? $opportunity['opportunity_sub_location'] . ' , ' : '') . $opportunity['opportunity_location'] . '</span></h2>';
                                echo '</div>';
                                echo '<div class="collapsible-body">';
                                echo '<p>';
                                echo $opportunity['opportunity_description'];
                                echo '</p>';
                                echo '</div>';
                                echo '</li>';
                            }
                            ?>   

                        </ul>
                    </div>

                </div>


            </div>

            <!-- MAKE ENQUIRY -->
            <div id="test2" class="col s12">
                <div class="row mg-bt-none">
                    <div class="col s12 m12 l12">
                        <div class="box-white">
                            <h2>CAREER GUIDE</h2>
                            <br>
                            <p><?php echo htmlspecialchars_decode(isset($career_guide_description) ? $career_guide_description : ''); ?></p>
                        </div>
                    </div>
                </div>



            </div>

            <div id="test3" class="col s12">
                <div class="row mg-bt-none">
                    <div class="col s12 m12 l12">
                        <div class="box-white form-upload">
                            <h2>DROP MY CV</h2>
<!--                            <span>Lorem Ipsum is simply dummy text </span>-->
                            <br>
                            <br>
                            <?php $attributes = array('id' => 'frm_drop_my_cv'); ?>
                            <?php echo form_open_multipart('', $attributes); ?>
                            <div class="row">
                                <div class="col s12 l6 m6"><input type="text" placeholder="First Name" name="first_name" id="first_name"></div>
                                <div class="col s12 l6 m6"><input type="text" placeholder="Last Name" name="last_name" id="last_name"></div>
                                <div class="col s12 l6 m6"><input type="text" placeholder="E-mail" name="email" id="email"></div>
                                <div class="col s12 l6 m6"><input type="text" placeholder="Mobie Number" name="contact" id="contact"></div>
                                <div class="col s12 l6 m6">
                                    <div class="input-field">
                                        <select name="applied_for" id="applied_for">
                                            <option value="" selected disabled>Applied For</option>
                                            <?php
                                            foreach ($opportunities as $opportunity) {

                                                echo '<option value="' . $opportunity['opportunity_title'] . '"'.set_select('applied_for',$opportunity['opportunity_title']).'>' . $opportunity['opportunity_title'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col l12 s12 m12">
                                    <div class="file-field input-field">
                                        <div class="bt-file">
                                            <span>File</span>
                                            <input type="file" name="resume"  id="resume">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Upload CV (Max size: 200 KB):"  >
                                        </div>
                                    </div>
                                </div>

                                <div class="col l12 s12 m12">
                                    <br>
                                    <br>
                                    <button class="waves-effect waves-light bt-normal-red" id="btnSubmitDropMyCV">SUBMIT</button>
                                </div>

                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>


            </div>



        </div>
    </div>
</section>

