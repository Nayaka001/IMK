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
                            <h1 class="font-semibold text-lg"><i class="fa fa-utensils mr-2"> </i>Tambah Menu</h1>
                            <div class="w-full mt-2 p-1 mb-2 h-2 bg-slate-700 rounded"></div>
                        </div>
                        <form id="tambahMenuForm" method="POST" enctype="multipart/form-data" action="{{route('storemenu')}}" class="p-6">
                          @csrf
                            <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
                            <div class="w-full px-2 md:w-1/2">
                                <div class="mb-4">
                                <label class="block font-normal" for="nama">Nama Menu</label>
                                <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan Nama Menu" id="nama" name="nama">
                                </div>
                                <div class="mb-4">
                                <label class="block font-normal" for="harga">Harga</label>
                                <input type="number" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan Harga" id="harga" name="harga">
                                </div>
                                <div class="mb-4">
                                <label class="block font-normal" for="sub-kategori">Sub Kategori</label>
                                <select class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="sub-kategori" name="subkategori">
                                    <option value="">Pilih Sub Kategori</option>
                                    @foreach($kategori as $kategoris)
                                    <option value="{{$kategoris->subkategori}}">{{$kategoris->subkategori}}</option>
                                    
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="w-full px-2 md:w-1/2">
                                <div class="mb-4">
                                <label class="block font-normal" for="keterangan">Keterangan</label>
                                <textarea type="tel" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan keterangan menu" id="keterangan" name="keterangan"></textarea>
                                </div>
                                <div class="mb-4">
                                <label class="block font-normal" for="foto">Foto</label>
                                <input type="file" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="foto" name="foto">
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
                        
                        <!-- The Modal -->
                        <div id="editMenu" class="modal flex">
                          <!-- Modal content -->
                          <div class="modal-content relative z-10 w-full max-w-xl mx-auto" style="max-width: 800px;"> <!-- Adjusted width to max-w-6xl -->
                                              <span class="close absolute top-4 right-4">&times;</span>
                                              <div class="flex-auto p-6">
                                              <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                                                  <h5 class="font-semibold text-lg"><i class="fa fa-utensils mr-2"> </i>Edit Menu</h5>
                                                  <div class="w-full mt-2 p-1 mb-2 h-2 bg-slate-700 rounded"></div>
                                              </div>
                                              <form id="updateForm" action="{{route('updatemenu', ['id_menu' => ':id_menu'])}}" method="POST" class="p-6">
                                                @csrf
                                                @method('PUT')
                                                  <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
                                                  <div class="w-full px-2 md:w-1/2">
                                                      <div class="mb-4">
                                                      <label class="block font-normal" for="nama">Nama Menu</label>
                                                      <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" value="" placeholder="Masukkan Nama Menu" id="namaupdate" name="nama">
                                                      </div>
                                                      <div class="mb-4">
                                                      <label class="block font-normal" for="harga">Harga</label>
                                                      <input type="number" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" value="" placeholder="Masukkan Harga" id="hargaupdate" name="harga">
                                                      </div>
                                                      <div class="mb-4">
                                                      <label class="block font-normal" for="sub-kategori">Sub Kategori</label>
                                                      <select class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="sub-kategori" name="sub-kategori">
                                                          <option value="">Pilih Sub Kategori</option>
                                                          @foreach($kategori as $kategoris)
                                                          <option value="{{$kategoris->subkategori}}">{{$kategoris->subkategori}}</option>
                                                          @endforeach
                                                         
                                                      </select>
                                                      </div>
                                                  </div>
                                                  <div class="w-full px-2 md:w-1/2">
                                                      <div class="mb-4">
                                                      <label class="block font-normal" for="keterangan">Keterangan</label>
                                                      <textarea type="tel" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan keterangan menu" id="keteranganupdate" name="keterangan"></textarea>
                                                      </div>
                                                      <div class="mb-4">
                                                      <label class="block font-normal" for="foto">Foto</label>
                                                      <input type="file" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="foto" name="foto">
                                                      </div>
                                                  </div>
                                                  </div>
                                                  <div class="text-center">
                                                  <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Edit Menu</button>
                                                  </div>
                                              </form>
                                              </div>
                                          </div>                          
                      </div>
<div id="deleteModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span id="deleteModalClose" class="close mr-4 mt-2 top-4 right-4">&times;</span>
        <div class="flex-auto p-6">
            <div class="p-6 mb-0 text-center bg-white rounded-t-2xl">
                <h5><i class="fas fa-trash-alt mr-2 text-xl"></i>Apakah Anda yakin ingin menghapus data menu ini?</h5>
                <div class="w-full mt-2 h-1 bg-slate-700 rounded"></div>
            </div>
            <p class="text-center">Data yang dihapus tidak dapat dikembalikan.</p>
            <div class="flex flex-none md:w-full space-y-4 md:space-y-0 justify-end text-right">
            <div class="flex w-full text-right col-span-2 mx-2 md:ml-auto justify-end">
              <button id="cancelDelete" class="inline-block w-1/6 px-6 py-3 mr-2 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Batal</button>
              <form id="deleteForm" action="{{route('destroymenu', ['id_menu' => ':id_menu'])}}" method="POST">
                        @csrf
                        @method('DELETE')
              <button type="submit" class="inline-block w-1/6 px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Hapus Data</button>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>


                        <!-- <div id="deleteModal" class="hidden fixed inset-0 z-50 overflow-auto bg-gray-500 bg-opacity-50">
                          <div class="flex items-center justify-center min-h-screen">
                              <div class="bg-yellow-200 p-8 rounded shadow-lg">
                                      <p>Apakah Anda yakin ingin menghapus?</p>
                                      <div class="mt-4 flex justify-end">
                                          <button id="cancelDelete" class="px-4 py-2 mr-2 text-gray-600 bg-gray-200 rounded">Batal</button>
                                          <form id="deleteForm" action="" method="POST">
                                             
                                              <button type="submit" class="px-4 py-2 text-white bg-red-600 rounded">Hapus</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div> -->
                          @foreach($menus as $menu)
                        <tr class="custom-rounded">
                            <td class="px-4 py-3 text-slate-800 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5] border-b">{{$menu->id_menu}}</td>
                            <td class="px-4 py-3 text-gray-900 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5] border-b">
                                <div class="flex px-2 py-1">
                                    <div class="mr-4">
                                        <img src="{{ asset('img/menu/' . $menu->gambar_menu) }}" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out custom-size  rounded-xl" alt="user1" />
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <h6 class="mb-1 font-semibold text-normal leading-normal">{{$menu->nama_menu}}</h6>
                                        <p class="mb-1 text-sm leading-tight text-slate-600">{{$menu->keterangan}}</p>
                                        <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm text-slate-800 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5] ">Rp {{$menu->harga}}</td>
                            <td class="px-4 py-3 text-slate-800 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5]">
                                <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">{{$menu->ktgmenu->kategori}}</span>
                            </td>
                            <td class="px-4 py-3 text-sm text-slate-800 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5] ">{{$menu->ktgmenu->subkategori}}</td>
                            <td class="px-4 py-3 text-gray-900 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5]">
                            <a id="editMenuBtn" class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700 edit-button" data-id="{{ $menu->id_menu }}"  data-nama="{{ $menu->nama_menu }}" data-harga="{{ $menu->harga }}" data-subkategori="{{ $menu->ktgmenu->subkategori }}" data-keterangan="{{ $menu->keterangan }}"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                            <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 delete-button to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text delete-button" data-id="{{ $menu->id_menu }}" ><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                                <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
                            </td>
                        </tr>
                        @endforeach      
                    </tbody> 
                    </table>
                    <!-- Modal Konfirmasi Delete -->
                    
   
                </div>
                </div>
            </div>
        </div>
    </div>
</div> 


<div class="flex w-full">

  <div class="flex w-full md:w-1/2">
    <div class="w-full px-6 py-6 mx-auto">
        <!-- table 1 -->
        <div class="flex flex-wrap -mx-3">
              <div class="flex-none w-full max-w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-[#e8eddf] border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                  <div class="p-6 pb-0 mb-0 bg-[#e8eddf] border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6>Data Kategori</h6>
                    <div class="flex-none w-full max-w-full px-6 justify-end text-right">
                        <a id="tambahKategoriBtn" class="inline-block px-3 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"><i class="fas fa-plus"> </i></i>&nbsp;&nbsp;Tambah Kategori</a>
                    </div>
                  </div>
                  <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                      <table class="items-center w-full mb-6 align-top border-gray-800 text-slate-500">
                        <thead class="align-bottom">
                          <tr>
                            <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">No</th>
                            <!-- <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Tanggal</th> -->
                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Kategori</th>
                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Jenis</th>
                          </tr>
                        </thead>
                        <tbody>
                          @php
                              $nomorUrut = 1;
                          @endphp
                          @foreach($kategori->unique('kategori') as $kategoris)
                          <tr>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                              <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                              <p class="mb-0 text-sm leading-tight text-slate-600">{{ $nomorUrut }}</p>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                              <p class="mb-0 text-sm leading-tight">{{$kategoris->kategori}}</p>
                              <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                              <span class="text-sm leading-tight text-slate-600">{{$kategoris->jenis}}</span>
                            </td>
                          </tr>
                          @php
                              $nomorUrut++;
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
  </div>


  <div class="flex w-full md:w-1/2">
    <div class="w-full px-6 py-6 mx-auto">
        <!-- table 1 -->
        <div class="flex flex-wrap -mx-3">
              <div class="flex-none w-full max-w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-[#e8eddf] border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                  <div class="p-6 pb-0 mb-0 bg-[#e8eddf] border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6>Data Sub-Kategori</h6>
                    <div class="flex-none w-full max-w-full px-6 justify-end text-right">
                        <a id="tambahSubKategoriBtn" class="inline-block px-3 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"><i class="fas fa-plus"> </i>&nbsp;&nbsp;Tambah Sub-Kategori</a>
                    </div>
                  </div>
                  <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                      <table class="items-center w-full mb-6 align-top border-gray-800 text-slate-500">
                        <thead class="align-bottom">
                          <tr>
                            <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">No</th>
                            <!-- <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Tanggal</th> -->
                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Sub-Kategori</th>
                            <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Kategori</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($kategori as $kategoris)
                          <tr>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                              <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                              <p class="mb-0 text-sm leading-tight text-slate-600">{{$kategoris->id_ktgmenu}}</p>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                              <p class="mb-0 text-sm leading-tight">{{{$kategoris->subkategori}}}</p>
                              <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                              <span class="text-sm leading-tight text-slate-600">{{$kategoris->kategori}}</span>
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
    </div>
  </div>


</div>







<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>


<!-- Edit Modal -->


<!-- Tambah Kategori Modal -->
<div id="tambahKategoriModal" class="modal flex">
    <!-- Modal content -->
    <div class="modal-content relative z-10 w-full max-w-xl mx-auto"> <!-- Adjusted width to max-w-6xl -->
                        <span class="close absolute top-4 right-4">&times;</span>
                        <div class="flex-auto p-6">
                        <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                            <h5 class="font-semibold text-lg"><i class="fa fa-utensils mr-2"> </i>Tambah Kategori</h5>
                            <div class="w-full mt-2 p-1 mb-2 h-2 bg-slate-700 rounded"></div>
                        </div>
                        <form id="tambahKategoriForm" method="POST" action="{{route('kategori')}}" class="p-6">
                          @csrf
                            <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
                            <div class="w-full px-2 ">
                                <div class="mb-4">
                                <label class="block font-normal" for="nama">Nama Kategori</label>
                                <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan Nama Kategori" id="nama" name="nama">
                                </div>
                                <div class="mb-4">
                                <label class="block font-normal" for="sub-kategori">Jenis</label>
                                <select class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="sub-kategori" name="jenis">
                                    <option value="">Pilih Jenis</option> 
                                    <option value="Makanan">Makanan</option>
                                    <option value="Minuman">Minuman</option>
                                </select>
                                </div>
                            </div>
                            <!-- <div class="w-full px-2 md:w-1/2">
                                <div class="mb-4">
                                <label class="block font-normal" for="keterangan">Keterangan</label>
                                <textarea type="tel" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan keterangan menu" id="keterangan" name="keterangan"></textarea>
                                </div>
                                <div class="mb-4">
                                <label class="block font-normal" for="foto">Foto</label>
                                <input type="file" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="foto" name="foto">
                                </div>
                            </div> -->
                            </div>
                            <div class="text-center">
                            <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Tambah Kategori</button>
                            </div>
                        </form>
                        </div>
                    </div>                          
</div>

<!-- Tambah Sub Kategori Modal -->
<div id="tambahSubKategoriModal" class="modal flex">
    <!-- Modal content -->
    <div class="modal-content relative z-10 w-full max-w-xl mx-auto"> <!-- Adjusted width to max-w-6xl -->
                        <span class="close absolute top-4 right-4">&times;</span>
                        <div class="flex-auto p-6">
                        <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                            <h5 class="font-semibold text-lg"><i class="fa fa-utensils mr-2"> </i>Tambah Sub-Kategori</h5>
                            <div class="w-full mt-2 p-1 mb-2 h-2 bg-slate-700 rounded"></div>
                        </div>
                        <form id="tambahSubKategoriForm" action="{{route('subkategori')}}" method="POST" class="p-6">
                          @csrf
                            <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
                            <div class="w-full px-2 ">
                                <div class="mb-4">
                                <label class="block font-normal" for="nama">Nama Sub Kategori</label>
                                <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan Nama Sub Kategori" id="nama" name="nama">
                                </div>
                                <div class="mb-4">
                                <label class="block font-normal" for="kategori">Kategori</label>
                                <select class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="sub-kategori" name="kategori">
                                    <option value="">Pilih Kategori</option>
                                    @foreach($kategori->unique('kategori') as $kategoris)
                                    <option value="{{$kategoris->kategori}}">{{$kategoris->kategori}}</option>
                                    @endforeach
                                </select>
                                </div>
                                <div class="mb-4">
                                <label class="block font-normal" for="jenis">Jenis</label>
                                <select class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="jenis" name="jenis">
                                    <option value="">Pilih Kategori</option>
                                    @foreach($kategori->unique('jenis') as $kategoris)
                                    <option value="{{$kategoris->jenis}}">{{$kategoris->jenis}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <!-- <div class="w-full px-2 md:w-1/2">
                                <div class="mb-4">
                                <label class="block font-normal" for="keterangan">Keterangan</label>
                                <textarea type="tel" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan keterangan menu" id="keterangan" name="keterangan"></textarea>
                                </div>
                                <div class="mb-4">
                                <label class="block font-normal" for="foto">Foto</label>
                                <input type="file" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="foto" name="foto">
                                </div>
                            </div> -->
                            </div>
                            <div class="text-center">
                            <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Tambah Sub-Kategori</button>
                            </div>
                        </form>
                        </div>
                    </div>                          
</div>
@if(session('notification'))
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
            <p class="mt-1 text-sm text-gray-700 dark:text-gray-200" style="color: green;">{{ session('notification') }}</p>
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
@if(session('sub'))
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
            <p class="mt-1 text-sm text-gray-700 dark:text-gray-200" style="color: green;">{{ session('sub') }}</p>
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
  // Fungsi untuk menampilkan modal konfirmasi
  document.addEventListener('DOMContentLoaded', function() {
    // Ambil elemen-elemen yang dibutuhkan
    var deleteModal = document.getElementById('deleteModal');
    var editModal = document.getElementById('editMenu');
    var deleteButtons = document.querySelectorAll('.delete-button');
    var editButtons = document.querySelectorAll('.edit-button');
    var cancelDelete = document.getElementById('cancelDelete');
    var modalClose = deleteModal.getElementsByClassName("close")[0];
    var deleteForm = document.getElementById('deleteForm');
    var updateForm = document.getElementById('updateForm');
    
    // Fungsi untuk menampilkan modal
    function showModal() {
        deleteModal.style.display = "flex";
    }

    // Fungsi untuk menyembunyikan modal
    function hideModal() {
        deleteModal.style.display = "none";
    }
    function show() {
        editModal.style.display = "flex";
    }

    // Fungsi untuk menyembunyikan modal
    function hide() {
        editModal.style.display = "none";
    }

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

    // Tambahkan event listener untuk semua tombol delete
    deleteButtons.forEach(function(button) {
      button.addEventListener('click', function(event) {
        event.preventDefault();
        var id_menu = this.getAttribute('data-id');
        var action = '{{ route('destroymenu', ['id_menu' => ':id_menu']) }}';
        action = action.replace(':id_menu', id_menu);
        deleteForm.setAttribute('action', action);
        showModal();
      });
    });
    // editButtons.forEach(function(button) {
    //   button.addEventListener('click', function(event) {
      document.querySelectorAll('.edit-button').forEach(function(button) {
        button.addEventListener('click', function() {
        event.preventDefault();
        var id_menu = this.getAttribute('data-id');
        var nama = this.getAttribute('data-nama');
        var harga = this.getAttribute('data-harga');

        var keterangan = this.getAttribute('data-keterangan');

        // Isi nilai input dengan data menu yang diperoleh
        document.getElementById('namaupdate').value = nama;
        document.getElementById('hargaupdate').value = harga;
        document.getElementById('keteranganupdate').value = keterangan;

        var action = '{{ route('updatemenu', ['id_menu' => ':id_menu']) }}';
        action = action.replace(':id_menu', id_menu);
        updateForm.setAttribute('action', action);
        show();
      });
    });
  });
</script>

<!-- <script>
  // Fungsi untuk menampilkan modal konfirmasi
  document.addEventListener('DOMContentLoaded', function() {
    // Ambil elemen-elemen yang dibutuhkan
    var deleteModal = document.getElementById('deleteModal');
    var deleteButtons = document.querySelectorAll('.delete-button');
    var cancelDelete = document.getElementById('cancelDelete');
    var deleteForm = document.getElementById('deleteForm');
    
    // Fungsi untuk menampilkan modal
    function showModal() {
        deleteModal.classList.remove('hidden');
    }

    // Fungsi untuk menyembunyikan modal
    function hideModal() {
        deleteModal.classList.add('hidden');
    }

    // Tambahkan event listener untuk tombol cancel
    cancelDelete.addEventListener('click', function(event) {
        event.preventDefault();
        hideModal();
    });

    // Tambahkan event listener untuk klik di luar modal untuk menutup modal
    window.addEventListener('click', function(event) {
        if (event.target === deleteModal) {
            hideModal();
        }
    });

    // Tambahkan event listener untuk semua tombol delete
    deleteButtons.forEach(function(button) {
    button.addEventListener('click', function(event) {
        event.preventDefault();
        var id_menu = this.getAttribute('data-id');
        var action = '{{ route('destroymenu', ['id_menu' => ':id_menu']) }}';
        action = action.replace(':id_menu', id_menu);
        var form = document.getElementById('deleteForm');
        form.setAttribute('action', action);
        showModal();
    });
});
});

</script> -->


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
    var editModal = document.getElementById("editMenu");
    var editBtn = document.getElementById("editMenuBtn");
    var editClose = editModal.getElementsByClassName("close")[0];

    editBtn.onclick = function() {
        editModal.style.display = "flex";
    };

    editClose.onclick = function() {
        editModal.style.display = "none";
    };

  

    // Script for "Tambah Kategori Modal" modal
    var kategoriModal = document.getElementById("tambahKategoriModal");
    var kategoriBtn = document.getElementById("tambahKategoriBtn");
    var kategoriClose = kategoriModal.getElementsByClassName("close")[0];

    kategoriBtn.onclick = function() {
        kategoriModal.style.display = "flex";
    };

    kategoriClose.onclick = function() {
        kategoriModal.style.display = "none";
    };


    // Script for "Tambah Sub Kategori Modal" modal
    var subkategoriModal = document.getElementById("tambahSubKategoriModal");
    var subkategoriBtn = document.getElementById("tambahSubKategoriBtn");
    var subkategoriClose = subkategoriModal.getElementsByClassName("close")[0];

    subkategoriBtn.onclick = function() {
        subkategoriModal.style.display = "flex";
    };

    subkategoriClose.onclick = function() {
        subkategoriModal.style.display = "none";
    };

    // Improved event handling for closing the modal when clicking outside
    window.onclick = function(event) {
        if (event.target == tambahModal) {
            tambahModal.style.display = "none";
        }
        if (event.target == editModal) {
            editModal.style.display = "none";
        }
        if (event.target == kategoriModal) {
            kategoriModal.style.display = "none";
        }
        if (event.target == subkategoriModal) {
            subkategoriModal.style.display = "none";
        }
    };
</script>


@endsection('content')