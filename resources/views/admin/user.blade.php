@extends('layouts.main-admin')

@section('content')
    @include('layouts.partial.navbar-user')
    
<div class="w-full px-6 py-6 mx-auto">
    <!-- table 1 -->
    <div class="flex flex-wrap -mx-3">
          <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-[#cfdbd5] border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-6 pb-0 mb-0 bg-[#cfdbd5] border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>Data Karyawan</h6>
                <div class="flex-none w-full max-w-full px-6 justify-end text-right">
                    <a id="tambahKaryawanBtn" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"> <i class="fas fa-plus"> </i>&nbsp;&nbsp;Tambah Karyawan</a>
                </div>

                <!-- The Modal -->
<div id="myModal" class="modal flex">

<!-- Modal content -->
<div class="modal-content relative z-10">
  <span class="close absolute top-4 right-4">&times;</span>
  <div class="flex-auto p-6">
    <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
      <h5>Tambah Karyawan</h5>
    </div>
    <form id="tambahKaryawanForm" class="p-6">
        <div class="mb-4">
          <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Nama" id="nama" name="nama">
        </div>
        <div class="mb-4">
          <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Jabatan" id="jabatan" name="jabatan">
        </div>
        <div class="mb-4">
          <input type="email" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Telephone" id="email" name="email">
        </div>
        <div class="text-center">
          <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Submit</button>
        </div>
    </form>
  </div>
</div>
</div>

              </div>
              <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                  <table class="items-center w-full mb-6 align-top border-gray-800 text-slate-500">
                    <thead class="align-bottom">
                      <tr>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Nama</th>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Posisi</th>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Telepon</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Alamat</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Tanggal lahir</th>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Gaji</th>
                        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-500 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="https://source.unsplash.com/800x800" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-1 text-sm leading-normal">Nayaka</h6>
                              <p class="mb-1 text-xs leading-tight text-slate-600">nayaka1810</p>
                              <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                            </div>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">Kasir</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                          <p class="mb-0 text-sm leading-tight text-slate-600">081245678945</p>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-sm leading-tight">Jl. Mawar No. 10, Jakarta</p>
                          <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">18-10-2004</span>
                        </td>
                        <td class="p-2 text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">Rp 2.000.000</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                            <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                            <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                          <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
                        </td>
                      </tr>

                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="https://source.unsplash.com/800x800" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-1 text-sm leading-normal">Nayaka</h6>
                              <p class="mb-1 text-xs leading-tight text-slate-600">nayaka1810</p>
                              <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                            </div>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-red-600 to-pink-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">Kitchen</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                          <p class="mb-0 text-sm leading-tight text-slate-600">081245678945</p>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-sm leading-tight">Jl. Mawar No. 10, Jakarta</p>
                          <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">18-10-2004</span>
                        </td>
                        <td class="p-2 text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">Rp 2.000.000</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                            <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                            <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                          <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
                        </td>
                      </tr>
                      
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="https://source.unsplash.com/800x800" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-1 text-sm leading-normal">Nayaka</h6>
                              <p class="mb-1 text-xs leading-tight text-slate-600">nayaka1810</p>
                              <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                            </div>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-purple-700 to-purple-500 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">Bartender</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                          <p class="mb-0 text-sm leading-tight text-slate-600">081245678945</p>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-sm leading-tight">Jl. Mawar No. 10, Jakarta</p>
                          <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">18-10-2004</span>
                        </td>
                        <td class="p-2 text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">Rp 2.000.000</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                            <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                            <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                          <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
                        </td>
                      </tr>

                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="https://source.unsplash.com/800x800" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-1 text-sm leading-normal">Nayaka</h6>
                              <p class="mb-1 text-xs leading-tight text-slate-600">nayaka1810</p>
                              <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                            </div>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">Pelayan</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                          <p class="mb-0 text-sm leading-tight text-slate-600">081245678945</p>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-sm leading-tight">Jl. Mawar No. 10, Jakarta</p>
                          <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">18-10-2004</span>
                        </td>
                        <td class="p-2 text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">Rp 2.000.000</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                            <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                            <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                          <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
                        </td>
                      </tr>

                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="https://source.unsplash.com/800x800" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-1 text-sm leading-normal">Nayaka</h6>
                              <p class="mb-1 text-xs leading-tight text-slate-600">nayaka1810</p>
                              <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                            </div>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">Kasir</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                          <p class="mb-0 text-sm leading-tight text-slate-600">081245678945</p>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-sm leading-tight">Jl. Mawar No. 10, Jakarta</p>
                          <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">18-10-2004</span>
                        </td>
                        <td class="p-2 text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">Rp 2.000.000</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                            <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                            <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                          <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
                        </td>
                      </tr>

                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="https://source.unsplash.com/800x800" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-1 text-sm leading-normal">Nayaka</h6>
                              <p class="mb-1 text-xs leading-tight text-slate-600">nayaka1810</p>
                              <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                            </div>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">Kasir</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                          <p class="mb-0 text-sm leading-tight text-slate-600">081245678945</p>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-sm leading-tight">Jl. Mawar No. 10, Jakarta</p>
                          <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">18-10-2004</span>
                        </td>
                        <td class="p-2 text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">Rp 2.000.000</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                            <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                            <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                          <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
                        </td>
                      </tr>

                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="https://source.unsplash.com/800x800" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-1 text-sm leading-normal">Nayaka</h6>
                              <p class="mb-1 text-xs leading-tight text-slate-600">nayaka1810</p>
                              <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                            </div>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">Kasir</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                          <p class="mb-0 text-sm leading-tight text-slate-600">081245678945</p>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-sm leading-tight">Jl. Mawar No. 10, Jakarta</p>
                          <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">18-10-2004</span>
                        </td>
                        <td class="p-2 text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">Rp 2.000.000</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                            <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                            <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                          <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
                        </td>
                      </tr>

                      <tr></tr>
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
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("tambahKaryawanBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // Function to add semi-transparent background to sidebar icons
    function addSemiTransparentBackground() {
        var sidebarIcons = document.querySelectorAll('.items-center .shadow-soft-2xl');
        sidebarIcons.forEach(function(icon) {
            icon.classList.add('transparent-bg');
        });
    }

    // Function to remove semi-transparent background from sidebar icons
    function removeSemiTransparentBackground() {
        var sidebarIcons = document.querySelectorAll('.items-center .shadow-soft-2xl');
        sidebarIcons.forEach(function(icon) {
            icon.classList.remove('transparent-bg');
        });
    }

    // When the user clicks the button, open the modal and add the semi-transparent background
    btn.onclick = function() {
      modal.style.display = "flex";
      addSemiTransparentBackground();
    }

    // When the user clicks on <span> (x), close the modal and remove the semi-transparent background
    span.onclick = function() {
      modal.style.display = "none";
      removeSemiTransparentBackground();
    }

    // When the user clicks anywhere outside of the modal, close it and remove the semi-transparent background
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
        removeSemiTransparentBackground();
      }
    }
</script> -->

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("tambahKaryawanBtn");

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
</script>

@endsection('content')