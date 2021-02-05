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
            p.classList.remove('text-secondary');
            p.classList.add('text-white');
        });
        o.classList.add('text-secondary');
        o.classList.remove('text-white');
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
    $('#hasilPencarian').html(`<div class="flex flex-col md:ml-12 -ml-12 mt-2 h-screen">

    <img src="/img/searchNotFound.png" class="w-96 mx-auto" alt="">
    <div class="text-primary font-bold md:text-xl -mt-8 mx-auto">Hasil Pencarian Tidak Ditemukan</div>
    <hr class="border-b-2 border-t-0 w-32 border-gray-400 mx-auto">

</div>`);
})

// Awal Kalender

var waktu = new Date();
var tahunfix = waktu.getFullYear();
var tahunAwal = waktu.getFullYear();
var tahunAkhir = waktu.getFullYear();

// Awal kalender Tahun Awal
$('#inputTahunAwal').click(function(){
    $('#kalenderAwal').removeClass('hidden');
    $('#kalenderAkhir').addClass('hidden');
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
        if(inputTahunAkhir.value != ""){
            if(param < inputTahunAkhir.value ){
                inputTahunAwal.value=param;
                inputTahunAwal.classList.remove('border-2');
                inputTahunAwal.classList.remove('border-red-600');
            } else {
                inputTahunAwal.classList.add('border-2');
                inputTahunAwal.classList.add('border-red-600');
            }
        } else {
            inputTahunAwal.value=param;
            inputTahunAwal.classList.remove('border-2');
            inputTahunAwal.classList.remove('border-red-600');
        }
    })
})
//Akhir Kalender Tahun Awal


// Awal Kalender Tahun Akhir
$('#inputTahunAkhir').click(function(){
    $('#kalenderAwal').addClass('hidden');
    $('#kalenderAkhir').removeClass('hidden');
})	

const tahunKalenderAkhir = document.querySelectorAll("#tahunKalenderAkhir");
const inputTahunAkhir = document.querySelector("#inputTahunAkhir");
const rentangTahunAkhir = document.querySelector("#rentangTahunAkhir");

function getWaktuKalenderAkhir(param){
    var param = param - 11;
    rentangTahunAkhir.innerHTML = param+"-"+ (param + 11);
    tahunKalenderAkhir.forEach(o =>{

        o.innerHTML = param;
        param++;

    })
};

getWaktuKalenderAkhir(tahunfix)

$('#perviousTahunAkhir').click(function(){
    tahunAkhir = tahunAkhir - 11;
    getWaktuKalenderAkhir(tahunAkhir);
})	

$('#nextTahunAkhir').click(function(){
    if(tahunAkhir + 11 <= tahunfix){
        tahunAkhir = tahunAkhir + 11;	
        getWaktuKalenderAkhir(tahunAkhir);
    }	    
})

tahunKalenderAkhir.forEach(o => {
    o.addEventListener("click", () => {
        param = o.innerHTML;
        if(inputTahunAwal.value != ""){
            if(param > inputTahunAwal.value ){
                inputTahunAkhir.value=param;
                inputTahunAkhir.classList.remove('border-2');
                inputTahunAkhir.classList.remove('border-red-600');
            } else {
                inputTahunAkhir.classList.add('border-2');
                inputTahunAkhir.classList.add('border-red-600');
            }
        } else {
            inputTahunAkhir.value=param;
            inputTahunAkhir.classList.remove('border-2');
            inputTahunAkhir.classList.remove('border-red-600');
        }
    })
})
//Akhir Kalender Tahun AKhir



// Akhir Kaleneder

// akhir sidebar
