<footer>
	<div class="container">
		<div class="row">
			<div class="col s12 l4 m12 border-right ">
				<img src="<?php echo base_url(); ?>assets/images/logo.svg">
				<br>
				<h2>ADDRESS</h2>
				<p>P.O. Box 261036, Plot No. S 20119,<br> Jebel Ali Free Zone (South),<br> Dubai. United Arab Emirates.</p>
				<p>Opening Hours&nbsp;<strong>9:00 AM to 6:00 PM</strong></p>

				<ul class="social">
					<li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
					<li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
					<li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
		 			<li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
				</ul>
				
			</div>
			<div class="col s12 l4 m12 border-right links-f">
				<ul>
				<h2>LINKS</h2>
				<br>
				<li><a href="#">About us</a></li>
				<li><a href="#">Featured Properties for Sale</a></li>
				<li><a href="#">Features Properties for Rent</a></li>
				<li><a href="#">Projects</a></li>
				<li><a href="#">List your Property</a></li>
				<li><a href="#">Careers</a></li>
				<li><a href="#">Contact us</a></li>
				</ul>
				
			</div>
			<div class="col s12 l4 m12">
				<h2>Quick Enquiry</h2>
				<form>
					<div>
						<input type="text" placeholder="Name" name="">
					</div>
					<div>
						<input type="text" placeholder="Phone Number" name="">
					</div>
					<div>
						<input type="text" placeholder="E-mail" name="">
					</div>
					<div>
						<textarea placeholder="Mesage"></textarea>
					</div>
					<br>
					<div>
						<button class="waves-effect waves-light"><a href="#">SUBMIT</a></button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="sub-footer">
		<div class="container">
			<div class="row">
			<div class="col s12 l6 m6"><p>2017 All Right Reserved</p></div>
			<div class="col s12 l6 m6">
				<ul>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">HELP</a></li>
					<li><a href="#">PRIVACY</a></li>
					<li><a href="#">TERM</a></li>    
				</ul>
			</div>
			</div>
		</div>
	</div>
</footer>


<!-- Scripts -->
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
<script src='<?php echo base_url(); ?>assets/js/css3-animate-it.js'></script>
<script src='<?php echo base_url(); ?>assets/js/public.js'></script>

<!-- Push Nav Mobile -->
<script type="text/javascript">
  $(".button-collapse").sideNav();
</script>

<!-- Model -->
<script>
$(document).ready(function() {
  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  $('.modal-trigger').leanModal();
});
</script>

<!-- Anchore -->
<script>
  $(document).ready(function() {
    $('a[href^="#"]').click(function(event) {
      var id = $(this).attr("href");
      var offset = 60;
      var target = $(id).offset().top - offset;

      $('html, body').animate({scrollTop:target}, 1000);
      event.preventDefault();
    });
  });
</script>

<!-- Dropdown button -->
<script type="text/javascript">
	$(".dropdown-button").dropdown();
</script>

<!-- Header-show-hide -->
<script type="text/javascript">
   $(window).scroll(function() {
	    if ($(this).scrollTop()>0)
	     {
	        $('#header').fadeIn();
	     }
	    else
	     {
	      $('#header').fadeOut();
	     }
	 });
</script>

<!-- FlexSlider -->
  <script defer src="<?php echo base_url(); ?>assets/js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

  <script type="text/javascript">
  	 $(document).ready(function() {
	    $('select').material_select();
	  });
  </script>

</body>
</html>

