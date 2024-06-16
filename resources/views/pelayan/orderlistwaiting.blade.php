@extends('layouts.main')

@section('container')
<div class="flex overflow-x-hidden">
<div class="hidden">
    @include('partials.navbar')
</div>
    <div class="w-full my-7 ml-24 sm:ml-36">
        <div class="mr-7">
            <div class="w-full flex justify-between gap-6">
                <a href="{{ route('logout') }}">
                    <button id="logoutButton" class="w-full mx-auto">
                        <div class="rounded-2xl bg-[#ff8181] w-fit px-3 py-2 shadow-md hover:bg-[#ff6969] mx-2 font-bold">
                            <ion-icon id="power-off-icon" name="power-outline" style="font-size: 2rem; width: 2rem; height: 2rem; cursor: pointer;"></ion-icon>
                        </div>
                    </button>
                </a>
                <form action="" class="w-full">
                    <div class="flex items-center">
                        <input type="search" placeholder="Search" class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 peer "/>
                        <button class="items-center mx-3">
                            <ion-icon name="search-outline" size="small"></ion-icon>
                        </button>
                    </div>
                </form>
                <ion-icon name="person-circle-outline" class="flex items-center text-5xl -ml-7 -mr-3 -mt-1"></ion-icon>
                <div class="text-center items-center">
                    <h1 class="text-sm">{{ auth()->user()->karyawan->nama }}</h1>
                    <p class="text-xs text-slate-500">Pelayan</p>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-around my-5">
            <a href="/order-list">
                <div class="rounded-2xl w-36 md:w-64 lg:w-96 text-center px-3 py-2 shadow-md bg-blue-500 mx-2 font-bold text-white text-lg">Waiting</div>
            </a>
            <a href="{{route('pelayan.done')}}">
                <div class="rounded-2xl bg-white w-36 md:w-64 lg:w-96 px-3 py-2 text-center shadow-md hover:bg-green-500 outline outline-2 outline-green-500 mx-2 font-bold text-green-500 hover:text-white text-lg">Done</div>
            </a>
        </div>
            <div class="mt-10 w-full container gap-6 flex flex-wrap mr-0">
                {{-- card --}}
                @foreach($ordersWithDetails  as $order)
                @php
                    $allCompleted = true;
                    $cookingInProgress = false;
                    $readyToCook = false;
                @endphp
                    @foreach($order['order']->detailorder as $detail)
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
                    @if($readyToCook)
                @if($order['order']->tipe_order === 'Makan di Tempat' || $order['order']->tipe_order === 'Bawa Pulang')
                <div class="rounded-xl shadow-lg mb-7 bg-white w-full md:w-80 lg:w-96 h-fit">
                    @if($order['order']->tipe_order === 'Makan di Tempat')
                        <div class="h-5 w-full bg-[#00F0FF] text-white font-bold text-sm rounded-t-xl px-2">
                            Makan di tempat
                        </div>
                        @elseif($order['order']->tipe_order === 'Bawa Pulang')
                        <div class="h-5 w-full bg-[#FF9900] text-white font-bold text-sm rounded-t-xl px-2">
                            Bawa pulang
                        </div>
                    @elseif($order['order']->tipe_order === 'Reservasi')
                        <div class="h-5 w-full bg-slate-300 text-white font-bold text-sm rounded-t-xl px-2">
                            Reservasi
                        </div>
                    
                    @endif
                    <div class="px-2 py-2 flex justify-between">
                        <div>
                            <div class="flex py-1 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="size-8">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7C16 8.06087 15.5786 9.07828 14.8284 9.82843C14.0783 10.5786 13.0609 11 12 11C10.9391 11 9.92172 10.5786 9.17157 9.82843C8.42143 9.07828 8 8.06087 8 7ZM8 13C6.67392 13 5.40215 13.5268 4.46447 14.4645C3.52678 15.4021 3 16.6739 3 18C3 18.7956 3.31607 19.5587 3.87868 20.1213C4.44129 20.6839 5.20435 21 6 21H18C18.7956 21 19.5587 20.6839 20.1213 20.1213C20.6839 19.5587 21 18.7956 21 18C21 16.6739 20.4732 15.4021 19.5355 14.4645C18.5979 13.5268 17.3261 13 16 13H8Z" fill="black"/>
                                </svg>
                                <p class="text-lg ml-2">{{$order['order']->nama_pelanggan}}</p>
                            </div>
                            <div class="flex py-1 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.586 4.586C5 5.172 5 6.114 5 8V17C5 18.886 5 19.828 5.586 20.414C6.172 21 7.114 21 9 21H15C16.886 21 17.828 21 18.414 20.414C19 19.828 19 18.886 19 17V8C19 6.114 19 5.172 18.414 4.586C17.828 4 16.886 4 15 4H9C7.114 4 6.172 4 5.586 4.586ZM9 8C8.73478 8 8.48043 8.10536 8.29289 8.29289C8.10536 8.48043 8 8.73478 8 9C8 9.26522 8.10536 9.51957 8.29289 9.70711C8.48043 9.89464 8.73478 10 9 10H15C15.2652 10 15.5196 9.89464 15.7071 9.70711C15.8946 9.51957 16 9.26522 16 9C16 8.73478 15.8946 8.48043 15.7071 8.29289C15.5196 8.10536 15.2652 8 15 8H9ZM9 12C8.73478 12 8.48043 12.1054 8.29289 12.2929C8.10536 12.4804 8 12.7348 8 13C8 13.2652 8.10536 13.5196 8.29289 13.7071C8.48043 13.8946 8.73478 14 9 14H15C15.2652 14 15.5196 13.8946 15.7071 13.7071C15.8946 13.5196 16 13.2652 16 13C16 12.7348 15.8946 12.4804 15.7071 12.2929C15.5196 12.1054 15.2652 12 15 12H9ZM9 16C8.73478 16 8.48043 16.1054 8.29289 16.2929C8.10536 16.4804 8 16.7348 8 17C8 17.2652 8.10536 17.5196 8.29289 17.7071C8.48043 17.8946 8.73478 18 9 18H13C13.2652 18 13.5196 17.8946 13.7071 17.7071C13.8946 17.5196 14 17.2652 14 17C14 16.7348 13.8946 16.4804 13.7071 16.2929C13.5196 16.1054 13.2652 16 13 16H9Z" fill="black"/>
                                </svg>
                                <p class="text-lg ml-2">{{$order['order']->id_order}}</p>
                            </div>
                            {{-- menu scroll --}}
                            @php
                                $menuCount = $order['order']->detailorder->count();
                            @endphp
                            <div class="{{ $menuCount > 5 ? 'overflow-y-scroll h-52' : '' }}">
                                @foreach($order['order']->detailorder as $menus)
                                <h1 class="py-1 px-2 text-black font-bold text-xl tracking-wide"> {{$menus->jumlah}}x {{$menus->menu->nama_menu}}</h1>
                                @endforeach
                            </div>
                            {{-- end menu scroll --}}
                            <button data-modal-target="default-modal" data-modal-toggle="default-modal" data-order-id="{{ $order['order']->id_order }}" type="button" class="details-button">
                                <div class="flex items-center">
                                    <h1 class="py-1 pl-2 pr-1 text-[#55C2FF] text-lg cursor-pointer" id="openModal">Details</h1>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 17 17" fill="none" >
                                        <path d="M9.07692 1L16 8.03125L9.07692 15.0625M15.0385 8.03125L1 8.03125" stroke="#55C2FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </button>
                            {{-- Main modal --}}
                            <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-3xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative dark:bg-white rounded-lg shadow">
                                        {{-- Modal Header --}}
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-2xl font-bold dark:text-gray-900 ">
                                                Detail Pesanan
                                            </h3>
                                            <button type="button" class="dark:text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
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
                            
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 24 24" fill="none" class="size-18">
                                <path d="M22 7.5C22 5.57 17.52 4 12 4C6.48 4 2 5.57 2 7.5C2 9.31 5.95 10.81 11 10.98V15H9.35C8.53 15 7.8 15.5 7.49 16.26L6 20H8L9.2 17H14.8L16 20H18L16.5 16.26C16.2 15.5 15.46 15 14.65 15H13V10.98C18.05 10.81 22 9.31 22 7.5ZM12 6C16.05 6 18.74 6.86 19.72 7.5C18.74 8.14 16.05 9 12 9C7.95 9 5.26 8.14 4.28 7.5C5.26 6.86 7.95 6 12 6Z" fill="black"/>
                            </svg>
                            <p class="text-3xl ml-2">{{$order['order']->id_meja}}</p>
                        </div>
                    </div>
                    {{-- Button selesai --}}
                    <div  class="w-full flex justify-center px-10 py-2">
                        <button id="availableModalBtn" class=" bg-green-500 p-2 rounded-lg w-full hover:bg-green-800 flex items-center justify-center edit-button" data-id-meja="{{$order['order']->id_meja}}" data-id-order="{{$order['order']->id_order}}">
                            <h1  class="text-white font-bold text-lg">Pesanan Selesai</h1>
                        </button>
                    </div>
                    {{-- end button selesai --}}
                </div>
                <div id="confirm-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex items-center justify-center modal">
                    <div class="fixed inset-0 bg-black bg-opacity-50"></div>
                    <div class="relative bg-white rounded-lg shadow-lg p-6 w-1/3">
                        <!-- Modal header -->
                        <form id="updateForm" action="{{ route('pelayan.update', ['id_order' => ':id_order']) }}" method="POST">
                            @csrf 
                            @method('PUT')
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-2xl font-bold">Konfirmasi</h2>
                            <button id="closeConfirmModalBtn" class="text-gray-500 hover:text-gray-800 focus:outline-none" data-modal-hide="confirm-modal">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="space-y-4">
                            <p>Apakah Anda yakin ingin menyimpan perubahan?</p>
                            <div class="flex justify-center mt-6">
                                <button type="submit" id="confirmSaveBtn" class="bg-yellow-400 text-white px-4 py-2 rounded-3xl mr-2" data-modal-confirm-save="confirm-modal">Ya</button>
                                <button type="button" id="cancelConfirmBtn" class="bg-red-500 text-white px-4 py-2 rounded-3xl" data-modal-confirm-cancel="confirm-modal">Tidak</button>
                            </div> 
                        </div>
                        </form>
                    </div>
                </div>
                @endif
                @endif
                @endforeach
                {{-- end card --}}

                {{-- card --}}
                
                {{-- end card --}}


                
                {{-- end card --}}
            </div>
    </div>

</div>    

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var confirmModal = document.getElementById('confirm-modal');
        var closeConfirmModalBtn = document.getElementById('closeConfirmModalBtn');
        var confirmSaveBtn = document.getElementById('confirmSaveBtn');
        var cancelConfirmBtn = document.getElementById('cancelConfirmBtn');
        const updateForm = document.getElementById('updateForm');

        // Fungsi untuk membuka modal
        function openModal(modal) {
            modal.classList.remove('hidden');
        }

        // Fungsi untuk menutup modal
        function closeModal(modal) {
            modal.classList.add('hidden');
        }

        // Event listener untuk tombol close modal
        closeConfirmModalBtn.addEventListener('click', function(event) {
            event.preventDefault();
            closeModal(confirmModal);
        });

        // Event listener untuk tombol "Tidak"
        cancelConfirmBtn.addEventListener('click', function(event) {
            event.preventDefault();
            closeModal(confirmModal);
        });

        // Loop through all edit buttons
        document.querySelectorAll('.edit-button').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                openModal(confirmModal);
                var meja = this.getAttribute('data-id-meja');
                var order = this.getAttribute('data-id-order');

                // Event listener untuk tombol "Ya"
                var action = '{{ route('pelayan.update', ['id_order' => ':id_order']) }}';
                action = action.replace(':id_order', order);
                updateForm.setAttribute('action', action); // Ensure the event listener runs only once
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
    $('.details-button').on('click', function() {
        var orderId = $(this).data('order-id');

        $.ajax({
            url: '/orders/' + orderId, // Ganti dengan endpoint yang sesuai
            type: 'GET',
            success: function(response) {

                console.log(response)
                // Asumsikan responsenya adalah object dengan struktur data yang diperlukan
                var modalBody = `
                <div class="w-full">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="size-8">
                            <path d="M11.99 2C6.47 2 2 6.48 2 12C2 17.52 6.47 22 11.99 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 11.99 2ZM15.29 16.71L11 12.41V7H13V11.59L16.71 15.3L15.29 16.71Z" fill="black"/>
                        </svg>
                        <p class="text-lg ml-3">Waktu order : ${response.waktu_order}</p>
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
                                                    <p class="text-lg ml-3">${response.jlh_org} Orang</p>
                                                </div>
                                                <div class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="size-8">
                                                        <path d="M22 7.5C22 5.57 17.52 4 12 4C6.48 4 2 5.57 2 7.5C2 9.31 5.95 10.81 11 10.98V15H9.35C8.53 15 7.8 15.5 7.49 16.26L6 20H8L9.2 17H14.8L16 20H18L16.5 16.26C16.2 15.5 15.46 15 14.65 15H13V10.98C18.05 10.81 22 9.31 22 7.5ZM12 6C16.05 6 18.74 6.86 19.72 7.5C18.74 8.14 16.05 9 12 9C7.95 9 5.26 8.14 4.28 7.5C5.26 6.86 7.95 6 12 6Z" fill="black"/>
                                                    </svg>
                                                    <p class="text-lg ml-3">${response.id_meja}</p>
                                                </div>
                                                <h1 class=" px-2 text-slate-400 text-lg tracking-wide">${response.jlh_menu} item(s)</h1>
                                                <div class="w-20 text-center bg-blue-500 text-white rounded-full p-2 tracking-wide my-2 font-semibold">Waiting</div>
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
                                <div class="text-center w-fit p-1 px-2 bg-green-300 rounded-full">${details.progress}</div>
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