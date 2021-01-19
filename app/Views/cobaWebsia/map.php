<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="/js/leaflet.js"></script>
    <link rel="stylesheet" href="/css/leaflet.css">
    <link rel="stylesheet" href="/css/output.css">
    <title>Document</title>
</head>

<body>

    <div class="bg-primary my-8 md:py-8 py-4 lg:px-20 md:px-8 px-2">
        <div class="w-full md:mb-6 mb-4 text-center text-xl text-secondary font-bold">PETA SEBARAN ALUMNI</div>
        <div id="mapid" class="bg-primary" style="height: 26rem;"></div>
    </div>

</body>
<script type="text/javascript" src="/js/leaflet.ajax.js"></script>
<script>
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
</script>

</html>