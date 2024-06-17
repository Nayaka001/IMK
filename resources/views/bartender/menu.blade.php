@extends('layouts.main')

@section('container')

<div id="alert" class="fixed top-0 right-0 m-4 rounded-xl border border-gray-100 bg-white p-4 z-50 ease-in-out duration-300 transition-opacity hidden" role="alert">
  <div class="flex items-start gap-4">
      <span class="text-green-600">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
      </span>
      <div class="flex-1">
        <strong class="block font-medium text-gray-900"> Berhasil! </strong>
        <p class="mt-1 text-sm text-gray-700">Notification message here</p>
      </div>
  </div>
</div>

<div class=" p-8">
  <div class="w-3/4 flex justify-between gap-6 md:w-5/6 lg:w-full">
      <form action="{{ route('menu.bartender') }}" method="GET" class="w-full">
          <div class="flex items-center">
              <input type="search" placeholder="Search" id="search" name="search" class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 peer" />
              <button class="items-center mx-3 z-0">
                  <ion-icon name="search-outline" size="small"></ion-icon>
              </button>
          </div>
      </form>
      <ion-icon name="person-circle-outline" class="flex items-center text-5xl -ml-7 -mr-3 -mt-1 z-0"></ion-icon>
      <div class="text-center items-center">
          <h1 class="text-sm">{{ auth()->user()->karyawan->nama }}</h1>
          <p class="text-xs text-slate-500">Cashier</p>
      </div>
  </div>

  {{-- kategori --}}
  <div class="w-3/4 flex justify-between my-5 overflow-x-scroll sm:w-4/5 md:w-11/12 lg:w-full lg:overflow-visible">
      <a href="/kitchen-main">
          <div class="rounded-2xl text-white bg-black w-fit px-3 py-2 shadow-md mx-2 font-bold">Utama</div>
      </a>
      <div id="AllLink" class="rounded-2xl bg-[#FFD369] w-fit px-3 py-2 shadow-md mx-2 font-bold">All</div>
              <div id="kidsMealLink" class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Kids Meal</div>
              <div id="sayuranLink" class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Sayuran</div>
              <div id="steakLink" class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Steaks & Hotplates</div>
              <div id="riceLink" class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold ">Rice Hotplate</div>
              <div id="geprekLink" class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Geprek</div>
              <div id="cemilanLink" class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Cemilan</div>
  </div>
  
  <div id="all">
    @foreach($kategori as $kategoris)
    @if($kategoris->jenis === 'Makanan')
        <div class="w-full">
            <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
            <hr class="mt-3 w-full mx-3">
        </div>
        <div class="mt-5 flex flex-wrap sm:justify-start" >
            @foreach($menu as $menus)
            @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80 button-update">
                    <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                    <div class="px-2 py-2">
                        <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                        <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                        <h1 class="font-bold mt-1 text-lg">Rp {{$menus->harga}}</h1>
                        @if($menus->status === 'Tersedia')
                        <div class="w-full flex justify-center px-10 py-2" data-modal-toggle="default-modal">
                            <button class="bg-red-500 p-2 rounded-lg w-full hover:bg-red-800 flex items-center justify-center edit-button"
                                data-id-menu="{{$menus->id_menu}}"
                                data-gambar-menu="{{ asset('img/menu/' . $menus->gambar_menu) }}"
                                data-nama-menu="{{$menus->nama_menu}}">
                                <h1 class="text-white font-bold text-lg">Stok Tersedia</h1>
                            </button>
                        </div>
                        @elseif($menus->status === 'Habis')
                        <div class="w-full flex justify-center px-10 py-2">
                            <button type="button" class="bg-slate-500 p-2 rounded-lg w-full hover:bg-slate-800 flex items-center justify-center">
                                <h1 class="text-white font-bold text-lg">Stok Habis</h1>
                            </button>
                        </div>
                        @endif
                    </div>
                </div>
            @endif
            @endforeach
        </div>
    @endif
    @endforeach
</div>

<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex items-center justify-center modal">
    <div class="fixed inset-0 bg-black bg-opacity-50"></div>
    <div class="relative bg-white rounded-lg shadow-lg p-6 w-1/3">
        <!-- Modal header -->
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-2xl font-bold">Perbarui Menu</h2>
            <button id="closeModalBtn" class="text-gray-500 hover:text-gray-800 focus:outline-none" data-modal-hide="default-modal">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <!-- Modal body -->
        <div class="space-y-4">
            <div class="flex items-start p-4 flex-row gap-3">
                <!-- Image -->
                <div>
                    <img id="modal-image" class="w-10" src="" alt="">
                </div>
                <!-- Menu notes and quantity -->
                <div>
                    <h3 id="modal-title" class="font-bold"></h3>
                </div>
            </div>
            <div class="flex items-start px-4 flex-row">
                <p>Ubah status menu ini menjadi habis?</p>
            </div>
            <div class="flex justify-center mt-6">
                <form id="updateForm" action="{{ route('bartender.updatemenu', ['id_menu' => ':id_menu']) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="Habis">
                    <button type="submit" id="notAvailableModalBtn" class="bg-red-500 text-white px-4 py-2 rounded-3xl" data-modal-save="confirm-modal">Habis</button>
                </form>
            </div>
        </div>
    </div>
</div>

        {{-- <div id="kidsmeal" class="hidden">
          @foreach($kategori as $kategoris)
          @if($kategoris->kategori === 'KIDS MEAL' && $kategoris->jenis === 'Makanan')
            <div class="w-full">
              <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
              <hr class="mt-3 w-full mx-3">
            </div>
            <div class="mt-5 flex flex-wrap sm:justify-start" data-modal-toggle="default-modal">
              @foreach($menu as $menus)
                @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                  <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80 button-update " >
                      <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                      <div class="px-2 py-2">
                        <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                        <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                        
                          <h1 class="font-bold mt-1 text-lg ">Rp {{$menus->harga}}</h1>
                          
                      </div>
                  </div>
                @endif
              @endforeach
            </div>
            @endif
          @endforeach
        </div> --}}
        {{-- <div id="sayuran" class="hidden">
           @foreach($kategori as $kategoris)
          @if($kategoris->kategori === 'SAYURAN' && $kategoris->jenis === 'Makanan')
            <div class="w-full">
              <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
              <hr class="mt-3 w-full mx-3">
            </div>
            <div class="mt-5 flex flex-wrap sm:justify-start" data-modal-toggle="default-modal">
              @foreach($menu as $menus)
                @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                  <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80 button-update">
                      <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                    <div class="px-2 py-2">
                      <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                      <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                      
                        <h1 class="font-bold mt-1 text-lg ">Rp {{$menus->harga}}</h1>
                        
                    </div>
                </div>
              @endif
            @endforeach
          </div>
          @endif
        @endforeach
        </div> --}}
        {{-- <div id="steak" class="hidden">
          @foreach($kategori as $kategoris)
          @if($kategoris->kategori === 'STEAKS & HOTPLATES' && $kategoris->jenis === 'Makanan')
            <div class="w-full">
              <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
              <hr class="mt-3 w-full mx-3">
            </div>
            <div class="mt-5 flex flex-wrap sm:justify-start" data-modal-toggle="default-modal" >
              @foreach($menu as $menus)
                @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                  <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80 button-update">
                      <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                      <div class="px-2 py-2">
                        <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                        <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                        
                        <h1 class="font-bold mt-1 text-lg ">Rp {{$menus->harga}}</h1>
                        
                    </div>
                </div>
              @endif
            @endforeach
          </div>
          @endif
        @endforeach
        </div> --}}
        {{-- <div id="rice" class="hidden">
          @foreach($kategori as $kategoris)
          @if($kategoris->kategori === 'RICE HOTPLATE' && $kategoris->jenis === 'Makanan')
            <div class="w-full">
              <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
              <hr class="mt-3 w-full mx-3">
            </div>
            <div class="mt-5 flex flex-wrap sm:justify-start" data-modal-toggle="default-modal">
              @foreach($menu as $menus)
                @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                  <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80 button-update">
                      <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                      <div class="px-2 py-2">
                        <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                        <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                        
                          <h1 class="font-bold mt-1 text-lg ">Rp {{$menus->harga}}</h1>
                          
                      </div>
                  </div>
                @endif
              @endforeach
            </div>
            @endif
          @endforeach
        </div> --}}
        {{-- <div id="geprek" class="hidden">
          @foreach($kategori as $kategoris)
          @if($kategoris->kategori === 'GEPREK' && $kategoris->jenis === 'Makanan')
            <div class="w-full">
              <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
              <hr class="mt-3 w-full mx-3">
            </div>
            <div class="mt-5 flex flex-wrap sm:justify-start" data-modal-toggle="default-modal">
              @foreach($menu as $menus)
                @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                  <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80 button-update">
                      <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                      <div class="px-2 py-2">
                        <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                        <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                        
                          <h1 class="font-bold mt-1 text-lg ">Rp {{$menus->harga}}</h1>
                          
                      </div>
                  </div>
                @endif
              @endforeach
          </div>
          @endif
        @endforeach
        </div> --}}
        {{-- <div id="cemilan" class="hidden">
        @foreach($kategori as $kategoris)
        @if($kategoris->kategori === 'CEMILAN' && $kategoris->jenis === 'Makanan')
          <div class="w-full">
            <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
            <hr class="mt-3 w-full mx-3">
          </div>
          <div class="mt-5 flex flex-wrap sm:justify-start" data-modal-toggle="default-modal">
            @foreach($menu as $menus)
              @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80 button-update">
                    <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                    <div class="px-2 py-2">
                      <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                      <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>

                        <h1 class="font-bold mt-1 text-lg ">Rp {{$menus->harga}}</h1>

                    </div>
                </div>
              @endif
            @endforeach
          </div>
          @endif
        @endforeach
        </div> --}}

    <!-- Modal -->
        

        
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          var modal = document.getElementById('default-modal');
          var closeModalBtn = document.getElementById('closeModalBtn');
          const updateForm = document.getElementById('updateForm');
          var modalImage = document.getElementById('modal-image');
          var modalTitle = document.getElementById('modal-title');
  
          // Function to open the modal
          function openModal(modal) {
              modal.classList.remove('hidden');
          }
  
          // Function to close the modal
          function closeModal(modal) {
              modal.classList.add('hidden');
          }
  
          // Event listener for close button
          closeModalBtn.addEventListener('click', function(event) {
              event.preventDefault();
              closeModal(modal);
          });
  
          // Loop through all edit buttons
          document.querySelectorAll('.edit-button').forEach(function(button) {
              button.addEventListener('click', function(event) {
                  event.preventDefault();
                  openModal(modal);
  
                  var id_menu = this.getAttribute('data-id-menu');
                  var gambar_menu = this.getAttribute('data-gambar-menu');
                  var nama_menu = this.getAttribute('data-nama-menu');
  
                  // Update the modal content
                  modalImage.src = gambar_menu;
                  modalTitle.textContent = nama_menu;
  
                  // Update the form action
                  var action = updateForm.getAttribute('action').replace(':id_menu', id_menu);
                  updateForm.setAttribute('action', action);
              });
          });
      });
  </script>
  
      
    <script>
        // Mendapatkan elemen yang diperlukan
        const allMenu = document.getElementById('all');
        const kidsMealMenu = document.getElementById('kidsmeal');
        const sayuranMenu = document.getElementById('sayuran');
        const steakMenu = document.getElementById('steak');
        const riceMenu = document.getElementById('rice');
        const geprekMenu = document.getElementById('geprek');
        const cemilanMenu = document.getElementById('cemilan');
        const minumanMenu = document.getElementById('minuman');
    
        // Menyembunyikan elemen #all dan menampilkan elemen #sayuran
        function showAllMenu() {
            allMenu.style.display = 'block';
            kidsMealMenu.style.display = 'none';
            sayuranMenu.style.display = 'none';
            steakMenu.style.display = 'none';
            riceMenu.style.display = 'none';
            geprekMenu.style.display = 'none';
            cemilanMenu.style.display = 'none';
            minumanMenu.style.display = 'none';
        }
        function showKidsMealMenu() {
            allMenu.style.display = 'none';
            kidsMealMenu.style.display = 'block';
            sayuranMenu.style.display = 'none';
            steakMenu.style.display = 'none';
            riceMenu.style.display = 'none';
            geprekMenu.style.display = 'none';
            cemilanMenu.style.display = 'none';
            minumanMenu.style.display = 'none';
        }
        function showSayuranMenu() {
            allMenu.style.display = 'none';
            kidsMealMenu.style.display = 'none';
            sayuranMenu.style.display = 'block';
            steakMenu.style.display = 'none';
            riceMenu.style.display = 'none';
            geprekMenu.style.display = 'none';
            cemilanMenu.style.display = 'none';
            minumanMenu.style.display = 'none';
        }
        function showSteakMenu() {
            allMenu.style.display = 'none';
            kidsMealMenu.style.display = 'none';
            sayuranMenu.style.display = 'none';
            steakMenu.style.display = 'block';
            riceMenu.style.display = 'none';
            geprekMenu.style.display = 'none';
            cemilanMenu.style.display = 'none';
            minumanMenu.style.display = 'none';
        }
        function showRiceMenu() {
            allMenu.style.display = 'none';
            kidsMealMenu.style.display = 'none';
            sayuranMenu.style.display = 'none';
            steakMenu.style.display = 'none';
            riceMenu.style.display = 'block';
            geprekMenu.style.display = 'none';
            cemilanMenu.style.display = 'none';
            minumanMenu.style.display = 'none';
        }
        function showGeprekMenu() {
            allMenu.style.display = 'none';
            kidsMealMenu.style.display = 'none';
            sayuranMenu.style.display = 'none';
            steakMenu.style.display = 'none';
            riceMenu.style.display = 'none';
            geprekMenu.style.display = 'block';
            cemilanMenu.style.display = 'none';
            minumanMenu.style.display = 'none';
        }
        function showCemilanMenu() {
            allMenu.style.display = 'none';
            kidsMealMenu.style.display = 'none';
            sayuranMenu.style.display = 'none';
            steakMenu.style.display = 'none';
            riceMenu.style.display = 'none';
            geprekMenu.style.display = 'none';
            cemilanMenu.style.display = 'block';
            minumanMenu.style.display = 'none';
        }
        function showMinumanMenu() {
            allMenu.style.display = 'none';
            kidsMealMenu.style.display = 'none';
            sayuranMenu.style.display = 'none';
            steakMenu.style.display = 'none';
            riceMenu.style.display = 'none';
            geprekMenu.style.display = 'none';
            cemilanMenu.style.display = 'none';
            minumanMenu.style.display = 'block';
        }

        // Mendengarkan klik pada tautan "Kids Meal"
        document.getElementById('AllLink').addEventListener('click', function(event) {
        event.preventDefault(); // Menghentikan perilaku bawaan dari tautan
        showAllMenu(); // Memanggil fungsi untuk menampilkan menu Kids Meal
        });
        document.getElementById('kidsMealLink').addEventListener('click', function(event) {
        event.preventDefault(); // Menghentikan perilaku bawaan dari tautan
        showKidsMealMenu(); // Memanggil fungsi untuk menampilkan menu Kids Meal
        });
        document.getElementById('sayuranLink').addEventListener('click', function(event) {
        event.preventDefault(); 
        showSayuranMenu(); 
        });
        document.getElementById('steakLink').addEventListener('click', function(event) {
        event.preventDefault(); 
        showSteakMenu(); 
        });
        document.getElementById('riceLink').addEventListener('click', function(event) {
        event.preventDefault(); 
        showRiceMenu(); 
        });
        document.getElementById('geprekLink').addEventListener('click', function(event) {
        event.preventDefault(); 
        showGeprekMenu(); 
        });
        document.getElementById('cemilanLink').addEventListener('click', function(event) {
        event.preventDefault(); 
        showCemilanMenu(); 
        });
        document.getElementById('minumanLink').addEventListener('click', function(event) {
        event.preventDefault(); 
        showMinumanMenu(); 
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

    // Function to set the status message in confirmation modal
    function setStatusMessage(status) {
        const statusChangeElement = document.getElementById('status-change');
        if (statusChangeElement) {
            statusChangeElement.textContent = status;
        }
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
    let selectedStatus = ''; // Variable to store selected status

    const modalSaveButtons = document.querySelectorAll('[data-modal-save]');
    modalSaveButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const status = this.id === 'availableModalBtn' ? 'TERSEDIA' : 'HABIS';
            selectedStatus = status;
            setStatusMessage(status);
            const confirmModalId = this.getAttribute('data-modal-save');
            showModal(confirmModalId);
        });
    });

    // Confirm save button event listener
    const confirmSaveButton = document.getElementById('confirmSaveBtn');
    confirmSaveButton.addEventListener('click', function() {
        alert(`Status menu diubah menjadi ${selectedStatus}!`);
        hideModal('default-modal');
        hideModal('confirm-modal');
    });

    // Cancel confirm modal button event listener
    const modalConfirmCancelButtons = document.querySelectorAll('[data-modal-confirm-cancel]');
    modalConfirmCancelButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const confirmModalId = this.getAttribute('data-modal-confirm-cancel');
            hideModal(confirmModalId);
        });
    });


</script>
    
</div>
</div>
@endsection