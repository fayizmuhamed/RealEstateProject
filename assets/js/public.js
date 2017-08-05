/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var getCommunities = function (page) {

//$("#loader").show();

    $.ajax({
        type: "GET",
        url: document.BaseUrl + "communities/getCommunities",
        cache: false,
        data: {page: page}

    }).done(function (response) {

        $("#community_container").append(response);
        // $("#loader").hide();

        $('#button_community_load_more').data('val', ($('#button_community_load_more').data('val') + 1));
    });
};
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var findEmployeesWithDepartment = function (department, page) {

    //$("#loader").show();

    $.ajax({
        type: "GET",
        url: document.BaseUrl + "teams/findEmployeesWithSearch",
        cache: false,
        data: {filter: 'emp_department', search_string: department, page: page},
        dataType: "json"
    }).done(function (response) {
        var employee = "";
        console.log(response.status);
        if (response.status === 'success') {


            $.each(response.data, function (key, value) {
                employee += '<div class="col s12 m4 l3">';
                employee += '<div class="agent-card">';
                employee += '<div class="agent-image">';
                employee += '<div class="view"><button><a href="' + document.BaseUrl + "viewprofile/" + value.emp_id + '">View Profile</a></button></div>';
                employee += '<img src="' + document.BaseUrl + "uploads/emp-profile/" + value.emp_profile_image + '">';
                employee += '</div>';
                employee += '<div class="agent-name">';
                employee += '<h3>' + $.trim(value.emp_name) + '</h3>';
                employee += '<span>' + $.trim(value.des_name) + '</span>';
                employee += '</div>';
                employee += '<div class="spcial">';
                employee += '<span><strong>Area Specializes in</strong>' + $.trim(value.emp_area_specialized) + '</span>';
                employee += '<span><strong>From</strong>' + $.trim(value.emp_location) + '</span>';
                employee += '<span><strong>Speaks</strong>' + $.trim(value.emp_languages) + '</span>';
                employee += '</div>';
                employee += '</div>';
                employee += '</div>';
            });
            if (page === 0) {
                $('#team_employee_container').html(employee);
                $('#button_team_load_more').data('val', 2);
            } else {
                $('#team_employee_container').append(employee);
                if (response.data.length > 0) {

                    $('#button_team_load_more').data('val', ($('#button_team_load_more').data('val') + 1));
                }
            }
        } else {
            $('#team_employee_container').html(employee);
        }


//        $("#community_container").append(response);
//
//        // $("#loader").hide();
//
//        $('#button_community_load_more').data('val', ($('#button_community_load_more').data('val') + 1));


    });
};
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var findTeamTestimonial = function (agent, page) {

    //$("#loader").show();

    $.ajax({
        type: "GET",
        url: document.BaseUrl + "testimonial/findTestimonialWithSearch",
        cache: false,
        data: {filter: 'testimonial_agent', search_string: agent, page: page, order: 'testimonial_updated_at', order_type: 'DESC'},
        dataType: "json"
    }).done(function (response) {
     
        var testimonial = "";
        console.log(response.status);
        if (response.status === 'success') {


            $.each(response.data, function (key, value) {
                testimonial += '<div class="col s12 m12 l12">';
                testimonial += '<div class="test-reviw">';
                testimonial += '<p>' + value.testimonial_message + '</p>';
                testimonial += '<span>' + value.testimonial_author_name + '</span>';
                testimonial += '</div>';
                testimonial += '<div class="property-card">';
                testimonial += (value.testimonial_property_status === '1' ? '<dir class="label"></dir>' : '');
                testimonial += '<div class="main-bx-p">';
                testimonial += '<div class="p-detail">';
                testimonial += '<h2>' + value.testimonial_property_number + '&nbsp;' + value.testimonial_property_name + '</h2>';
                testimonial += '<span><i class="zmdi zmdi-pin"></i>&nbsp;' + value.testimonial_property_location + '</span>';
                testimonial += '</div>';
                testimonial += '<img src="' + document.BaseUrl + 'uploads/testimonial/' + value.testimonial_image + '">';
                testimonial += '</div>';
                testimonial += '</div>';
                testimonial += '</div>';
            });
            $('#testimonial_list').append(testimonial);
            if (response.data.length > 0) {

                $('#button_team_testimonial_load_more').data('page', ($('#button_team_testimonial_load_more').data('page') + 1));
            }
        } else {
            console.log('testimonial view more failed');
        }


    });
};
var findTestimonial = function (page) {

    //$("#loader").show();

    $.ajax({
        type: "GET",
        url: document.BaseUrl + "testimonial/findTestimonialWithSearch",
        cache: false,
        data: {page: page, order: 'testimonial_updated_at', order_type: 'DESC'},
        dataType: "json"
    }).done(function (response) {
       
        var testimonial = "";
        console.log(response.status);
        if (response.status === 'success') {
            $i = 0;
            $.each(response.data, function (key, value) {
                if ($i % 2 === 0) {
                    testimonial += '<div class="col s12 m12 l12">';
                    testimonial += '    <div class="each-testimonial">';
                    testimonial += '        <div class="user-testi">';
                    testimonial += '            <div class="over-lay-view">';
                    testimonial += '                <button><a href="' + document.BaseUrl + 'viewprofile/' + value.emp_id + '">View Profile</a></button>';
                    testimonial += '            </div>';
                    testimonial += '            <img src="' + document.BaseUrl + 'uploads/emp-profile/' + value.emp_profile_image + ' ">';
                    testimonial += '        </div>';
                    testimonial += '        <div class="testi-content">';
                    testimonial += '            <div class="head-part">';
                    testimonial += '                <div class="name-dt">';
                    testimonial += '                    <h1>' + value.emp_name + '</h1>';
                    testimonial += '                    <i>' + value.des_name + '</i>';
                    testimonial += '                    <br>';
                    testimonial += '                    <strong><span>Area Specializes in</span>' + value.emp_area_specialized + '</strong>';
                    testimonial += '                    <strong><span>From</span>' + value.emp_location + '</strong>';
                    testimonial += '                    <strong><span>Speaks</span>' + value.emp_languages + '</strong>';
                    testimonial += '                </div>';
                    testimonial += '                <div class="bt-dt">';
                    testimonial += '                    <button><a href="' + document.BaseUrl + 'testimonial/' + value.emp_id + ' ">Read My Testimonial</a></button>';
                    testimonial += '                </div>';
                    testimonial += '            </div>';
                    testimonial += '            <p>' + value.testimonial_message + '</p>';
                    testimonial += '        </div>';
                    testimonial += '    </div>';
                    testimonial += '</div>';
                } else {

                    testimonial += '<div class="col s12 m12 l12">';
                    testimonial += '    <div class="each-testimonial">';
                    testimonial += '        <div class="testi-content">';
                    testimonial += '            <div class="head-part">';
                    testimonial += '                <div class="name-dt">';
                    testimonial += '                    <h1>' + value.emp_name + '</h1>';
                    testimonial += '                    <i>' + value.des_name + '</i>';
                    testimonial += '                    <br>';
                    testimonial += '                    <strong><span>Area Specializes in</span>' + value.emp_area_specialized + '</strong>';
                    testimonial += '                    <strong><span>From</span>' + value.emp_location + '</strong>';
                    testimonial += '                    <strong><span>Speaks</span>' + value.emp_languages + '</strong>';
                    testimonial += '                </div>';
                    testimonial += '                <div class="bt-dt">';
                    testimonial += '                    <button><a href="' + document.BaseUrl + 'testimonial/' + value.emp_id + ' ">Read My Testimonial</a></button>';
                    testimonial += '                </div>';
                    testimonial += '            </div>';
                    testimonial += '            <p>' + value.testimonial_message + '</p>';
                    testimonial += '        </div>';
                    testimonial += '        <div class="user-testi">';
                    testimonial += '            <div class="over-lay-view">';
                    testimonial += '                <button><a href="' + document.BaseUrl + 'viewprofile/' + value.emp_id + '">View Profile</a></button>';
                    testimonial += '            </div>';
                    testimonial += '            <img src="' + document.BaseUrl + 'uploads/emp-profile/' + value.emp_profile_image + ' ">';
                    testimonial += '        </div>';
                    testimonial += '    </div>';
                    testimonial += '</div>';
                }

                $i++;
            });
            $('#testimonial_container').append(testimonial);
            if (response.data.length > 0) {

                $('#button_testimonial_load_more').data('page', ($('#button_testimonial_load_more').data('page') + 1));
            }
        } else {
            console.log('testimonial view more failed');
        }


    });
};
var alertMessage = function (parent, alert_type, message, duration) {
    
    var parent_element = $(parent);
    var alert = '';
    if (alert_type === "news") {

        alert = '<div id="card-alert" class="card light-blue lighten-5 alert">';
        alert += '<div class="card-content light-blue-text">';
        alert += '<p> NEWS : ' + message + '</p>';
        alert += '</div>';
        alert += '</div>';
    } else if (alert_type === "info") {
        alert = '<div id="card-alert" class="card deep-purple lighten-5 alert">';
        alert += '<div class="card-content deep-purple-text">';
        alert += '<p> SUCCESS : ' + message + '</p>';
        alert += '</div>';
        alert += '</div>';
    } else if (alert_type === "success") {
        alert = '<div id="card-alert" class="card green lighten-5 alert">';
        alert += '<div class="card-content green-text">';
        alert += '<p> SUCCESS : ' + message + '</p>';
        alert += '</div>';
        alert += '</div>';
    } else if (alert_type === "danger") {
        alert = '<div id="card-alert" class="card red lighten-5 alert">';
        alert += '<div class="card-content red-text">';
        alert += '<p> SUCCESS : ' + message + '</p>';
        alert += '</div>';
        alert += '</div>';
    } else if (alert_type === "warning") {
        alert = '<div id="card-alert" class="card orange lighten-5 alert">';
        alert += '<div class="card-content orange-text">';
        alert += '<p> SUCCESS : ' + message + '</p>';
        alert += '</div>';
        alert += '</div>';
    }

    setTimeout(function () {
        parent_element.html('');
        ;
    }, duration);
    parent_element.html(alert);
    ;
};
var sendFeedback = function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: document.BaseUrl + "contact/sendfeedback",
        data: new FormData(this),
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (response) {
            console.log(response.status);
            if (response.status === 'success') {
                // alertMessage('#message', 'success', response.data, 6000 );
                // $('#frm_send_feedback #response').addClass('alert alert-success').html(response.data);
                $('#frm_send_feedback')[0].reset();
                Materialize.toast(response.data, 10000);
            } else {
                Materialize.toast(response.data, 10000);
                //alertMessage('#message', 'error', response.data, 6000);
                // $('#frm_send_feedback #response').addClass('alert alert-error').html(response.data);
            }
        }

    });
};
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var searchBuyProperties = function (params) {

    var page = 'page' in params ? params['page'] : 1;
    $.ajax({
        type: "GET",
        url: document.BaseUrl + "properties/search",
        cache: false,
        data: params,
        dataType: "json"
    }).done(function (response) {
        var property = "";
        console.log(response.status);
        if (response.status === 'success') {


            $.each(response.data, function (key, value) {
                property += '<div class="col s12 l3 m6">';
                property += '<div class="list-card">';
                property += '<div class="over-card">';
                property += '<ul>';
                property += '<li><i class="icon-bed"></i>&nbsp;' + value.property_unit_type + '</li>';
                property += '<li><i class="icon-1"></i>&nbsp;' + value.property_builtup_area + ' ' + value.property_unit_measure + '</li>';
                property += '<li><i class="icon-bath"></i>&nbsp;' + value.property_rooms + ' Bed</li>';
                property += '<li><i class="icon-bath"></i>&nbsp;' + value.property_bathrooms + ' Baths</li>';
                property += '<li><i class="zmdi zmdi-group"></i>&nbsp;' + ' Maid</li>';
                property += '<li><i class="zmdi zmdi-file-text"></i>&nbsp;' + ' Study</li>';
                property += '</ul>';
                property += '<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>';
                property += '<button class="view-b"><a href="' + document.BaseUrl + 'buydetail/' + value.property_id + '">View Detail</a></button>';
                property += '</div>';
                property += '<div class="property-thumb">';
                var images = $.parseJSON(value.property_images);
                if (images && images.length > 0) {
                    property += '<img src="' + images[0] + '">';
                } else {
                    property += '<img src="#">';
                }

                property += '</div>';
                property += '<div class="property-list-details">';
                property += '<h3>' + value.property_title + '</h3>';
                property += '<span><i class="zmdi zmdi-pin"></i>&nbsp;' + value.property_name + ',' + value.property_community + '</span>';
                property += '<div class="button-block">';
                property += '<button class="price">AED ' + value.property_price + '</button>';
                property += '</div>';
                property += '</div>';
                property += '</div>';
                property += '</div>';


            });
            if (page === "1") {
                $('#buy-property-container').html(property);
                $('#button_buy_load_more').data('page', page);
            } else {
                $('#buy-property-container').append(property);
                if (response.data.length > 0) {

                    $('#button_buy_load_more').data('page', page);
                }
            }
        } else {
            $('#buy-property-container').html(property);
        }


    });
};
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var searchRentProperties = function (params) {

    var page = 'page' in params ? params['page'] : 1;

    $.ajax({
        type: "GET",
        url: document.BaseUrl + "properties/search",
        cache: false,
        data: params,
        dataType: "json"
    }).done(function (response) {
        var property = "";
        console.log(response.status);
        if (response.status === 'success') {


            $.each(response.data, function (key, value) {
             
                property += '<div class="col s12 l3 m6">';
                property += '<div class="list-card">';
                property += '<div class="over-card">';
                property += '<ul>';
                property += '<li><i class="icon-bed"></i>&nbsp;' + value.property_unit_type + '</li>';
                property += '<li><i class="icon-1"></i>&nbsp;' + value.property_builtup_area + ' ' + value.property_unit_measure + '</li>';
                property += '<li><i class="icon-bath"></i>&nbsp;' + value.property_rooms + ' Bed</li>';
                property += '<li><i class="icon-bath"></i>&nbsp;' + value.property_bathrooms + ' Baths</li>';
                property += '<li><i class="zmdi zmdi-group"></i>&nbsp;' + ' Maid</li>';
                property += '<li><i class="zmdi zmdi-file-text"></i>&nbsp;' + ' Study</li>';
                property += '</ul>';
                property += '<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>';
                property += '<button class="view-b"><a href="' + document.BaseUrl + 'rentdetail/' + value.property_id + '">View Detail</a></button>';
                property += '</div>';
                property += '<div class="property-thumb">';
                var images = $.parseJSON(value.property_images);
                if (images && images.image && images.image.length > 0) {
                    property += '<img src="' + images.image[0] + '">';
                } else {
                    property += '<img src="#">';
                }

                property += '</div>';
                property += '<div class="property-list-details">';
                property += '<h3>' + value.property_title + '</h3>';
                property += '<span><i class="zmdi zmdi-pin"></i>&nbsp;' + value.property_name + ',' + value.property_community + '</span>';
                property += '<div class="button-block">';
                property += '<button class="price">AED ' + value.property_price + '</button>';
                property += '</div>';
                property += '</div>';
                property += '</div>';
                property += '</div>';


            });
            if (page === "1") {
                $('#rent-property-container').html(property);
                $('#button_rent_load_more').data('page', page);
            } else {
                $('#rent-property-container').append(property);
                if (response.data.length > 0) {

                    $('#button_rent_load_more').data('page', page);
                }
            }
        } else {
            $('#rent-property-container').html(property);
        }

    });
};

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var findEmployeeProperties = function (params) {

    var page = 'page' in params ? params['page'] : 1;

    $.ajax({
        type: "GET",
        url: document.BaseUrl + "properties/search",
        cache: false,
        data: params,
        dataType: "json"
    }).done(function (response) {
        var property = "";
        console.log(response.status);
        if (response.status === 'success') {


            $.each(response.data, function (key, value) {

                property += '<div class="col s12 l3 m6">';
                property += '<div class="list-card">';
                property += '<div class="over-card">';
                property += '<ul>';
                property += '<li><i class="icon-bed"></i>&nbsp;' + value.property_unit_type + '</li>';
                property += '<li><i class="icon-1"></i>&nbsp;' + value.property_builtup_area + ' ' + value.property_unit_measure + '</li>';
                property += '<li><i class="icon-bath"></i>&nbsp;' + value.property_rooms + ' Bed</li>';
                property += '<li><i class="icon-bath"></i>&nbsp;' + value.property_bathrooms + ' Baths</li>';
                property += '<li><i class="zmdi zmdi-group"></i>&nbsp;' + ' Maid</li>';
                property += '<li><i class="zmdi zmdi-file-text"></i>&nbsp;' + ' Study</li>';
                property += '</ul>';
                property += '<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>';
                property += '<button class="view-b"><a href="' + document.BaseUrl + (value.property_ad_type === 'sale' ? 'buydetail/' : 'rentdetail/') + value.property_id + '">View Detail</a></button>';
                property += '</div>';
                property += '<div class="property-thumb">';
                var images = $.parseJSON(value.property_images);
                if (images && images.image && images.image.length > 0) {
                    property += '<img src="' + images.image[0] + '">';
                } else {
                    property += '<img src="#">';
                }

                property += '</div>';
                property += '<div class="property-list-details">';
                property += '<h3>' + value.property_title + '</h3>';
                property += '<span><i class="zmdi zmdi-pin"></i>&nbsp;' + value.property_name + ',' + value.property_community + '</span>';
                property += '<div class="button-block">';
                property += '<button class="price">AED ' + value.property_price + '</button>';
                property += '</div>';
                property += '</div>';
                property += '</div>';
                property += '</div>';


            });
            if (page === "1") {
                $('#team_detail_property_container').html(property);
                $('#button_team_property_load_more').data('page', page);
            } else {
                $('#team_detail_property_container').append(property);
                if (response.data.length > 0) {

                    $('#button_team_property_load_more').data('page', page);
                }
            }
        } else {
            $('#team_detail_property_container').html(property);
        }
    });
};


/* 
 * Method to load more properties into community details property for sale section
 */
var addMoreCommunitySaleList = function (params) {

    var page = 'page' in params ? params['page'] : 1;

    $.ajax({
        type: "GET",
        url: document.BaseUrl + "properties/search",
        cache: false,
        data: params,
        dataType: "json"
    }).done(function (response) {
        var property = "";
        console.log(response.status);
        if (response.status === 'success') {


            $.each(response.data, function (key, value) {

                property += '<div class="col s12 l3 m6">';
                property += '<div class="list-card">';
                property += '<div class="over-card">';
                property += '<ul>';
                property += '<li><i class="icon-bed"></i>&nbsp;' + value.property_unit_type + '</li>';
                property += '<li><i class="icon-1"></i>&nbsp;' + value.property_builtup_area + ' ' + value.property_unit_measure + '</li>';
                property += '<li><i class="icon-bath"></i>&nbsp;' + value.property_rooms + ' Bed</li>';
                property += '<li><i class="icon-bath"></i>&nbsp;' + value.property_bathrooms + ' Baths</li>';
                property += '<li><i class="zmdi zmdi-group"></i>&nbsp;' + ' Maid</li>';
                property += '<li><i class="zmdi zmdi-file-text"></i>&nbsp;' + ' Study</li>';
                property += '</ul>';
                property += '<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>';
                property += '<button class="view-b"><a href="' + document.BaseUrl + 'buydetail/' + value.property_id + '">View Detail</a></button>';
                property += '</div>';
                property += '<div class="property-thumb">';
                var images = $.parseJSON(value.property_images);
                if (images && images.image && images.image.length > 0) {
                    property += '<img src="' + images.image[0] + '">';
                } else {
                    property += '<img src="#">';
                }

                property += '</div>';
                property += '<div class="property-list-details">';
                property += '<h3>' + value.property_title + '</h3>';
                property += '<span><i class="zmdi zmdi-pin"></i>&nbsp;' + value.property_name + ',' + value.property_community + '</span>';
                property += '<div class="button-block">';
                property += '<button class="price">AED ' + value.property_price + '</button>';
                property += '</div>';
                property += '</div>';
                property += '</div>';
                property += '</div>';


            });
            if (page === "1") {
                $('#community_datail_sale_list_container').html(property);
                $('#btn_community_detail_sale_add_more').data('page', page);
            } else {
                $('#community_datail_sale_list_container').append(property);
                if (response.data.length > 0) {

                    $('#btn_community_detail_sale_add_more').data('page', page);
                }
            }
        } else {
            $('#community_datail_sale_list_container').html(property);
        }
    });
};

/* 
 * Method to load more properties into community details property for rent section
 */
var addMoreCommunityRentList = function (params) {

    var page = 'page' in params ? params['page'] : 1;

    $.ajax({
        type: "GET",
        url: document.BaseUrl + "properties/search",
        cache: false,
        data: params,
        dataType: "json"
    }).done(function (response) {
        var property = "";
        console.log(response.status);
        if (response.status === 'success') {


            $.each(response.data, function (key, value) {
              
                property += '<div class="col s12 l3 m6">';
                property += '<div class="list-card">';
                property += '<div class="over-card">';
                property += '<ul>';
                property += '<li><i class="icon-bed"></i>&nbsp;' + value.property_unit_type + '</li>';
                property += '<li><i class="icon-1"></i>&nbsp;' + value.property_builtup_area + ' ' + value.property_unit_measure + '</li>';
                property += '<li><i class="icon-bath"></i>&nbsp;' + value.property_rooms + ' Bed</li>';
                property += '<li><i class="icon-bath"></i>&nbsp;' + value.property_bathrooms + ' Baths</li>';
                property += '<li><i class="zmdi zmdi-group"></i>&nbsp;' + ' Maid</li>';
                property += '<li><i class="zmdi zmdi-file-text"></i>&nbsp;' + ' Study</li>';
                property += '</ul>';
                property += '<button class="mk-e modal-trigger waves-effect waves-light" data-target="modal1"><a href="#">Make Enquiry</a></button>';
                property += '<button class="view-b"><a href="' + document.BaseUrl + 'rentdetail/' + value.property_id + '">View Detail</a></button>';
                property += '</div>';
                property += '<div class="property-thumb">';
                var images = $.parseJSON(value.property_images);
                if (images && images.image && images.image.length > 0) {
                    property += '<img src="' + images.image[0] + '">';
                } else {
                    property += '<img src="#">';
                }

                property += '</div>';
                property += '<div class="property-list-details">';
                property += '<h3>' + value.property_title + '</h3>';
                property += '<span><i class="zmdi zmdi-pin"></i>&nbsp;' + value.property_name + ',' + value.property_community + '</span>';
                property += '<div class="button-block">';
                property += '<button class="price">AED ' + value.property_price + '</button>';
                property += '</div>';
                property += '</div>';
                property += '</div>';
                property += '</div>';


            });
            if (page === "1") {
                $('#community_datail_rent_list_container').html(property);
                $('#btn_community_detail_rent_add_more').data('page', page);
            } else {
                $('#community_datail_rent_list_container').append(property);
                if (response.data.length > 0) {

                    $('#btn_community_detail_rent_add_more').data('page', page);
                }
            }
        } else {
            $('#community_datail_rent_list_container').html(property);
        }
    });
};

$(document).ready(function () {



    $("#button_community_load_more").on('click', function (e) {

        e.preventDefault();
        var page = $(this).data('val');
        getCommunities(page);
    });
    $(".department-filter").on('click', function (e) {

        e.preventDefault();
        var department = $(this).attr('value');
        findEmployeesWithDepartment(department, 0);
    });
    $("#button_team_load_more").on('click', function (e) {

        e.preventDefault();
        var page = $(this).data('val');
        var department = $('ul.tabs.active').attr('value');
        findEmployeesWithDepartment(department, page);
    });
    $("#button_team_testimonial_load_more").on('click', function (e) {

        e.preventDefault();
        var page = $(this).data('page');
        var agent = $(this).data('agent');
        findTeamTestimonial(agent, page);
    });
    $("#button_testimonial_load_more").on('click', function (e) {

        e.preventDefault();
        var page = $(this).data('page');
        findTestimonial(page);
    });
    $("#frm_send_feedback").on('submit', sendFeedback);
    $("#button_buy_load_more").on('click', function (e) {

        e.preventDefault();
        var params = {};
        params['unit_category'] = 'sale';
        var tab = $('ul.tabs.active').attr('value');
        switch (tab) {

            case 'residential':
                params['unit_model'] = 'residential';
                break;
            case 'commercial':
                params['unit_model'] = 'commercial';
                break;
            case 'off_plan':
                params['off_plan'] = '1';
                break;
            case 'featured':
                params['featured'] = '1';
                break;
            case 'plots':
                params['unit_model'] = 'plots';
                break;
        }
        var page = $(this).data('page');
        params['page'] = parseInt(page) + 1;
        searchBuyProperties(params);
    });
    $(".buy-tab").on('click', function (e) {

        e.preventDefault();
        var params = {};
        params['unit_category'] = 'sale';
        var tab = $(this).attr('value');
        switch (tab) {

            case 'residential':
                params['unit_model'] = 'residential';
                break;
            case 'commercial':
                params['unit_model'] = 'commercial';
                break;
            case 'off_plan':
                params['off_plan'] = '1';
                break;
            case 'featured':
                params['featured'] = '1';
                break;
            case 'plots':
                params['unit_model'] = 'plots';
                break;
        }
        params['page'] = '1';
        searchBuyProperties(params);
    });


    $("#button_rent_load_more").on('click', function (e) {
        e.preventDefault();
        var params = {};
        params['unit_category'] = 'rent';
        var tab = $('ul.tabs.active').attr('value');
        switch (tab) {

            case 'residential':
                params['unit_model'] = 'residential';
                break;
            case 'commercial':
                params['unit_model'] = 'commercial';
                break;
            case 'off_plan':
                params['off_plan'] = '1';
                break;
            case 'featured':
                params['featured'] = '1';
                break;
            case 'plots':
                params['unit_model'] = 'plots';
                break;
        }
        var page = $(this).data('page');
        params['page'] = parseInt(page) + 1;
        searchRentProperties(params);
    });
    $(".rent-tab").on('click', function (e) {
        e.preventDefault();
        var params = {};
        params['unit_category'] = 'rent';
        var tab = $(this).attr('value');
        switch (tab) {

            case 'residential':
                params['unit_model'] = 'residential';
                break;
            case 'commercial':
                params['unit_model'] = 'commercial';
                break;
            case 'off_plan':
                params['off_plan'] = '1';
                break;
            case 'featured':
                params['featured'] = '1';
                break;
            case 'plots':
                params['unit_model'] = 'plots';
                break;
        }
        params['page'] = '1';
        searchRentProperties(params);
    });

    $("#button_team_property_load_more").on('click', function (e) {
        e.preventDefault();
        var params = {};
        var page = $(this).data('page');
        var agent = $(this).data('agent');

        params['page'] = parseInt(page) + 1;
        params['agent'] = agent;
        findEmployeeProperties(params);
    });

    $("#btn_community_detail_sale_add_more").on('click', function (e) {
        e.preventDefault();
        var params = {};
        var page = $(this).data('page');
        var community = $(this).data('community');

        params['page'] = parseInt(page) + 1;
        params['count_per_page'] = 4;
        params['community'] = community;
        params['unit_category'] = 'sale';
        addMoreCommunitySaleList(params);
    });

    $("#btn_community_detail_rent_add_more").on('click', function (e) {
        e.preventDefault();
        var params = {};
        var page = $(this).data('page');
        var community = $(this).data('community');

        params['page'] = parseInt(page) + 1;
        params['count_per_page'] = 4;
        params['community'] = community;
        params['unit_category'] = 'rent';
        addMoreCommunityRentList(params);
    });

    $("#btn_property_desc_more").on('click', function (e) {
        e.preventDefault();
        
        var more = $(this).data('more');
        
        if(more==0){
             $(this).data('more',"1");
             $(this).children('a').html("READ LESS");
        }else{
             $(this).data('more',"0");
             $(this).children('a').html("READ MORE");
        }
         $("#property_desc_container").toggleClass('property-desc property-desc-more');
    });


   
});


