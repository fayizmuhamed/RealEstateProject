</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquary.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/index.js"></script>
<script src="<?php echo base_url(); ?>assets/js/admin.js"></script>
<script type="text/javascript">
    $(".button-collapse").sideNav();
    $(".dropdown-button").dropdown();
</script>
<!-- Select Box -->
<script type="text/javascript">
    $(document).ready(function () {
        $('select').material_select();
    });
</script>

<!-- Date -->
<script type="text/javascript">
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year
        autoclose: true
    });
</script> 
</body>
</html>

