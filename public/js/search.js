
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

$('#filterBerita').click(function(){
    if ($('#filterBerita:checked').length > 0) {
        $( "#pilihanFilterBerita" ).html( "check" );
    } else {
        $( "#pilihanFilterBerita" ).html( "not check" );
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

