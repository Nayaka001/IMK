@extends('layouts.main')

@section('container')

<div class="flex">

        @include('partials.navbar')

        <div class="w-full my-7 ml-24 sm:ml-36">
            <div class="flex justify-evenly mt-5">
                {{-- pendapatan harian --}}
                <div class="w-2/5 sm:w-80 rounded-md shadow-lg p-3 h-28 flex bg-gradient-to-r from-[#FFD369] to-[#ffffff]">
                    <div class="w-24 h-24 p-1 rounded-md bg-green-400 ml-3 -mt-7 items-center hidden sm:flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" class="mx-auto">
                            <path d="M19 14V6C19 4.9 18.1 4 17 4H3C1.9 4 1 4.9 1 6V14C1 15.1 1.9 16 3 16H17C18.1 16 19 15.1 19 14ZM17 14H3V6H17V14ZM10 7C8.34 7 7 8.34 7 10C7 11.66 8.34 13 10 13C11.66 13 13 11.66 13 10C13 8.34 11.66 7 10 7ZM23 7V18C23 19.1 22.1 20 21 20H4V18H21V7H23Z" fill="white"/>
                          </svg>
                    </div>
                    <div class="mx-auto sm:ml-auto my-auto">
                        <h1 class="text-xs sm:text-sm font-semibold">Pendapatan Hari ini</h1>
                        <h1 class="font-bold text-xl sm:text-2xl">Rp {{ number_format($totalIncome, 0, ',', '.') }}</h1>
                    </div>
                </div>
                {{--jumlah pesanan --}}
                <div class="w-2/5 sm:w-80 rounded-md shadow-lg p-3 h-28 flex bg-gradient-to-r from-[#FFD369] to-[#ffffff]">
                    <div class="w-24 h-24 p-1 rounded-md bg-blue-400 ml-3 -mt-7 items-center hidden sm:flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" class="mx-auto">
                            <path d="M19.5 3.5L18 2L16.5 3.5L15 2L13.5 3.5L12 2L10.5 3.5L9 2L7.5 3.5L6 2V16H3V19C3 20.66 4.34 22 6 22H18C19.66 22 21 20.66 21 19V2L19.5 3.5ZM15 20H6C5.45 20 5 19.55 5 19V18H15V20ZM19 19C19 19.55 18.55 20 18 20C17.45 20 17 19.55 17 19V16H8V5H19V19Z" fill="white"/>
                            <path d="M15 7H9V9H15V7Z" fill="white"/>
                            <path d="M18 7H16V9H18V7Z" fill="white"/>
                            <path d="M15 10H9V12H15V10Z" fill="white"/>
                            <path d="M18 10H16V12H18V10Z" fill="white"/>
                          </svg>
                    </div>
                    <div class="mx-auto sm:ml-3 my-auto">
                        <h1 class="text-xs sm:text-sm font-semibold">Jumlah Pesanan</h1>
                        <h1 class="font-bold text-xl sm:text-2xl">{{ $totalOrders }}</h1>
                    </div>
                </div>
            </div>
           
            <div class="flex justify-evenly gap-3 my-10 mr-5">

                {{-- makanan terlaris hari ini --}}
                <div class="w-full h-full bg-transparent p-3 rounded-md shadow-inner shadow-[#FFD369] border border-[#FFD369]">
                    <div class="flex justify-between">
                        <h1 class="font-semibold text-lg">Makanan terlaris hari ini</h1>
                        {{-- <a href="" class="text-blue-400 hover:text-blue-300">Lihat Semua</a> --}}
                    </div>
                    <!-- component -->
                    <div class="overflow-y-scroll h-40">
                        <table class="w-full text-left text-sm mt-3">
                            <tbody>
                                <tr>
                                    {{-- list makanan --}}
                                    @foreach ($menuQuantities as $menuId => $quantity)
                                    
                                    <th class="my-2 flex gap-3 px-3 py-2 font-normal rounded-xl bg-[#2C2C2C]">
                                        {{-- <div class="relative h-12 w-12">
                                            <img
                                                class="h-full w-full rounded-xl object-cover object-center"
                                                src=""
                                                alt=""
                                            />
                                        </div> --}}
                                        <div class="text-sm">
                                        <div class="font-medium text-white">{{ $menuNames[$menuId] }}</div>
                                        
                                        <div class="text-gray-400">Jumlah pesanan : {{ $quantity }}</div>
                                    </div>
                                </th>
                               
                                    @endforeach
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
              
                {{-- Pengeluaran hari ini --}}
                <div class="w-full h-full bg-transparent p-3 rounded-md shadow-inner shadow-[#FFD369] border border-[#FFD369]">
                    <div class="flex justify-between">
                        <h1 class="font-semibold text-lg">Pengeluaran hari ini</h1>
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="text-blue-400 hover:text-blue-300">Tambah</button>
                    </div>

                    {{-- modal --}}
                    <!-- Main modal -->
                    <form action="{{route('store.pengeluaran')}}" method="POST">
                        @csrf
                    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow ">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
                                    <h3 class="text-xl font-semibold text-gray-900 ">
                                        Tambah Pengeluaran
                                    </h3>
                                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="authentication-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    {{-- <form class="space-y-4" action=""> --}}
                                        
                                        <div>
                                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Pengeluaran</label>
                                            <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " name="nama_pengeluaran" placeholder="Masukkan nama pengeluaran" />
                                        </div>
                                        <input type="hidden" name="user" value="{{ auth()->user()->id_user }}" id="">
                                        <div>
                                            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 ">Tanggal dan Waktu</label>
                                            <input type="datetime-local" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " name="waktu_pengeluaran" />
                                        </div>
                                        <div>
                                            <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 ">Jumlah Uang</label>
                                            <input type="number" id="jumlah" placeholder="Masukkan Jumlah uang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " name="pengeluaran" />
                                        </div>
                                        <button data-modal-target="popup-modal" type="button" data-modal-toggle="popup-modal" data-modal-hide="authentication-modal" class="w-full text-black bg-[#FFD369] hover:text-white focus:ring-4 focus:outline-none focus:ring-[#FFD369] font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                                    {{-- </form> --}}
                                </div>
                            </div>
                        </div>
                    </div> 

                    {{-- modal konfirmasi --}}
                    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow ">
                                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="popup-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="p-4 md:p-5 text-center">
                                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                    </svg>
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 ">Apakah anda yakin data yang dimasukkan sudah benar?</h3>
                                    <button data-modal-hide="popup-modal" type="submit" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                        Ya 
                                    </button>
                                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                                        Tidak
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <!-- component -->
                    <div class="overflow-y-scroll h-40">
                        <table class="w-full text-left text-sm mt-3">
                            <tbody>
                                <tr>
                                    {{-- list makanan --}}
                                    <table class="w-full border-collapse bg-transparent text-left text-sm text-gray-500 overflow-y-scroll ">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="px-3 pr-10 py-4 font-semibold text-black">Nama</th>
                                                <th scope="col" class="pl-3 py-4 font-semibold text-black">Tanggal</th>
                                                <th scope="col" class="px-3 py-4 font-semibold text-black ">Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-white">
                                            {{-- isi tabel --}}
                                            @foreach($report as $reports)
                                            <tr class="bg-[#f5f5e6]">
                                                {{-- no. pesanan --}}
                                                <td class="px-3 pr-10 py-2 rounded-l-xl">
                                                    <h1 class="text-black">{{$reports->nama_pengeluaran}}</h1>
                                                </td>
                                                {{-- Pelanggan --}}
                                                <td class="pl-3 py-2">
                                                    <h1 class="text-black">{{$reports->waktu_pengeluaran}}</h1>
                                                </td>
                                                {{-- Kasir --}}
                                                <td class="px-3 py-2">
                                                    <h1 class="text-black">Rp {{ number_format($reports->pengeluaran, 0, ',', '.') }}</h1>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="mr-5">
                {{-- Daftar pesanan hari ini --}}
                <div class="w-full h-full bg-transparent p-3 rounded-md shadow-inner shadow-[#FFD369] border border-[#FFD369]">
                    <h1 class="font-semibold text-lg">Daftar pesanan hari ini</h1>
                    <form action="" class="w-full">
                        <div class="flex items-center my-3">
                            <input type="search" placeholder="Search" class="bg-transparent px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 peer "/>
                            <button class="items-center mx-3">
                                <ion-icon name="search-outline" size="small"></ion-icon>
                            </button>
                        </div>
                    </form>
                    <!-- component -->
                    <div class="overflow-y-scroll h-96">
                        <table class="w-full border-collapse bg-transparent text-left text-sm overflow-y-scroll ">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-3 pr-6 py-4 font-semibold text-black ">No. Pesanan</th>
                                    <th scope="col" class="px-6 py-4 font-semibold text-black ">Nama Pelanggan</th>
                                    <th scope="col" class="px-6 py-4 font-semibold text-black ">Nama Kasir </th>
                                    <th scope="col" class="px-6 py-4 font-semibold text-black ">Detail</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-white">
                                {{-- isi tabel --}}
                                @foreach($orders as $order)
                                <tr class="bg-[#f5f5e6]">
                                    {{-- no. pesanan --}}
                                    <td class="px-3 pr-6 py-2 rounded-l-xl">
                                        <h1 class="text-black">{{$order->id_order}}</h1>
                                    </td>
                                    {{-- Pelanggan --}}
                                    <td class="px-6 py-2">
                                        <h1 class="text-black">{{$order->nama_pelanggan}}</h1>
                                    </td>
                                    {{-- Kasir --}}
                                    <td class="px-6 py-2">
                                        <h1 class="text-black">{{$order->user->karyawan->nama}}</h1>
                                    </td>
                                    {{-- detail --}}
                                    <td class="px-6 py-2 rounded-r-xl">
                                        <button data-modal-target="detail-modal" data-modal-toggle="detail-modal" data-order-id="{{ $order->id_order }}" type="button" class="details-button">
                                            <div class="rounded-full bg-black hover:bg-gray-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M8.29492 16.59L12.8749 12L8.29492 7.41L9.70492 6L15.7049 12L9.70492 18L8.29492 16.59Z" fill="white"/>
                                                </svg>
                                            </div>
                                        </button>

                                        {{-- modal detail --}}
                                        {{-- Main modal --}}
                                        <div id="detail-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative p-4 w-full max-w-3xl max-h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow ">
                                                    {{-- Modal Header --}}
                                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                        <h3 class="text-2xl font-bold text-gray-900 ">
                                                            Detail Pesanan
                                                        </h3>
                                                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="detail-modal">
                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    {{-- Modal body --}}
                                                    <div class="p-3 md:p-5 space-y-1 flex" id="modalBody">
                                                        
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
                        
    </div>
    <script defer>
        document.addEventListener('DOMContentLoaded', (event) => {
          document.querySelector('.submit-button').addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah pengiriman formulir
            // Tindakan lain seperti membuka modal
            const popupModal = document.getElementById('popup-modal');
            popupModal.classList.remove('hidden');
            const authenticationModal = document.getElementById('authentication-modal');
            authenticationModal.classList.add('hidden');
          });
        });
      </script>
      <script>
        $(document).ready(function() {
        $('.details-button').on('click', function() {
            var orderId = $(this).data('order-id');
    
            $.ajax({
                url: '/report/' + orderId, // Ganti dengan endpoint yang sesuai
                type: 'GET',
                success: function(response) {
                    var progressStatus = response.progress === 'Selesai' ? 'Done' : 'Waiting';
                    var progressBgColor = response.progress === 'Selesai' ? 'bg-green-500' : 'bg-blue-500';
                    var waktuDisplay = response.tipe_order === 'Reservasi' ? 'Waktu reservasi : ' + response.kedatangan : 'Waktu order : ' + response.waktu_order;

                    console.log(response)
                    // Asumsikan responsenya adalah object dengan struktur data yang diperlukan
                    var modalBody = `
                    <div class="w-full">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="size-8">
                                <path d="M11.99 2C6.47 2 2 6.48 2 12C2 17.52 6.47 22 11.99 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 11.99 2ZM15.29 16.71L11 12.41V7H13V11.59L16.71 15.3L15.29 16.71Z" fill="black"/>
                            </svg>
                            <p class="text-lg ml-3">${waktuDisplay}</p>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none">
                                <path d="M2 17H22V21H2V17ZM6.25 7H9V6H6V3H14V6H11V7H17.8C18.8 7 19.8 8 20 9L20.5 16H3.5L4.05 9C4.05 8 5.05 7 6.25 7ZM13 9V11H18V9H13ZM6 9V10H8V9H6ZM9 9V10H11V9H9ZM6 11V12H8V11H6ZM9 11V12H11V11H9ZM6 13V14H8V13H6ZM9 13V14H11V13H9ZM7 4V5H13V4H7Z" fill="black"/>
                            </svg>
                            <p class="text-lg ml-3">{{ auth()->user()->karyawan->nama }}</p>
                        </div>
                                                    <div class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="size-8">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7C16 8.06087 15.5786 9.07828 14.8284 9.82843C14.0783 10.5786 13.0609 11 12 11C10.9391 11 9.92172 10.5786 9.17157 9.82843C8.42143 9.07828 8 8.06087 8 7ZM8 13C6.67392 13 5.40215 13.5268 4.46447 14.4645C3.52678 15.4021 3 16.6739 3 18C3 18.7956 3.31607 19.5587 3.87868 20.1213C4.44129 20.6839 5.20435 21 6 21H18C18.7956 21 19.5587 20.6839 20.1213 20.1213C20.6839 19.5587 21 18.7956 21 18C21 16.6739 20.4732 15.4021 19.5355 14.4645C18.5979 13.5268 17.3261 13 16 13H8Z" fill="black"/>
                                                        </svg>
                                                        <p class="text-lg ml-3">${response.nama_pelanggan}</p>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                            <path d="M5 16.25C6.375 16.25 7.5 15.125 7.5 13.75C7.5 12.375 6.375 11.25 5 11.25C3.625 11.25 2.5 12.375 2.5 13.75C2.5 15.125 3.625 16.25 5 16.25ZM6.4125 17.625C5.95 17.55 5.4875 17.5 5 17.5C3.7625 17.5 2.5875 17.7625 1.525 18.225C0.6 18.625 0 19.525 0 20.5375V22.5H5.625V20.4875C5.625 19.45 5.9125 18.475 6.4125 17.625ZM25 16.25C26.375 16.25 27.5 15.125 27.5 13.75C27.5 12.375 26.375 11.25 25 11.25C23.625 11.25 22.5 12.375 22.5 13.75C22.5 15.125 23.625 16.25 25 16.25ZM30 20.5375C30 19.525 29.4 18.625 28.475 18.225C27.4125 17.7625 26.2375 17.5 25 17.5C24.5125 17.5 24.05 17.55 23.5875 17.625C24.0875 18.475 24.375 19.45 24.375 20.4875V22.5H30V20.5375ZM20.3 17.0625C18.8375 16.4125 17.0375 15.9375 15 15.9375C12.9625 15.9375 11.1625 16.425 9.7 17.0625C8.35 17.6625 7.5 19.0125 7.5 20.4875V22.5H22.5V20.4875C22.5 19.0125 21.65 17.6625 20.3 17.0625ZM10.0875 20C10.2 19.7125 10.25 19.5125 11.225 19.1375C12.4375 18.6625 13.7125 18.4375 15 18.4375C16.2875 18.4375 17.5625 18.6625 18.775 19.1375C19.7375 19.5125 19.7875 19.7125 19.9125 20H10.0875ZM15 10C15.6875 10 16.25 10.5625 16.25 11.25C16.25 11.9375 15.6875 12.5 15 12.5C14.3125 12.5 13.75 11.9375 13.75 11.25C13.75 10.5625 14.3125 10 15 10ZM15 7.5C12.925 7.5 11.25 9.175 11.25 11.25C11.25 13.325 12.925 15 15 15C17.075 15 18.75 13.325 18.75 11.25C18.75 9.175 17.075 7.5 15 7.5Z" fill="black"/>
                                                        </svg>
                                                        <p class="text-lg ml-3">${response.jlh_org ? response.jlh_org + ' Orang' : '-'}</p>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="size-8">
                                                            <path d="M22 7.5C22 5.57 17.52 4 12 4C6.48 4 2 5.57 2 7.5C2 9.31 5.95 10.81 11 10.98V15H9.35C8.53 15 7.8 15.5 7.49 16.26L6 20H8L9.2 17H14.8L16 20H18L16.5 16.26C16.2 15.5 15.46 15 14.65 15H13V10.98C18.05 10.81 22 9.31 22 7.5ZM12 6C16.05 6 18.74 6.86 19.72 7.5C18.74 8.14 16.05 9 12 9C7.95 9 5.26 8.14 4.28 7.5C5.26 6.86 7.95 6 12 6Z" fill="black"/>
                                                        </svg>
                                                        <p class="text-lg ml-3">${response.id_meja ? response.id_meja : '-'}</p>
                                                    </div>
                                                    <h1 class=" px-2 text-slate-400 text-lg tracking-wide">${response.jlh_menu} item(s)</h1>
                                                    <div class="w-20 text-center ${progressBgColor} text-white rounded-full p-2 tracking-wide my-2 font-semibold">
                                                        ${progressStatus}
                                                    </div>
                                                    <div class="bg-[#EEEEEE] my-2 w-full sm:w-80 h-fit p-2 rounded-xl mt-5 mr-5">
                                                        <h1 class="font-bold text-lg">Notes</h1>
                                                        {{-- notes permenu --}}
                                                        <div class="note-container">
                                                            
                                                        </div>
                                                        {{-- end notes permenu --}}
                                                    </div>
                                                </div>
                                                <div class="menu-container flex-col w-full">
                                                    {{-- menu yang dipesan --}}
                                                    
                                                    {{-- end menu yang dipesan --}}
                                                    
                                                </div>
                                                </div>
    
                                                    `;
                    $('#modalBody').html(modalBody);
    
                    // Bagian menu yang dipesan
                    const menuContainer = document.querySelector('.menu-container');
                    const noteContainer = document.querySelector('.note-container');
    
                    response.detail.forEach(details => {
                        const menuItem = document.createElement('div');
                        menuItem.className = 'flex-col w-full';
                        
                        const progressClass = details.progress === 'Siap Disajikan' ? 'bg-[#ECCF98]' : details.progress === 'Selesai' ? 'bg-green-300' :  details.progress === 'Dimasak' ? 'bg-pink-300' :'';
                        menuItem.innerHTML = `
                        <div class=" flex my-3">
                            <div>
                                <img src="${details.gambar_menu}" alt=""  width="110" height="110" class="rounded-xl object-cover hidden sm:flex">
                            </div>
                            <div class="flex w-full justify-between">
                                <div class="ml-3 w-1/2">
                                    <h1 class="text-lg font-semibold">${details.nama_menu}</h1>
                                    <div class="w-16 text-center bg-[#FFD369] rounded-full">${details.jumlah}</div>
                                </div>
                                <div>
                                    <h1 class="text-lg font-bold">Rp ${details.subtotal}</h1>
                                    <div class="text-center w-fit p-1 px-2 ${progressClass} rounded-full">${details.progress}</div>
                                </div>
                            </div>
                        </div>
                        `;
    
                        menuContainer.appendChild(menuItem);
    
                        
                    });
                    
                    const totalElement = document.createElement('div');
                    totalElement.className = 'flex text-xl font-bold mt-10 justify-between';
                    const totalAmount = response.total;
                    totalElement.innerHTML = `
                            <div>Total</div>
                            <div>Rp  ${totalAmount}</div>
                        `;
    
                        // Tambahkan elemen total setelah elemen terakhir dalam kontainer
                    menuContainer.appendChild(totalElement);
    
                    response.detail.forEach(note => {
                        const noteItem = document.createElement('div');
                        noteItem.className = 'flex';
                        let noteText = note.note ? note.note : 'Tidak ada note';
    
                        noteItem.innerHTML = `
                        <p class="font-semibold text-base mr-3 w-1/2">${note.nama_menu}</p>
                        <p class="text-base w-2/3">${noteText}</p>
                        `;
    
                        noteContainer.appendChild(noteItem);
                    });
                    
    
    
    
                    $('#default-modal').removeClass('hidden');
                },
                
            });
        });
    
        // Event listener to hide modal
        $('[data-modal-hide="default-modal"]').on('click', function() {
            $('#default-modal').addClass('hidden');
        });
        });
    </script>
@endsection