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
      <form action="#" method="GET" class="w-full">
          <div class="flex items-center">
              <input type="search" placeholder="Search" id="search" name="search" class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 peer" />
              <button class="items-center mx-3 z-0">
                  <ion-icon name="search-outline" size="small"></ion-icon>
              </button>
          </div>
      </form>
      <ion-icon name="person-circle-outline" class="flex items-center text-5xl -ml-7 -mr-3 -mt-1 z-0"></ion-icon>
      <div class="text-center items-center">
          <h1 class="text-sm">User Name</h1>
          <p class="text-xs text-slate-500">Cashier</p>
      </div>
  </div>
  <div class="w-3/4 flex justify-between my-5 overflow-x-scroll sm:w-4/5 md:w-11/12 lg:w-full lg:overflow-visible">
    <a href="/kitchen-menu">
        <div class="rounded-2xl bg-[#FFD369] w-fit px-3 py-2 shadow-md mx-2 font-bold">All</div>
    </a>
    <a href="/kitchen-menu/kids">
        <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Kids Meal</div>
    </a>
    <a href="/kitchen-menu/sayuran">
        <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Sayuran</div>
    </a>
    <a href="/kitchen-menu/steak">
        <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Steaks & Hotplates</div>
    </a>
    <a href="/kitchen-menu/rice">
        <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Rice Hotplate</div>
    </a>
    <a href="/kitchen-menu/geprek">
        <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Geprek</div>
    </a>
    <a href="/kitchen-menu/cemilan">
        <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Cemilan</div>
    </a>
    <a href="/kitchen-menu/minuman">
        <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Minuman</div>
    </a>
</div>
  <div id="search-results" class="mt-10 w-full mx-auto container gap-6 flex flex-wrap sm:justify-start">
      <h1 class="text-3xl font-bold ml-3 pt-4">Kategori 1</h1>
      <hr class="mt-5 w-full mx-3">
      <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80" data-modal-toggle="default-modal">
          <img src="path/to/image1.jpg" alt="Image Caption" class="w-full h-48 object-cover">
          <div class="px-2 py-2">
            <div class="font-bold text-lg mb-1">Menu Item 1</div>
            <p class="text-xs mb-1 text-gray-600">Description for menu item 1.</p>
            <h1 class="font-bold mt-1 text-lg">Rp 10000</h1>
          </div>
      </div>
  </div>

          <!-- Modal -->
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
                    <!-- Modal content here -->
                    <div class="flex items-start p-4 flex-row gap-3">
                        <!-- Image -->
                        <div>
                            <img class="w-10" src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                        </div>
                        <!-- Menu notes and quantity -->
                        <div>
                            <h3 class="font-bold">Menu 1</h3>
                        </div>
                        <!-- Menu notes and quantity end -->
                    </div>

                    <div class="flex items-start px-4 flex-row">
                    <p> Status ketersediaan menu akan diubah menjadi <span>HABIS</span> </p>
                    </div>

                    <div class="flex justify-center mt-6">
                        <button id="saveModalBtn" class="bg-yellow-400 text-white px-4 py-2 rounded-3xl mr-2"  data-modal-save="confirm-modal">Konfirmasi</button>
                        <button id="cancelModalBtn" class="bg-red-500 text-white px-4 py-2 rounded-3xl" data-modal-cancel="default-modal">Batal</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="confirm-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex items-center justify-center modal">
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
              <div class="space-y-4">
                  <p>Apakah Anda yakin ingin menyimpan perubahan?</p>
                  <div class="flex justify-center mt-6">
                      <button id="confirmSaveBtn" class="bg-yellow-400 text-white px-4 py-2 rounded-3xl mr-2" data-modal-confirm-save="confirm-modal">Yes</button>
                      <button id="cancelConfirmBtn" class="bg-red-500 text-white px-4 py-2 rounded-3xl" data-modal-confirm-cancel="confirm-modal">No</button>
                  </div>
              </div>
          </div>
      </div>
    
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
                const confirmModalId = this.getAttribute('data-modal-save');
                showModal(confirmModalId);
            });
        });
    
        // Confirm save button event listener
        const confirmSaveButton = document.getElementById('confirmSaveBtn');
        confirmSaveButton.addEventListener('click', function() {
            alert('Perubahan disimpan!');
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