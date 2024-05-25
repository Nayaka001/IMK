@extends('layouts.main')

@section('container')

<div class="">

    @include('partials.navbar')


    <div class="mx-auto h-screen ml-20 sm:ml-28">
            {{-- <a href="{{route('kasir.neworder')}}" class="flex pt-3 pl-5 w-fit">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 36 34" fill="none">
                    <path d="M17.0625 31.125L3 17.0625L17.0625 3M4.95312 17.0625H33.4688" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a> --}}
            {{-- <h1 class="font-bold text-4xl text-center pt-7 relative z-10">Pemesanan Baru</h1> --}}
            <div class="overflow-hidden z-0 mx-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="1440" height="181" viewBox="0 0 1440 181" fill="none" class="relative z-0 top-7 mx-auto md:w-screen">
                    <g filter="url(#filter0_i_1480_2096)">
                    <path d="M1340.48 46.9205C1356.54 51.3792 1373.66 50.1157 1388.9 43.3461L1421.13 29.0255C1453.52 14.6363 1490 38.3456 1490 73.7874C1490 94.4384 1477.05 112.871 1457.62 119.869L1401.87 139.95C1378.01 148.546 1352.18 150.155 1327.43 144.586L1230.06 122.676C1187.79 113.165 1143.87 113.851 1101.92 124.675L964.073 160.244C914.06 173.15 861.412 171.602 812.243 155.781L763.801 140.194C699.877 119.625 630.554 123.864 569.612 152.067L556.538 158.118C488.66 189.532 409.974 187.275 344.008 152.022C291.279 123.844 229.889 116.502 172.003 131.45L128.464 142.694C102.11 149.5 74.3655 148.674 48.4638 140.312L-19.8153 118.272C-38.4031 112.272 -51 94.9684 -51 75.4361C-51 41.0004 -13.9074 19.3184 16.0981 36.2148L51.8964 56.3732C74.1797 68.9212 101.574 68.1211 123.088 54.2939L168.354 25.1997C224.547 -10.9176 297.36 -7.8956 350.367 32.754L360.461 40.4949C414.409 81.8667 487.326 88.5694 547.913 57.7259L568.964 47.0094C629.028 16.432 699.99 15.947 760.467 45.7007L782.827 56.7015C849.5 89.5041 926.918 92.658 996.039 65.3873L1080.68 31.9949C1135.88 10.2139 1196.68 7.0163 1253.87 22.8863L1340.48 46.9205Z" fill="url(#paint0_linear_1480_2096)"/>
                    </g>
                    <defs>
                    <filter id="filter0_i_1480_2096" x="-51" y="0.0527039" width="1541" height="186.116" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="6"/>
                        <feGaussianBlur stdDeviation="3.25"/>
                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                        <feBlend mode="normal" in2="shape" result="effect1_innerShadow_1480_2096"/>
                    </filter>
                    <linearGradient id="paint0_linear_1480_2096" x1="-21.8956" y1="86" x2="1468.55" y2="86" gradientUnits="userSpaceOnUse">
                        <stop offset="0.136667" stop-color="#FFD369"/>
                        <stop offset="1" stop-color="#FFFFF0"/>
                    </linearGradient>
                    </defs>
                </svg>
                <div class="container flex justify-between relative z-20 mb-4 mx-auto">
                    <a href="" id="showForm1">
                        <div class="w-32 h-32 rounded-full bg-black relative mx-3 -mt-14 flex-col shadow-lg group hover:bg-black md:w-40 md:h-40">
                            <img src="/img/iftar.png" width="70" alt="" class="mx-auto pt-1 md:pt-7">
                            <h1 class="text-white text-center font-bold text-sm md:text-md">Makan di tempat</h1>
                        </div>
                    </a>
                    <a href="" id="showForm2">
                        <div class="w-32 h-32 rounded-full bg-[#fffff0] relative mx-3 -mt-36 flex-col drop-shadow-lg group hover:bg-black md:w-40 md:h-40">
                            <img src="/img/bento.png" width="40" alt="" class="mx-auto pt-3 md:pt-7">
                            <h1 class="text-black text-center font-bold pt-2 group-hover:text-white md:text-lg">Bawa Pulang</h1>
                        </div>
                    </a>
                    <a href="" id="showForm3">
                        <div class="w-32 h-32 rounded-full bg-[#fffff0] relative mx-3 -mt-20 flex-col drop-shadow-lg group hover:bg-black md:w-40 md:h-40">
                            <img src="/img/cooking.png" width="60" alt="" class="mx-auto pt-4 md:pt-7">
                            <h1 class="text-black text-center font-bold pt-2 group-hover:text-white md:text-lg">Reservasi</h1>
                        </div>
                    </a>
                </div>
            </div>
            <div id="form1" class="hidden mx-3 pb-2 md:mx-8">
                <form id="orderForm" action="{{route('kasir.newdine')}}" method="POST">
                    @csrf
                    <input type="hidden" id="order-id" name="order_id">
                    <label for="nama-pelanggan" class="mx-10">
                        <span class="block font-semibold">Nama Pelanggan</span>
                        <input type="text" id="nama-pelanggan" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" class="px-3 py-2 mt-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 text-black focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer " />
                        <p id="nama-error" class="text-sm m-1 text-pink-700 invisible">Nama tidak valid</p>
                    </label>
                    <label for="jumlah-orang" class="mx-10">
                        <span class="block font-semibold">Jumlah Orang</span>
                        <input type="number" id="jumlah-orang" name="jumlah_orang" placeholder="Masukkan Jumlah Orang" class="px-3 py-2 mt-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 text-black focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer " />
                        <p id="jumlah-error" class="text-sm m-1 text-pink-700 invisible">Jumlah orang tidak valid</p>
                    </label>
                    <label for="nomor-meja" class="mx-10">
                        <span class="block font-semibold">Nomor Meja</span>
                        <input type="text" id="nomor-meja" name="nomor_meja" placeholder="Masukkan Nomor Meja" class="px-3 py-2 mt-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 text-black focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer " />
                    </label>
                    <button type="submit" class="my-7 bg-[#FFD369] px-5 py-2 rounded-full text-black font-bold font-inter block mx-auto w-full hover:bg-[#f8dea0] focus:ring focus:ring-[#FFD369]">Selanjutnya</button>
                </form>
                
            </div>
            <div id="form2" class="hidden mx-3 pb-2 pt-2 md:mx-8">
                <form action="{{route('kasir.newres')}}" method="POST">
                    @csrf
                    <label for="nama-pelanggan" class="mx-10">
                        <span class="block font-semibold">Nama Pelanggan</span>
                        <input type="text" id="nama-pelanggan" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" class="px-3 py-2 mt-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 text-black focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer " />
                        {{-- <p class="text-sm m-1 text-pink-700 invisible peer-invalid:visible">Username tidak valid</p> --}}
                    </label>
                    <button class="my-7 bg-[#FFD369] px-5 py-2 rounded-full text-black font-bold font-inter block mx-auto w-full hover:bg-[#f8dea0] focus:ring focus:ring-[#FFD369]">Selanjutnya</button>
                </form>
            </div>
            <div id="form3" class="hidden mx-3 pb-2 md:mx-8">
                <form action="{{route('kasir.newtake')}}" method="POST">
                    @csrf
                    <label for="nama-pelanggan" class="mx-10">
                        <span class="block font-semibold">Nama Pelanggan</span>
                        <input type="text" id="nama-pelanggan" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" class="px-3 py-2 mt-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 text-black focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer " />
                        {{-- <p class="text-sm m-1 text-pink-700 invisible peer-invalid:visible">Username tidak valid</p> --}}
                    </label>
                    <label for="telepon" class="mx-10">
                        <span class="block font-semibold">Nomor telepon</span>
                        <input type="number" id="telepon" placeholder="Masukkan Nomor Telepon" class="px-3 py-2 mt-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 text-black focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer " />
                        {{-- <p class="text-sm m-1 text-pink-700 invisible peer-invalid:visible">Username tidak valid</p> --}}
                    </label>
                    <label for="jumlah-orang" class="mx-10">
                        <span class="block font-semibold">Jumlah Orang</span>
                        <input type="number" id="jumlah-orang" name="jumlah_orang" placeholder="Masukkan Jumlah Orang" class="px-3 py-2 mt-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 text-black focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer " />
                        {{-- <p class="text-sm m-1 text-pink-700 invisible peer-invalid:visible">Username tidak valid</p> --}}
                    </label>
                    {{-- <label for="tanggal" class="mx-10">
                        <span class="block font-semibold">Tanggal Kedatangan</span>
                        <input type="date" id="tanggal" name="tangga_datang" placeholder="Masukkan Kedatangan" class="px-3 py-2 mt-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 text-black focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer " />
                        <p class="text-sm m-1 text-pink-700 invisible peer-invalid:visible">Username tidak valid</p>
                    </label>
                    <label for="waktu" class="mx-10">
                        <span class="block font-semibold">Waktu Kedatangan</span>
                        <input type="time" id="waktu" name="waktu_datang" placeholder="Masukkan Waktu Kedatangan" class="px-3 py-2 mt-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 text-black focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer " />
                        <p class="text-sm m-1 text-pink-700 invisible peer-invalid:visible">Username tidak valid</p>
                    </label> --}}
                    <label for="waktu" class="mx-10">
                        <span class="block font-semibold">Waktu Kedatangan</span>
                        <input type="datetime-local" id="waktu" name="waktu_datang" placeholder="Masukkan Waktu Kedatangan" class="px-3 py-2 mt-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 text-black focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer " />
                        {{-- <p class="text-sm m-1 text-pink-700 invisible peer-invalid:visible">Username tidak valid</p> --}}
                    </label>
                    <label for="nomor-meja" class="mx-10">
                        <span class="block font-semibold">Nomor Meja</span>
                        <input type="text" id="nomor-meja" name="nomor_meja" placeholder="Masukkan Nomor Meja" class="px-3 py-2 mt-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 text-black focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer " />
                        {{-- <p class="text-sm m-1 text-pink-700 invisible peer-invalid:visible">Username tidak valid</p> --}}
                    </label>
                    <button class="my-7 bg-[#FFD369] px-5 py-2 rounded-full text-black font-bold font-inter block mx-auto w-full hover:bg-[#f8dea0] focus:ring focus:ring-[#FFD369]">Selanjutnya</button>
                </form>
                
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const namaPelangganInput = document.getElementById('nama-pelanggan');
    const jumlahOrangInput = document.getElementById('jumlah-orang');

    const namaError = document.getElementById('nama-error');
    const jumlahError = document.getElementById('jumlah-error');

    // Regex for validation
    const namaRegex = /^[a-zA-Z\s]+$/;  // Hanya huruf dan spasi
    const jumlahRegex = /^[1-9]\d*$/;  // Angka lebih dari 0

    // Function to validate Nama Pelanggan
    function validateNamaPelanggan() {
        if (!namaRegex.test(namaPelangganInput.value)) {
            namaError.classList.remove('invisible');
        } else {
            namaError.classList.add('invisible');
        }
    }

    // Function to validate Jumlah Orang
    function validateJumlahOrang() {
        if (!jumlahRegex.test(jumlahOrangInput.value)) {
            jumlahError.classList.remove('invisible');
        } else {
            jumlahError.classList.add('invisible');
        }
    }

    // Add event listeners
    namaPelangganInput.addEventListener('input', validateNamaPelanggan);
    jumlahOrangInput.addEventListener('input', validateJumlahOrang);
});
</script>
{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        const orderForm = document.getElementById('orderForm');
        const orderIdInput = document.getElementById('order-id');

        // Function to get the last order ID from session storage
        function getLastOrderId() {
            let lastOrderId = sessionStorage.getItem('lastOrderId');
            return lastOrderId ? parseInt(lastOrderId, 10) : 0; // Return 0 if no order ID is found
        }

        // Function to save the new order ID to session storage
        function saveNewOrderId(newOrderId) {
            sessionStorage.setItem('lastOrderId', newOrderId);
        }

        orderForm.addEventListener('submit', function (event) {
            // Get the last order ID and increment it by 1
            const lastOrderId = getLastOrderId();
            const newOrderId = lastOrderId + 1;

            // Save the new order ID to session storage
            saveNewOrderId(newOrderId);

            // Set the new order ID in the hidden input field
            orderIdInput.value = newOrderId;
        });
    });
</script> --}}
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