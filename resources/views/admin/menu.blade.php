@extends('layouts.main-admin')

@section('content')

<div class="w-full px-6 py-6 mx-auto">
    <!-- table 1 -->
    <div id="all" class="flex flex-wrap -mx-3">
          <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-[#e8eddf] border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-6 pb-0 mb-0 bg-[#e8eddf] border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>Data Menu</h6>
                <div class="flex-none w-full max-w-full px-6 justify-end text-right">
                    <select class="inline-block px-0.5 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-2 border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-black text-black hover:opacity-75">
                        <option value="option1">Makanan</option>
                        <option value="option2">Minuman</option>
                    </select>
                    <a id="tambahMenuBtn" class="ml-4 inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"> <i class="fas fa-plus"> </i>&nbsp;&nbsp;Tambah Menu</a>

                    <!-- The Modal -->
                    <div id="tambahModal" class="modal flex text-left">
                    <!-- Modal content -->
                    <div class="modal-content relative z-10 w-full max-w-xl mx-auto" style="max-width: 800px;"> <!-- Adjusted width to max-w-6xl -->
                        <span class="close absolute top-4 right-4">&times;</span>
                        <div class="flex-auto p-6">
                        <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                            <h5>Tambah Menu</h5>
                        </div>
                        <form id="tambahMenuForm" class="p-6">
                            <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
                            <div class="w-full px-2 md:w-1/2">
                                <div class="mb-4">
                                <label class="block font-normal" for="nama">Nama Menu</label>
                                <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan Nama Menu" id="nama" name="nama">
                                </div>
                                <div class="mb-4">
                                <label class="block font-normal" for="harga">Harga</label>
                                <input type="number" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan Harga" id="harga" name="harga">
                                </div>
                                <div class="mb-4">
                                <label class="block font-normal" for="jenis-menu">Jenis Menu</label>
                                <select class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="jenis-menu" name="jenis-menu">
                                    <option value="">Pilih Jenis Menu</option>
                                    <option value="Kasir">Makanan</option>
                                    <option value="Bartender">Minuman</option>
                                </select>
                                </div>
                                <div class="mb-4">
                                <label class="block font-normal" for="kategori">Kategori</label>
                                <select class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="kategori" name="kategori">
                                    <option value="">Pilih Kategori</option>
                                    <option value="Kasir">STEAKS & HOTPLATES</option>
                                    <option value="Bartender">RICE HOTPLATE</option>
                                    <option value="Kitchen">GEPREK</option>
                                    <option value="Pelayan">CEMILAN</option>
                                    <option value="Pelayan">SAYURAN</option>
                                    <option value="Pelayan">MINUMAN</option>
                                    <option value="Pelayan">KIDS MEAL</option>
                                </select>
                                </div>
                            </div>
                            <div class="w-full px-2 md:w-1/2">
                                <div class="mb-4">
                                <label class="block font-normal" for="sub-kategori">Sub Kategori</label>
                                <select class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="sub-kategori" name="sub-kategori">
                                    <option value="">Pilih Sub Kategori</option>
                                    <option value="Kasir">Rice Hotplate Sambal Matah/Korek</option>
                                    <option value="Bartender">Nasi Geprek Sambal Matah/Korek</option>
                                    <option value="Kitchen">Varian Geprek + Indomie</option>
                                    <option value="Pelayan">Rice Bowl Sambal Matah/Korek</option>
                                </select>
                                </div>
                                <div class="mb-4">
                                <label class="block font-normal" for="keterangan">Keterangan</label>
                                <textarea type="tel" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan keterangan menu" id="keterangan" name="keterangan"></textarea>
                                </div>
                                <div class="mb-4">
                                <label class="block font-normal" for="foto">Foto</label>
                                <input type="file" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="foto" name="foto">
                                </div>
                            </div>
                            </div>
                            <div class="text-center">
                            <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Tambah Menu</button>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>

                </div>
              </div>
              <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                  <table class="custom-table items-center w-full mb-6 p-4 align-top border-gray-800 text-slate-500">
                    <thead class="align-bottom">
                      <tr>
                        <th class="w-8 px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">No</th>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Nama Menu</th>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Harga</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Kategori</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Sub Kategori</th>
                        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-500 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr class="custom-rounded">
                            <td class="px-4 py-3 text-slate-800 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5] border-b">1</td>
                            <td class="px-4 py-3 text-gray-900 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5] border-b">
                                <div class="flex px-2 py-1">
                                    <div class="mr-4">
                                        <img src="https://source.unsplash.com/800x800" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out custom-size  rounded-xl" alt="user1" />
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <h6 class="mb-1 font-semibold text-normal leading-normal">Chicken Steak Crispy</h6>
                                        <p class="mb-1 text-sm leading-tight text-slate-600">Ayam Fillet Crispy + Sayur + Kentang + Brown Sauce</p>
                                        <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm text-slate-800 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5] ">Rp 10.000</td>
                            <td class="px-4 py-3 text-slate-800 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5]">
                                <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">Steaks & Hotplates</span>
                            </td>
                            <td class="px-4 py-3 text-sm text-slate-800 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5] ">Crispy Steak with Brown Sauce</td>
                            <td class="px-4 py-3 text-gray-900 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5]">
                            <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                                <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                                <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
                            </td>
                        </tr>

                        <tr class="custom-rounded">
                            <td class="px-4 py-3 text-slate-800 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5] border-b">2</td>
                            <td class="px-4 py-3 text-gray-900 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5] border-b">
                                <div class="flex px-2 py-1">
                                    <div class="mr-4">
                                        <img src="https://source.unsplash.com/800x800" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out custom-size  rounded-xl" alt="user1" />
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <h6 class="mb-1 font-semibold text-normal leading-normal">Chicken Steak Crispy</h6>
                                        <p class="mb-1 text-sm leading-tight text-slate-600">Ayam Fillet Crispy + Sayur + Kentang + Brown Sauce</p>
                                        <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm text-slate-800 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5] ">Rp 10.000</td>
                            <td class="px-4 py-3 text-slate-800 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5]">
                                <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">Steaks & Hotplates</span>
                            </td>
                            <td class="px-4 py-3 text-sm text-slate-800 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5] ">Crispy Steak with Brown Sauce</td>
                            <td class="px-4 py-3 text-gray-900 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5]">
                                <a id="editMenuBtn" class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                                <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>

                                
                                <!-- The Modal -->
                            <div id="editModal" class="modal flex">
                              <!-- Modal content -->
                              <div class="modal-content relative z-10">
                                <span class="close absolute top-4 right-4">&times;</span>
                                <div class="flex-auto p-6">
                                  <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                                    <h5>Edit Data Karyawan</h5>
                                  </div>
                                  <form id="editKaryawanForm" class="p-6">
                                      <div class="mb-4">
                                        <label class="block font-normal" for="nama">Nama Lengkap</label>
                                        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Nama Lengkap" id="nama" name="nama">
                                      </div>
                                      <div class="mb-4">
                                        <label class="block font-normal " for="telepon">No Telepon</label>
                                        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Telepon" id="telepon" name="telepon">
                                      </div>
                                      <div class="mb-4">
                                        <label class="block font-normal " for="alamat">Alamat</label>
                                        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Alamat" id="alamat" name="alamat">
                                      </div>
                                      <div class="mb-4">
                                        <label class="block font-normal " for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Tanggal Lahir" id="tanggal_lahir" name="tanggal_lahir">
                                      </div>
                                      <div class="mb-4">
                                        <label class="block font-normal " for="gaji">Gaji</label>
                                        <input type="number" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Gaji" id="gaji" name="gaji">
                                      </div>
                                      <div class="text-center">
                                        <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Edit Data</button>
                                      </div>
                                  </form>
                                </div>
                              </div>
                            </div>


                            </td>
                        </tr>

                        <tr class="custom-rounded">
                            <td class="px-4 py-3 text-slate-800 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5] border-b">3</td>
                            <td class="px-4 py-3 text-gray-900 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5] border-b">
                                <div class="flex px-2 py-1">
                                    <div class="mr-4">
                                        <img src="https://source.unsplash.com/800x800" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out custom-size  rounded-xl" alt="user1" />
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <h6 class="mb-1 font-semibold text-normal leading-normal">Chicken Steak Crispy</h6>
                                        <p class="mb-1 text-sm leading-tight text-slate-600">Ayam Fillet Crispy + Sayur + Kentang + Brown Sauce</p>
                                        <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm text-slate-800 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5] ">Rp 10.000</td>
                            <td class="px-4 py-3 text-slate-800 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5]">
                                <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">Steaks & Hotplates</span>
                            </td>
                            <td class="px-4 py-3 text-sm text-slate-800 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5] ">Crispy Steak with Brown Sauce</td>
                            <td class="px-4 py-3 text-gray-900 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5]">
                            <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                                <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                                <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
                            </td>
                        </tr>

                        
                    </tbody> 
                    </table>   
                </div>
                </div>
            </div>
        </div>
    </div>
</div> 


<!-- <script>
    // Get the modal
    var modal = document.getElementById("tambahModal");

    // Get the button that opens the modal
    var btn = document.getElementById("tambahMenuBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "flex";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
</script> -->


<script>
    // Script for "Tambah Menu" modal
var tambahModal = document.getElementById("tambahModal");
var tambahBtn = document.getElementById("tambahMenuBtn");
var tambahClose = tambahModal.getElementsByClassName("close")[0];

tambahBtn.onclick = function() {
  tambahModal.style.display = "flex";
};

tambahClose.onclick = function() {
  tambahModal.style.display = "none";
};

// Script for "Edit Data Karyawan" modal
var editModal = document.getElementById("editModal");
var editBtn = document.getElementById("editMenuBtn");
var editClose = editModal.getElementsByClassName("close")[0];

editBtn.onclick = function() {
  editModal.style.display = "flex";
};

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

@endsection('content')