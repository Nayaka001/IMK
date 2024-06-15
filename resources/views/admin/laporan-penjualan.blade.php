@extends('layouts.main-admin')

@section('content')
@include('layouts.partial.navbar-laporan')

<div class="w-full px-6 py-6 mx-auto">
    <!-- table 1 -->
    <div class="flex flex-wrap -mx-3" id="table1">
          <div class="flex-none w-full max-w-full px-3" >
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-[#e8eddf] border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-6 pb-0 mb-0 bg-[#e8eddf] border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6 class="font-semibold text-lg">Laporan Penjualan</h6>
                <div class="flex-none w-full max-w-full px-6 justify-end text-right">
                    <a href="{{ route('cetak-laporan-penjualan') }}" target="_blank" class="inline-block px-3 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"><i class="mr-1 fas fa-file-pdf text-lg"></i>&nbsp;&nbsp;Cetak Laporan</a>
                    <p class="mt-2 font-semibold text-2xl text-slate-800">Total Penjualan : Rp {{ number_format($dapat, 0, ',', '.') }}</p>
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
                        <span id="detailsBtn" class="inline-block p-2 m-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-2 border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-black text-black hover:opacity-75" href="javascript:;">
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
                <h6 class="font-semibold text-lg">Laporan Penjualan</h6>
                <div class="flex-none w-full max-w-full px-6 justify-end text-right">
                    <a class="inline-block px-3 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"><i class="mr-1 fas fa-file-pdf text-lg"></i>&nbsp;&nbsp;Cetak Laporan</a>
                    <p class="mt-2 font-semibold text-2xl text-slate-800">Total Penjualan : Rp {{ number_format($dapatw, 0, ',', '.') }}</p>
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
                        <span id="detailsBtn-minggu" class="inline-block p-2 m-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-2 border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-black text-black hover:opacity-75">
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
                <h6 class="font-semibold text-lg">Laporan Penjualan</h6>
                <div class="flex-none w-full max-w-full px-6 justify-end text-right">
                    <a class="inline-block px-3 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"><i class="mr-1 fas fa-file-pdf text-lg"></i>&nbsp;&nbsp;Cetak Laporan</a>
                    <p class="mt-2 font-semibold text-2xl text-slate-800">Total Penjualan : Rp {{ number_format($dapatm, 0, ',', '.') }}</p>
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
                                      <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">ID Pengeluaran</th>
                                      <!-- <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Tanggal</th> -->
                                      <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Tanggal dan Waktu</th>
                                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Nama Pengeluaran</th>
                                      <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Total Pengeluaran</th>
                                      <!-- <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Total</th> -->
                                      <!-- <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-500 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th> -->
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
                                      <td class="px-6 py-3 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
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
                                      <td class="px-6 py-3 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                                        <span class="text-sm leading-tight text-slate-600">Rp {{ number_format($dailys->total_subtotal, 0, ',', '.')}}</span>
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



<!-- Details Modal -->

<div id="details-modal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close mr-4 mt-2 top-4 right-4">&times;</span>
        <div class="flex-auto p-6">
            <div class="p-3 mb-4 text-left font-bold bg-white rounded-t-2xl">
                <h1 class="text-lg">Detail Pesanan</h1>
                <div class="w-full mt-2 h-1 bg-slate-700 rounded"></div>
            </div>
            <div class="p-3 md:p-5 space-y-1 flex">
            <div class="w-full text-slate-800">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="size-8">
                  <path d="M11.99 2C6.47 2 2 6.48 2 12C2 17.52 6.47 22 11.99 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 11.99 2ZM15.29 16.71L11 12.41V7H13V11.59L16.71 15.3L15.29 16.71Z" fill="black"/>
                </svg>
                <p class="text-2xl ml-4">Waktu order : 2024-06-14 15:38:31</p>
              </div>
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none">
                  <path d="M2 17H22V21H2V17ZM6.25 7H9V6H6V3H14V6H11V7H17.8C18.8 7 19.8 8 20 9L20.5 16H3.5L4.05 9C4.05 8 5.05 7 6.25 7ZM13 9V11H18V9H13ZM6 9V10H8V9H6ZM9 9V10H11V9H9ZM6 11V12H8V11H6ZM9 11V12H11V11H9ZM6 13V14H8V13H6ZM9 13V14H11V13H9ZM7 4V5H13V4H7Z" fill="black"/>
                </svg>
                <p class="text-2xl ml-4">Nayaka </p>
              </div>
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="size-8">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8 7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7C16 8.06087 15.5786 9.07828 14.8284 9.82843C14.0783 10.5786 13.0609 11 12 11C10.9391 11 9.92172 10.5786 9.17157 9.82843C8.42143 9.07828 8 8.06087 8 7ZM8 13C6.67392 13 5.40215 13.5268 4.46447 14.4645C3.52678 15.4021 3 16.6739 3 18C3 18.7956 3.31607 19.5587 3.87868 20.1213C4.44129 20.6839 5.20435 21 6 21H18C18.7956 21 19.5587 20.6839 20.1213 20.1213C20.6839 19.5587 21 18.7956 21 18C21 16.6739 20.4732 15.4021 19.5355 14.4645C18.5979 13.5268 17.3261 13 16 13H8Z" fill="black"/>
                </svg>
                <p class="text-2xl ml-4">Yemima</p>
              </div>
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                  <path d="M5 16.25C6.375 16.25 7.5 15.125 7.5 13.75C7.5 12.375 6.375 11.25 5 11.25C3.625 11.25 2.5 12.375 2.5 13.75C2.5 15.125 3.625 16.25 5 16.25ZM6.4125 17.625C5.95 17.55 5.4875 17.5 5 17.5C3.7625 17.5 2.5875 17.7625 1.525 18.225C0.6 18.625 0 19.525 0 20.5375V22.5H5.625V20.4875C5.625 19.45 5.9125 18.475 6.4125 17.625ZM25 16.25C26.375 16.25 27.5 15.125 27.5 13.75C27.5 12.375 26.375 11.25 25 11.25C23.625 11.25 22.5 12.375 22.5 13.75C22.5 15.125 23.625 16.25 25 16.25ZM30 20.5375C30 19.525 29.4 18.625 28.475 18.225C27.4125 17.7625 26.2375 17.5 25 17.5C24.5125 17.5 24.05 17.55 23.5875 17.625C24.0875 18.475 24.375 19.45 24.375 20.4875V22.5H30V20.5375ZM20.3 17.0625C18.8375 16.4125 17.0375 15.9375 15 15.9375C12.9625 15.9375 11.1625 16.425 9.7 17.0625C8.35 17.6625 7.5 19.0125 7.5 20.4875V22.5H22.5V20.4875C22.5 19.0125 21.65 17.6625 20.3 17.0625ZM10.0875 20C10.2 19.7125 10.25 19.5125 11.225 19.1375C12.4375 18.6625 13.7125 18.4375 15 18.4375C16.2875 18.4375 17.5625 18.6625 18.775 19.1375C19.7375 19.5125 19.7875 19.7125 19.9125 20H10.0875ZM15 10C15.6875 10 16.25 10.5625 16.25 11.25C16.25 11.9375 15.6875 12.5 15 12.5C14.3125 12.5 13.75 11.9375 13.75 11.25C13.75 10.5625 14.3125 10 15 10ZM15 7.5C12.925 7.5 11.25 9.175 11.25 11.25C11.25 13.325 12.925 15 15 15C17.075 15 18.75 13.325 18.75 11.25C18.75 9.175 17.075 7.5 15 7.5Z" fill="black"/>
                </svg>
                <p class="text-2xl ml-4">3 orang</p>
              </div>
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="size-8">
                  <path d="M22 7.5C22 5.57 17.52 4 12 4C6.48 4 2 5.57 2 7.5C2 9.31 5.95 10.81 11 10.98V15H9.35C8.53 15 7.8 15.5 7.49 16.26L6 20H8L9.2 17H14.8L16 20H18L16.5 16.26C16.2 15.5 15.46 15 14.65 15H13V10.98C18.05 10.81 22 9.31 22 7.5ZM12 6C16.05 6 18.74 6.86 19.72 7.5C18.74 8.14 16.05 9 12 9C7.95 9 5.26 8.14 4.28 7.5C5.26 6.86 7.95 6 12 6Z" fill="black"/>
                </svg>
                <p class="text-2xl ml-4">M01</p>
              </div>
              <h1 class="px-2 text-slate-400 text-lg tracking-wide">3 item(s)</h1>
              <div class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">Completed</div>
              <div class="bg-[#FFD369] my-2 w-full sm:w-80 h-fit p-2 rounded-xl mt-5 mr-5">
                <h1 class="font-bold text-lg mb-4">Notes</h1>
                {{-- notes permenu --}}
                <div class="flex flex-col w-full">
                  <li class="flex w-full mb-2">
                    <div class="w-1/2">
                      <p class="font-semibold text-2xl mr-0">Single Chicken Steak</p>    
                    </div>  
                    <div class="w-1/2">
                      <p class="text-2xl mr-0">Tidak ada note</p>    
                    </div>
                  </li>
                  <li class="flex w-full mb-2">
                    <div class="w-1/2">
                      <p class="font-semibold text-2xl mr-0">Double Chicken Steak</p>    
                    </div>  
                    <div class="w-1/2">
                      <p class=" text-2xl mr-0">Tidak ada note</p>    
                    </div>
                  </li>            
                </div>
                {{-- end notes permenu --}}
                </div>
              </div>
              <div class="ml-6 flex-col w-full">
                {{-- menu yang dipesan --}}
                <li class="mb-2 flex my-3">
                  <div class="mr-4">
                    <h1 class="text-2xl font-semibold">1.</h1>
                  </div>
                  <div class="flex w-full justify-between">
                    <div class="ml-3 w-1/2">
                      <h1 class="text-2xl font-semibold">Single Chicken Steak</h1>
                      <div class="w-16 text-center bg-[#FFD369] rounded-full">1</div>
                    </div>
                    <div>
                      <h1 class="text-2xl font-bold">Rp 10.000</h1>
                    </div>
                  </div>
                </li>
                <li class="mb-2 flex my-3">
                  <div class="mr-4">
                    <h1 class="text-2xl font-semibold">2.</h1>
                  </div>
                  <div class="flex w-full justify-between">
                    <div class="ml-3 w-1/2">
                      <h1 class="text-2xl font-semibold">Double Chicken Steak</h1>
                      <div class="w-16 text-center bg-[#FFD369] rounded-full">1</div>
                    </div>
                    <div>
                      <h1 class="text-2xl font-bold">Rp 14.000</h1>
                    </div>
                  </div>
                </li>
                
                <div class="mt-6 flex my-3 justify-between">
                  <div class="mr-4">
                    <h1 class="text-2xl font-semibold">Total</h1>
                  </div>
                  <div>
                      <h1 class="text-2xl font-bold text-right justify-end">Rp 24.000</h1>
                  </div>
                </div>
                {{-- end menu yang dipesan --}}
                                                    
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

<script>
    // Script for "Tambah Menu" modal
    var detailsModal = document.getElementById("details-modal");
    var detailsBtn = document.getElementById("detailsBtn");
    var detailsClose = detailsModal.getElementsByClassName("close")[0];

    detailsBtn.onclick = function() {
        detailsModal.style.display = "flex";
    };

    detailsClose.onclick = function() {
        detailsModal.style.display = "none";
    };

    // Improved event handling for closing the modal when clicking outside
    window.onclick = function(event) {
        if (event.target == detailsModal) {
            detailsModal.style.display = "none";
        }
    };
</script>
@endsection('content')