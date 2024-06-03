@extends('layouts.main-kitchen')

@section('container')

<div class="">

    <div class="w-auto items-center justify-center p-4 md:p-9 ">

        <div class="flex justify-end gap-6 items-center mt-4">
            <ion-icon name="person-circle-outline" style="font-size: 3rem; width: 3rem; height: 3rem;"></ion-icon>
            <div class="text-center">
                <h1 class="text-sm">User Name</h1>
                <p class="text-xs text-slate-500">Cashier</p>
            </div>
        </div>
        
        
        
        <!-- category -->
        <div class="w-auto flex justify-between my-5 overflow-x-scroll sm:w-4/5 md:w-11/12 lg:w-full lg:overflow-visible">
            <a href="/kitchen-menu">
                <div class="rounded-2xl bg-black text-white w-fit px-3 py-2 shadow-md mx-2 font-bold">Menu</div>
            </a>
            <a href="/kitchen-main">
                <div class="rounded-2xl bg-[#FFD369] w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Semua</div>
            </a>
            <a href="/kitchen-cooking">
                <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Diproses</div>
            </a>
            <a href="/kitchen-ready                                                                                                          ">
                <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Siap</div>
            </a>
            <a href="/kitchen-menu/rice">
                <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Selesai</div>
            </a>
            <a href="/kitchen-menu/geprek">
                <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Reservasi</div>
            </a>
        </div>
        <!-- category end -->
    
        <!-- pesanan -->
        <div class="m-4 justify-center gap-5 flex flex-wrap">
            <!-- box pesanan -->
            @foreach($orders as $order)
            <a href="{{route('kitchen.detail', $order->id_order)}}">
                <div class="bg-[#ffffff] rounded-2xl flex justify-center flex-col p-6 gap-3 items-start shadow-2xl">
                    <div class="flex gap-3">
                        <h2 class="font-bold text-2xl">{{$order->id_meja}}</h2> <h2 class="font-bold text-2xl">#{{$order->id_order}}</h2>
                    </div>
                    @php
                    $allCompleted = true;
                    $cookingInProgress = false;
                    @endphp
                    @foreach($order->detailorder as $detail)
                        @if($detail->progress !== 'Selesai')
                            @php
                                $allCompleted = false;
                            @endphp
                        @endif
                        @if($detail->progress === 'Dimasak')
                            @php
                                $cookingInProgress = true;
                            @endphp
                        @endif
                        @if($detail->progress === 'Siap Disajikan')
                            @php
                                $readyToCook = true;
                            @endphp
                        @endif
                    @endforeach

                    @if($cookingInProgress)
                        <div class="bg-[#ECCF98] rounded-xl flex p-2 items-center">
                            Sedang dimasak
                        </div>
                    @elseif($allCompleted)
                        <div class="bg-[#ECCF98] rounded-xl flex p-2 items-center">
                            Selesai
                        </div>
                    @elseif($readyToCook)
                        <div class="bg-[#ECCF98] rounded-xl flex p-2 items-center">
                            Siap Disajikan
                        </div>
                    @endif
                    @foreach($order->detailorder as $detail)
                    <div class="grid grid-cols-2">
                        <div class="w-max flex">
                            <p class="font-bold">{{$detail->jumlah}} x</p>
                        </div>
        
                        <div>
                            <p>{{$detail->menu->nama_menu}}</p>
                            <p>
                                Notes: 
                                <p>{{ $detail->notes ?? '-'}}</p> 
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </a>
            @endforeach
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