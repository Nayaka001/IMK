@extends('layouts.main-bartender ')

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
            <h1 class="text-sm font-medium">{{ auth()->user()->karyawan->nama }}</h1>
            <p class="text-xs text-slate-500">Bartender</p>
        </div>
    </div>
</div>
{{-- detail user end --}}

<!-- category -->
<div class="w-auto flex justify-between my-5 mt-5 overflow-x-auto sm:w-4/5 md:w-11/12 lg:w-full lg:overflow-visible gap-2">            
    <a href="{{ route('menu.bartender') }}">    
        <div class="rounded-2xl bg-black text-white w-fit px-4 py-2 shadow-md mx-2 font-bold text-center">Menu</div>
    </a>
    <a href="{{ route('index.bartender') }}">
        <div class="rounded-2xl bg-[#FFD369] w-fit px-4 py-2 shadow-md mx-2 font-bold text-center hover:bg-[#FFD369]">Semua</div>
    </a>
    <a href="{{ route('index.process') }}">
        <div class="rounded-2xl bg-white w-fit px-4 py-2 shadow-md mx-2 font-bold text-center hover:bg-[#FFD369]">Diproses</div>
    </a>
    <a href="{{ route('index.bready') }}">
        <div class="rounded-2xl bg-white w-fit px-4 py-2 shadow-md mx-2 font-bold text-center hover:bg-[#FFD369]">Siap</div>
    </a>
    <a href="{{ route('index.bdone') }}">
        <div class="rounded-2xl bg-white w-fit px-4 py-2 shadow-md mx-2 font-bold text-center hover:bg-[#FFD369]">Selesai</div>
    </a>
    <a href="{{ route('index.breser') }}">
        <div class="rounded-2xl bg-white w-fit px-4 py-2 shadow-md mx-2 font-bold text-center hover:bg-[#FFD369]">Reservasi</div>
    </a>
</div>
<!-- category end -->


    

    
        <!-- pesanan -->
        <div class="m-4 justify-center gap-5 flex flex-wrap">
            <!-- box pesanan -->
            @foreach($orders as $order)
            @foreach($order->detailorder as $detail)
            @if($detail->menu->ktgmenu->jenis === 'Minuman')
            <a href="{{route('bartender.detail', $order->id_order)}}">
                <div class="bg-[#ffffff] rounded-2xl flex flex-col p-6 gap-3 items-start shadow-2xl h-64 overflow-auto">
                    @if($order->tipe_order === 'Makan di Tempat' || $order->tipe_order === 'Reservasi')
                    <div class="flex gap-3">
                        <h2 class="font-bold text-2xl">{{$order->id_meja}}</h2> <h2 class="font-bold text-2xl">#{{$order->id_order}}</h2>
                    </div>
                    @elseif($order->tipe_order === 'Bawa Pulang')
                    <div class="flex gap-3">
                        <h2 class="font-bold text-2xl">Bawa Pulang</h2> <h2 class="font-bold text-2xl">#{{$order->id_order}}</h2>
                    </div>
                    @endif
                    @php
                    $allCompleted = true;
                    $cookingInProgress = false;
                    @endphp
                    @foreach($order->detailorder as $detail)
                        @if($detail->progress !== 'Selesai'  && $detail->menu->ktgmenu->jenis === 'Makanan')
                            @php
                                $allCompleted = false;
                            @endphp
                        @endif
                        @if($detail->progress === 'Dimasak' && $detail->menu->ktgmenu->jenis === 'Makanan' )
                            @php
                                $cookingInProgress = true;
                            @endphp
                        @endif
                        @if($detail->progress === 'Siap Disajikan' && $detail->menu->ktgmenu->jenis === 'Makanan')
                            @php
                                $readyToCook = true;
                            @endphp
                        @endif
                    @endforeach

                    @if($cookingInProgress)
                        <div class="bg-[#ECCF98] rounded-xl flex p-2 items-center">
                            Sedang dibuat
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
                    @if($detail->menu->ktgmenu->jenis === 'Minuman')
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
                    
                    @endif
                    @endforeach
                    
                </div>
            </a>
            @endif
            @endforeach
            @endforeach
            <!-- end box pesanan -->
        </div>
        <!-- pesanan end -->
    </div>

@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('logoutButton').addEventListener('click', function(event) {
            event.preventDefault();
            
            Swal.fire({
                title: 'Apakah Anda yakin ingin logout?',
                text: "Anda akan keluar dari akun Anda!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Logout!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect ke route logout setelah pengguna mengonfirmasi
                    window.location.href = "{{ route('logout') }}";
                }
            });
        });
    });
</script>
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
document.getElementById("user-icon").addEventListener("click", function() {
        var dropdown = document.getElementById("user-dropdown");
        dropdown.classList.toggle("hidden");
    });

    // Close the dropdown when clicking outside of it
    window.addEventListener("click", function(event) {
        var dropdown = document.getElementById("user-dropdown");
        var icon = document.getElementById("user-icon");
        if (!icon.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.classList.add("hidden");
        }
    });



</script>
@endpush