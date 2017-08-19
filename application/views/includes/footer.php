</div>


<script src="<?php echo base_url(); ?>tinymce/tinymce.min.js"></script>
<!--        <script src="<?php echo base_url(); ?>assets/js/index.js"></script>-->
<script src="<?php echo base_url(); ?>assets/js/admin.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/croppie.css" />
<script>

    document.BaseUrl = '<?php echo base_url(); ?>';

</script>
<script>
    tinymce.init({
        selector: '.editor',
        forced_root_block: ""
    });</script>
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
        autoclose: true,
        format: 'yyyy-mm-dd',
        closeOnSelect: true,
        onClose: function () {
            $(document.activeElement).blur();
        }

    });
    $('.datepicker').on('change', function () {
        $(this).next().find('.picker__close').click();
    });
//     onSet: function () {
//            if ('select' in arg) {
//                this.close();
//            }
//        },
</script>  
<script>
    $(document).ready(function () {
        $('.tooltipped').tooltip({delay: 50});
        

    });
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
</body>
</html>

