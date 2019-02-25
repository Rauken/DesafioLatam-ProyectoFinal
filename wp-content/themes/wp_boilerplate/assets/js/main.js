var mymap = null;
$(document).ready(function() {
    //Scroll animado
    $('body').animatescroll();


    mymap = L.map('mapid').setView([-32.72423593561669, -71.22391161422978], 17);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 20,
        id: 'mapbox.satellite',
        accessToken: 'pk.eyJ1IjoicmF1a2VuIiwiYSI6ImNqc2t3aXRqaTJqN2I0NHFzNXJ4eGJqNzMifQ.vIoP8DkWwy2rqhH3z-6RgQ'
    }).addTo(mymap);
});