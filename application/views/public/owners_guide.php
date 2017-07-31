
<!-- FEATURED PROPERTIES FOR SALE -->
<section class="section-gap-inner">
	<div class="container">
		<div class="row bredcrums">
			<div class="col s10 m10 l10">
				 <ul>
				 	<li><a href="<?php echo base_url(); ?>">HOME</a></li>
				 	<li><i class="zmdi zmdi-chevron-right"></i></li>
				 	<li><a href="<?php echo base_url(); ?>propertyowner" >PROPERTY OWNER</a></li>
                                        <li><i class="zmdi zmdi-chevron-right"></i></li>
				 	<li><a href="#" class="active-bred">OWNERS GUIDE</a></li>
				 </ul>
			</div>
			<div class="col s2 m2 l2">
				 <a href="<?php echo base_url(); ?>" class="back-link"><i class="zmdi zmdi-chevron-left"></i>&nbsp;Back</a>
			</div>
		</div>
		<div class="row inner-tab">
		    <div class="col s12">
		      <ul class="tabs tabs-fixed-width">
		        <li class="tab"><a class="active" href="#selling_process">SELLING PROCESS</a></li>
		        <li class="tab"><a href="#leasing_process">LEASING PROCESS</a></li>
		        <li class="tab"><a href="#why_bridges">WHY BRIDGES & ALLIES</a></li>
		        <li class="tab"><a href="#faq">FAQ</a></li>
		      </ul>
		</div>
	</div>
</section>

<section class="banner-in">
	
</section>


<!-- FEATURED PROPERTIES FOR SALE -->
<section class="section-gap-inner">
	<div class="container">
		    <!-- OFFICE LOCATION -->
		    <div id="selling_process" class="col s12">
		    	<div class="row mg-bt-none">
				
		    		<div class="col s12 m12 l12">
							<div class="box-white">
								<h2>SELLING PROCESS</h2>
								<br>
								<p><?php echo isset($own_guide_selling_process)?$own_guide_selling_process:'';?></p>
							</div>
					</div>
				
				</div>
		    </div>

		    <!-- MAKE ENQUIRY -->
		   <div id="leasing_process" class="col s12">
		    	<div class="row mg-bt-none">
					<div class="col s12 m12 l12">
							<div class="box-white">
								<h2>LEASING PROCESS</h2>
								<br>
								<p><?php echo isset($own_guide_leasing_process)?$own_guide_leasing_process:'';?></p>
							</div>
					</div>
				
				</div>
		    </div>

		    <div id="why_bridges" class="col s12">
		    	<div class="row mg-bt-none">
					<div class="col s12 m12 l12">
							<div class="box-white">
								<h2>WHY BRIDGES & ALLIES</h2>
								<br>
								<p><?php echo isset($own_guide_why_we_are)?$own_guide_why_we_are:'';?></p>
							</div>
					</div>
				</div>
		    </div>

		    <div id="faq" class="col s12">
		    	<div class="row mg-bt-none">
					<div class="col s12 m12 l12">
							<div class="box-white">
								<h2>FAQ</h2>
								<br>
								<p><?php echo isset($own_guide_faq)?$own_guide_faq:'';?></p>
							</div>
					</div>
				</div>
		    </div>


		</div>
	</div>
</section>
