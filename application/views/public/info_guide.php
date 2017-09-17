<!-- FEATURED PROPERTIES FOR SALE -->
<section class="section-gap-inner">
    <div class="container">
        <div class="row bredcrums">
            <div class="col s10 m10 l10">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">HOME</a></li>
                    <li><i class="zmdi zmdi-chevron-right"></i></li>
                    <li><a href="#" class="active-bred">INFO GUIDE</a></li>
                </ul>
            </div>
            <div class="col s2 m2 l2">
                <a href="<?php echo base_url(); ?>" class="back-link"><i class="zmdi zmdi-chevron-left"></i>&nbsp;Back</a>
            </div>
        </div>
        <div class="row inner-tab">
            <div class="col s12">
                <ul class="tabs tabs-fixed-width">
                    <li class="tab"><a class="active" href="#info_dubai">DUBAI</a></li>
                    <li class="tab"><a href="#news_and_reports">News & Reports</a></li>
<!--                    <li class="tab"><a href="<?php echo base_url(); ?>#community-sec" target="_self">Dubai Communities</a></li>-->
                    <li class="tab"><a href="#rera_updates">RERA</a></li>
                     <li class="tab"><a href="#investor_visa">Investor Visa</a></li>
<!--                    <li class="tab"><a href="<?php echo base_url(); ?>ownersguide" target="_self">Owner’s Guide</a></li>
                    <li class="tab"><a href="<?php echo base_url(); ?>buyersguide" target="_self">Buyer’s Guide</a></li>
                    <li class="tab"><a href="<?php echo base_url(); ?>tenantsguide" target="_self">Tenant’s Guide</a></li>-->
                    <li class="tab"><a href="#faq ">FAQs</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>



<section class="banner-in">
	<img src="<?php echo base_url(); ?>assets/images/infoguide.png">
</section>


<!-- FEATURED PROPERTIES FOR SALE -->
<section class="section-gap-inner">
    <div class="container">
        <div class="row inner-tab">
            <!-- OFFICE LOCATION -->


            <!-- MAKE ENQUIRY -->
            <div id="info_dubai" class="col s12">
                <div class="row mg-bt-none">
                    <div class="col s12 m12 l12">
                        <div class="box-white">
                            <h2>DUBAI</h2>
                            <br>
                            <p><?php echo htmlspecialchars_decode(isset($info_guide_dubai) ? $info_guide_dubai : ''); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MAKE ENQUIRY -->
            <div id="news_and_reports" class="col s12">
                <div class="row mg-bt-none">
                    <div class="col s12 m12 l12">
                        <div class="box-white">
                            <h2>Latest News & Reports</h2>
                            <br>
                            <p><?php echo htmlspecialchars_decode(isset($info_guide_news_and_reports) ? $info_guide_news_and_reports : ''); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MAKE ENQUIRY -->
            <div id="investor_visa" class="col s12">
                <div class="row mg-bt-none">
                    <div class="col s12 m12 l12">
                        <div class="box-white">
                            <h2>Investor Visa</h2>
                            <br>
                            <p><?php echo htmlspecialchars_decode(isset($info_guide_investor_visa) ? $info_guide_investor_visa : ''); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MAKE ENQUIRY -->
            <div id="rera_updates" class="col s12">
                <div class="row mg-bt-none">
                    <div class="col s12 m12 l12">
                        <div class="box-white">
                            <h2>RERA Updates</h2>
                            <br>
                            <p><?php echo htmlspecialchars_decode(isset($info_guide_rera_updates) ? $info_guide_rera_updates : ''); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MAKE ENQUIRY -->
            <div id="faq" class="col s12">
                <div class="row mg-bt-none">
                    <div class="col s12 m12 l12">
                        <div class="box-white">
                            <h2>FAQs</h2>
                            <br>
                            <?php echo htmlspecialchars_decode(isset($info_guide_faq) ? $info_guide_faq : ''); ?>
                        </div>
                    </div>
                </div>
            </div>






        </div>
    </div>
</section>
