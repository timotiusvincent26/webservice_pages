<?= $this->extend('websia/layoutWebsia/tanpaTemplate.php'); ?>

<?= $this->section('content'); ?>
<div class="fixed top-0 bottom-0 right-0 left-0 z-50 flex justify-center items-center bg-black bg-opacity-40 font-paragraph" id='formEditPendidikan'>
    <div class=" duration-700 transition-all lg:w-1/3 md:w-2/3 sm:w-3/4 w-11/12 bg-gray bg-opacity-0">
        <div class="flex flex-col items-center bg-white py-8 rounded-2xl shadow-md">
            <svg class="h-20 w-20 bg-primary text-white rounded-full mb-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
            <p class="sm:text-base text-sm font-heading font-bold text-primary mb-2">Video Anda Berhasil Diunggah</p>
            <input type="button" value="OKE" class="closeFormUnggahVideo bg-secondary text-white rounded-full w-24 py-1 text-center cursor-pointer hover:bg-secondaryhover transition-colors duration-300 text-sm mr-4 outline-none" id='backUnggahFoto'>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>