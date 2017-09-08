<section class="section-gap-inner">
	<div class="container">
		<div class="row bredcrums">
			<div class="col s10 m10 l10">
				 <ul>
				 	<li><a href="<?php echo base_url(); ?>">Home</a></li>
				 	<li><i class="zmdi zmdi-chevron-right"></i></li>
				 	<li><a href="<?php echo base_url(); ?>buy" >BUY</a></li>
                                         <li><i class="zmdi zmdi-chevron-right"></i></li>
				 	<li><a href="#" class="active-bred">BUYERS GUIDE</a></li>
				 </ul>
			</div>
			<div class="col s2 m2 l2">
				 <a href="<?php echo base_url(); ?>buy" class="back-link"><i class="zmdi zmdi-chevron-left"></i>&nbsp;Back</a>
			</div>
		</div>
		<div class="row inner-tab">
		    <div class="col s12">
		      <ul class="tabs tabs-fixed-width">
		        <li class="tab"><a class="active" href="#selling_proceure">SELLING PROCEDURE</a></li>
		        <li class="tab"><a href="#property_laws">UAE PROPERTY LAWS</a></li>
		        <li class="tab"><a href="#why_bridges">WHY BRIDGES & ALLIES</a></li>
                        <li class="tab"><a href="<?php echo base_url(); ?>teams/sales" target="_self">MEET SALES TEAM</a></li>
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
		    <div id="selling_proceure" class="col s12">
		    	<div class="row mg-bt-none">
				
		    		<div class="col s12 m12 l12">
							<div class="box-white">
								<h2>BUYING PROCEDURE</h2>
								<br>
								<p><?php echo htmlspecialchars_decode(isset($buy_guide_selling_procedure)?$buy_guide_selling_procedure:'');?></p>
							</div>
					</div>
				
				</div>
		    </div>

		    <!-- MAKE ENQUIRY -->
		   <div id="property_laws" class="col s12">
		    	<div class="row mg-bt-none">
					<div class="col s12 m12 l12">
							<div class="box-white">
								<h2>UAE PROPERTY LAWS</h2>
								<br>
								<p><?php echo htmlspecialchars_decode(isset($buy_guide_uae_property_law)?$buy_guide_uae_property_law:'');?></p>
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
								<p><?php echo htmlspecialchars_decode(isset($buy_guide_why_we_are)?$buy_guide_why_we_are:'');?></p>
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
								<p><?php echo htmlspecialchars_decode(isset($buy_guide_faq)?$buy_guide_faq:'');?></p>
							</div>
					</div>
				</div>
		    </div>


		</div>
	</div>
</section>


