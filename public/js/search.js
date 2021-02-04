// awal sidebar

$('#hamburgerSidebar').click(function(){
    
    if($('#param1').hasClass('hidden')){
        $('#param1').removeClass('hidden');
        $('#param2').removeClass('hidden');
        $('#sidebarSearch').addClass('w-10/12 md:w-auto'); 
    } else {
        $('#param1').addClass('hidden');
        $('#param2').addClass('hidden');
        $('#sidebarSearch').removeClass('w-10/12 md:w-auto'); 
    }
})

const filterSidebar = document.querySelectorAll("#filterSidebar");

filterSidebar.forEach(o => {
    o.addEventListener("click", () => {
        filterSidebar.forEach(p => {
            p.classList.remove('text-secondary');
            if(!p.classList.contains('text-white')){
                p.classList.add('text-white');
            }
        });
        o.classList.remove('text-white');
        o.classList.add('text-secondary');
        getList(o.innerHTML);
    })
})

const listSidebar = document.querySelectorAll("#listSidebar");

listSidebar.forEach(o => {
    o.addEventListener("click", () => {
        a = o.firstElementChild.innerHTML;
        o.children[1].classList.toggle("hidden");
        o.children[2].classList.toggle("hidden");
        getList(a);
    })
})

const namaProdi = document.querySelectorAll("#namaProdi");
namaProdi.forEach(o => {
    o.addEventListener("click", () => {
        namaProdi.forEach(p => {
            p.classList.remove('bg-primaryDark');
        });
        o.classList.add('bg-primaryDark');
    })
})


$('#BPS').click(function(){
    $('#onBPS').toggleClass('hidden');
    $('#offBPS').toggleClass('hidden');
    $('#onLainnya').toggleClass('hidden');
    $('#offLainnya').toggleClass('hidden');
})

$('#Lainnya').click(function(){
    $('#onLainnya').toggleClass('hidden');
    $('#offLainnya').toggleClass('hidden');
    $('#onBPS').toggleClass('hidden');
    $('#offBPS').toggleClass('hidden');
})

function getList(param){
    
    if(param == 'Semua'){
        $('#listFilterSidebarAlumni').addClass('hidden');
        $('#listFilterSidebarBerita').addClass('hidden');
    }

    if(param == 'Alumni'){
        $('#listFilterSidebarAlumni').removeClass('hidden');
        $('#listFilterSidebarBerita').addClass('hidden');
    }
    
    if(param == 'Artikel/Berita'){
        $('#listFilterSidebarBerita').removeClass('hidden');
        $('#listFilterSidebarAlumni').addClass('hidden');
    }

    if(param == 'Prodi'){
        $('#listProdi').toggleClass('hidden');
    } 

    if(param == 'Angkatan'){
        $('#listAngkatan').toggleClass('hidden');
    } 
    
    if(param == 'Tempat Kerja'){
        $('#listTempatKerja').toggleClass('hidden');
    } 

    if(param == 'Rentang Waktu'){
        $('#listRentangWaktu').toggleClass('hidden');
    } 

    
}

$('#beritaSelengkapnya').click(function(){
    $('#hasilPencarian').load('websia/kontenWebsia/searchAndFilter/searchAlumni.php');
})

// Awal Kalender

var waktu = new Date();
var tahunfix = waktu.getFullYear();
var tahunAwal = waktu.getFullYear();
var tahunAkhir = waktu.getFullYear();

// Awal Kalender Tahun Akhir
$('#inputTahunAkhir').click(function(){
    $('#kalenderAwal').addClass('hidden');
})	
//Akhir Kalender Tahun AKhir


// Awal kalender Tahun Awal
$('#inputTahunAwal').click(function(){
    $('#kalenderAwal').removeClass('hidden');
})	

const tahunKalenderAwal = document.querySelectorAll("#tahunKalenderAwal");
const inputTahunAwal = document.querySelector("#inputTahunAwal");
const rentangTahunAwal = document.querySelector("#rentangTahunAwal");

function getWaktuKalenderAwal(param){
    var param = param - 11;
    rentangTahunAwal.innerHTML = param+"-"+ (param + 11);
    tahunKalenderAwal.forEach(o =>{

        o.innerHTML = param;
        param++;

    })
};

getWaktuKalenderAwal(tahunfix)

$('#perviousTahunAwal').click(function(){
    tahunAwal = tahunAwal - 11;
    getWaktuKalenderAwal(tahunAwal);
})	

$('#nextTahunAwal').click(function(){
    if(tahunAwal + 11 <= tahunfix){
        tahunAwal = tahunAwal + 11;	
        getWaktuKalenderAwal(tahunAwal);
    }	    
})

tahunKalenderAwal.forEach(o => {
    o.addEventListener("click", () => {
        param = o.innerHTML;
        inputTahunAwal.value=param;
    })
})
//Awal Kalender Tahun AKhir

// Akhir Kaleneder

// akhir sidebar
