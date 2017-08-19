<footer>
    <div class="container">
        <div class="row">
            <div class="col s12 l4 m12 border-right ">
                <img src="<?php echo base_url(); ?>assets/images/logo.svg">
                <br>
                <h2>ADDRESS</h2>
                <p><?php echo (isset($contact_us_address) ? $contact_us_address : ''); ?></p>
                <p>Opening Hours&nbsp;<strong><?php echo (isset($contact_us_opening_hours) ? $contact_us_opening_hours : ''); ?></strong></p>

                <ul class="social">
                    <li><a href="<?php echo ((isset($contact_us_facebook) && strlen($contact_us_facebook)) ? $contact_us_facebook : '#'); ?>"><i class="zmdi zmdi-facebook"></i></a></li>
                    <li><a href="<?php echo ((isset($contact_us_twitter) && strlen($contact_us_twitter)) ? $contact_us_twitter : '#'); ?>"><i class="zmdi zmdi-twitter"></i></a></li>
                    <li><a href="<?php echo ((isset($contact_us_linked_in) && strlen($contact_us_linked_in)) ? $contact_us_linked_in : '#'); ?>"><i class="zmdi zmdi-linkedin"></i></a></li>
                    <li><a href="<?php echo ((isset($contact_us_instagram) && strlen($contact_us_instagram)) ? $contact_us_instagram : '#'); ?>"><i class="zmdi zmdi-instagram"></i></a></li>
                </ul>

            </div>
            <div class="col s12 l4 m12 border-right links-f">
                <ul>
                    <h2>LINKS</h2>
                    <br>
                    <li><a href="<?php echo base_url(); ?>#who">About us</a></li>
                    <li><a href="<?php echo base_url(); ?>#featured-sale">Featured Properties for Sale</a></li>
                    <li><a href="<?php echo base_url(); ?>#featured-rent">Features Properties for Rent</a></li>
                    <li><a href="<?php echo base_url(); ?>projects">Projects</a></li>
                    <li><a href="<?php echo base_url(); ?>propertyowner">List your Property</a></li>
                    <li><a href="<?php echo base_url(); ?>career">Careers</a></li>
                    <li><a href="<?php echo base_url(); ?>contact">Contact us</a></li>
                </ul>

            </div>
            <div class="col s12 l4 m12">
                <h2>Quick Enquiry</h2>
                <?php $attributes = array('id' => 'frm_quick_enquiry'); ?>
                <?php echo form_open('', $attributes); ?>
                <div>
                    <input type="text" placeholder="Name" name="author_name">
                </div>
                <div>
                    <input type="text" placeholder="Phone Number" name="author_contact">
                </div>
                <div>
                    <input type="text" placeholder="E-mail" name="author_email">
                </div>
                <div>
                    <textarea placeholder="Mesage" name="author_message"></textarea>
                </div>
                <br>
                <div>
                    <button class="waves-effect waves-light" type="submit">SUBMIT</button>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col s12 l6 m6"><p>2017 All Right Reserved</p></div>
            </div>
        </div>
    </div>
</footer>


<!-- Scripts -->
<!--Import jQuery before materialize.js-->

<script src='<?php echo base_url(); ?>assets/js/css3-animate-it.js'></script>
<script src='<?php echo base_url(); ?>assets/js/public.js'></script>
<script>

    document.BaseUrl = '<?php echo base_url(); ?>';

</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('ul.tabs').tabs();
    });
</script>

<!-- Push Nav Mobile -->
<script type="text/javascript">
    $(".button-collapse").sideNav();
</script>

<!-- Model -->
<script>
    $(document).ready(function () {

        //initialize all modals           
        $('.modal').modal();

        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').modal();
    });
</script>

<!-- Anchore -->
<script>
    $(document).ready(function () {
        $('a[href^="#"]').click(function (event) {
            var id = $(this).attr("href");
            var offset = 60;
            var target = $(id).offset().top - offset;

            $('html, body').animate({scrollTop: target}, 1000);
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
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0)
        {
            $('#header').fadeIn();
        } else
        {
            $('#header').fadeOut();
        }
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('select').material_select();
    });
</script>


<script type="text/javascript">
//    var options = {
//        data: [{"name": "Afghanistan", "code": "AF"},
//            {"name": "Aland Islands", "code": "AX"},
//            {"name": "Albania", "code": "AL"},
//            {"name": "Algeria", "code": "DZ"},
//            {"name": "American Samoa", "code": "AS"}],
//        getValue: "name",
//        multiple:true,
//	list: {
//		match: {
//			enabled: true
//		}
//	}
//    };
//
//    $("#basics").easyAutocomplete(options);
</script>

<script type="text/javascript">
    $(document)
            .ajaxStart(function () {
                $("#loader").show();
            })
            .ajaxStop(function () {
                $("#loader").hide();
            });
</script>

<!-- FlexSlider -->
<script defer src="<?php echo base_url(); ?>assets/js/jquery.flexslider.js"></script>

<script type="text/javascript">
//    $(function () {
//        SyntaxHighlighter.all();
//    });
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>



</body>
</html>

