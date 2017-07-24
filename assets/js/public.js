/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var getCommunities = function (page) {

    //$("#loader").show();

    $.ajax({
        type: "GET",
        url: "http://localhost/RealEstateProject/communities/getCommunities",
        cache: false,
        data: {page: page}

    }).done(function (response) {

        $("#community_container").append(response);

        // $("#loader").hide();

        $('#button_community_load_more').data('val', ($('#button_community_load_more').data('val') + 1));


    });

};

$(document).ready(function () {



    $("#button_community_load_more").on('click',function(e){

        e.preventDefault();

        var page = $(this).data('val');
        

        getCommunities(page);

    });

});


