<?= $this->extend('webservice/layoutWebservice/templateWebserviceLogin.php'); ?>

<?= $this->section('content'); ?>

<div class="lg:mt-32 md:mt-24 mt-16 w-full flex justify-center">
    <div class="shadow-2xl sm:w-3/4 w-full mt-6 lg:mb-12 mb-6 rounded-xl px-0 pt-4 pb-6 sm:mx-0 mx-6">
        <h1 class="lg:text-6xl md:text-5xl text-3xl text-center font-heading text-secondary font-bold items-center flex justify-center">PROFIL</h1>
        <div class="flex justify-center">
            <div class="lg:w-4/5 w-5/6">
                <div class="mx-2 mt-20">
                    <h5 class="font-bold font-heading text-primary flex justify-start w-2/5 lg:text-lg md:text-sm text-xs">NAMA LENGKAP</h5>
                    <h5 class="font-paragraph text-primary flex justify-end w-3/5 lg:text-lg md:text-base text-sm">Sukijan</h5>
                    <hr class="border-gray border-1 lg:mt-4 md:mt-2">
                    <h5 class="font-bold font-heading text-primary flex justify-start w-2/5 lg:text-lg md:text-sm text-xs lg:mt-4 md:mt-2 mt-1">TEMPAT/TGL LAHIR</h5>
                    <h5 class="font-paragraph text-primary flex justify-end w-3/5 lg:text-lg md:text-base text-sm">Zimbabwe, 30 Februari 1919</h5>
                    <hr class="border-gray border-1 lg:mt-4 md:mt-2">
                    <h5 class="font-bold font-heading text-primary flex justify-start w-2/5 lg:text-lg md:text-sm text-xs lg:mt-4 md:mt-2 mt-1">STATUS</h5>
                    <h5 class="font-paragraph text-primary flex justify-end w-3/5 lg:text-lg md:text-base text-sm">Pengedar Kebahagiaan</h5>
                    <hr class="border-gray border-1 lg:mt-4 md:mt-2">
                    <h5 class="font-bold font-heading text-primary flex justify-start w-2/5 lg:text-lg md:text-sm text-xs lg:mt-4 md:mt-2 mt-1">NAMA INSTANSI</h5>
                    <h5 class="font-paragraph text-primary flex justify-end w-3/5 lg:text-lg md:text-base text-sm">International University of Zimbabwe</h5>
                    <hr class="border-gray border-1 lg:mt-4 md:mt-2">
                    <h5 class="font-bold font-heading text-primary flex justify-start w-2/5 lg:text-lg md:text-sm text-xs lg:mt-4 md:mt-2 mt-1">EMAIL</h5>
                    <h5 class="font-paragraph text-primary flex justify-end w-3/5 lg:text-lg md:text-base text-sm">sukijanchayankdia@gmail.com</h5>
                    <hr class="border-gray border-1 lg:mt-4 md:mt-2">
                    <h5 class="flex md:justify-start gap-x-6 items-center lg:mt-8 lg:mb-8 md:mt-6 md:mb-6 mt-4 mb-4">
                        <input type="submit" value="BUAT" class="bg-secondary hover:bg-secondaryhover text-white py-1 px-5 cursor-pointer rounded-full">
                </div>
            </div>
        </div>
    </div>

    <!-- nyoba pake table -->
    <!-- <div class="w-full my-8 lg:px-20 md:px-8 px-2">
            <table class="table-auto text-primary ml-5 mt-3">
                <tbody>
                    <tr>
                        <td class="font-heading font-bold">NAMA LENGKAP</td>
                        <td class="font-paragraph pl-4">Sukijan</td>
                        <td class="font-heading font-bold">TEMPAT/TGL LAHIR</td>
                        <td class="font-paragraph pl-4">Zimbabwe, 30 Februari 1919</td>
                        <td class="font-heading font-bold">STATUS</td>
                        <td class="font-paragraph pl-4">Pengedar Kebahagiaan</td>
                        <td class="font-heading font-bold">NAMA INSTANSI</td>
                        <td class="font-paragraph pl-4">International University of Zimbabwe</td>
                        <td class="font-heading font-bold">EMAIL</td>
                        <td class="font-paragraph pl-4">sukijancintadia@gmail.com</td>
                    </tr>
                </tbody>
            </table>
            <hr class="border-primary border-opacity-75 w-3/4 object-center mx-auto mt-8">
        </div> -->

</div>
</div>

<?php $this->endSection(); ?>