@extends('layouts.layouts')

@section('main-layouts')
    
    {{-- Title --}}
    <div class="title flex justify-center my-10">
        <h1 class="text-2xl text-center font-semibold">Form Pengimputan <br> Sampah</h1>
    </div>

    {{-- input form --}}
    <form action="" class="input-form w-96 p-5 h-3/5 overflow-hidden bg-white rounded-xl mx-auto mt-5 border-black border-2">
        {{-- dates --}}
        <div class="grid grid-rows-2 gap-0">
            <h1 class="font-semibold">Tanggal Pengimputan</h1>
            <h1 class="current-dates bg-stone-300 px-5 text-lg flex items-center font-medium w-full text-black text-opacity-30 h-10 rounded-lg">12/12/2023</h1>
        </div>
        {{-- input nama --}}
        <div class="grid grid-rows-2  mt-5">
            <h1 class="font-semibold">Nama Nasabah</h1>
            <input class="inp-nama bg-stone-300 px-5 text-lg font-medium w-full h-10 rounded-lg" type="text" name="" id="">
        </div>
        {{-- dropdown --}}
        <div class="grid grid-rows-2 mt-5">
            <h1 class="font-semibold">Jenis Sampah</h1>
            <details class="dropdown">
                <summary class="btn w-full flex flex-row font-medium text-lg justify-between pr-5 bg-stone-300"><h1 class="text-jenis-sampah">Jenis Sampah</h1> <br> <svg width="12" height="6" viewBox="0 0 12 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.375 0.8125L6 5.1875L1.625 0.8125" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </summary>
                <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-full">
                  <li value="organik" class="li-organik"><a>organik</a></li>
                  <li value="non-organik" class="li-non"><a>non-organik</a></li>
                </ul>
              </details>
        </div>
        {{-- input kg --}}
        <div class="grid grid-rows-2 mt-5 gap-0">
            <h1 class="font-semibold">Volume (kg)</h1>
            <input class="input-kg bg-stone-300 px-5 text-lg font-medium  w-full h-10 rounded-lg placeholder:text-black placeholder:text-opacity-30" placeholder="0kg" type="number" name="" id="">
        </div>
        {{-- harga kg --}}
        <div class="grid grid-rows-2 mt-5 gap-0">
            <h1 class="font-semibold">Harga Per-Volume</h1>
            <h1 class="harga-kg text-xl mt-2 flex items-center font-medium text-black rounded-lg">Rp.0</h1>
        </div>
    </form>
    {{-- button --}}
    <div class="btn-form flex flex-row justify-center gap-8 mt-5 items-center">
        {{-- back --}}
        <button onclick="window.location.href='/home'" class="btn-back w-44 h-10 bg-stone-300 rounded-lg font-semibold text-black text-opacity-40 ">Batalkan</button>
        {{-- submits --}}
        <button type="submit" disabled class="btn-submits w-44 h-10 bg-stone-300 rounded-lg font-semibold text-black text-opacity-40">Submit</button>
    </div>
    

    {{-- modal --}}
    <!-- Open the modal using ID.showModal() method -->
    <button class="btn-modal hidden" onclick="my_modal_1.showModal()">open modal</button>
    <dialog id="my_modal_1" class="modal">
    <div class="modal-box flex flex-col">
        <img src="/images/gif.gif" class="mx-auto" alt="">
        <h1 class="font-bold text-lg text-center">Terima Kasih telah melakukan pengimputan</h1>
        <div class="modal-action">
        <form method="dialog" class="mx-auto">
            <!-- if there is a button in form, it will close the modal -->
            <button onclick="window.location.href='/home'" class=" w-80 h-10 bg-green-500 rounded-lg text-white ">kembali</button>
        </form>
        </div>
    </div>
    </dialog>

    <script>
        $(document).ready(function () {
            // btn-submit on
            const inputCompleted = [false, false, false]; // input completed array
            const btnSubmit = $(".btn-submits");
            updateSubmitButtonState();

            // modal-function
            $(".btn-submits").on('click',function () { 
                $(".btn-modal").click();
            });
            let currentInputVal = '';
            $(".inp-nama").on('input',function(){
                 
                let inpValue = $(this).val();
                currentInputVal = inpValue;

                if(currentInputVal === ''){
                    inputCompleted[0] = false;

                    console.log(false);
                    $(this).removeClass('bg-white border-2 border-black');
                    
                }
                else{
                    inputCompleted[0] = true;
                    $(this).addClass('bg-white border-2 border-black');
                    console.log(true);
                }
                updateSubmitButtonState();
            })
            // get date
            var currentDate = new Date();
            var yyyy = currentDate.getFullYear(); //get years
            var mm = currentDate.getMonth() + 1; // get months
            mm = mm < 10 ? "0" + mm : mm; 
            var dd = currentDate.getDate(); //get dates
            dd = dd < 10 ? "0" + dd : dd; 

            var formattedDate = dd + "/" + mm + "/" + yyyy;

            $(".current-dates").text(formattedDate);

            // jenis-Sampah
            var valJenisSampah;
            $(".li-organik").on('click', function(){
                inputCompleted[1] = true;
                valJenisSampah = $(this).val;
                $(".text-jenis-sampah").text('Organik');
                $(".text-jenis-sampah").click().addClass('text-white');
                $("summary").removeClass('bg-stone-300').addClass('bg-green-500');
                console.log(true);
                updateSubmitButtonState();

            })
            $(".li-non").on('click',function(){
                inputCompleted[1] = true;
                valJenisSampah = $(this).val;
                $(".text-jenis-sampah").text('Non-Organik');
                $(".text-jenis-sampah").click().addClass('text-white');
                $("summary").removeClass('bg-stone-300').addClass('bg-green-500');
                console.log(true);
                updateSubmitButtonState();
            })
            

            // input kg
            let currentInputValKG = '';
            var totalAmount = 0;
            $(".harga-kg").text('Rp. '+totalAmount);  

            $(".input-kg").on('input', function() {
                const inputValueKG = $(this).val();
                currentInputValKG = inputValueKG;

                if (currentInputValKG === '') {
                    $(this).removeClass('bg-white border-2 border-black');
                    inputCompleted[2] = false;
                    console.log(inputCompleted[2]);
                    totalAmount = currentInputValKG *1000;
                    var formattedAmount = new Intl.NumberFormat('id-ID').format(totalAmount);
                    $('.harga-kg').text('Rp. ' + formattedAmount);
                } else {
                    inputCompleted[2] = true;
                    console.log(inputCompleted[2]);
                    totalAmount = currentInputValKG *1000;
                    var formattedAmount = new Intl.NumberFormat('id-ID').format(totalAmount);
                    $('.harga-kg').text('Rp. ' + formattedAmount);
                    $(this).addClass('bg-white border-2 border-black');
                }
                updateSubmitButtonState();
            });

            function updateSubmitButtonState() {
                console.log(inputCompleted);
                if (inputCompleted.every(el => el)) {
                    btnSubmit.prop('disabled', false).removeClass('bg-stone-300 text-black text-opacity-40').addClass('text-white bg-green-500');
                } else {
                    btnSubmit.prop('disabled', true).addClass('bg-stone-300 text-black text-opacity-40').removeClass('text-white bg-green-500');
                }
            }
        });
    </script>
@endsection