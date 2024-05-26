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
                            <!-- <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-500 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-800 opacity-70">Jenis</th> -->
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                              <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                              <p class="mb-0 text-sm leading-tight text-slate-600">1</p>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                              <p class="mb-0 text-sm leading-tight">M01</p>
                              <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                            </td>
                            <!-- <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                              <span class="text-sm leading-tight text-slate-600">Makanan</span>
                            </td> -->
                          </tr>
                          <tr>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                              <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                              <p class="mb-0 text-sm leading-tight text-slate-600">2</p>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                              <p class="mb-0 text-sm leading-tight">M02</p>
                              <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                            </td>
                            <!-- <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                              <span class="text-sm leading-tight text-slate-600">Makanan</span>
                            </td> -->
                          </tr>
                          <tr>
                            <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                              <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                              <p class="mb-0 text-sm leading-tight text-slate-600">3</p>
                            </td>
                            <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                              <p class="mb-0 text-sm leading-tight">M03</p>
                              <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                            </td>
                            <!-- <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                              <span class="text-sm leading-tight text-slate-600">Makanan</span>
                            </td> -->
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    
@endsection('content')