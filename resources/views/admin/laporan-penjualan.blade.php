@extends('layouts.main-admin')

@section('content')
@include('layouts.partial.navbar-laporan')

<div class="w-full px-6 py-6 mx-auto">
    <!-- table 1 -->
    <div class="flex flex-wrap -mx-3" id="table1">
          <div class="flex-none w-full max-w-full px-3" >
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-[#e8eddf] border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-6 pb-0 mb-0 bg-[#e8eddf] border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>Laporan Penjualan</h6>
                <div class="flex-none w-full max-w-full px-6 justify-end text-right">
                    <a class="inline-block px-3 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"><i class="mr-1 fas fa-file-pdf text-lg"></i>&nbsp;&nbsp;Cetak Laporan</a>
                </div>
              </div>
              <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                  <table class="items-center w-full mb-6 align-top border-gray-800 text-slate-500">
                    <thead class="align-bottom">
                      <tr>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">ID Pesanan</th>
                        <!-- <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Tanggal</th> -->
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Tanggal</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Pembeli</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Kasir</th>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Total</th>
                        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-500 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($laporan as $laporans)
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <!-- <div>
                              <img src="https://source.unsplash.com/800x800" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                            </div> -->
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-1 text-sm leading-normal">{{$laporans->id_order}}</h6>
                              <!-- <p class="mb-1 text-xs leading-tight text-slate-600">nayaka1810</p> -->
                              <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                            </div>
                          </div>
                        </td>
                        <!-- <td class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">Kasir</span>
                        </td> -->
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                          <p class="mb-0 text-sm leading-tight text-slate-600">{{$laporans->waktu_order}}</p>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-sm leading-tight">{{$laporans->nama_pelanggan}}</p>
                          <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">{{$laporans->user->karyawan->nama}}</span>
                        </td>
                        <td class="p-2 text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">Rp {{ number_format($laporans->total_subtotal, 0, ',', '.')}}</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                        <span class="inline-block p-2 m-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-2 border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-black text-black hover:opacity-75">
                        View Details
                        </span>
                            <!-- <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                            <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a> -->
                          <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
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
    <div class=" flex-wrap -mx-3 hidden" id="table2">
          <div class="flex-none w-full max-w-full px-3" >
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-[#e8eddf] border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-6 pb-0 mb-0 bg-[#e8eddf] border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>Laporan Penjualan</h6>
                <div class="flex-none w-full max-w-full px-6 justify-end text-right">
                    <a class="inline-block px-3 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"><i class="mr-1 fas fa-file-pdf text-lg"></i>&nbsp;&nbsp;Cetak Laporan</a>
                </div>
              </div>
              <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                  <table class="items-center w-full mb-6 align-top border-gray-800 text-slate-500">
                    <thead class="align-bottom">
                      <tr>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">ID Pesanan</th>
                        <!-- <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Tanggal</th> -->
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Tanggal</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Pembeli</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Kasir</th>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Total</th>
                        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-500 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($minggu as $laporans)
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <!-- <div>
                              <img src="https://source.unsplash.com/800x800" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                            </div> -->
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-1 text-sm leading-normal">{{$laporans->id_order}}</h6>
                              <!-- <p class="mb-1 text-xs leading-tight text-slate-600">nayaka1810</p> -->
                              <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                            </div>
                          </div>
                        </td>
                        <!-- <td class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">Kasir</span>
                        </td> -->
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                          <p class="mb-0 text-sm leading-tight text-slate-600">{{$laporans->waktu_order}}</p>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-sm leading-tight">{{$laporans->nama_pelanggan}}</p>
                          <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">{{$laporans->user->karyawan->nama}}</span>
                        </td>
                        <td class="p-2 text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">Rp {{ number_format($laporans->total_subtotal, 0, ',', '.')}}</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                        <span class="inline-block p-2 m-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-2 border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-black text-black hover:opacity-75">
                        View Details
                        </span>
                            <!-- <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                            <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a> -->
                          <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
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
    <div class=" flex-wrap -mx-3 hidden" id="table3">
          <div class="flex-none w-full max-w-full px-3" >
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-[#e8eddf] border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-6 pb-0 mb-0 bg-[#e8eddf] border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>Laporan Penjualan</h6>
                <div class="flex-none w-full max-w-full px-6 justify-end text-right">
                    <a class="inline-block px-3 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"><i class="mr-1 fas fa-file-pdf text-lg"></i>&nbsp;&nbsp;Cetak Laporan</a>
                </div>
              </div>
              <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                  <table class="items-center w-full mb-6 align-top border-gray-800 text-slate-500">
                    <thead class="align-bottom">
                      <tr>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">ID Pesanan</th>
                        <!-- <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Tanggal</th> -->
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Tanggal</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Pembeli</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Kasir</th>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Total</th>
                        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-500 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($bulan as $laporans)
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <!-- <div>
                              <img src="https://source.unsplash.com/800x800" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                            </div> -->
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-1 text-sm leading-normal">{{$laporans->id_order}}</h6>
                              <!-- <p class="mb-1 text-xs leading-tight text-slate-600">nayaka1810</p> -->
                              <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                            </div>
                          </div>
                        </td>
                        <!-- <td class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">Kasir</span>
                        </td> -->
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                          <p class="mb-0 text-sm leading-tight text-slate-600">{{$laporans->waktu_order}}</p>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-sm leading-tight">{{$laporans->nama_pelanggan}}</p>
                          <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">{{$laporans->user->karyawan->nama}}</span>
                        </td>
                        <td class="p-2 text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">Rp {{ number_format($laporans->total_subtotal, 0, ',', '.')}}</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                        <span class="inline-block p-2 m-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-2 border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-black text-black hover:opacity-75">
                        View Details
                        </span>
                            <!-- <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                            <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a> -->
                          <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
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
                  
                  <!-- table 2 -->
                  <div id="pengeluaran" class="flex-wrap -mx-3 hidden">
                        <div class="flex-none w-full max-w-full px-3">
                          <div class="relative flex flex-col min-w-0 mb-6 break-words bg-[#e8eddf] border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                            <div class="p-6 pb-0 mb-0 bg-[#e8eddf] border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                              <h6>Laporan Pengeluaran</h6>
                              <div class="flex-none w-full max-w-full px-6 justify-end text-right">
                                  <a class="inline-block px-3 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"><i class="mr-1 fas fa-file-pdf text-lg"> </i>&nbsp;&nbsp;Cetak Laporan</a>
                              </div>
                            </div>
                            <div class="flex-auto px-0 pt-0 pb-2">
                              <div class="p-0 overflow-x-auto">
                                <table class="items-center w-full mb-6 align-top border-gray-800 text-slate-500">
                                  <thead class="align-bottom">
                                    
                                    <tr>
                                      <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">ID Pesanan</th>
                                      <!-- <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Tanggal</th> -->
                                      <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Tanggal</th>
                                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Pembeli</th>
                                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Kasir</th>
                                      <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Total</th>
                                      <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-500 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($daily as $dailys)
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2 py-1">
                                          <!-- <div>
                                            <img src="https://source.unsplash.com/800x800" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                                          </div> -->
                                          <div class="flex flex-col justify-center">
                                            <h6 class="mb-1 text-sm leading-normal">{{$dailys->id_pengeluaran}}</h6>
                                            <!-- <p class="mb-1 text-xs leading-tight text-slate-600">nayaka1810</p> -->
                                            <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                                          </div>
                                        </div>
                                      </td>
                                      <!-- <td class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                        <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">Kasir</span>
                                      </td> -->
                                      <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                        <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                                        <p class="mb-0 text-sm leading-tight text-slate-600">{{$dailys->waktu_pengeluaran}}</p>
                                      </td>
                                      {{-- <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 text-sm leading-tight">Nayaka</p>
                                        <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                                      </td> --}}
                                      <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                        <span class="text-sm leading-tight text-slate-600">Sadtria</span>
                                      </td>
                                      <td class="p-2 text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                        <span class="text-sm leading-tight text-slate-600">Rp {{ number_format($dailys->total_subtotal, 0, ',', '.')}}</span>
                                      </td>
                                      <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                      <span class="inline-block p-2 m-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-2 border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-black text-black hover:opacity-75">
                                      View Details
                                      </span>
                                          <!-- <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                                          <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a> -->
                                        <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
                                      </td>
                                    </tr>

                                  
                                    @endforeach
                                    

                                    

                                    <tr></tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div id="pengeluaran2" class="flex-wrap -mx-3 hidden">
                        <div class="flex-none w-full max-w-full px-3">
                          <div class="relative flex flex-col min-w-0 mb-6 break-words bg-[#e8eddf] border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                            <div class="p-6 pb-0 mb-0 bg-[#e8eddf] border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                              <h6>Laporan Pengeluaran</h6>
                              <div class="flex-none w-full max-w-full px-6 justify-end text-right">
                                  <a class="inline-block px-3 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"><i class="mr-1 fas fa-file-pdf text-lg"> </i>&nbsp;&nbsp;Cetak Laporan</a>
                              </div>
                            </div>
                            <div class="flex-auto px-0 pt-0 pb-2">
                              <div class="p-0 overflow-x-auto">
                                <table class="items-center w-full mb-6 align-top border-gray-800 text-slate-500">
                                  <thead class="align-bottom">
                                    
                                    <tr>
                                      <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">ID Pesanan</th>
                                      <!-- <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Tanggal</th> -->
                                      <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Tanggal</th>
                                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Pembeli</th>
                                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Kasir</th>
                                      <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Total</th>
                                      <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-500 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($weekly as $dailys)
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2 py-1">
                                          <!-- <div>
                                            <img src="https://source.unsplash.com/800x800" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                                          </div> -->
                                          <div class="flex flex-col justify-center">
                                            <h6 class="mb-1 text-sm leading-normal">{{$dailys->id_pengeluaran}}</h6>
                                            <!-- <p class="mb-1 text-xs leading-tight text-slate-600">nayaka1810</p> -->
                                            <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                                          </div>
                                        </div>
                                      </td>
                                      <!-- <td class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                        <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">Kasir</span>
                                      </td> -->
                                      <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                        <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                                        <p class="mb-0 text-sm leading-tight text-slate-600">{{$dailys->waktu_pengeluaran}}</p>
                                      </td>
                                      {{-- <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 text-sm leading-tight">Nayaka</p>
                                        <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                                      </td> --}}
                                      <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                        <span class="text-sm leading-tight text-slate-600">Sadtria</span>
                                      </td>
                                      <td class="p-2 text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                        <span class="text-sm leading-tight text-slate-600">Rp {{ number_format($dailys->total_subtotal, 0, ',', '.')}}</span>
                                      </td>
                                      <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                      <span class="inline-block p-2 m-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-2 border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-black text-black hover:opacity-75">
                                      View Details
                                      </span>
                                          <!-- <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                                          <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a> -->
                                        <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
                                      </td>
                                    </tr>

                                    
                                    @endforeach
                                    

                                    

                                    <tr></tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div id="pengeluaran3" class="flex-wrap -mx-3 hidden">
                        <div class="flex-none w-full max-w-full px-3">
                          <div class="relative flex flex-col min-w-0 mb-6 break-words bg-[#e8eddf] border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                            <div class="p-6 pb-0 mb-0 bg-[#e8eddf] border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                              <h6>Laporan Pengeluaran</h6>
                              <div class="flex-none w-full max-w-full px-6 justify-end text-right">
                                  <a class="inline-block px-3 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"><i class="mr-1 fas fa-file-pdf text-lg"> </i>&nbsp;&nbsp;Cetak Laporan</a>
                              </div>
                            </div>
                            <div class="flex-auto px-0 pt-0 pb-2">
                              <div class="p-0 overflow-x-auto">
                                <table class="items-center w-full mb-6 align-top border-gray-800 text-slate-500">
                                  <thead class="align-bottom">
                                    
                                    <tr>
                                      <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">ID Pesanan</th>
                                      <!-- <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Tanggal</th> -->
                                      <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Tanggal</th>
                                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Pembeli</th>
                                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Kasir</th>
                                      <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Total</th>
                                      <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-500 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($monthly as $dailys)
                                    <tr>
                                      <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2 py-1">
                                          <!-- <div>
                                            <img src="https://source.unsplash.com/800x800" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                                          </div> -->
                                          <div class="flex flex-col justify-center">
                                            <h6 class="mb-1 text-sm leading-normal">{{$dailys->id_pengeluaran}}</h6>
                                            <!-- <p class="mb-1 text-xs leading-tight text-slate-600">nayaka1810</p> -->
                                            <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                                          </div>
                                        </div>
                                      </td>
                                      <!-- <td class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                        <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">Kasir</span>
                                      </td> -->
                                      <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                        <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                                        <p class="mb-0 text-sm leading-tight text-slate-600">{{$dailys->waktu_pengeluaran}}</p>
                                      </td>
                                      {{-- <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 text-sm leading-tight">Nayaka</p>
                                        <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                                      </td> --}}
                                      <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                        <span class="text-sm leading-tight text-slate-600">Sadtria</span>
                                      </td>
                                      <td class="p-2 text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                        <span class="text-sm leading-tight text-slate-600">Rp {{ number_format($dailys->total_subtotal, 0, ',', '.')}}</span>
                                      </td>
                                      <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                      <span class="inline-block p-2 m-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-2 border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-black text-black hover:opacity-75">
                                      View Details
                                      </span>
                                          <!-- <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text" href="javascript:;"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                                          <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700" href="javascript:;"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a> -->
                                        <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
                                      </td>
                                    </tr>


                                    @endforeach
                                    

                                    

                                    <tr></tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  

                
</div>

<script>
  
  
  

  showpenjualan();
  // document.getElementById('linkkitchen').addEventListener('click', function(event) {
  //   event.preventDefault(); 
  //   showkitchen(); 
  // });
  // document.getElementById('linkbartender').addEventListener('click', function(event) {
  //   event.preventDefault(); 
  //   showbartender(); 
  // });
  // document.getElementById('linkkasir').addEventListener('click', function(event) {
  //   event.preventDefault(); 
  //   showkasir(); 
  // });

</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const periodSelect = document.getElementById('periodSelect');
    const table1 = document.getElementById('table1');
    const table2 = document.getElementById('table2');
    const table3 = document.getElementById('table3');
    const keluar1 = document.getElementById('pengeluaran')
    const keluar2 = document.getElementById('pengeluaran2')
    const keluar3 = document.getElementById('pengeluaran3')

    // Setel tabel 1 menjadi tampilan awal
    table1.classList.remove('hidden');

    periodSelect.addEventListener('change', function() {
        const selectedValue = this.value;
        handleTableVisibility(selectedValue);
    });
    function handleTableVisibility(selectedValue) {
    // Sembunyikan semua tabel terlebih dahulu
    table1.classList.add('hidden');
    table2.classList.add('hidden');
    table3.classList.add('hidden');
    keluar1.classList.add('hidden');
    keluar2.classList.add('hidden');
    keluar3.classList.add('hidden');
    
    // Hapus kelas hidden dan tambahkan kelas   flex ke tabel yang sesuai
    if (selectedValue === 'daily') {
        table1.classList.remove('hidden');
        table1.classList.add('flex');
        // keluar1.classList.remove('hidden');
        // keluar1.classList.add('flex');
        
    } else if (selectedValue === 'weekly') {
        table2.classList.remove('hidden');
        table2.classList.add('flex');
    } else if (selectedValue === 'monthly') {
        table3.classList.remove('hidden');
        table3.classList.add('flex');
    }
  }
    document.getElementById('linkpenjualan').addEventListener('click', function(event) {
      event.preventDefault(); 
      
      var selectedValue = document.getElementById('periodSelect').value;
      if (selectedValue === 'daily') {
        table1.classList.remove('hidden');
        table1.classList.add('flex');
        table2.classList.add('hidden');
        table3.classList.add('hidden');
        keluar1.classList.add('hidden');
        keluar2.classList.add('hidden');
        keluar3.classList.add('hidden');
    } else if (selectedValue === 'weekly') {
        table2.classList.remove('hidden');
        table2.classList.add('flex');
        table1.classList.add('hidden');
        table3.classList.add('hidden');
        keluar1.classList.add('hidden');
        keluar2.classList.add('hidden');
        keluar3.classList.add('hidden');
    } else if (selectedValue === 'monthly') {
        table3.classList.remove('hidden');
        table3.classList.add('flex');
        table1.classList.add('hidden');
        table2.classList.add('hidden');
        keluar1.classList.add('hidden');
        keluar2.classList.add('hidden');
        keluar3.classList.add('hidden');
    }
      // document.getElementById('table1').classList.remove('hidden');
      // document.getElementById('pengeluaran').classList.add('hidden');
    });
    document.getElementById('linkpengeluaran').addEventListener('click', function(event) {
      event.preventDefault(); 
      var selectedValue = document.getElementById('periodSelect').value;
      if (selectedValue === 'daily') {
        table1.classList.add('hidden');
        table2.classList.add('hidden');
        table3.classList.add('hidden');
        keluar1.classList.remove('hidden');
        keluar1.classList.add('flex');
        keluar2.classList.add('hidden');
        keluar3.classList.add('hidden');
    } else if (selectedValue === 'weekly') {
        table2.classList.add('hidden');
        table1.classList.add('hidden');
        table3.classList.add('hidden');
        keluar1.classList.add('hidden');
        keluar2.classList.remove('hidden');
        keluar2.classList.add('flex');
        keluar3.classList.add('hidden');
    } else if (selectedValue === 'monthly') {
        table3.classList.add('hidden');
        table1.classList.add('hidden');
        table2.classList.add('hidden');
        keluar1.classList.add('hidden');
        keluar2.classList.add('hidden');
        keluar3.classList.add('flex');
        keluar3.classList.remove('hidden');
    }
    });
  
});


</script>

@endsection('content')