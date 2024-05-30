@extends('layouts.main-admin')

@section('content')

<div class="w-full px-6 py-6 mx-auto">
        <!-- table 1 -->
        <div class="flex flex-wrap -mx-3">
              <div class="flex-none w-full max-w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-[#e8eddf] border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                  <div class="p-6 pb-0 mb-0 bg-[#e8eddf] border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6>Data Meja</h6>
                    <div class="flex-none w-full max-w-full mb-2 px-6 justify-end text-right">
                        <a class="inline-block px-3 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"><i class="fas fa-plus"> </i></i>&nbsp;&nbsp;Tambah Data</a>
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
                            <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text delete-button"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>

                            <a id="editKaryawanBtn" class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>

                            
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
                        <form id="tambahSubKategoriForm" class="p-6">
                            <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
                            <div class="w-full px-2 ">
                                <div class="mb-4">
                                <label class="block font-normal" for="nama">Nama Sub Kategori</label>
                                <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan Nama Sub Kategori" id="nama" name="nama">
                                </div>
                                <div class="mb-4">
                                <label class="block font-normal" for="sub-kategori">Kategori</label>
                                <select class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="sub-kategori" name="sub-kategori">
                                    <option value="">Pilih Kategori</option>
                                    <option value="Steaks & Hotplates">STEAKS & HOTPLATES</option>
                                    <option value="Rice Hotplate">RICE HOTPLATE</option>
                                    <option value="Geprek">Geprek</option>
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
                            <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Tambah Menu</button>
                            </div>
                        </form>
                        </div>
                    </div>                          
</div>

    
@endsection('content')