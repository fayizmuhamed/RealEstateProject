var _URL = window.URL || window.webkitURL;
//$(".image-upload").change(function (e) {
//    var file, img;
//
//    var image_container = $(this).closest('.imgArea').find('.image-element');
//    var image_upload_error = $(this).closest('.imgArea').find('.image-upload-error');
//    var image_upload = $(this).closest('.imgArea').find(".image-upload");
//
//    var min_width = image_upload.data('min-width');
//
//    var min_height = image_upload.data('min-height');
//
//    var max_width = image_upload.data('max-width');
//
//    var max_height = image_upload.data('max-height');
//
//    if ((file = this.files[0])) {
//        img = new Image();
//
//        img.onload = function (e) {
//
//            if (typeof min_width != 'undefined' && this.width < min_width) {
//
//                image_upload_error.html("File size invalid");
//                image_upload.val('');
//                image_upload_error.show();
//                return false;
//            }
//
//            if (typeof min_height != 'undefined' && this.height < min_height) {
//
//                image_upload_error.html("File size invalid");
//                image_upload.val('');
//                image_upload_error.show();
//                return false;
//            }
//
//            if (typeof max_width != 'undefined' && this.width > max_width) {
//
//                image_upload_error.html("File size invalid");
//                image_upload.val('');
//                image_upload_error.show();
//                return false;
//            }
//
//            if (typeof max_height != 'undefined' && this.height > max_height) {
//
//                image_upload_error.html("File size invalid");
//                image_upload.val('');
//                image_upload_error.show();
//                return false;
//            }
//
//            image_container.attr("src", img.src);
//            image_upload_error.html("");
//            image_upload_error.hide();
//
//        };
//        img.onerror = function () {
//            alert("not a valid file: " + file.type);
//        };
//
//        img.src = _URL.createObjectURL(file);
//
//
//    }
//
//});


$(".image-upload").change(function (e) {


    var txtImageUpload = $(this).closest('.file-field').find('.image-upload-text');
    var txtImageUploadError = $(this).closest('.file-field').find('.image-upload-error');
    var fupImageUpload = $(this).closest('.file-field').find(".image-upload");
    var min_width = fupImageUpload.data('min-width');
    var min_height = fupImageUpload.data('min-height');
    var max_width = fupImageUpload.data('max-width');
    var max_height = fupImageUpload.data('max-height');
    for (var i = 0; i < this.files.length; ++i) {
        var file = this.files[0];
        var img = new Image();
        img.onload = function (e) {

            if (typeof min_width != 'undefined' && this.width < min_width) {

                txtImageUploadError.html("Minimum image width " + min_width + "px required");
                fupImageUpload.val('');
                txtImageUpload.val('');
                txtImageUploadError.show();
                return false;
            }

            if (typeof min_height != 'undefined' && this.height < min_height) {

                txtImageUploadError.html("Minimum image height " + min_width + "px required");
                fupImageUpload.val('');
                txtImageUploadError.show();
                txtImageUpload.val('');
                return false;
            }

            if (typeof max_width != 'undefined' && this.width > max_width) {

                txtImageUploadError.html("Maximum image width " + min_width + "px only");
                fupImageUpload.val('');
                txtImageUploadError.show();
                txtImageUpload.val('');
                return false;
            }

            if (typeof max_height != 'undefined' && this.height > max_height) {

                txtImageUploadError.html("Maximum image height " + min_width + "px only");
                fupImageUpload.val('');
                txtImageUploadError.show();
                txtImageUpload.val('');
                return false;
            }


            txtImageUploadError.html("");
            txtImageUploadError.hide();
        };
        img.onerror = function () {
            alert("not a valid file: " + file.type);
        };
        img.src = _URL.createObjectURL(file);
    }

});

//function to insert new payment plan in admin project page
$(".add-payment-plan").on('click', function () {
    var dtPaymentPlanDate = $('#payment_plan_date');
    var txtPaymentPlanAmount = $('#payment_plan_amount');


    $('#payment_plan_date_error, #payment_plan_amount_error').remove();
    if (dtPaymentPlanDate.val() === '') {
        dtPaymentPlanDate.after('<span id="payment_plan_date_error">Choose date</span>').attr({"aria-describedby": "payment_plan_date_error", "aria-invalid": "true"});
        dtPaymentPlanDate.focus();
        return false;
    } else if (txtPaymentPlanAmount.val() === '') {
        txtPaymentPlanAmount.after('<span id="payment_plan_amount_error">Enter amount</span>').attr({"aria-describedby": "payment_plan_amount_error", "aria-invalid": "true"});
        txtPaymentPlanAmount.focus();
        return false;
    }


    var rowCount = $('#table_payment_plan tbody tr').length;

    rowCount++;

    $("#table_payment_plan tbody").append(
            "<tr>" +
            "<td>" + dtPaymentPlanDate.val() + "</td>" +
            "<td>" + txtPaymentPlanAmount.val() + "</td>" +
            "<td class='width-150 action-table'>" +
            "<button class='delete delete-payment-plan' type='button' ><i class='zmdi zmdi-delete'></i></button>" +
            "</td>" +
            "</tr>"
            );

    $(".delete-payment-plan").bind("click", deletePaymentPlan);

    dtPaymentPlanDate.val('');

    txtPaymentPlanAmount.val('');

    getAllPaymentPlans();

    return false;
});



//function to delete added payment plan in admin page
function deletePaymentPlan() {
    // your code go here
    var par = $(this).parent().parent();
    par.remove();
    getAllPaymentPlans();
    return false;
}

//function to get all payment plans
function getAllPaymentPlans() {
    var data = [];
    var hiddenProjectPaymentPlans = $('#project_payment_plan_hidden');

    $('#table_payment_plan tbody tr').each(function () {
        var paymentPlanDate = $(this).children("td:nth-child(1)").html();
        var paymentPlanAmount = $(this).children("td:nth-child(2)").html();

        var paymentPlans = {
            'date': paymentPlanDate,
            'amount': paymentPlanAmount
        }
        data.push(paymentPlans);
    });

    hiddenProjectPaymentPlans.val(JSON.stringify(data));

}

$("#table_payment_plan tbody tr").on('click', 'button.delete-payment-plan', deletePaymentPlan);


$(document).ready(function () {

    function deleteProjectThumbnail() {

        var btnProjectThumbnailDelete = $(this);

        var projectThumbnailId = btnProjectThumbnailDelete.data('ref');
        $.ajax({
            type: "POST",
            url: "http://localhost/RealEstateProject/admin/projects/delete_thumbnail/" + projectThumbnailId,
            dataType: "text",
            cache: false,
            success:
                    function (data) {
                        var par = btnProjectThumbnailDelete.closest('li');
                        par.remove();
                    }

        });
        return false;
    }
    ;


    $("body").on('click', '.delete_project_thumbnail', deleteProjectThumbnail);
});

