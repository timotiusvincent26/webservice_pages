
// Awal Filter Alumni
$('#filterAlumni').click(function(){
    if ($('#filterAlumni:checked').length > 0) {
        $( "#pilihanFilterAlumni" ).removeClass('hidden');
        $('#namaFilterAlumni').addClass('text-black');
        $('#namaFilterAlumni').removeClass('text-gray-500');
    } else {
        $( "#pilihanFilterAlumni" ).addClass('hidden');
        $('#namaFilterAlumni').addClass('text-gray-500');
        $('#namaFilterAlumni').removeClass('text-black');
    }
})

$('#dropdownFilterAlumni').click(function(){
    if($('#tombolUpFilterAlumni').hasClass('hidden')){
        $('#tombolUpFilterAlumni').removeClass('hidden');
        $('#tombolDownFilterAlumni').addClass('hidden');
        $('#listFilterAlumni').addClass('hidden');
    } else {
        $('#tombolDownFilterAlumni').removeClass('hidden');
        $('#tombolUpFilterAlumni').addClass('hidden');
        $('#listFilterAlumni').removeClass('hidden');
    }
})


$('#filterNama').click(function(){
    $('#filterBerdasarkan').html($('#filterNama').text());
    $('#listFilterAlumni').addClass('hidden');
    $('#tombolUpFilterAlumni').removeClass('hidden');
    $('#tombolDownFilterAlumni').addClass('hidden');
})

$('#filterNIM').click(function(){
    $('#filterBerdasarkan').html($('#filterNIM').text());
    $('#listFilterAlumni').addClass('hidden');
    $('#tombolUpFilterAlumni').removeClass('hidden');
    $('#tombolDownFilterAlumni').addClass('hidden');
})

$('#filterAngkatan').click(function(){
    $('#filterBerdasarkan').html($('#filterAngkatan').text());
    $('#listFilterAlumni').addClass('hidden');
    $('#tombolUpFilterAlumni').removeClass('hidden');
    $('#tombolDownFilterAlumni').addClass('hidden');
})
// Akhir Filter Alumni

// Awal Filter Berita
$('#filterBerita').click(function(){
    if ($('#filterBerita:checked').length > 0) {
        $( "#filterTahunBerita" ).removeClass('hidden');
        $('#namaFilterBerita').addClass('text-black');
        $('#namaFilterBerita').removeClass('text-gray-500');
    } else {
        $( "#filterTahunBerita" ).addClass('hidden');
        $('#namaFilterBerita').addClass('text-gray-500');
        $('#namaFilterBerita').removeClass('text-black');
    }
})


$('#dropdownFilterAwal').click(function(){
    
    if($('#tombolUpFilterAwal').hasClass('hidden')){
        $('#tombolUpFilterAwal').removeClass('hidden');
        $('#tombolDownFilterAwal').addClass('hidden');
        $('#listFilterTahunAwal').addClass('hidden');
    } else {
        tahunAwal = tahunfix;
        getWaktuKalender(tahunAwal);
        $('#tombolDownFilterAwal').removeClass('hidden');
        $('#tombolUpFilterAwal').addClass('hidden');
        $('#listFilterTahunAwal').removeClass('hidden');
    }
})

// $('#dropdownFilterAkhir').click(function(){
//     if($('#tombolUpFilterAkhir').hasClass('hidden')){
//         $('#tombolUpFilterAkhir').removeClass('hidden');
//         $('#tombolDownFilterAkhir').addClass('hidden');
//         $('#listFilterAlumni').addClass('hidden');
//     } else {
//         $('#tombolDownFilterAkhir').removeClass('hidden');
//         $('#tombolUpFilterAkhir').addClass('hidden');
//         $('#listFilterAlumni').removeClass('hidden');
//     }
// })

var waktu = new Date();
var tahunfix = waktu.getFullYear();
var tahunAwal = waktu.getFullYear();
var tahunAkhir = waktu.getFullYear();

function getWaktuKalender(param){
    var param = param - 11;
    for(i=1; i<13; i++){
        $('#awalKe'+ i).html(param);
        param = param + 1;
    }
};



$('#perviousAwal').click(function(){
    tahunAwal = tahunAwal - 11;
    getWaktuKalender(tahunAwal);
})

$('#nextAwal').click(function(){
    if(tahunAwal + 11 <= tahunfix){
        tahunAwal = tahunAwal + 11;
        getWaktuKalender(tahunAwal);
    }
})

function addTanggal(param){
    $('#tahunAwal').html($('#' + param).text());
    $('#tombolUpFilterAwal').removeClass('hidden');
    $('#tombolDownFilterAwal').addClass('hidden');
    $('#listFilterTahunAwal').addClass('hidden');
}
$('#awalKe1').click(function(){
    addTanggal('awalKe1');
})
$('#awalKe2').click(function(){
    addTanggal('awalKe2');
})
$('#awalKe3').click(function(){
    addTanggal('awalKe3');
})
$('#awalKe4').click(function(){
    addTanggal('awalKe4');
})
$('#awalKe5').click(function(){
    addTanggal('awalKe5');
})
$('#awalKe6').click(function(){
    addTanggal('awalKe6');
})
$('#awalKe7').click(function(){
    addTanggal('awalKe7');
})
$('#awalKe8').click(function(){
    addTanggal('awalKe8');
})
$('#awalKe9').click(function(){
    addTanggal('awalKe9');
})
$('#awalKe10').click(function(){
    addTanggal('awalKe10');
})
$('#awalKe11').click(function(){
    addTanggal('awalKe11');
})
$('#awalKe12').click(function(){
    addTanggal('awalKe12');
})
// Akhir Filter Berita