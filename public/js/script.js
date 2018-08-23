$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var map;
var myLatLng;
$(document).ready(function() {
    geoLocationInit();
});

    function geoLocationInit() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(success, fail);
        } else {
            alert("Browser not supported");
        }
    }

    function success(position) {
        console.log(position);
        var latval = position.coords.latitude;
        var lngval = position.coords.longitude;
        //Guardo la nueva posición en la base de datos
        updatePosition(latval, lngval);
        myLatLng = new google.maps.LatLng(latval, lngval);
        createMap(myLatLng);
    }

    function fail() {
        alert("Sin este permiso no podremos saber dónde se encuentran");
    }

    //Save position into BD
    function updatePosition(latval,lngval) {
        $.post('/updatePosition',{lat:latval,lng:lngval},function(response){
            console.log(response);
        });
    }

    //Create Map
    function createMap(myLatLng) {
        map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 12
        });
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map
        });
    }

    //Create marker
    function createMarker(latlng, icn, name) {
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon: icn,
            title: name
        });
    }
   


  