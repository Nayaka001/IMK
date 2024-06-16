@extends('layouts.main-admin')

@section('content')

<div class="w-full px-6 py-6 mx-auto">
        <!-- table 1 -->
        <div class="flex flex-wrap -mx-3">
              <div class="flex-none w-full max-w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-[#e8eddf] border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                  <div class="p-6 pb-0 mb-0 bg-[#e8eddf] border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6 class="font-semibold text-lg">Data Meja</h6>
                    <div class="flex-none w-full max-w-full mb-2 px-6 justify-end text-right">
                        <a id="tambahMejaBtn" class="inline-block px-3 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"><i class="fas fa-plus"> </i></i>&nbsp;&nbsp;Tambah Data</a>
                    </div>
                  </div>
                  <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                      <table class="items-center w-full mb-6 align-top border-gray-800 text-slate-500">
                        <thead class="align-bottom">
                          <tr>
                            <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">No</th>
                            <!-- <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Tanggal</th> -->
                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Nama Meja</th>
                            <th class="px-6 py-3 font-semibold text-right capitalize align-middle bg-transparent border-b border-gray-500 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                            <!-- <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Jenis</th> -->
                          </tr>
                        </thead>
                        <tbody>
                          @php
                             $total = 1 
                          @endphp
                          @foreach($meja as $mejas)
                          <tr>
                            <td class="px-6 py-3 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                              <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                              <p class="mb-0 text-sm leading-tight text-slate-600">{{$total}}</p>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                              <p class="mb-0 text-sm leading-tight">{{$mejas->id_meja}}</p>
                              <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                            </td>
                            <td class="p-2 align-middle text-center bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                            <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text delete-button" data-id-meja="{{$mejas->id_meja}}"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>

                            <a id="editMejaBtn" class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700 edit-button" data-id-meja="{{$mejas->id_meja}}"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>

                            
                          <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
                        </td>
                          </tr>
                          @php
                           $total++
                          @endphp                         
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>


    <!-- Tambah Meja Modal -->
<div id="tambahMejaModal" class="modal flex">
    <!-- Modal content -->
    <div class="modal-content relative z-10 w-full max-w-xl mx-auto"> <!-- Adjusted width to max-w-6xl -->
                        <span class="close absolute top-4 right-4">&times;</span>
                        <div class="flex-auto p-6">
                        <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                            <h5 class="font-semibold text-lg"><i class="fa fa-utensils mr-2"> </i>Tambah Meja</h5>
                            <div class="w-full mt-2 p-1 mb-2 h-2 bg-slate-700 rounded"></div>
                        </div>
                        <form id="tambahMejaForm" action="{{route('tambah.meja')}}" method="POST" class="p-6">
                            @csrf
                            <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
                            <div class="w-full px-2 ">
                                <div class="mb-4">
                                <label class="block font-normal" for="nama">Nama meja</label>
                                <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan Nama Meja" id="nama" name="meja">
                                <input type="hidden" value="Tersedia" name="status">
                                </div>
                            </div>
                            </div>
                            <div class="text-center">
                            <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Tambah Meja</button>
                            </div>
                        </form>
                        </div>
                    </div>                          
</div>
@if(session('tambah'))
<div id="toast" role="alert" class="fixed top-5 right-14 rounded-2xl border border-gray-100 bg-white p-6 shadow-xl dark:border-gray-800 dark:bg-gray-900 transition duration-700 hidden"> 
    <div class="flex items-start gap-4">
        <span class="text-emerald-600" style="color: green;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </span>
        <div class="flex-1">
            <div class="text-center bg-white border-b-0 rounded-t-2xl" style="color: green;">
                <strong class="block font-medium text-gray-900 dark:text-white">Tambah Meja Berhasil!</strong>
                <!-- <div class="w-full mt-2 h-1 bg-slate-700 rounded"></div> -->
            </div>
            <p class="mt-1 text-sm text-gray-700 dark:text-gray-200" style="color: green;">{{ session('tambah') }}</p>
        </div>
        {{-- <button class="absolute top-4 right-4 text-gray-500 transition hover:text-gray-600 dark:text-gray-400 dark:hover:text-gray-500" onclick="dismissToast()">
            <span class="sr-only">Dismiss popup</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button> --}}
    </div>
</div>
@endif
@if(session('delete'))
<div id="toast" role="alert" class="fixed top-5 right-14 rounded-2xl border border-gray-100 bg-white p-6 shadow-xl dark:border-gray-800 dark:bg-gray-900 transition duration-700 hidden"> 
    <div class="flex items-start gap-4">
        <span class="text-emerald-600" style="color: green;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </span>
        <div class="flex-1">
            <div class="text-center bg-white border-b-0 rounded-t-2xl" style="color: green;">
                <strong class="block font-medium text-gray-900 dark:text-white">Delete Berhasil!</strong>
                <!-- <div class="w-full mt-2 h-1 bg-slate-700 rounded"></div> -->
            </div>
            <p class="mt-1 text-sm text-gray-700 dark:text-gray-200" style="color: green;">{{ session('delete') }}</p>
        </div>
        {{-- <button class="absolute top-4 right-4 text-gray-500 transition hover:text-gray-600 dark:text-gray-400 dark:hover:text-gray-500" onclick="dismissToast()">
            <span class="sr-only">Dismiss popup</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button> --}}
    </div>
</div>
@endif
@if(session('edit'))
<div id="toast" role="alert" class="fixed top-5 right-14 rounded-2xl border border-gray-100 bg-white p-6 shadow-xl dark:border-gray-800 dark:bg-gray-900 transition duration-700 hidden"> 
    <div class="flex items-start gap-4">
        <span class="text-emerald-600" style="color: green;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </span>
        <div class="flex-1">
            <div class="text-center bg-white border-b-0 rounded-t-2xl" style="color: green;">
                <strong class="block font-medium text-gray-900 dark:text-white">Update Berhasil!</strong>
                <!-- <div class="w-full mt-2 h-1 bg-slate-700 rounded"></div> -->
            </div>
            <p class="mt-1 text-sm text-gray-700 dark:text-gray-200" style="color: green;">{{ session('edit') }}</p>
        </div>
        {{-- <button class="absolute top-4 right-4 text-gray-500 transition hover:text-gray-600 dark:text-gray-400 dark:hover:text-gray-500" onclick="dismissToast()">
            <span class="sr-only">Dismiss popup</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button> --}}
    </div>
</div>
@endif

<!-- Edit Meja Modal -->
<div id="editModal" class="modal flex">
    <!-- Modal content -->
    <div class="modal-content relative z-10 w-full max-w-xl mx-auto"> <!-- Adjusted width to max-w-6xl -->
                        <span class="close absolute top-4 right-4">&times;</span>
                        <div class="flex-auto p-6">
                        <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                            <h5 class="font-semibold text-lg"><i class="fa fa-utensils mr-2"> </i>Edit Meja</h5>
                            <div class="w-full mt-2 p-1 mb-2 h-2 bg-slate-700 rounded"></div>
                        </div>
                        <form id="editForm" action="{{route('update.meja', ['id_meja' => ':id_meja'])}}" method="POST" class="p-6">
                            @method('PUT')
                            @csrf
                            <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
                            <div class="w-full px-2 ">
                                <div class="mb-4">
                                <label class="block font-normal" for="nama">Nama Meja</label>
                                <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan Nama Meja" id="meja" name="meja">
                                </div>
                            </div>
                            </div>
                            <div class="text-center">
                            <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Edit Meja</button>
                            </div>
                        </form>
                        </div>
                    </div>                          
</div>

<!-- Modal HTML -->
<div id="deleteModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span id="deleteModalClose" class="close mr-4 mt-2 top-4 right-4">&times;</span>
        <div class="flex-auto p-6">
            <div class="p-6 mb-0 text-center bg-white rounded-t-2xl">
                <h5><i class="fas fa-trash-alt mr-2 text-xl"></i>Apakah Anda yakin ingin menghapus data meja ini?</h5>
                <div class="w-full mt-2 h-1 bg-slate-700 rounded"></div>
            </div>
            <p class="text-center">Data yang dihapus tidak dapat dikembalikan.</p>
            <div class="flex flex-none md:w-full space-y-4 md:space-y-0 justify-end text-right">
                <div class="flex w-full text-right col-span-2 mx-2 md:ml-auto justify-end">
                    <button id="cancelDelete" class="inline-block w-1/6 px-6 py-3 mr-2 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Batal</button>
                    <form id="deleteForm" action="{{route('delete.meja', ['id_meja' => ':id_meja'])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-block w-1/6 px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Hapus Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Fungsi untuk menampilkan modal konfirmasi
    document.addEventListener('DOMContentLoaded', function() {
      // Ambil elemen-elemen yang dibutuhkan
      var deleteModal = document.getElementById('deleteModal');
      var editModal = document.getElementById('editModal');
      var deleteButtons = document.querySelectorAll('.delete-button');
      var editButtons = document.querySelectorAll('.edit-button');
      var cancelDelete = document.getElementById('cancelDelete');
      var modalClose = deleteModal.getElementsByClassName("close")[0];
      var deleteForm = document.getElementById('deleteForm');
      var updateForm = document.getElementById('editForm');

      function showModal() {
        editModal.style.display = "flex";
    }

    // Fungsi untuk menyembunyikan modal
    // function hideModal() {
    //     deleteModal.style.display = "none";
    // }
    
  
      // Tambahkan event listener untuk tombol close
    //   modalClose.onclick = function() {
    //       hideModal();
    //   };
  
    //   // Tambahkan event listener untuk tombol cancel
    //   cancelDelete.onclick = function() {
    //       hideModal();
    //   };
  
      // Tambahkan event listener untuk klik di luar modal untuk menutup modal
    //   window.addEventListener('click', function(event) {
    //       if (event.target === deleteModal) {
    //           hideModal();
    //       }
    //   });
  
      // Tambahkan event listener untuk semua tombol delete
      deleteButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
          event.preventDefault();
          var id_meja = this.getAttribute('data-id-meja');
          var action = '{{ route('delete.meja', ['id_meja' => ':id_meja']) }}';
          action = action.replace(':id_meja', id_meja);
          deleteForm.setAttribute('action', action);
          
        });
      });
      // editButtons.forEach(function(button) {
      //   button.addEventListener('click', function(event) {
        editButtons.forEach(function(button) {
            button.addEventListener('click', function(event) {
          event.preventDefault();
          var id_meja = this.getAttribute('data-id-meja');
          document.getElementById('meja').value = id_meja;
          var action = '{{ route('update.meja', ['id_meja' => ':id_meja']) }}';
          action = action.replace(':id_meja', id_meja);
          updateForm.setAttribute('action', action);
          showModal();
        });
      });
    });
  </script>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
       // Simulasi login berhasil
       showToast();
   
       function showToast() {
           const toast = document.getElementById('toast');
           toast.classList.add('toast-show');
   
           setTimeout(() => {
               toast.classList.remove('toast-show');
               toast.classList.add('toast-hidden');
           }, 3000);
       }
   
       window.dismissToast = function() {
           const toast = document.getElementById('toast');
           toast.classList.remove('toast-show');
           toast.classList.add('toast-hidden');
       };
   });
   
   </script>
    
<script>
   // Script for "Tambah Menu" modal
   var tambahModal = document.getElementById("tambahMejaModal");
    var tambahBtn = document.getElementById("tambahMejaBtn");
    var tambahClose = tambahModal.getElementsByClassName("close")[0];

    tambahBtn.onclick = function() {
        tambahModal.style.display = "flex";
    };

    tambahClose.onclick = function() {
        tambahModal.style.display = "none";
    };

    var editModal = document.getElementById("editModal");
    // var editBtn = document.getElementById("editMejaBtn");
    var editClose = editModal.getElementsByClassName("close")[0];

    // editBtn.onclick = function() {
    //     editModal.style.display = "flex";
    // };

    editClose.onclick = function() {
        editModal.style.display = "none";
    };


    // Improved event handling for closing the modal when clicking outside
    window.onclick = function(event) {
        if (event.target == tambahModal) {
            tambahModal.style.display = "none";
        }
        if (event.target == editModal) {
            editModal.style.display = "none";
        }
    };
</script>

<script>
  // Fungsi untuk menampilkan modal konfirmasi
  document.addEventListener('DOMContentLoaded', function() {
    // Ambil elemen-elemen yang dibutuhkan
    var deleteModal = document.getElementById('deleteModal');
    var deleteButtons = document.querySelectorAll('.delete-button'); // Corrected selector
    var cancelDelete = document.getElementById('cancelDelete');
    var modalClose = deleteModal.getElementsByClassName("close")[0];
    var deleteForm = document.getElementById('deleteForm');
    
    // Fungsi untuk menampilkan modal
    function showModal() {
        deleteModal.style.display = "flex";
    }

    // Fungsi untuk menyembunyikan modal
    function hideModal() {
        deleteModal.style.display = "none";
    }

    // Tambahkan event listener untuk tombol delete
    deleteButtons.forEach(function(button) {
        button.addEventListener('click', showModal);
    });

    // Tambahkan event listener untuk tombol close
    modalClose.onclick = function() {
        hideModal();
    };

    // Tambahkan event listener untuk tombol cancel
    cancelDelete.onclick = function() {
        hideModal();
    };

    // Tambahkan event listener untuk klik di luar modal untuk menutup modal
    window.addEventListener('click', function(event) {
        if (event.target === deleteModal) {
            hideModal();
        }
    });

  });
</script>
@endsection('content')