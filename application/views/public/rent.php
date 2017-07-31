
<!-- filter -->
<div class="filter">
    <a class="modal-trigger" href="#modal-filter"><img src="<?php echo base_url(); ?>assets/images/filter.svg"></a>
</div>
<!-- Modal Structure -->
<div id="modal-filter" class="modal bottom-sheet">
    <div class="modal-content">
        <h4>Flter</h4>
        <div class="filters">
            <div class="input-field col s12">
                <select multiple>
                    <option value="" selected>Property Type</option>
                    <option value="1">Apartment</option>
                    <option value="2">Villas</option>
                    <option value="3">Residential</option>
                    <option value="4">Retail</option>
                    <option value="5">Official</option>
                    <option value="6">Commercial</option>
                </select>
            </div>
            <div class="input-field col s12">
                <select multiple>
                    <option value="" selected>Bed Room</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
             <div class="input-field col s12">
                <select multiple>
                    <option value="" selected>Budget</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
           

            <p class="range-field">
                <input type="text" placeholder="Size" />
            </p>

            <button><a href="#">Search</a></button>
            <button class="cancel-b modal-close"><a href="#">Cancel</a></button>


        </div>
    </div>

</div>
<!-- FEATURED PROPERTIES FOR SALE -->
<section class="section-gap-inner">
	<div class="container">
		<div class="row bredcrums">
			<div class="col s10 m10 l10">
				 <ul>
				 	<li><a href="<?php echo base_url(); ?>">HOME</a></li>
				 	<li><i class="zmdi zmdi-chevron-right"></i></li>
				 	<li><a href="#" class="active-bred">RENT</a></li>
				 </ul>
			</div>
			<div class="col s2 m2 l2">
				 <a href="<?php echo base_url(); ?>" class="back-link"><i class="zmdi zmdi-chevron-left"></i>&nbsp;Back</a>
			</div>
		</div>
		<div class="row inner-tab">
		    <div class="col s12">
		      <ul class="tabs tabs-fixed-width">
		        <li class="tab"><a class="active" href="#test1">ALL</a></li>
		        <li class="tab"><a href="#test2">READY RESIDNETIAL</a></li>
		        <li class="tab"><a href="#test3">READY COMMERCIAL</a></li>
		        <li class="tab"><a href="#test4">OFFPLAN</a></li>
		        <li class="tab"><a href="#test5">FEATURED</a></li>
		        <li class="tab"><a href="#test6">PLOTS</a></li>
		        <li class="tab"><a href="<?php echo base_url(); ?>tenantsguide" target="_self">TENANT'S GUIDE</a></li>
		        <li class="tab"><a href="<?php echo base_url(); ?>teams" target="_self">MEET RENT TEAM</a></li>
		      </ul>
		    </div>

		    <!-- OFFICE LOCATION -->
		    <div id="test1" class="col s12">
		    	<div class="row mg-bt-none">
				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="<?php echo base_url(); ?>rentdetail">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l5.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="rent-detail.html">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l1.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="rent-detail.html">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l2.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="rent-detail.html">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l6.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="rent-detail.html">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l5.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="rent-detail.html">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l7.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="rent-detail.html">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l6.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="rent-detail.html">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l8.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col s12 more-button-block">
				<button class="bt-normal waves-effect waves-light"><a href="#">VIEW MORE</a></button>
			</div>

		    </div>

		    <!-- MAKE ENQUIRY -->
		   <div id="test2" class="col s12">
		    	<div class="row mg-bt-none">
				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="rent-detail.html">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l5.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="rent-detail.html">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l1.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="rent-detail.html">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l2.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="rent-detail.html">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l6.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="rent-detail.html">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l5.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="rent-detail.html">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l7.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="rent-detail.html">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l6.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="rent-detail.html">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l8.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col s12 more-button-block">
				<button class="bt-normal waves-effect waves-light"><a href="#">VIEW MORE</a></button>
			</div>
			
		    </div>

		    <div id="test3" class="col s12">
		    	<div class="row mg-bt-none">
				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="rent-detail.html">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l5.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="rent-detail.html">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l1.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l2.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="rent-detail.html">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l6.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="rent-detail.html">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l5.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="rent-detail.html">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l7.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l6.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l8.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col s12 more-button-block">
				<button class="bt-normal waves-effect waves-light"><a href="#">VIEW MORE</a></button>
			</div>
			
		    </div>

		    <div id="test4" class="col s12">
		    	<div class="row mg-bt-none">
				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l5.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l1.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l2.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l6.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l5.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l7.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l6.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l8.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col s12 more-button-block">
				<button class="bt-normal waves-effect waves-light"><a href="#">VIEW MORE</a></button>
			</div>
			
		    </div>

		    <div id="test5" class="col s12">
		    	<div class="row mg-bt-none">
				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l5.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l1.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l2.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l6.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l5.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l7.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l6.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l8.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col s12 more-button-block">
				<button class="bt-normal waves-effect waves-light"><a href="#">VIEW MORE</a></button>
			</div>
			
		    </div>


		    <div id="test6" class="col s12">
		    	<div class="row mg-bt-none">
				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l5.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l1.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l2.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l6.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l5.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l7.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l6.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12 l3 m6">
					<div class="list-card">
						<div class="over-card">
							<ul>
							<li><i class="icon-bed"></i>&nbsp;Villas</li>
							<li><i class="icon-1"></i>&nbsp;4800 sq ft</li>
							<li><i class="icon-bed"></i>&nbsp;4 Bed</li>
							<li><i class="icon-bath"></i>&nbsp;3 Baths</li>
							<li><i class="zmdi zmdi-group"></i>&nbsp;2 Maid</li>
							<li><i class="zmdi zmdi-file-text"></i>&nbsp;3 Study</li>
							</ul>
						<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>
						<button class="view-b"><a href="#">View Detail</a></button>
						</div>

						<div class="property-thumb">
							<img src="images/l8.png">
						</div>

						<div class="property-list-details">
							<h3>4552 LYNN AVENUE</h3>
							<span><i class="zmdi zmdi-pin"></i>&nbsp;United Arab Emirates</span>
							<div class="button-block">
							<button class="price">$1,500</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col s12 more-button-block">
				<button class="bt-normal waves-effect waves-light"><a href="#">VIEW MORE</a></button>
			</div>
			
		    </div>

                    <!--			<div id="test7" class="col s12">
                                            <div class="row agent-det">
                                                            <div class="col s12 m4 l3">
                                                                    <div class="agent-card">
                                                                            <div class="agent-image">
                                                                                    <div class="view"><button><a href="#">View Profile</a></button></div>
                                                                                    <img src="images/7.jpg">
                                                                            </div>
                                                                            <div class="agent-name">
                                                                                    <h3>Thomas Miller</h3>
                                                                                    <span>Business Development Manger</span>
                                                                            </div>
                                                                            <div class="spcial">
                                                                                    <span><strong>Area Specializes in</strong>(Not Mandatory)</span>
                                                                                    <span><strong>From</strong>United Arab Emirates</span>
                                                                                    <span><strong>Speaks</strong>English, Hindi, Arabic</span>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col s12 m4 l3">
                                                                    <div class="agent-card">
                                                                            <div class="agent-image">
                                                                                    <div class="view"><button><a href="#">View Profile</a></button></div>
                                                                                    <img src="images/7.jpg">
                                                                            </div>
                                                                            <div class="agent-name">
                                                                                    <h3>Thomas Miller</h3>
                                                                                    <span>Business Development Manger</span>
                                                                            </div>
                                                                            <div class="spcial">
                                                                                    <span><strong>Area Specializes in</strong>(Not Mandatory)</span>
                                                                                    <span><strong>From</strong>United Arab Emirates</span>
                                                                                    <span><strong>Speaks</strong>English, Hindi, Arabic</span>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col s12 m4 l3">
                                                                    <div class="agent-card">
                                                                            <div class="agent-image">
                                                                                    <div class="view"><button><a href="#">View Profile</a></button></div>
                                                                                    <img src="images/7.jpg">
                                                                            </div>
                                                                            <div class="agent-name">
                                                                                    <h3>Thomas Miller</h3>
                                                                                    <span>Business Development Manger</span>
                                                                            </div>
                                                                            <div class="spcial">
                                                                                    <span><strong>Area Specializes in</strong>(Not Mandatory)</span>
                                                                                    <span><strong>From</strong>United Arab Emirates</span>
                                                                                    <span><strong>Speaks</strong>English, Hindi, Arabic</span>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col s12 m4 l3">
                                                                    <div class="agent-card">
                                                                            <div class="agent-image">
                                                                                    <div class="view"><button><a href="#">View Profile</a></button></div>
                                                                                    <img src="images/7.jpg">
                                                                            </div>
                                                                            <div class="agent-name">
                                                                                    <h3>Thomas Miller</h3>
                                                                                    <span>Business Development Manger</span>
                                                                            </div>
                                                                            <div class="spcial">
                                                                                    <span><strong>Area Specializes in</strong>(Not Mandatory)</span>
                                                                                    <span><strong>From</strong>United Arab Emirates</span>
                                                                                    <span><strong>Speaks</strong>English, Hindi, Arabic</span>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col s12 m4 l3">
                                                                    <div class="agent-card">
                                                                            <div class="agent-image">
                                                                                    <div class="view"><button><a href="#">View Profile</a></button></div>
                                                                                    <img src="images/7.jpg">
                                                                            </div>
                                                                            <div class="agent-name">
                                                                                    <h3>Thomas Miller</h3>
                                                                                    <span>Business Development Manger</span>
                                                                            </div>
                                                                            <div class="spcial">
                                                                                    <span><strong>Area Specializes in</strong>(Not Mandatory)</span>
                                                                                    <span><strong>From</strong>United Arab Emirates</span>
                                                                                    <span><strong>Speaks</strong>English, Hindi, Arabic</span>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col s12 m4 l3">
                                                                    <div class="agent-card">
                                                                            <div class="agent-image">
                                                                                    <div class="view"><button><a href="#">View Profile</a></button></div>
                                                                                    <img src="images/7.jpg">
                                                                            </div>
                                                                            <div class="agent-name">
                                                                                    <h3>Thomas Miller</h3>
                                                                                    <span>Business Development Manger</span>
                                                                            </div>
                                                                            <div class="spcial">
                                                                                    <span><strong>Area Specializes in</strong>(Not Mandatory)</span>
                                                                                    <span><strong>From</strong>United Arab Emirates</span>
                                                                                    <span><strong>Speaks</strong>English, Hindi, Arabic</span>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col s12 m4 l3">
                                                                    <div class="agent-card">
                                                                            <div class="agent-image">
                                                                                    <div class="view"><button><a href="#">View Profile</a></button></div>
                                                                                    <img src="images/7.jpg">
                                                                            </div>
                                                                            <div class="agent-name">
                                                                                    <h3>Thomas Miller</h3>
                                                                                    <span>Business Development Manger</span>
                                                                            </div>
                                                                            <div class="spcial">
                                                                                    <span><strong>Area Specializes in</strong>(Not Mandatory)</span>
                                                                                    <span><strong>From</strong>United Arab Emirates</span>
                                                                                    <span><strong>Speaks</strong>English, Hindi, Arabic</span>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                            <div class="col s12 m4 l3">
                                                                    <div class="agent-card">
                                                                            <div class="agent-image">
                                                                                    <div class="view"><button><a href="#">View Profile</a></button></div>
                                                                                    <img src="images/7.jpg">
                                                                            </div>
                                                                            <div class="agent-name">
                                                                                    <h3>Thomas Miller</h3>
                                                                                    <span>Business Development Manger</span>
                                                                            </div>
                                                                            <div class="spcial">
                                                                                    <span><strong>Area Specializes in</strong>(Not Mandatory)</span>
                                                                                    <span><strong>From</strong>United Arab Emirates</span>
                                                                                    <span><strong>Speaks</strong>English, Hindi, Arabic</span>
                                                                            </div>
                                                                    </div>
                                                            </div>
                    
                                                             more 
                                                            <div class="col s12 more-center">
                                                                    <button class="bt-normal"><a href="#">VIEW MORE</a></button>
                                                            </div>
                    
                                                    </div>
                    
                                            <div class="col s12 more-button-block">
                                                    <button class="bt-normal waves-effect waves-light"><a href="#">VIEW MORE</a></button>
                                            </div>
                                            
                                        </div>-->
		   

		   

		</div>
	</div>
</section>
