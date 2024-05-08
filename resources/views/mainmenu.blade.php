@extends('layouts.main')

@section('container')
    <div class="h-screen m-0 bg-cover object-center p-4 bg-[#FFFFF0] md:p-0 flex-col">
        <svg xmlns="http://www.w3.org/2000/svg" width="600" height="200" viewBox="0 0 645 267" fill="none" class="z-0 -top-2 -left-16 fixed">
            <path d="M-109 129.003C-109 21.307 -16.5468 -65.9974 97.5001 -65.9974C211.547 -65.9974 644.5 -66.6929 644.5 41.0026C327.5 -63.4974 206.5 129.003 125 224.503C43.5 320.003 -109 236.698 -109 129.003Z" fill="#FFD369"/>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="600" height="200" viewBox="0 0 641 272" fill="none" class="z-0 -bottom-2 -right-20 fixed">
            <path d="M753.792 137.5C753.792 245.196 661.339 332.5 547.292 332.5C433.245 332.5 0.291992 333.195 0.291992 225.5C317.292 330 438.292 137.5 519.792 41.9999C601.292 -53.5001 753.792 29.8044 753.792 137.5Z" fill="#FFD369"/>
        </svg>
        <h1 class="font-bold text-4xl z-10 relative pl-4 md:text-5xl md:pt-5 md:pl-10">Hello, Cashier</h1>
        <h1 class="text-center font-bold text-2xl pt-10 md:text-3xl md:pt-1">Main Menu</h1>
        <h1 class="text-center text-xl font-semibold py-2">Pilih Kategori Pemesanan</h1>
        <div class="container pt-3 mx-auto md:flex md:flex-wrap md:justify-evenly md:px-10">
            <a href="">
                <div class="flex rounded-lg drop-shadow-lg overflow-hidden mb-4 bg-white px-7 my-3 py-4 bg-gradient-to-b from-[#FFD369] to-[#FFFFFF] md:flex-col md:justify-around md:w-72 md:h-96 md:bg-gradient-to-b md:from-[#FFD369] md:to-[#FFFFFF]">
                    <img src="img/report.png" width="80" alt="" class="md:hidden">
                    <img src="img/report.png" width="120" alt="" class="hidden md:flex md:items-center md:mx-auto">
                    <h2 class="text-2xl font-bold pt-5 mx-auto md:pl-0 md:text-center">Laporan</h2>
                </div>
            </a>
            <a href="">
                <div class="flex rounded-lg drop-shadow-lg overflow-hidden mb-4 bg-white px-7 my-3 py-4 bg-gradient-to-b from-[#FFD369] to-[#FFFFFF] md:flex-col md:justify-around md:w-72 md:h-96 md:bg-gradient-to-b md:from-[#FFD369] md:to-[#FFFFFF]">
                    <img src="img/burger.png" width="80" alt="" class="md:hidden">
                    <img src="img/burger.png" width="120" alt="" class="hidden md:flex md:items-center md:mx-auto">
                    <h2 class="text-2xl font-bold pt-5 mx-auto md:pl-0 md:text-center">Pemesanan Baru</h2>
                </div>
            </a>
            <a href="">
                <div class="flex rounded-lg drop-shadow-lg overflow-hidden mb-4 bg-white px-7 my-3 py-4 bg-gradient-to-b from-[#FFD369] to-[#FFFFFF] md:flex-col md:justify-around md:w-72 md:h-96 md:bg-gradient-to-b md:from-[#FFD369] md:to-[#FFFFFF]">
                    <img src="img/cooking.png" width="80" alt="" class="md:hidden">
                    <img src="img/cooking.png" width="120" alt="" class="hidden md:flex md:items-center md:mx-auto">
                    <h2 class="text-2xl font-bold pt-5 mx-auto md:pl-0 md:text-center">Daftar Pesanan</h2>
                </div>
            </a>
            
        </div>
    </div>
@endsection