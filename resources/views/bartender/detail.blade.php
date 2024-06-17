@extends('layouts.main-bartender')

@section('container')

<div>
    <div class="px-4 pt-8 ">
                    <a href="{{route('index.bartender')}}">
        <button class="text-black hover:text-gray-400 focus:outline-none">
        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
        </a>
        </button>
    </div>

    <div class="m-4 h-screen justify-center gap-5 flex flex-row">

        <!-- kotak 1 -->
        <div class="bg-[#ffffff] rounded-2xl flex flex-col p-6 gap-3 items-start shadow-2xl w-full overflow-auto">
            <div class="flex gap-3">
                <h2 class="font-bold text-2xl">{{$order->id_meja}}</h2> <h2 class="font-bold text-2xl">#{{$order->id_order}}</h2>
            </div>
            <div class="bg-slate-500 py-1 px-3 rounded-3xl">
                <h3 class="font-bold text-white">Sedang dibuat</h3>
            </div>

            <!-- pesanan 1 start -->
            @foreach($details as $detail)
            @if($detail->progress === 'Dimasak' && $detail->menu->ktgmenu->jenis === 'Minuman')
            <div class="w-full">
                <!-- detail pesanan start -->
                <div class="gap-3">
                    <!-- Detail Pesanan Start -->
                    <div class="flex items-start flex-row justify-start gap-3">
                            <!-- gambarnya -->
                            <div>
                                <img class="w-10" src="{{asset('/img/menu/' . $detail->menu->gambar_menu)}}" alt="">
                            </div>

                            <!-- menu notes jumlah -->
                            <div>
                                <h3 class="font-bold">
                                    {{$detail->menu->nama_menu}}
                                </h3>
                                <p class="text-slate-400">
                                    Notes: {{$detail->note ?? 'Tidak ada note'}}
                                </p>
                                
                                <div class="bg-[#FFD369] rounded-xl flex p-1 items-center justify-center">
                                    <p>{{$detail->jumlah}}</p>
                                </div>
                            </div>
                            <!-- menu notes jumlah end -->
                    </div>
                    <!-- Detail Pesanan End -->

                </div>
                <!-- detail pesanan stop -->

                <!-- button perbarui start -->
                <div data-modal-target="default-modal" data-modal-toggle="default-modal" class="items-center mt-3 w-full">
                    <button data-tail-id="{{ $detail->id_order_details }}" data-der-id="{{ $detail->id_order }}" data-detail-id="{{ $detail->menu->nama_menu }}" data-order-id="{{ $detail->note }}" data-order-jumlah="{{ $detail->jumlah }}" gambar="{{ $detail->menu->gambar_menu }}"  type="button" class="openModalBtn w-full items-center justify-center text-white bg-[#FFD369] hover:bg-[#edca69] font-medium rounded-lg text-sm p-2 text-center">Perbarui</button>
                </div>
                <!-- button perbarui end -->
            </div>
            @endif
            @endforeach
            <!-- pesanan 1 end -->

            <!-- pesanan 2 start -->
            <!-- pesanan 2 end -->
        </div>

        <!-- kotak 2 -->
        <div class="bg-[#ffffff] border-12 rounded-2xl flex  flex-col p-6 gap-3 items-start shadow-2xl w-full overflow-auto">
            <div class="flex gap-3">
                <h2 class="font-bold text-2xl">M02</h2> <h2 class="font-bold text-2xl">#003</h2>
            </div>
            <div class="bg-green-600 py-1 px-3 rounded-3xl">
                <h3 class="font-bold text-white">Siap disajikan</h3>
            </div>

            <!-- pesanan 1 start -->
            @foreach($details as $detail)
            @if($detail->progress === 'Siap Disajikan' && $detail->menu->ktgmenu->jenis === 'Minuman' )
            <div class="w-full">
                <!-- detail pesanan start -->
                <div class="gap-3">
                    <!-- Detail Pesanan Start -->
                    <div class="flex items-start flex-row justify-start gap-3">
                            <!-- gambarnya -->
                            <div>
                                <img class="w-10" src="{{asset('/img/menu/' . $detail->menu->gambar_menu)}}" alt="">
                            </div>

                            <!-- menu notes jumlah -->
                            <div>
                                <h3 class="font-bold">
                                    {{$detail->menu->nama_menu}}
                                </h3>
                                <p class="text-slate-400">
                                    Notes: {{$detail->note ?? 'Tidak ada note'}}
                                </p>
                                
                                <div class="bg-[#FFD369] rounded-xl flex p-1 items-center justify-center">
                                    <p>{{$detail->jumlah}}</p>
                                </div>
                            </div>
                            <!-- menu notes jumlah end -->
                    </div>
                    <!-- Detail Pesanan End -->

                </div>
                <!-- detail pesanan stop -->
            </div>
            @endif
            @endforeach
            <!-- pesanan 1 end -->

            <!-- pesanan 2 start -->

            <!-- pesanan 2 end -->
        </div>

        <!-- MODAL START -->
        <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex items-center justify-center modal">
            <div class="fixed inset-0 bg-black bg-opacity-50"></div>
            <div class="relative bg-white rounded-lg shadow-lg p-6 w-1/3">
                <!-- Modal header -->
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-bold">Rincian Menu</h2>
                    <button id="closeModalBtn" class="text-gray-500 hover:text-gray-800 focus:outline-none" data-modal-hide="default-modal">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form id="updateForm" action="{{ route('bartender.update', ['id_order' => ':id_order', 'id_order_details' => ':id_order_details']) }}" method="POST">
                    @csrf
                    @method('PUT')
                <div class="space-y-4">
                    <!-- Modal content here -->
                    <div class="flex items-start p-4 flex-row gap-3">
                        <!-- gambarnya -->
                        <div>
                            <img class="w-10" src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        </div>
                        <!-- menu notes jumlah -->
                        <div>
                            <h3 class="font-bold" id="tittle">Menu</h3>
                            <p class="text-slate-400" id="notes">Note</p>
                        </div>
                        <!-- menu notes jumlah end -->
                    </div>
                    <input type="hidden" id="status" name="progress" value="Siap Disajikan">
                    <div class="flex justify-center mt-6">
                        <button type="submit" id="saveModalBtn"  class="bg-yellow-400 text-white px-4 py-2 rounded-3xl mr-2" data-modal-save="default-modal">Perbarui</button>
                        <button type="button" id="cancelModalBtn" class="bg-red-500 text-white px-4 py-2 rounded-3xl" data-modal-cancel="default-modal">Batal</button>
                    </div>
                </div>
                </form>
        
            </div>
        </div>
        <!-- MODAL END -->

        <!-- Modal Konfirmasi Start -->
        {{-- <div id="confirm-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex items-center justify-center modal">
            <div class="fixed inset-0 bg-black bg-opacity-50"></div>
            <div class="relative bg-white rounded-lg shadow-lg p-6 w-1/3">
                <!-- Modal header -->
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-bold">Konfirmasi</h2>
                    <button id="closeConfirmModalBtn" class="text-gray-500 hover:text-gray-800 focus:outline-none" data-modal-hide="confirm-modal">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                
                <div class="space-y-4" id="menuModal">
                    <p>Apakah Anda yakin ingin menyimpan perubahan?</p>
                    <div class="flex justify-center mt-6">
                        <button type="submit" data-detail-id="{{$detail->id_detail}}" data-order-id="{{$detail->id_order}}"  id="confirmSaveBtn" class="submit-button bg-yellow-400 text-white px-4 py-2 rounded-3xl mr-2" data-modal-confirm-save="confirm-modal">Yes</button>
                    
                        <button  id="cancelConfirmBtn" class="bg-red-500 text-white px-4 py-2 rounded-3xl" data-modal-confirm-cancel="confirm-modal">No</button>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Modal Konfirmasi End -->


    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const openModalButtons = document.querySelectorAll('.openModalBtn');
        const updateButtons = document.querySelectorAll('.submit-button');
        const modal = document.getElementById('menuModal');
        const modalTitle = document.getElementById('tittle');
        const modalNotes = document.getElementById('notes');
        const updateForm = document.getElementById('updateForm');
        const modalQuantityInput = document.getElementById('Quantity');
        // const modalImage = document.getElementById('modalImage');


        openModalButtons.forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                const detailId = this.getAttribute('data-detail-id');
                const orderId = this.getAttribute('data-order-id');
                const order = this.getAttribute('data-der-id');
                const detail = this.getAttribute('data-tail-id');
                const orderjumlah = this.getAttribute('data-order-jumlah');

                // Update konten modal dengan data dari atribut
                modalTitle.textContent = detailId; 
                modalNotes.textContent = orderId ? orderId : 'Tidak ada catatan';  
                var action = '{{ route('bartender.update', ['id_order' => ':id_order', 'id_order_details' => ':id_order_details']) }}';
                action = action.replace(':id_order', order).replace(':id_order_details', detail);
                updateForm.setAttribute('action', action);
                modalQuantityInput.value = orderjumlah;
            });
        });

            
    });
    </script>
    <script>
        // Function to show modal
        function showModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.remove('hidden');
        }

        // Function to hide modal
        function hideModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.add('hidden');
        }

        // Open modal button event listener
        const modalToggleButtons = document.querySelectorAll('[data-modal-toggle]');
        modalToggleButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const modalId = this.getAttribute('data-modal-toggle');
                showModal(modalId);
            });
        });

        // Close modal button event listener
        const modalHideButtons = document.querySelectorAll('[data-modal-hide]');
        modalHideButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const modalId = this.getAttribute('data-modal-hide');
                hideModal(modalId);
            });
        });

        // Close modal when clicking outside modal content
        const modals = document.querySelectorAll('.modal');
        modals.forEach(function(modal) {
            modal.addEventListener('click', function(event) {
                if (event.target === this) {
                    const modalId = this.getAttribute('id');
                    hideModal(modalId);
                }
            });
        });

        // Save modal button event listener
        const modalSaveButtons = document.querySelectorAll('[data-modal-save]');
        modalSaveButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                showModal('confirm-modal');
            });
        });

        // Cancel main modal button event listener
        const modalCancelButtons = document.querySelectorAll('[data-modal-cancel]');
        modalCancelButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const modalId = this.getAttribute('data-modal-cancel');
                hideModal(modalId);
            });
        });

        // Confirm save button event listener
        const confirmSaveButton = document.getElementById('confirmSaveBtn');
        confirmSaveButton.addEventListener('click', function() {
            // alert('Changes saved!');
            hideModal('default-modal');
            hideModal('confirm-modal');
        });

        // Cancel confirm modal button event listener
        const modalConfirmCancelButtons = document.querySelectorAll('[data-modal-confirm-cancel]');
        modalConfirmCancelButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                hideModal('confirm-modal');
            });
        });
    </script>

        
        

    </div>
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

        // Function to show modal
        function showModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.remove('hidden');
        }
    
        // Function to hide modal
        function hideModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.add('hidden');
        }
    
        // Open modal button event listener
        const modalToggleButtons = document.querySelectorAll('[data-modal-toggle]');
        modalToggleButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const modalId = this.getAttribute('data-modal-toggle');
                showModal(modalId);
            });
        });
    
        // Close modal button event listener
        const modalHideButtons = document.querySelectorAll('[data-modal-hide]');
        modalHideButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const modalId = this.getAttribute('data-modal-hide');
                hideModal(modalId);
            });
        });
    
        // Close modal when clicking outside modal content
        const modals = document.querySelectorAll('.modal');
        modals.forEach(function(modal) {
            modal.addEventListener('click', function(event) {
                if (event.target === this) {
                    const modalId = this.getAttribute('id');
                    hideModal(modalId);
                }
            });
        });
    
        // Save modal button event listener
        const modalSaveButtons = document.querySelectorAll('[data-modal-save]');
        modalSaveButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                showModal('confirm-modal');
            });
        });
    
         // Cancel main modal button event listener
         const modalCancelButtons = document.querySelectorAll('[data-modal-cancel]');
        modalCancelButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                const modalId = this.getAttribute('data-modal-cancel');
                hideModal(modalId);
            });
        });
    
        // Confirm save button event listener
        const confirmSaveButton = document.getElementById('confirmSaveBtn');
        confirmSaveButton.addEventListener('click', function() {
            alert('Changes saved!');
            hideModal('default-modal');
            hideModal('confirm-modal');
        });
    
        // Cancel confirm modal button event listener
        const modalConfirmCancelButtons = document.querySelectorAll('[data-modal-confirm-cancel]');
        modalConfirmCancelButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                hideModal('confirm-modal');
            });
        });
});





</script>
@endpush