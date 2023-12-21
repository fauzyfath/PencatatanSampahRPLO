@extends('layouts.layouts')

@section('main-layouts')
    {{-- Title --}}
    <div class="title flex justify-center my-10">
        <h1 class="text-2xl text-center font-semibold">Hapus Data <br> Sampah</h1>
    </div>

    {{-- Data card --}}
    <div class="card-data w-96 h-4/6 bg-stone-300 rounded-xl border-2 overflow-hidden flex flex-col gap-x-20 border-black mt-5 mx-auto">
        {{-- table detail content --}}
        <div class="grid grid-cols-5 gap-x-5 text-sm  border-b-2 border-black w-full p-3">
            <h1>Tanggal</h1>
            <h1>Nasabah</h1>
            <h1>Volume</h1>
            <h1>Jenis</h1>
            <h1>Aksi</h1>
        </div>

        {{-- table content --}}
        <div class="w-full h-full overflow-y-auto bg-white text-xs">
            <div class="grid grid-cols-5 gap-x-5 border-b-2 border-black w-full p-3">
                <h1 class="overflow-hidden">16/12/2023</h1>
                <h1 class="overflow-hidden">jameskdksdkskodksos</h1>
                <h1 class="overflow-hidden">10kg</h1>
                <h1>Organik</h1>
                <button class="btn-pilih relative w-10 rounded-md bg-sky-600 flex justify-center text-white text-opacity-70 items-center">
                    <input type="checkbox" name="" id="" class="absolute opacity-0 w-full h-full">
                    <h1>pilih</h1>
                </button>
            </div>

            <div class="grid grid-cols-5 gap-x-5 border-b-2 border-black w-full p-3">
                <h1 class="overflow-hidden">16/12/2023</h1>
                <h1 class="overflow-hidden">jameskdksdkskodksos</h1>
                <h1 class="overflow-hidden">10kg</h1>
                <h1>Organik</h1>
                <button class="btn-pilih relative w-10 rounded-md bg-sky-600 flex justify-center text-white text-opacity-70 items-center">
                    <input type="checkbox" name="" id="" class="absolute opacity-0 w-full h-full">
                    <h1>pilih</h1>
                </button>
            </div>

            <div class="grid grid-cols-5 gap-x-5 border-b-2 border-black w-full p-3">
                <h1 class="overflow-hidden">16/12/2023</h1>
                <h1 class="overflow-hidden">jameskdksdkskodksos</h1>
                <h1 class="overflow-hidden">10kg</h1>
                <h1>Organik</h1>
                <button class="btn-pilih relative w-10 rounded-md bg-sky-600 flex justify-center text-white text-opacity-70 items-center">
                    <input type="checkbox" name="" id="" class="absolute opacity-0 w-full h-full">
                    <h1>pilih</h1>
                </button>
            </div>
        </div>
    </div>

    {{-- button --}}
    <div class="flex flex-row justify-center items-center mt-5 gap-14 font-semibold">
        <button class="w-40 h-10 bg-stone-300 rounded-lg text-black text-opacity-40" onclick="window.location.href='/home'">Batalkan</button>
        <button class="btn-hapus w-40 h-10 bg-stone-300 rounded-lg text-black text-opacity-40" disabled>Hapus</button>
    </div>

    {{-- modal --}}
    <button class="btn-modal hidden" onclick="my_modal_1.showModal()">Open Modal</button>

    <dialog id="my_modal_1" class="modal">
        <div class="modal-box flex flex-col h-3/6 items-center justify-center">
            <img src="/images/warning.gif" class="img-gif mx-auto my-10" alt="">
            <h1 class="text-modal font-bold text-lg text-center">Apakah anda ingin menghapus</h1>
            <h1 class="text-modal2 font-semibold total-data text-4xl mt-5">0</h1>
            <div class="modal-action">
                <form method="dialog" class="flex flex-row gap-5 mt-5 font-semibold">
                    <button onclick="my_modal_1.showModal()" class="btn-back w-40 h-10 bg-stone-300 rounded-lg text-black text-opacity-40">Kembali</button>
                    <label class="label-btn flex justify-center items-center hapus-modal w-40 h-10 bg-green-500 rounded-lg text-white">Hapus</label>
                    <button class="btn-kembali justify-center items-center hapus-modal w-40 h-10 bg-green-500 rounded-lg text-white hidden">Kembali</button>
                </form>
            </div>
        </div>
    </dialog>

    <script>
        $(document).ready(function () {
            // checkbox function
            var checkboxes = $("input[type=checkbox]");
            var btnHapus = $('.btn-hapus');
            var totalData = 0;

            checkboxes.change(function () {
                var checkedCheckboxes = checkboxes.filter(':checked');

                btnHapus.prop('disabled', checkedCheckboxes.length === 0).toggleClass('bg-green-600 text-white', checkedCheckboxes.length > 0).toggleClass('text-opacity-40 bg-stone-300 text-black', checkedCheckboxes.length === 0);

                checkboxes.each(function () {
                    var closestBtnPilih = $(this).closest('.btn-pilih');
                    closestBtnPilih.toggleClass('bg-sky-600', !this.checked).toggleClass('bg-green-700', this.checked);
                });

                // modal data
                // fix this modal
                totalData = checkedCheckboxes.length;
                $('.total-data').text(totalData + ' data');
                btnHapus.on('click',function () {
                    my_modal_1.showModal();
                });
                $('.hapus-modal').on('click',function(){
                    $('.img-gif').attr('src','/images/gif.gif').addClass('w-52 h-42');
                    $('.text-modal').text('Data yang anda pilih telah di Hapus');
                    $('.text-modal2').addClass('hidden');
                    $('.btn-back').addClass('hidden');
                    $('.label-btn').addClass('hidden');
                    $('.btn-kembali').removeClass('hidden').addClass('flex');
                    $('.btn-kembali').click(function(){
                        window.location.href = '/home';
                    });
                })
            });

        });
    </script>
@endsection
