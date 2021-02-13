
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
        out.push("<div class='font-semibold md:text-base text-xs text-primary text-center uppercase font-heading'> " + f.properties["NAME_1"] + "</div> <hr class='my-2'>");
        for (i = 0; i < 5; i++) {
            out.push("<div class='text-center font-semibold text-primary uppercase font-paragraph mb-1'>" + f.properties["NAME_1"] + " : <span class='font-bold'>" + f.properties["ID_1"] + "</span> Alumni </div>");
        }
        out.push(`
        <div class='w-full flex justify-between'>
            <svg class="w-4 h-4 text-primary cursor-pointer" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M15.707 15.707a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 010 1.414zm-6 0a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 011.414 1.414L5.414 10l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
            </svg>

            <svg class="w-4 h-4 text-primary cursor-pointer" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
        </div> 
        `);
        l.bindPopup(out.join(""));
    }
}
var jsonTest = new L.GeoJSON.AJAX(["/geojson/provinsi.geojson"], {
    onEachFeature: popUp,
    style: myStyle
}).addTo(mymap);

$('.filterPeta').click(function () {
    klikFilterPeta();
});


function klikFilterPeta(){
    $('.downFilterPeta').toggleClass('hidden');
    $('.upFilterPeta').toggleClass('hidden');
    $('.listFilterPeta').toggleClass('hidden');
};


$('.petaProvinsi').click(function () {

    $('.hasilFilterPeta').text('Provinsi');
    function popUp(f, l) {
        var out = [];
        if (f.properties) {
            out.push("<div class='font-semibold md:text-base text-xs text-primary text-center uppercase font-heading'> " + f.properties["NAME_1"] + "</div> <hr class='my-2'>");
            for (i = 0; i < 5; i++) {
                out.push("<div class='text-center font-semibold text-primary uppercase font-paragraph mb-1'>" + f.properties["NAME_1"] + " : <span class='font-bold'>" + f.properties["ID_1"] + "</span> Alumni </div>");
            }
            out.push(`
            <div class='w-full flex justify-between'>
                <svg class="w-4 h-4 text-primary cursor-pointer" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M15.707 15.707a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 010 1.414zm-6 0a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 011.414 1.414L5.414 10l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                </svg>
    
                <svg class="w-4 h-4 text-primary cursor-pointer" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </div> 
            `);
            l.bindPopup(out.join(""));
        }
    }
    
    var jsonTest = new L.GeoJSON.AJAX(["/geojson/provinsi.geojson"], {
        onEachFeature: popUp,
        style: myStyle
    }).addTo(mymap);
    
});

$('.petaKabupaten').click(function () {
    $('.hasilFilterPeta').text('Kabupaten');

    function popUp(f, l) {
        var out = [];
        if (f.properties) {
            out.push("<div class='md:text-base text-xs text-primary font-semibold text-center uppercase font-heading'> "+ f.properties["TYPE_2"] +" "+ f.properties["NAME_2"] + "</div> <hr class='my-2'>");
            out.push("<div class='font-bold text-center md:text-base text-xs text-primary uppercase font-paragraph'>" + f.properties["ID_2"] + "</div>");
            out.push("<div class='text-center md:text-base text-xs font-semibold text-primary font-paragraph'> Alumni</div>");
            l.bindPopup(out.join(""));
        }
    }
    var jsonTest = new L.GeoJSON.AJAX(["/geojson/kabupaten.geojson"], {
        onEachFeature: popUp,
        style: myStyle
    }).addTo(mymap);
    
});



// akhir js buat map