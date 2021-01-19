// awal js buat scroll navbar interaktif
var lastScroll = 0;
$(window).scroll(function(event){
    var st = $(this).scrollTop();
    if (st > lastScroll){
        $('#navbar').addClass('invisible');
    } else {
        $('#navbar').removeClass('invisible');
    }
    lastScroll = st;
});
// akhir js buat scroll navbar interaktif

// awal js buat map
var mymap = L.map('mapid', {
    center: [-2.5, 118],
    zoom: 5
});

var myStyle = {
    "color": "#014F86",
    "fillColor": "#FFFFFF",
    "weight": 2,
    "opacity": 1,
    "fillOpacity": 1
};



function popUp(f, l) {
    var out = [];
    if (f.properties) {
        out.push("<div class='font-bold text-primary text-center uppercase'> " + f.properties["Propinsi"] + "</div> </br>");
        out.push("<div class='text-left font-semibold text-primary uppercase'> Kab. Malang : " + f.properties["kode"] + "</div>");
        out.push("<div class='text-left font-semibold text-primary uppercase'> Kab. Magelang : " + f.properties["kode"] + "</div>");
        l.bindPopup(out.join(""));
    }
}
var jsonTest = new L.GeoJSON.AJAX(["/geojson/provinsi.geojson"], {
    onEachFeature: popUp,
    style: myStyle
}).addTo(mymap);

// akhir js buat map