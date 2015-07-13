/**
 * Created with Trivana.
 * User: kennykandola
 * Date: 2015-03-21
 * Time: 08:30 PM
 * To change this template use Tools | Templates.
 */


function initialize() {

    var input = document.getElementById('pac-input');
    var autocomplete = new google.maps.places.Autocomplete(input);
}

google.maps.event.addDomListener(window, 'load', initialize);

$(document).ready(function () {

    $('#target').submit(function() {
        var setname = $('#pac-input').val();
        localStorage.setItem("delivery", setname);
        $('#delivery_span').text(setname);
        return false;
    });

    var setname = localStorage.getItem("delivery");
    $('#delivery_span').text(name);

});

function btntest_onclick()
{
    window.location.href = "store.html";
}


/**
 * Created by Karan on 3/28/2015.
 */
