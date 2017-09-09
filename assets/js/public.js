var number_format = function(number, decimals, decPoint, thousandsSep) {
 number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
  var n = !isFinite(+number) ? 0 : +number;
  var prec = !isFinite(+decimals) ? 0 : Math.abs(decimals);
  var sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep;
  var dec = (typeof decPoint === 'undefined') ? '.' : decPoint;
  var s = ''
  var toFixedFix = function (n, prec) {
    var k = Math.pow(10, prec);
    return '' + (Math.round(n * k) / k)
      .toFixed(prec);
  };
  // @todo: for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
};

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
        data: {testimonial_agent: agent, page: page, order: 'testimonial_updated_at', order_type: 'DESC'},
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
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var searchBuyProperties = function (params) {

    var page = 'page' in params ? params['page'] : 1;
    $.ajax({
        type: "GET",
        url: document.BaseUrl + "properties/findPropertiesWithSearch",
        cache: false,
        data: params,
        dataType: "json"
    }).done(function (response) {
        var property = "";
        console.log(response.status);
        if (response.status === 'success') {


            $.each(response.data, function (key, value) {
                var is_maid_room = false;
                var is_study_room = false;
                var facilities = $.parseJSON(value.property_facilities);
                if (facilities && facilities.facility && facilities.facility.length > 0) {

                    is_maid_room = ($.inArray("Maid's room", facilities.facility) === -1) ? false : true;
                    is_study_room = ($.inArray("Study", facilities.facility) === -1) ? false : true;
                }


                property += '<div class="col s12 l3 m6">';
                property += '<div class="list-card">';
                property += '<div class="over-card">';
                property += '<ul>';
                property += '<li><i class="icon-bed"></i>&nbsp;' + value.property_unit_type + '</li>';
                property += '<li><i class="icon-1"></i>&nbsp;' + value.property_builtup_area + ' ' + value.property_unit_measure + '</li>';
                property += '<li><i class="zmdi zmdi-hotel"></i>&nbsp;' + value.property_rooms + ' Bed</li>';
                property += '<li><i class="zmdi zmdi-seat"></i>&nbsp;' + value.property_bathrooms + ' Baths</li>';
                if (is_maid_room) {
                    property += '<li><i class="zmdi zmdi-group"></i>&nbsp;' + ' Maid</li>';
                }

                if (is_study_room) {
                    property += '<li><i class="zmdi zmdi-file-text"></i>&nbsp;' + ' Study</li>';
                }
                property += '</ul>';
                property += '<button class="mk-e modal-trigger waves-effect waves-light" data-target="make_enquiry_model"><a href="#" onclick="makeEnquiry(&#39;property&#39;,&#39;' + value.property_title + '&#39;,&#39;' + value.property_ref_no + '&#39;);return false;">Make Enquiry</a></button>';
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
                property += '<button class="price">AED ' + number_format(value.property_price) + '</button>';
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
        url: document.BaseUrl + "properties/findPropertiesWithSearch",
        cache: false,
        data: params,
        dataType: "json"
    }).done(function (response) {
        var property = "";
        console.log(response.status);
        if (response.status === 'success') {


            $.each(response.data, function (key, value) {
                var is_maid_room = false;
                var is_study_room = false;
                var facilities = $.parseJSON(value.property_facilities);
                if (facilities && facilities.facility && facilities.facility.length > 0) {

                    is_maid_room = ($.inArray("Maid's room", facilities.facility) === -1) ? false : true;
                    is_study_room = ($.inArray("Study", facilities.facility) === -1) ? false : true;
                }
                property += '<div class="col s12 l3 m6">';
                property += '<div class="list-card">';
                property += '<div class="over-card">';
                property += '<ul>';
                property += '<li><i class="icon-bed"></i>&nbsp;' + value.property_unit_type + '</li>';
                property += '<li><i class="icon-1"></i>&nbsp;' + value.property_builtup_area + ' ' + value.property_unit_measure + '</li>';
                property += '<li><i class="zmdi zmdi-hotel"></i>&nbsp;' + value.property_rooms + ' Bed</li>';
                property += '<li><i class="zmdi zmdi-seat"></i>&nbsp;' + value.property_bathrooms + ' Baths</li>';
                if (is_maid_room) {
                    property += '<li><i class="zmdi zmdi-group"></i>&nbsp;' + ' Maid</li>';
                }

                if (is_study_room) {
                    property += '<li><i class="zmdi zmdi-file-text"></i>&nbsp;' + ' Study</li>';
                }
                property += '</ul>';
                property += '<button class="mk-e modal-trigger waves-effect waves-light" data-target="make_enquiry_model"><a href="#" onclick="makeEnquiry(&#39;property&#39;,&#39;' + value.property_title + '&#39;,&#39;' + value.property_ref_no + '&#39;);return false;">Make Enquiry</a></button>';
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
                property += '<button class="price">AED ' + number_format(value.property_price) + '</button>';
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
var searchBuySubProperties = function (params) {

    var page = 'page' in params ? params['page'] : 1;
    $.ajax({
        type: "GET",
        url: document.BaseUrl + "properties/findPropertiesWithSearch",
        cache: false,
        data: params,
        dataType: "json"
    }).done(function (response) {
        var property = "";
        console.log(response.status);
        if (response.status === 'success') {


            $.each(response.data, function (key, value) {
                var is_maid_room = false;
                var is_study_room = false;
                var facilities = $.parseJSON(value.property_facilities);
                if (facilities && facilities.facility && facilities.facility.length > 0) {

                    is_maid_room = ($.inArray("Maid's room", facilities.facility) === -1) ? false : true;
                    is_study_room = ($.inArray("Study", facilities.facility) === -1) ? false : true;
                }
                property += '<div class="col s12 l3 m6">';
                property += '<div class="list-card">';
                property += '<div class="over-card">';
                property += '<ul>';
                property += '<li><i class="icon-bed"></i>&nbsp;' + value.property_unit_type + '</li>';
                property += '<li><i class="icon-1"></i>&nbsp;' + value.property_builtup_area + ' ' + value.property_unit_measure + '</li>';
                property += '<li><i class="zmdi zmdi-hotel"></i>&nbsp;' + value.property_rooms + ' Bed</li>';
                property += '<li><i class="zmdi zmdi-seat"></i>&nbsp;' + value.property_bathrooms + ' Baths</li>';
                if (is_maid_room) {
                    property += '<li><i class="zmdi zmdi-group"></i>&nbsp;' + ' Maid</li>';
                }

                if (is_study_room) {
                    property += '<li><i class="zmdi zmdi-file-text"></i>&nbsp;' + ' Study</li>';
                }
                property += '</ul>';
                property += '<button class="mk-e modal-trigger waves-effect waves-light" data-target="make_enquiry_model"><a href="#" onclick="makeEnquiry(&#39;property&#39;,&#39;' + value.property_title + '&#39;,&#39;' + value.property_ref_no + '&#39;);return false;">Make Enquiry</a></button>';
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
                property += '<button class="price">AED ' + number_format(value.property_price) + '</button>';
                property += '</div>';
                property += '</div>';
                property += '</div>';
                property += '</div>';


            });
            if (page === "1") {
                $('#buy-sub-property-container').html(property);
                $('#button_buy_sub_load_more').data('page', page);
            } else {
                $('#buy-sub-property-container').append(property);
                if (response.data.length > 0) {

                    $('#button_buy_sub_load_more').data('page', page);
                }
            }
        } else {
            $('#buy-sub-property-container').html(property);
        }


    });
};
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var searchRentSubProperties = function (params) {

    var page = 'page' in params ? params['page'] : 1;

    $.ajax({
        type: "GET",
        url: document.BaseUrl + "properties/findPropertiesWithSearch",
        cache: false,
        data: params,
        dataType: "json"
    }).done(function (response) {
        var property = "";
        console.log(response.status);
        if (response.status === 'success') {


            $.each(response.data, function (key, value) {
                var is_maid_room = false;
                var is_study_room = false;
                var facilities = $.parseJSON(value.property_facilities);
                if (facilities && facilities.facility && facilities.facility.length > 0) {

                    is_maid_room = ($.inArray("Maid's room", facilities.facility) === -1) ? false : true;
                    is_study_room = ($.inArray("Study", facilities.facility) === -1) ? false : true;
                }
                property += '<div class="col s12 l3 m6">';
                property += '<div class="list-card">';
                property += '<div class="over-card">';
                property += '<ul>';
                property += '<li><i class="icon-bed"></i>&nbsp;' + value.property_unit_type + '</li>';
                property += '<li><i class="icon-1"></i>&nbsp;' + value.property_builtup_area + ' ' + value.property_unit_measure + '</li>';
                property += '<li><i class="zmdi zmdi-hotel"></i>&nbsp;' + value.property_rooms + ' Bed</li>';
                property += '<li><i class="zmdi zmdi-seat"></i>&nbsp;' + value.property_bathrooms + ' Baths</li>';
                if (is_maid_room) {
                    property += '<li><i class="zmdi zmdi-group"></i>&nbsp;' + ' Maid</li>';
                }

                if (is_study_room) {
                    property += '<li><i class="zmdi zmdi-file-text"></i>&nbsp;' + ' Study</li>';
                }
                property += '</ul>';
                property += '<button class="mk-e modal-trigger waves-effect waves-light" data-target="make_enquiry_model"><a href="#" onclick="makeEnquiry(&#39;property&#39;,&#39;' + value.property_title + '&#39;,&#39;' + value.property_ref_no + '&#39;);return false;">Make Enquiry</a></button>';
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
                property += '<button class="price">AED ' + number_format(value.property_price) + '</button>';
                property += '</div>';
                property += '</div>';
                property += '</div>';
                property += '</div>';


            });
            if (page === "1") {
                $('#rent-sub-property-container').html(property);
                $('#button_rent_sub_load_more').data('page', page);
            } else {
                $('#rent-sub-property-container').append(property);
                if (response.data.length > 0) {

                    $('#button_rent_sub_load_more').data('page', page);
                }
            }
        } else {
            $('#rent-sub-property-container').html(property);
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
        url: document.BaseUrl + "properties/findPropertiesWithSearch",
        cache: false,
        data: params,
        dataType: "json"
    }).done(function (response) {
        var property = "";
        console.log(response.status);
        if (response.status === 'success') {


            $.each(response.data, function (key, value) {
                var is_maid_room = false;
                var is_study_room = false;
                var facilities = $.parseJSON(value.property_facilities);
                if (facilities && facilities.facility && facilities.facility.length > 0) {

                    is_maid_room = ($.inArray("Maid's room", facilities.facility) === -1) ? false : true;
                    is_study_room = ($.inArray("Study", facilities.facility) === -1) ? false : true;
                }
                property += '<div class="col s12 l3 m6">';
                property += '<div class="list-card">';
                property += '<div class="over-card">';
                property += '<ul>';
                property += '<li><i class="icon-bed"></i>&nbsp;' + value.property_unit_type + '</li>';
                property += '<li><i class="icon-1"></i>&nbsp;' + value.property_builtup_area + ' ' + value.property_unit_measure + '</li>';
                property += '<li><i class="zmdi zmdi-hotel"></i>&nbsp;' + value.property_rooms + ' Bed</li>';
                property += '<li><i class="zmdi zmdi-seat"></i>&nbsp;' + value.property_bathrooms + ' Baths</li>';
                if (is_maid_room) {
                    property += '<li><i class="zmdi zmdi-group"></i>&nbsp;' + ' Maid</li>';
                }

                if (is_study_room) {
                    property += '<li><i class="zmdi zmdi-file-text"></i>&nbsp;' + ' Study</li>';
                }
                property += '</ul>';
                property += '<button class="mk-e modal-trigger waves-effect waves-light" data-target="make_enquiry_model"><a href="#" onclick="makeEnquiry(&#39;property&#39;,&#39;' + value.property_title + '&#39;,&#39;' + value.property_ref_no + '&#39;);return false;">Make Enquiry</a></button>';
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
                property += '<button class="price">AED ' + number_format(value.property_price) + '</button>';
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
        url: document.BaseUrl + "properties/findPropertiesWithSearch",
        cache: false,
        data: params,
        dataType: "json"
    }).done(function (response) {
        var property = "";
        console.log(response.status);
        if (response.status === 'success') {


            $.each(response.data, function (key, value) {
                var is_maid_room = false;
                var is_study_room = false;
                var facilities = $.parseJSON(value.property_facilities);
                if (facilities && facilities.facility && facilities.facility.length > 0) {

                    is_maid_room = ($.inArray("Maid's room", facilities.facility) === -1) ? false : true;
                    is_study_room = ($.inArray("Study", facilities.facility) === -1) ? false : true;
                }
                property += '<div class="col s12 l3 m6">';
                property += '<div class="list-card">';
                property += '<div class="over-card">';
                property += '<ul>';
                property += '<li><i class="icon-bed"></i>&nbsp;' + value.property_unit_type + '</li>';
                property += '<li><i class="icon-1"></i>&nbsp;' + value.property_builtup_area + ' ' + value.property_unit_measure + '</li>';
                property += '<li><i class="zmdi zmdi-hotel"></i>&nbsp;' + value.property_rooms + ' Bed</li>';
                property += '<li><i class="zmdi zmdi-seat"></i>&nbsp;' + value.property_bathrooms + ' Baths</li>';
                if (is_maid_room) {
                    property += '<li><i class="zmdi zmdi-group"></i>&nbsp;' + ' Maid</li>';
                }

                if (is_study_room) {
                    property += '<li><i class="zmdi zmdi-file-text"></i>&nbsp;' + ' Study</li>';
                }
                property += '</ul>';
                property += '<button class="mk-e modal-trigger waves-effect waves-light" data-target="make_enquiry_model"><a href="#" onclick="makeEnquiry(&#39;property&#39;,&#39;' + value.property_title + '&#39;,&#39;' + value.property_ref_no + '&#39;);return false;">Make Enquiry</a></button>';
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
                property += '<button class="price">AED ' + number_format(value.property_price) + '</button>';
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
        url: document.BaseUrl + "properties/findPropertiesWithSearch",
        cache: false,
        data: params,
        dataType: "json"
    }).done(function (response) {
        var property = "";
        console.log(response.status);
        if (response.status === 'success') {


            $.each(response.data, function (key, value) {
                var is_maid_room = false;
                var is_study_room = false;
                var facilities = $.parseJSON(value.property_facilities);
                if (facilities && facilities.facility && facilities.facility.length > 0) {

                    is_maid_room = ($.inArray("Maid's room", facilities.facility) === -1) ? false : true;
                    is_study_room = ($.inArray("Study", facilities.facility) === -1) ? false : true;
                }
                property += '<div class="col s12 l3 m6">';
                property += '<div class="list-card">';
                property += '<div class="over-card">';
                property += '<ul>';
                property += '<li><i class="icon-bed"></i>&nbsp;' + value.property_unit_type + '</li>';
                property += '<li><i class="icon-1"></i>&nbsp;' + value.property_builtup_area + ' ' + value.property_unit_measure + '</li>';
                property += '<li><i class="zmdi zmdi-hotel"></i>&nbsp;' + value.property_rooms + ' Bed</li>';
                property += '<li><i class="zmdi zmdi-seat"></i>&nbsp;' + value.property_bathrooms + ' Baths</li>';
                if (is_maid_room) {
                    property += '<li><i class="zmdi zmdi-group"></i>&nbsp;' + ' Maid</li>';
                }

                if (is_study_room) {
                    property += '<li><i class="zmdi zmdi-file-text"></i>&nbsp;' + ' Study</li>';
                }
                property += '</ul>';
                property += '<button class="mk-e modal-trigger waves-effect waves-light" data-target="make_enquiry_model"><a href="#" onclick="makeEnquiry(&#39;property&#39;,&#39;' + value.property_title + '&#39;,&#39;' + value.property_ref_no + '&#39;);return false;">Make Enquiry</a></button>';
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
                property += '<button class="price">AED ' + number_format(value.property_price) + '</button>';
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

var addMoreBuyDetailPropertyList=function (params) {

    var page = 'page' in params ? params['page'] : 1;

    $.ajax({
        type: "GET",
        url: document.BaseUrl + "properties/findPropertiesWithSearch",
        cache: false,
        data: params,
        dataType: "json"
    }).done(function (response) {
        var property = "";
        console.log(response.status);
        if (response.status === 'success') {


            $.each(response.data, function (key, value) {
                var is_maid_room = false;
                var is_study_room = false;
                var facilities = $.parseJSON(value.property_facilities);
                if (facilities && facilities.facility && facilities.facility.length > 0) {

                    is_maid_room = ($.inArray("Maid's room", facilities.facility) === -1) ? false : true;
                    is_study_room = ($.inArray("Study", facilities.facility) === -1) ? false : true;
                }
                property += '<div class="col s12 l3 m6">';
                property += '<div class="list-card">';
                property += '<div class="over-card">';
                property += '<ul>';
                property += '<li><i class="icon-bed"></i>&nbsp;' + value.property_unit_type + '</li>';
                property += '<li><i class="icon-1"></i>&nbsp;' + value.property_builtup_area + ' ' + value.property_unit_measure + '</li>';
                property += '<li><i class="zmdi zmdi-hotel"></i>&nbsp;' + value.property_rooms + ' Bed</li>';
                property += '<li><i class="zmdi zmdi-seat"></i>&nbsp;' + value.property_bathrooms + ' Baths</li>';
                if (is_maid_room) {
                    property += '<li><i class="zmdi zmdi-group"></i>&nbsp;' + ' Maid</li>';
                }

                if (is_study_room) {
                    property += '<li><i class="zmdi zmdi-file-text"></i>&nbsp;' + ' Study</li>';
                }
                property += '</ul>';
                property += '<button class="mk-e modal-trigger waves-effect waves-light" data-target="make_enquiry_model"><a href="#" onclick="makeEnquiry(&#39;property&#39;,&#39;' + value.property_title + '&#39;,&#39;' + value.property_ref_no + '&#39;);return false;">Make Enquiry</a></button>';
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
                property += '<button class="price">AED ' + number_format(value.property_price) + '</button>';
                property += '</div>';
                property += '</div>';
                property += '</div>';
                property += '</div>';


            });
            if (page === "1") {
                $('#buy_detail_property_list_container').html(property);
                $('#btn_buy_detail_property_list_add_more').data('page', page);
            } else {
                $('#buy_detail_property_list_container').append(property);
                if (response.data.length > 0) {

                    $('#btn_buy_detail_property_list_add_more').data('page', page);
                }
            }
        } else {
            $('#buy_detail_property_list_container').html(property);
        }
    });
};

var addMoreRentDetailPropertyList=function (params) {

    var page = 'page' in params ? params['page'] : 1;

    $.ajax({
        type: "GET",
        url: document.BaseUrl + "properties/findPropertiesWithSearch",
        cache: false,
        data: params,
        dataType: "json"
    }).done(function (response) {
        var property = "";
        console.log(response.status);
        if (response.status === 'success') {


            $.each(response.data, function (key, value) {
                var is_maid_room = false;
                var is_study_room = false;
                var facilities = $.parseJSON(value.property_facilities);
                if (facilities && facilities.facility && facilities.facility.length > 0) {

                    is_maid_room = ($.inArray("Maid's room", facilities.facility) === -1) ? false : true;
                    is_study_room = ($.inArray("Study", facilities.facility) === -1) ? false : true;
                }
                property += '<div class="col s12 l3 m6">';
                property += '<div class="list-card">';
                property += '<div class="over-card">';
                property += '<ul>';
                property += '<li><i class="icon-bed"></i>&nbsp;' + value.property_unit_type + '</li>';
                property += '<li><i class="icon-1"></i>&nbsp;' + value.property_builtup_area + ' ' + value.property_unit_measure + '</li>';
                property += '<li><i class="zmdi zmdi-hotel"></i>&nbsp;' + value.property_rooms + ' Bed</li>';
                property += '<li><i class="zmdi zmdi-seat"></i>&nbsp;' + value.property_bathrooms + ' Baths</li>';
                if (is_maid_room) {
                    property += '<li><i class="zmdi zmdi-group"></i>&nbsp;' + ' Maid</li>';
                }

                if (is_study_room) {
                    property += '<li><i class="zmdi zmdi-file-text"></i>&nbsp;' + ' Study</li>';
                }
                property += '</ul>';
                property += '<button class="mk-e modal-trigger waves-effect waves-light" data-target="make_enquiry_model"><a href="#" onclick="makeEnquiry(&#39;property&#39;,&#39;' + value.property_title + '&#39;,&#39;' + value.property_ref_no + '&#39;);return false;">Make Enquiry</a></button>';
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
                property += '<button class="price">AED ' + number_format(value.property_price) + '</button>';
                property += '</div>';
                property += '</div>';
                property += '</div>';
                property += '</div>';


            });
            if (page === "1") {
                $('#rent_detail_property_list_container').html(property);
                $('#btn_rent_detail_property_list_add_more').data('page', page);
            } else {
                $('#rent_detail_property_list_container').append(property);
                if (response.data.length > 0) {

                    $('#btn_rent_detail_property_list_add_more').data('page', page);
                }
            }
        } else {
            $('#rent_detail_property_list_container').html(property);
        }
    });
};

$("#frm_send_feedback").submit(function (event) {
    event.preventDefault();
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
});
$("#frm_quick_enquiry").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: document.BaseUrl + "email/quickenquiry",
        data: new FormData(this),
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (response) {
            console.log(response.status);
            if (response.status === 'success') {
                $('#frm_quick_enquiry')[0].reset();
                Materialize.toast(response.data, 10000);
            } else {
                Materialize.toast(response.data, 10000);
            }
        }

    });
});

$("#frm_quick_contact").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: document.BaseUrl + "email/quickenquiry",
        data: new FormData(this),
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (response) {
            console.log(response.status);
            if (response.status === 'success') {
                $('#frm_quick_contact')[0].reset();
                Materialize.toast(response.data, 10000);
            } else {
                Materialize.toast(response.data, 10000);
            }
        }

    });
});

$("#frm_send_enquiry_model").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: document.BaseUrl + "email/quickenquiry",
        data: new FormData(this),
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (response) {
            console.log(response.status);
            if (response.status === 'success') {
                $('#frm_send_enquiry_model')[0].reset();
                Materialize.toast(response.data, 10000);
            } else {
                Materialize.toast(response.data, 10000);
            }
        }

    });
});

$("#frm_project_detail_send_enquiry").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: document.BaseUrl + "email/quickenquiry",
        data: new FormData(this),
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (response) {
            console.log(response.status);
            if (response.status === 'success') {
                $('#frm_project_detail_send_enquiry')[0].reset();
                Materialize.toast(response.data, 10000);
            } else {
                Materialize.toast(response.data, 10000);
            }
        }

    });
});

var dropMyCV = function (e) {
    e.preventDefault();
    //var formData = new FormData($('#add_new_project')[0]);
    //var dataString = $('#add_new_project').serialize();

   $.ajax({
        type: "POST",
        url: document.BaseUrl + "career/dropmycv",
        data: new FormData(this),
        mimeType: "multipart/form-data",
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (response) {
            console.log(response.status);
            if (response.status === 'success') {
                $('#frm_drop_my_cv')[0].reset();
                Materialize.toast(response.data, 10000);
            } else {
                Materialize.toast(response.data, 10000);
            }
        }

    });
};



$("#frm_contact_make_enquiry_buy").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: document.BaseUrl + "email/enquiry",
        data: new FormData(this),
        processData: false,
        contentType: false,
        dataType: "json",
        cache: false,
        success: function (response) {
            console.log(response.status);
            if (response.status === 'success') {
                $('#frm_contact_make_enquiry_buy')[0].reset();
                Materialize.toast(response.data, 10000);
            } else {
                Materialize.toast(response.data, 10000);
            }
        }

    });
});

$("#frm_contact_make_enquiry_rent").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: document.BaseUrl + "email/enquiry",
        data: new FormData(this),
        processData: false,
        contentType: false,
        dataType: "json",
        cache: false,
        success: function (response) {
            console.log(response.status);
            if (response.status === 'success') {
                $('#frm_contact_make_enquiry_rent')[0].reset();
                Materialize.toast(response.data, 10000);
            } else {
                Materialize.toast(response.data, 10000);
            }
        }

    });
});

$("#frm_list_your_property_buy").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: document.BaseUrl + "email/listyourproperty",
        data: new FormData(this),
        processData: false,
        contentType: false,
        dataType: "json",
        cache: false,
        success: function (response) {
            console.log(response.status);
            if (response.status === 'success') {
                $('#frm_list_your_property_buy')[0].reset();
                Materialize.toast(response.data, 10000);
            } else {
                Materialize.toast(response.data, 10000);
            }
        }

    });
});

$("#frm_list_your_property_rent").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: document.BaseUrl + "email/listyourproperty",
        data: new FormData(this),
        processData: false,
        contentType: false,
        dataType: "json",
        cache: false,
        success: function (response) {
            console.log(response.status);
            if (response.status === 'success') {
                $('#frm_list_your_property_rent')[0].reset();
                Materialize.toast(response.data, 10000);
            } else {
                Materialize.toast(response.data, 10000);
            }
        }

    });
});

$("#frm_request_pre_valuation_buy").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: document.BaseUrl + "email/requestprevaluation",
        data: new FormData(this),
        processData: false,
        contentType: false,
        dataType: "json",
        cache: false,
        success: function (response) {
            console.log(response.status);
            if (response.status === 'success') {
                $('#frm_request_pre_valuation_buy')[0].reset();
                Materialize.toast(response.data, 10000);
            } else {
                Materialize.toast(response.data, 10000);
            }
        }

    });
});

$("#frm_request_pre_valuation_rent").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: document.BaseUrl + "email/requestprevaluation",
        data: new FormData(this),
        processData: false,
        contentType: false,
        dataType: "json",
        cache: false,
        success: function (response) {
            console.log(response.status);
            if (response.status === 'success') {
                $('#frm_request_pre_valuation_rent')[0].reset();
                Materialize.toast(response.data, 10000);
            } else {
                Materialize.toast(response.data, 10000);
            }
        }

    });
});

$("#frm_owner_list_your_property_buy").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: document.BaseUrl + "email/listyourproperty",
        data: new FormData(this),
        processData: false,
        contentType: false,
        dataType: "json",
        cache: false,
        success: function (response) {
            console.log(response.status);
            if (response.status === 'success') {
                $('#frm_owner_list_your_property_buy')[0].reset();
                Materialize.toast(response.data, 10000);
            } else {
                Materialize.toast(response.data, 10000);
            }
        }

    });
});

$("#frm_owner_list_your_property_rent").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: document.BaseUrl + "email/listyourproperty",
        data: new FormData(this),
        processData: false,
        contentType: false,
        dataType: "json",
        cache: false,
        success: function (response) {
            console.log(response.status);
            if (response.status === 'success') {
                $('#frm_owner_list_your_property_rent')[0].reset();
                Materialize.toast(response.data, 10000);
            } else {
                Materialize.toast(response.data, 10000);
            }
        }

    });
});

$("#frm_owner_request_pre_valuation_buy").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: document.BaseUrl + "email/requestprevaluation",
        data: new FormData(this),
        processData: false,
        contentType: false,
        dataType: "json",
        cache: false,
        success: function (response) {
            console.log(response.status);
            if (response.status === 'success') {
                $('#frm_owner_request_pre_valuation_buy')[0].reset();
                Materialize.toast(response.data, 10000);
            } else {
                Materialize.toast(response.data, 10000);
            }
        }

    });
});

$("#frm_owner_request_pre_valuation_rent").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: document.BaseUrl + "email/requestprevaluation",
        data: new FormData(this),
        processData: false,
        contentType: false,
        dataType: "json",
        cache: false,
        success: function (response) {
            console.log(response.status);
            if (response.status === 'success') {
                $('#frm_owner_request_pre_valuation_rent')[0].reset();
                Materialize.toast(response.data, 10000);
            } else {
                Materialize.toast(response.data, 10000);
            }
        }

    });
});

$("#frm_send_message").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: document.BaseUrl + "team/sendmessage",
        data: new FormData(this),
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (response) {
            console.log(response.status);
            if (response.status === 'success') {
                $('#frm_send_message')[0].reset();
                Materialize.toast(response.data, 10000);
            } else {
                Materialize.toast(response.data, 10000);
            }
        },
        error: function (xhr) {
            console.log("Error: " + xhr);
        },
        complete: function () {
            // Handle the complete event
            console.log('completed');
        }

    });
});

$("#frm_request_call_back").submit(function (event) {
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: document.BaseUrl + "team/requestcallback",
        data: new FormData(this),
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (response) {
            console.log(response.status);
            if (response.status === 'success') {
                $('#frm_request_call_back')[0].reset();
                Materialize.toast(response.data, 10000);
            } else {
                Materialize.toast(response.data, 10000);
            }
        },
        error: function () {
            console.log('failed');
        },
        complete: function () {
            // Handle the complete event
            console.log('completed');
        }

    });
});

var makeEnquiry = function (type, ref_name, ref_number) {

    $('#frm_send_enquiry_model #type').val(type);
    $('#frm_send_enquiry_model #ref_number').val(ref_number);
    $('#frm_send_enquiry_model #ref_name').val(ref_name);
};

var sendMessage = function (agent, property_ref, property_name) {

    $('#frm_send_message #agent').val(agent);
    $('#frm_send_message #property_ref_no').val(property_ref);
    $('#frm_send_message #property_title').val(property_name);
};

var requestForCallBack = function (agent, property_ref, property_name) {

    $('#frm_request_call_back #agent').val(agent);
    $('#frm_request_call_back #property_ref_no').val(property_ref);
    $('#frm_request_call_back #property_title').val(property_name);
};

var findCommunityAgents = function (params) {

    var page = 'page' in params ? params['page'] : 1;

    $.ajax({
        type: "GET",
        url: document.BaseUrl + "communities/findCommunityAgents",
        cache: false,
        data: params,
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
            if (page === "1") {
                $('#community_employee_container').html(employee);
                $('#btn_community_employee_add_more').data('page', page);
            } else {
                $('#community_employee_container').append(employee);
                if (response.data.length > 0) {

                    $('#btn_community_employee_add_more').data('page', page);
                }
            }
        } else {
            $('#community_employee_container').html(employee);
        }
    });
};

var findProjectAgents = function (params) {

    var page = 'page' in params ? params['page'] : 1;

    $.ajax({
        type: "GET",
        url: document.BaseUrl + "projects/findProjectAgents",
        cache: false,
        data: params,
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
            if (page === "1") {
                $('#project_employee_container').html(employee);
                $('#btn_project_employee_add_more').data('page', page);
            } else {
                $('#project_employee_container').append(employee);
                if (response.data.length > 0) {

                    $('#btn_project_employee_add_more').data('page', page);
                }
            }
        } else {
            $('#project_employee_container').html(employee);
        }
    });
};

var loadLocations = function () {

    $.ajax({
        type: "GET",
        url: document.BaseUrl + "communities/findAllCommunities",
        cache: false,
        dataType: "json"
    }).done(function (response) {
        var communities = "";
        console.log(response.status);
        if (response.status === 'success') {


            $.each(response.data, function (key, value) {
                communities += '<option value="' + value.community_name + '">' + value.community_name + '</option>';

            });
            $('#header_search_locations').html(communities);

        } else {
            $('#header_search_locations').html(communities);
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
    $("#button_buy_load_more").on('click', function (e) {

        e.preventDefault();
        var params = {};
        params['unit_category'] = 'sale';
        var tab = $('.tabs .tab .active').attr('value');
        switch (tab) {

            case 'residential':
                params['unit_model'] = 'residential';
                params['off_plan'] = '0';
                break;
            case 'commercial':
                params['unit_model'] = 'commercial';
                params['off_plan'] = '0';
                break;
            case 'off_plan':
                params['off_plan'] = '1';
                break;
            case 'featured':
                params['featured'] = '1';
                break;
            case 'plots':
                params['unit_model'] = 'plots';
                params['off_plan'] = '0';
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
                params['off_plan'] = '0';
                break;
            case 'commercial':
                params['unit_model'] = 'commercial';
                params['off_plan'] = '0';
                break;
            case 'off_plan':
                params['off_plan'] = '1';
                break;
            case 'featured':
                params['featured'] = '1';
                break;
            case 'plots':
                params['unit_model'] = 'plots';
                params['off_plan'] = '0';
                break;
        }
        params['page'] = '1';
        searchBuyProperties(params);
    });


    $("#button_rent_load_more").on('click', function (e) {

        e.preventDefault();
        var params = {};
        params['unit_category'] = 'rent';
        var tab = $('.tabs .tab .active').attr('value');
        switch (tab) {

            case 'residential':
                params['unit_model'] = 'residential';
                params['off_plan'] = '0';
                break;
            case 'commercial':
                params['unit_model'] = 'commercial';
                params['off_plan'] = '0';
                break;
            case 'off_plan':
                params['off_plan'] = '1';
                break;
            case 'featured':
                params['featured'] = '1';
                break;
            case 'plots':
                params['unit_model'] = 'plots';
                params['off_plan'] = '0';
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
                params['off_plan'] = '0';
                break;
            case 'commercial':
                params['unit_model'] = 'commercial';
                params['off_plan'] = '0';
                break;
            case 'off_plan':
                params['off_plan'] = '1';
                break;
            case 'featured':
                params['featured'] = '1';
                break;
            case 'plots':
                params['unit_model'] = 'plots';
                params['off_plan'] = '0';
                break;
        }
        params['page'] = '1';
        searchRentProperties(params);
    });

    $("#button_buy_sub_load_more").on('click', function (e) {

        e.preventDefault();
        var params = {};
        params['unit_category'] = 'sale';
        var unit_model = $('#buy_unit_model').attr('value');
        params['unit_model'] = unit_model;

        var property_type = $('.tabs .tab .active').attr('value');
        switch (unit_model) {

            case 'residential':
                params['unit_model'] = 'residential';
                params['off_plan'] = '0';
                break;
            case 'commercial':
                params['unit_model'] = 'commercial';
                params['off_plan'] = '0';
                break;
            case 'plots':
                params['unit_model'] = 'plots';
                params['off_plan'] = '0';
                break;
        }
        var page = $(this).data('page');
        params['page'] = parseInt(page) + 1;
        params['property_type'] = property_type;
        searchBuySubProperties(params);
    });
    $(".buy-sub-tab").on('click', function (e) {

        e.preventDefault();
        var params = {};
        params['unit_category'] = 'sale';
        var unit_model = $('#buy_unit_model').attr('value');
        params['unit_model'] = unit_model;
        var property_type = $(this).attr('value');

        switch (unit_model) {

            case 'residential':
                params['unit_model'] = 'residential';
                params['off_plan'] = '0';
                break;
            case 'commercial':
                params['unit_model'] = 'commercial';
                params['off_plan'] = '0';
                break;
            case 'plots':
                params['unit_model'] = 'plots';
                params['off_plan'] = '0';
                break;
        }
        params['property_type'] = property_type;

        params['page'] = '1';
        searchBuySubProperties(params);
    });

    $("#button_rent_sub_load_more").on('click', function (e) {

        e.preventDefault();
        var params = {};
        params['unit_category'] = 'rent';
        var unit_model = $('#buy_unit_model').attr('value');
        params['unit_model'] = unit_model;

        var property_type = $('.tabs .tab .active').attr('value');
        switch (unit_model) {

            case 'residential':
                params['unit_model'] = 'residential';
                params['off_plan'] = '0';
                break;
            case 'commercial':
                params['unit_model'] = 'commercial';
                params['off_plan'] = '0';
                break;
            case 'plots':
                params['unit_model'] = 'plots';
                params['off_plan'] = '0';
                break;
        }
        var page = $(this).data('page');
        params['page'] = parseInt(page) + 1;
        params['property_type'] = property_type;
        searchRentSubProperties(params);
    });
    $(".rent-sub-tab").on('click', function (e) {

        e.preventDefault();
        var params = {};
        params['unit_category'] = 'rent';
        var unit_model = $('#rent_unit_model').attr('value');
        params['unit_model'] = unit_model;
        var property_type = $(this).attr('value');

        switch (unit_model) {

            case 'residential':
                params['unit_model'] = 'residential';
                params['off_plan'] = '0';
                break;
            case 'commercial':
                params['unit_model'] = 'commercial';
                params['off_plan'] = '0';
                break;
            case 'plots':
                params['unit_model'] = 'plots';
                params['off_plan'] = '0';
                break;
        }
        params['property_type'] = property_type;

        params['page'] = '1';
        searchRentSubProperties(params);
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

    $("#btn_community_employee_add_more").on('click', function (e) {
        e.preventDefault();
        var params = {};
        var page = $(this).data('page');
        var community = $(this).data('community');

        params['page'] = parseInt(page) + 1;
        params['community'] = community;
        findCommunityAgents(params);
    });

    $("#btn_project_employee_add_more").on('click', function (e) {
        e.preventDefault();
        var params = {};
        var page = $(this).data('page');
        var project = $(this).data('project');

        params['page'] = parseInt(page) + 1;
        params['project'] = project;
        findProjectAgents(params);
    });

    $("#btn_property_desc_more").on('click', function (e) {
        e.preventDefault();

        var more = $(this).data('more');

        if (more == 0) {
            $(this).data('more', "1");
            $(this).children('a').html("READ LESS");
        } else {
            $(this).data('more', "0");
            $(this).children('a').html("READ MORE");
        }
        $("#property_desc_container").toggleClass('property-desc property-desc-more');
    });

    //loadLocations();

    var buyBudgets = {
        "1": "Less than 1,000,000",
        "2": "1,000,000 – 1,500,000",
        "3": "1,500,000 – 2,000,000",
        "4": "2,000,000 – 2,500,000",
        "5": "2,500,000 – 3,000,000",
        "6": "3,000,000 – 3,500,000",
        "7": "3,500,000 – 4,000,000",
        "8": "4,000,000 – 4,500,000",
        "9": "4,500,000 – 5,000,000",
        "10": "5,000,000 – 6,000,000",
        "11": "6,000,000 – 7,000,000",
        "12": "7,000,000 – 8,000,000",
        "13": "8,000,000 – 9,000,000",
        "14": "9,000,000 – 10,000,000",
        "15": "10,000,000 – 15,000,000",
        "16": "15,000,000 – 20,000,000",
        "17": "More than 20,000,000"
    };

    var rentBudgets = {
        "1": "Less than 50,000",
        "2": "50,000 – 75,000",
        "3": "75,000 – 100,000",
        "4": "100,000 – 125,000",
        "5": "125,000 – 150,000",
        "6": "150,000 – 175,000",
        "7": "175,000 – 200,000",
        "8": "200,000 – 250,000",
        "9": "250,000 – 300,000",
        "10": "300,000 – 350,000",
        "11": "350,000 – 400,000",
        "12": "400,000 – 450,000",
        "13": "450,000 – 500,000",
        "14": "500,000 – 600,000",
        "15": "600,000 – 700,000",
        "16": "700,000 – 800,000",
        "17": "800,000 – 900,000",
        "18": "900,000 – 1,000,000",
        "19": "More than 1,000,000"
    };

    $("#search_category_buy").on('click', function (e) {
        e.preventDefault();
        debugger;
        var $el = $("#header_search_budgets");
        $el.empty().html(' ');; // remove old options
        $el.append('<option value="NA" disabled selected>Budget</option>');
        $.each(buyBudgets, function (key, value) {
            $el.append($("<option></option>")
                    .attr("value", key).text(value));
        });

        $("#search_category_buy").addClass('active');
        $("#search_category_rent").removeClass('active');
        $("#unit_category").attr('value','sale');
        $el.trigger('contentChanged');
    });

    $("#search_category_rent").on('click', function (e) {
        debugger;
        e.preventDefault();
        var $el = $("#header_search_budgets");
        $el.empty().html(' ');; // remove old options
        $el.append('<option value="NA" disabled selected>Budget</option>');
        $.each(rentBudgets, function (key, value) {
            $el.append($("<option></option>")
                    .attr("value", key).text(value));
        });
        
        $("#search_category_buy").removeClass('active');
        $("#search_category_rent").addClass('active');
        $("#unit_category").attr('value','rent');
        $el.trigger('contentChanged');
    });
    
     $("#btn_buy_detail_property_list_add_more").on('click', function (e) {
        e.preventDefault();
        var params = {};
        var page = $(this).data('page');
        var community = $(this).data('community');
        var property = $(this).data('property');

        params['page'] = parseInt(page) + 1;
        params['count_per_page'] = 4;
        params['community'] = community;
        params['property_id'] = property;
        params['unit_category'] = 'sale';
        addMoreBuyDetailPropertyList(params);
    });

    $("#btn_rent_detail_property_list_add_more").on('click', function (e) {
        e.preventDefault();
        var params = {};
        var page = $(this).data('page');
        var community = $(this).data('community');
        var property = $(this).data('property');
        
        params['page'] = parseInt(page) + 1;
        params['count_per_page'] = 4;
        params['community'] = community;
        params['property_id'] = property;
        params['unit_category'] = 'rent';
        addMoreRentDetailPropertyList(params);
    });

    $("#frm_drop_my_cv").on('submit', dropMyCV);
});


