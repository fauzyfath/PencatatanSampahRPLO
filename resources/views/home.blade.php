@extends('layouts.layouts')

@section('main-layouts')

    @include('components.card-profile')
    <link rel="stylesheet" href="/resourece/css/style.css">

    {{-- fiture card --}}
    <div class="button grid grid-cols-2 gap-x-20 mx-auto my-10 items-center">
        {{-- input data --}}
        <div class="flex flex-col gap-y-2 justify-center items-center">
            <button onclick="window.location.href='/input'" class="input-data overflow-hidden flex justify-center items-center w-20 h-20 rounded-full bg-green-400">
                {{-- svg logo --}}
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 448 448" style="enable-background:new 0 0 512 512" xml:space="preserve" class="w-14 h-14"><g><path d="M408 184H272a8 8 0 0 1-8-8V40c0-22.09-17.91-40-40-40s-40 17.91-40 40v136a8 8 0 0 1-8 8H40c-22.09 0-40 17.91-40 40s17.91 40 40 40h136a8 8 0 0 1 8 8v136c0 22.09 17.91 40 40 40s40-17.91 40-40V272a8 8 0 0 1 8-8h136c22.09 0 40-17.91 40-40s-17.91-40-40-40zm0 0" fill="#000000" opacity="1" data-original="#000000" class="fill-white"></path></g></svg>
            </button>
            <h1 class="font-semibold text-black text-sm">Tambah Sampah</h1>
        </div>
        <div class="flex flex-col gap-y-2 justify-center items-center">
            <button onclick="window.location.href='/hapus'" class="hapus-data flex overflow-hidden justify-center items-center w-20 h-20 rounded-full bg-rose-400">
                {{-- svg logo --}}
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 511.992 511.992" style="enable-background:new 0 0 512 512" xml:space="preserve" class="w-12 h-12"><g><path fill="#e76e54" d="m415.402 495.422-159.406-159.41L96.59 495.422c-22.098 22.094-57.922 22.094-80.02 0-22.093-22.098-22.093-57.922 0-80.02l159.41-159.406L16.57 96.59c-22.093-22.098-22.093-57.922 0-80.02 22.098-22.093 57.922-22.093 80.02 0l159.406 159.41L415.402 16.57c22.098-22.093 57.922-22.093 80.02 0 22.094 22.098 22.094 57.922 0 80.02l-159.41 159.406 159.41 159.406c22.094 22.098 22.094 57.922 0 80.02-22.098 22.094-57.922 22.094-80.02 0zm0 0" opacity="1" data-original="#e76e54" class="fill-white"></path></g></svg>
            </button>
            <h1 class="font-semibold text-black text-sm">Hapus Sampah</h1>
        </div>
    </div>
    {{-- search bar --}}
    <div class="search-bar flex flex-row justify-center gap-x-5 items-center">
        {{-- search card --}}
        <div class="search-card w-72 h-10 ">
            <input type="text" placeholder="Search" class="border-2 px-4 text-xl rounded-xl border-black w-full h-full">
        </div>
        {{-- button search --}}
        <div class="btn-search w-20 h-10 rounded-lg bg-slate-300">
            <button type="submit" class="items-center justify-center w-full h-full flex">Submit</button>
        </div>
    </div>
    {{-- bookmark/history trash data --}}
    <div class="card-data w-96 h-1/2 bg-stone-300 rounded-xl border-2 overflow-hidden flex flex-col gap-x-20 border-black mt-5 mx-auto">
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
                <button class="w-10 rounded-md bg-sky-600 flex justify-center text-white text-opacity-70 items-center">cek</button>
            </div>
            <div class="grid grid-cols-5 gap-x-5 border-b-2 border-black w-full p-3">
                <h1 class="overflow-hidden">16/12/2023</h1>
                <h1 class="overflow-hidden">jameskdksdkskodksos</h1>
                <h1 class="overflow-hidden">10kg</h1>
                <h1>Organik</h1>
                <button class="w-10 rounded-md bg-sky-600 flex justify-center text-white text-opacity-70 items-center">cek</button>
            </div>
            <div class="grid grid-cols-5 gap-x-5 border-b-2 border-black w-full p-3">
                <h1 class="overflow-hidden">16/12/2023</h1>
                <h1 class="overflow-hidden">jameskdksdkskodksos</h1>
                <h1 class="overflow-hidden">10kg</h1>
                <h1>Organik</h1>
                <button class="w-10 rounded-md bg-sky-600 flex justify-center text-white text-opacity-70 items-center">cek</button>
            </div>
        </div>
    </div>

@endsection