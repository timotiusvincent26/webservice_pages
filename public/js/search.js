// awal sidebar

$('#hamburgerSidebar').click(function(){
    
    if($('#param1').hasClass('hidden')){
        $('#param1').removeClass('hidden');
        $('#param2').removeClass('hidden');
    } else {
        $('#param1').addClass('hidden');
        $('#param2').addClass('hidden');
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
    
}
// akhir sidebar
