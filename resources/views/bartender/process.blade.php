@extends('layouts.main-bartender')

@section('container')

<div class="">

    <div class="w-auto items-center justify-center p-4 md:p-9 ">

        {{-- detail user --}}
        <div class="flex justify-between items-center mt-4 mb-5 pb-5 ">            
            <a href="{{ route('logout') }}">
                <button id="logoutButton" class="w-full mx-auto">
                    <div class="rounded-2xl bg-[#ff8181] w-fit px-3 py-2 shadow-md hover:bg-[#ff6969] mx-2 font-bold">
                        <ion-icon id="power-off-icon" name="power-outline" style="font-size: 2rem; width: 2rem; height: 2rem; cursor: pointer;"></ion-icon>
                    </div>
                </button>
            </a>
            <div class="flex items-center gap-4">
                <ion-icon id="user-icon" name="person-circle-outline" style="font-size: 3rem; width: 3rem; height: 3rem;"></ion-icon>
                <div class="text-center">
                    <h1 class="text-sm font-medium">{{ auth()->user()->username }}</h1>
                    <p class="text-xs text-slate-500">Cashier</p>
                </div>
            </div>
        </div>
        {{-- detail user end --}}

        
        <!-- category -->
        <div class="w-auto flex justify-between my-5 overflow-x-scroll sm:w-4/5 md:w-11/12 lg:w-full lg:overflow-visible">
            <a href="/bartender-menu">
                <div class="rounded-2xl bg-black text-white w-fit px-3 py-2 shadow-md mx-2 font-bold">Menu</div>
            </a>
            <a href="/bartender-main">
                <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Semua</div>
            </a>
            <a href="/bartender-proccess">
                <div class="rounded-2xl bg-[#FFD369] w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Diproses</div>
            </a>
            <a href="/bartender-ready                                                                                                          ">
                <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Siap</div>
            </a>
            <a href="/bartender-done">
                <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Selesai</div>
            </a>
            <a href="/bartender-reserve">
                <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Reservasi</div>
            </a>
        </div>
        <!-- category end -->
    
        <!-- pesanan -->
        <div class="m-4 justify-center gap-5 flex flex-wrap">
            <!-- box pesanan -->
            <a href="/bartender-detail">
                <div class="bg-[#ffffff] rounded-2xl flex flex-col p-6 gap-3 items-start shadow-2xl h-64 overflow-auto">
                    <div class="flex gap-3">
                        <h2 class="font-bold text-2xl">ID Meja</h2> 
                        <h2 class="font-bold text-2xl">#ID Order</h2>
                    </div>
                    <div class="bg-[#ECCF98] rounded-xl flex p-2 items-center">
                        Status
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="w-max flex">
                            <p class="font-bold">Jumlah x</p>
                        </div>
                        <div>
                            <p>Nama Menu</p>
                            <p>
                                Notes: 
                                <p>-</p> 
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            <!-- end box pesanan -->
        </div>
        <!-- pesanan end -->
    </div>

@endsection
@push('scripts')
<script>
    // Fungsi untuk menampilkan atau menyembunyikan formulir "Makan di tempat"
    document.getElementById('showForm1').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('form1').classList.remove('hidden');
        document.getElementById('form2').classList.add('hidden');
        document.getElementById('form3').classList.add('hidden');
    });

    // Fungsi untuk menampilkan atau menyembunyikan formulir "Bawa Pulang"
    document.getElementById('showForm2').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('form1').classList.add('hidden');
        document.getElementById('form2').classList.remove('hidden');
        document.getElementById('form3').classList.add('hidden');
    });

    // Fungsi untuk menampilkan atau menyembunyikan formulir "Reservasi"
    document.getElementById('showForm3').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('form1').classList.add('hidden');
        document.getElementById('form2').classList.add('hidden');
        document.getElementById('form3').classList.remove('hidden'); 
    });
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('form1').classList.remove('hidden');
    });
    
    document.getElementById('showForm3').addEventListener('click', function(event) {
    event.preventDefault();
    
    // Mengubah href
    this.setAttribute('href', '');

    // Mengubah id
    this.setAttribute('id', 'showForm3');

    // Mengubah kelas untuk menyesuaikan tampilan
    this.querySelector('div').classList.remove('bg-[#fffff0]');
    this.querySelector('div').classList.add('bg-black');
    this.querySelector('h1').classList.remove('text-black');
    this.querySelector('h1').classList.add('text-white');

    document.getElementById('showForm1').querySelector('div').classList.remove('bg-black');
    document.getElementById('showForm1').querySelector('div').classList.add('bg-[#fffff0]');
    document.getElementById('showForm1').querySelector('h1').classList.remove('text-white');
    document.getElementById('showForm1').querySelector('h1').classList.add('text-black');
    document.getElementById('showForm2').querySelector('div').classList.remove('bg-black');
    document.getElementById('showForm2').querySelector('div').classList.add('bg-[#fffff0]');
    document.getElementById('showForm2').querySelector('h1').classList.remove('text-white');
    document.getElementById('showForm2').querySelector('h1').classList.add('text-black');

    // Mengubah teks di dalam h1
    this.querySelector('h1').textContent = 'Reservasi';
    document.getElementById('showForm1').querySelector('h1').textContent = 'Makan di tempat';
    });

    document.getElementById('showForm1').addEventListener('click', function(event) {
    event.preventDefault();
    
    // Mengubah href
    this.setAttribute('href', '');

    // Mengubah id
    this.setAttribute('id', 'showForm1');

    // Mengubah kelas untuk menyesuaikan tampilan
    this.querySelector('div').classList.remove('bg-[#fffff0]');
    this.querySelector('div').classList.add('bg-black');
    this.querySelector('h1').classList.remove('text-black');
    this.querySelector('h1').classList.add('text-white');

    // Mengembalikan tampilan showForm1 ke kelas awalnya
    document.getElementById('showForm3').querySelector('div').classList.remove('bg-black');
    document.getElementById('showForm3').querySelector('div').classList.add('bg-[#fffff0]');
    document.getElementById('showForm3').querySelector('h1').classList.remove('text-white');
    document.getElementById('showForm3').querySelector('h1').classList.add('text-black');

    document.getElementById('showForm2').querySelector('div').classList.remove('bg-black');
    document.getElementById('showForm2').querySelector('div').classList.add('bg-[#fffff0]');
    document.getElementById('showForm2').querySelector('h1').classList.remove('text-white');
    document.getElementById('showForm2').querySelector('h1').classList.add('text-black');

    // Mengubah teks di dalam h1
    this.querySelector('h1').textContent = 'Makan di tempat';
    document.getElementById('showForm3').querySelector('h1').textContent = 'Reservasi';
    });


    document.getElementById('showForm2').addEventListener('click', function(event) {
    event.preventDefault();
    
    // Mengubah href
    this.setAttribute('href', '');

    // Mengubah id
    this.setAttribute('id', 'showForm2');

    // Mengubah kelas untuk menyesuaikan tampilan
    this.querySelector('div').classList.remove('bg-[#fffff0]');
    this.querySelector('div').classList.add('bg-black');
    this.querySelector('h1').classList.remove('text-black');
    this.querySelector('h1').classList.add('text-white');

    document.getElementById('showForm1').querySelector('div').classList.remove('bg-black');
    document.getElementById('showForm1').querySelector('div').classList.add('bg-[#fffff0]');
    document.getElementById('showForm1').querySelector('h1').classList.remove('text-white');
    document.getElementById('showForm1').querySelector('h1').classList.add('text-black');

    document.getElementById('showForm3').querySelector('div').classList.remove('bg-black');
    document.getElementById('showForm3').querySelector('div').classList.add('bg-[#fffff0]');
    document.getElementById('showForm3').querySelector('h1').classList.remove('text-white');
    document.getElementById('showForm3').querySelector('h1').classList.add('text-black');

    // Mengubah teks di dalam h1
    this.querySelector('h1').textContent = 'Bawa Pulang';
    document.getElementById('showForm1').querySelector('h1').textContent = 'Makan di tempat';
});



</script>
@endpush