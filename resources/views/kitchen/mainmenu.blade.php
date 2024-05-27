@extends('layouts.main')

@section('container')

<div class="">

    <div class="w-auto items-center justify-center p-4 md:p-9 ">

        <!-- category -->
       <div class="p-4 flex flex-wrap gap-4 justify-center">
            <div class="inline-flex p-3 flex-col items-center gap-10 rounded-2xl bg-white shadow-md">
                <p>Semua</p>
            </div>
            <div class="inline-flex p-3 flex-col items-center gap-10 rounded-2xl bg-white shadow-md">
                <p> Dimasak</p>
            </div>
            <div class="inline-flex p-3 flex-col items-center gap-10 rounded-2xl bg-white shadow-md">
                <p>Siap</p>
            </div>
            <div class="inline-flex p-3 flex-col items-center gap-10 rounded-2xl bg-white shadow-md">
                <p>Selesai</p>
            </div>
            <div class="inline-flex p-3 flex-col items-center gap-10 rounded-2xl bg-white shadow-md">
                <p>Reservasi</p>
            </div>
    
        </div>
        <!-- category end -->
    
        <!-- pesanan -->
        <div class="m-4 justify-center gap-5 flex flex-wrap">
            <!-- box pesanan -->
            <a href="/kitchen-detail">
                <div class="bg-[#ffffff] rounded-2xl flex justify-center flex-col p-6 gap-3 items-start shadow-2xl">
                    <div class="flex gap-3">
                        <h2 class="font-bold text-2xl">M02</h2> <h2 class="font-bold text-2xl">#003</h2>
                    </div>
                    
                    <div class="bg-[#ECCF98] rounded-xl flex p-2 items-center">
                        Sedang dimasak
                    </div>
        
                    <div class="grid grid-cols-2">
                        <div class="w-max flex">
                            <p class="font-bold">2x</p>
                        </div>
        
                        <div>
                            <p>Mac n Cheese</p>
                            <p>
                                Notes: 
                                <p>-</p> 
                            </p>
                        </div>
                    </div>
                </div>
            </a>
    
            <a href="/kitchen-detail">
                <div class="bg-[#ffffff] rounded-2xl flex justify-center flex-col p-6 gap-3 items-start shadow-2xl">
                    <div class="flex gap-3">
                        <h2 class="font-bold text-2xl">M02</h2> <h2 class="font-bold text-2xl">#003</h2>
                    </div>
                    
                    <div class="bg-[#ECCF98] rounded-xl flex p-2 items-center">
                        Sedang dimasak
                    </div>
        
                    <div class="grid grid-cols-2">
                        <div class="w-max flex">
                            <p class="font-bold">2x</p>
                        </div>
        
                        <div>
                            <p>Mac n Cheese</p>
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