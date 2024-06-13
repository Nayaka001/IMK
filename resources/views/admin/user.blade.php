@extends('layouts.main-admin')

@section('content')
@include('layouts.partial.navbar-user')
    
<div class="w-full px-6 py-6 mx-auto">

  <!-- The Modal -->
<div id="deleteModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span id="deleteModalClose" class="close mr-4 mt-2 top-4 right-4">&times;</span>
        <div class="flex-auto p-6">
            <div class="p-6 mb-0 text-center bg-white rounded-t-2xl">
                <h5><i class="fas fa-trash-alt mr-2 text-xl"></i>Apakah Anda yakin ingin menghapus data ini?</h5>
                <div class="w-full mt-2 h-1 bg-slate-700 rounded"></div>
            </div>
            <p class="text-center">Data yang dihapus tidak dapat dikembalikan.</p>
            <div class="flex flex-none md:w-full space-y-4 md:space-y-0 justify-end text-right">
            <div class="flex w-full text-right col-span-2 mx-2 md:ml-auto justify-end">
              <button id="cancelDelete" class="inline-block w-1/6 px-6 py-3 mr-2 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Batal</button>
              <form id="deleteForm" action="{{route('destroyuser', ['id_user' => ':id_user'])}}" method="POST">
                        @csrf
                        @method('DELETE')
              <button type="submit" class="inline-block w-1/6 px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Hapus Data</button>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>

  
    <!-- table 1 -->
    <div id="all" class="flex flex-wrap -mx-3">
          <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-[#e8eddf] border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-6 pb-0 mb-0 bg-[#e8eddf] border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>Data Karyawan</h6>
                <!-- <div class="flex-none w-full max-w-full px-6 justify-end text-right">
                    <a class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"> <i class="fas fa-plus"> </i>&nbsp;&nbsp;Tambah Karyawan</a>
                </div> -->
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
                      @foreach($karyawan as $karyawans)
                      @if($karyawans->user->level_user != 'Admin')
                      
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div class="">
                              <img src="{{ asset('img/' . $karyawans->foto) }}" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-12 w-12 rounded-xl" alt="user1" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-1 text-sm leading-normal">{{$karyawans->nama}}</h6>
                              <p class="mb-1 text-xs leading-tight text-slate-600">{{$karyawans->user->username}}</p>
                              <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                            </div>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">{{$karyawans->user->level_user}}</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                          <p class="mb-0 text-sm leading-tight text-slate-600">{{$karyawans->no_hp}}</p>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-sm leading-tight">{{$karyawans->alamat}}</p>
                          <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">{{$karyawans->tgl_lahir}}</span>
                        </td>
                        <td class="p-2 text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">Rp {{$karyawans->gaji}}</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                            <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text delete-button" data-id="{{ $karyawans->id_user }}" ><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>

                            <a id="editKaryawanBtn" class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700 update-button" data-id="{{ $karyawans->id_user }}" data-nama="{{ $karyawans->nama }}" data-id="{{ $karyawans->id_user }}" data-nohp="{{ $karyawans->no_hp }}" data-alamat="{{ $karyawans->alamat }}" data-tanggal="{{ $karyawans->tgl_lahir }}" data-gaji="{{ $karyawans->gaji }}"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>

                            
                          <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
                        </td>
                      </tr>
                      @endif
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div id="pelayan" class="hidden flex-wrap -mx-3">
          <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-[#e8eddf] border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-6 pb-0 mb-0 bg-[#e8eddf] border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>Data Pelayan</h6>
                <!-- <div class="flex-none w-full max-w-full px-6 justify-end text-right">
                    <a class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"> <i class="fas fa-plus"> </i>&nbsp;&nbsp;Tambah Karyawan</a>
                </div> -->
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
                      @foreach($karyawan as $karyawans)
                      @if($karyawans->user->level_user == 'Pelayan')
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="https://source.unsplash.com/800x800" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-12 w-12 rounded-xl" alt="user1" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-1 text-sm leading-normal">{{$karyawans->nama}}</h6>
                              <p class="mb-1 text-xs leading-tight text-slate-600">{{$karyawans->user->username}}</p>
                              <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                            </div>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">{{$karyawans->user->level_user}}</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                          <p class="mb-0 text-sm leading-tight text-slate-600">{{$karyawans->no_hp}}</p>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-sm leading-tight">{{$karyawans->alamat}}</p>
                          <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">{{$karyawans->tgl_lahir}}</span>
                        </td>
                        <td class="p-2 text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">Rp {{$karyawans->gaji}}</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                            <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text delete-button" data-id="{{ $karyawans->id_user }}"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                            <a id="tambahKaryawanBtn" class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700 update-button" data-id="{{ $karyawans->id_user }}" data-nama="{{ $karyawans->nama }}" data-id="{{ $karyawans->id_user }}" data-nohp="{{ $karyawans->no_hp }}" data-alamat="{{ $karyawans->alamat }}" data-tanggal="{{ $karyawans->tgl_lahir }}" data-gaji="{{ $karyawans->gaji }}"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                          <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
                        </td>
                      </tr>
                      @endif
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div id="kitchen" class="hidden flex-wrap -mx-3">
          <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-[#e8eddf] border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-6 pb-0 mb-0 bg-[#e8eddf] border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>Data Kitchen</h6>
                <!-- <div class="flex-none w-full max-w-full px-6 justify-end text-right">
                    <a class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"> <i class="fas fa-plus"> </i>&nbsp;&nbsp;Tambah Karyawan</a>
                </div> -->
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
                      @foreach($karyawan as $karyawans)
                      @if($karyawans->user->level_user == 'Kitchen')
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="https://source.unsplash.com/800x800" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-12 w-12 rounded-xl" alt="user1" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-1 text-sm leading-normal">{{$karyawans->nama}}</h6>
                              <p class="mb-1 text-xs leading-tight text-slate-600">{{$karyawans->user->username}}</p>
                              <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                            </div>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">{{$karyawans->user->level_user}}</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                          <p class="mb-0 text-sm leading-tight text-slate-600">{{$karyawans->no_hp}}</p>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-sm leading-tight">{{$karyawans->alamat}}</p>
                          <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">{{$karyawans->tgl_lahir}}</span>
                        </td>
                        <td class="p-2 text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">Rp {{$karyawans->gaji}}</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                            <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text delete-button" data-id="{{ $karyawans->id_user }}"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                            <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700 update-button" data-id="{{ $karyawans->id_user }}" data-nama="{{ $karyawans->nama }}" data-id="{{ $karyawans->id_user }}" data-nohp="{{ $karyawans->no_hp }}" data-alamat="{{ $karyawans->alamat }}" data-tanggal="{{ $karyawans->tgl_lahir }}" data-gaji="{{ $karyawans->gaji }}"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                          <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
                        </td>
                      </tr>
                      @endif
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div id="bartender" class="hidden flex-wrap -mx-3">
          <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-[#e8eddf] border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-6 pb-0 mb-0 bg-[#e8eddf] border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>Data Bartender</h6>
                <!-- <div class="flex-none w-full max-w-full px-6 justify-end text-right">
                    <a class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"> <i class="fas fa-plus"> </i>&nbsp;&nbsp;Tambah Karyawan</a>
                </div> -->
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
                      @foreach($karyawan as $karyawans)
                      @if($karyawans->user->level_user == 'Bartender')
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="https://source.unsplash.com/800x800" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-12 w-12 rounded-xl" alt="user1" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-1 text-sm leading-normal">{{$karyawans->nama}}</h6>
                              <p class="mb-1 text-xs leading-tight text-slate-600">{{$karyawans->user->username}}</p>
                              <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                            </div>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">{{$karyawans->user->level_user}}</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                          <p class="mb-0 text-sm leading-tight text-slate-600">{{$karyawans->no_hp}}</p>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-sm leading-tight">{{$karyawans->alamat}}</p>
                          <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">{{$karyawans->tgl_lahir}}</span>
                        </td>
                        <td class="p-2 text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">Rp {{$karyawans->gaji}}</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                            <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text delete-button" data-id="{{ $karyawans->id_user }}"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                            <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700 update-button" data-id="{{ $karyawans->id_user }}" data-nama="{{ $karyawans->nama }}" data-id="{{ $karyawans->id_user }}" data-nohp="{{ $karyawans->no_hp }}" data-alamat="{{ $karyawans->alamat }}" data-tanggal="{{ $karyawans->tgl_lahir }}" data-gaji="{{ $karyawans->gaji }}"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                          <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
                        </td>
                      </tr>
                      @endif
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
    <div id="kasir" class="hidden flex-wrap -mx-3">
          <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-[#e8eddf] border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="p-6 pb-0 mb-0 bg-[#e8eddf] border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                <h6>Data Kasir</h6>
                <!-- <div class="flex-none w-full max-w-full px-6 justify-end text-right">
                    <a class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"> <i class="fas fa-plus"> </i>&nbsp;&nbsp;Tambah Karyawan</a>
                </div> -->
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
                      @foreach($karyawan as $karyawans)
                      @if($karyawans->user->level_user == 'Kasir')
                      <tr>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <div class="flex px-2 py-1">
                            <div>
                              <img src="https://source.unsplash.com/800x800" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-12 w-12 rounded-xl" alt="user1" />
                            </div>
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-1 text-sm leading-normal">{{$karyawans->nama}}</h6>
                              <p class="mb-1 text-xs leading-tight text-slate-600">{{$karyawans->user->username}}</p>
                              <!-- <p class="mb-1 text-xs leading-tight text-slate-600">081278996543</p> -->
                            </div>
                          </div>
                        </td>
                        <td class="p-2 text-sm leading-normal text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-left align-baseline font-bold uppercase leading-none text-white">{{$karyawans->user->level_user}}</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <!-- <p class="mb-0 text-xs font-semibold leading-tight">Jl. Mawar No. 10, Jakarta</p> -->
                          <p class="mb-0 text-sm leading-tight text-slate-600">{{$karyawans->no_hp}}</p>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <p class="mb-0 text-sm leading-tight">{{$karyawans->alamat}}</p>
                          <!-- <p class="mb-0 text-xs leading-tight text-slate-600">18-10-2004</p> -->
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">{{$karyawans->tgl_lahir}}</span>
                        </td>
                        <td class="p-2 text-left align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                          <span class="text-sm leading-tight text-slate-600">Rp {{$karyawans->gaji}}</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b border-gray-500 border-solid whitespace-nowrap shadow-transparent">
                            <a class="relative z-10 inline-block px-4 py-3 mb-0 font-bold text-center text-transparent uppercase align-middle transition-all border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 bg-gradient-to-tl from-red-600 to-rose-400 hover:scale-102 active:opacity-85 bg-x-25 bg-clip-text delete-button" data-id="{{ $karyawans->id_user }}"><i class="mr-2 far fa-trash-alt bg-150 bg-gradient-to-tl from-red-600 to-rose-400 bg-x-25 bg-clip-text"></i>Delete</a>
                            <a class="inline-block px-4 py-3 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in bg-150 hover:scale-102 active:opacity-85 bg-x-25 text-slate-700 update-button" data-id="{{ $karyawans->id_user }}" data-nama="{{ $karyawans->nama }}" data-id="{{ $karyawans->id_user }}" data-nohp="{{ $karyawans->no_hp }}" data-alamat="{{ $karyawans->alamat }}" data-tanggal="{{ $karyawans->tgl_lahir }}" data-gaji="{{ $karyawans->gaji }}"><i class="mr-2 fas fa-pencil-alt text-slate-700" aria-hidden="true"></i>Edit</a>
                          <!-- <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a> -->
                        </td>
                      </tr>
                      @endif
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
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
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script>
  // Fungsi untuk menampilkan modal konfirmasi
  document.addEventListener('DOMContentLoaded', function() {
    // Ambil elemen-elemen yang dibutuhkan
    var deleteModal = document.getElementById('deleteModal');
    var updateModal = document.getElementById('editModal');
    var deleteButtons = document.querySelectorAll('.delete-button');
    var updateButtons = document.querySelectorAll('.update-button');
    var cancelDelete = document.getElementById('cancelDelete');
    var modalClose = deleteModal.getElementsByClassName("close")[0];
    var deleteForm = document.getElementById('deleteForm');
    var updateForm = document.getElementById('updateForm');
    
    // Fungsi untuk menampilkan modal
    function showModal() {
        deleteModal.style.display = "flex";
    }
    function show() {
        updateModal.style.display = "flex";
    }

    // Fungsi untuk menyembunyikan modal
    function hideModal() {
        deleteModal.style.display = "none";
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
        var id_user = this.getAttribute('data-id');
        var action = '{{ route('destroyuser', ['id_user' => ':id_user']) }}';
        action = action.replace(':id_user', id_user);
        deleteForm.setAttribute('action', action);
        showModal();
      });
    });
    document.querySelectorAll('.update-button').forEach(function(button) {
        button.addEventListener('click', function() {
        event.preventDefault();

        var id_user = this.getAttribute('data-id');
        var nama = this.getAttribute('data-nama');
        var hp = this.getAttribute('data-nohp');
        var alamat = this.getAttribute('data-alamat');
        var tanggal = this.getAttribute('data-tanggal');
        var gaji = this.getAttribute('data-gaji');

        document.getElementById('namaupdate').value = nama;
        document.getElementById('hpupdate').value = hp;
        document.getElementById('alamatupdate').value = alamat;
        document.getElementById('tanggalupdate').value = tanggal;
        document.getElementById('gajiupdate').value = gaji;

        var action = '{{ route('updateuser', ['id_user' => ':id_user']) }}';
        action = action.replace(':id_user', id_user);
        updateForm.setAttribute('action', action);
        show();
      });
    });
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', (event) => {
  const all = document.getElementById('all');
  const pelayan = document.getElementById('pelayan');
  const kitchen = document.getElementById('kitchen');
  const bartender = document.getElementById('bartender');
  const kasir = document.getElementById('kasir');

  function showall() {
    all.style.display = 'flex';
    pelayan.style.display = 'none';
    kitchen.style.display = 'none';
    bartender.style.display = 'none';
    kasir.style.display = 'none';
  }
  function showpelayan() {
    all.style.display = 'none';
    pelayan.style.display = 'flex';
    kitchen.style.display = 'none';
    bartender.style.display = 'none';
    kasir.style.display = 'none';
  }
  function showkitchen() {
    all.style.display = 'none';
    pelayan.style.display = 'none';
    kitchen.style.display = 'flex';
    bartender.style.display = 'none';
    kasir.style.display = 'none';
  }
  function showbartender() {
    all.style.display = 'none';
    pelayan.style.display = 'none';
    kitchen.style.display = 'none';
    bartender.style.display = 'flex';
    kasir.style.display = 'none';
  }
  function showkasir() {
    all.style.display = 'none';
    pelayan.style.display = 'none';
    kitchen.style.display = 'none';
    bartender.style.display = 'none';
    kasir.style.display = 'flex';
  }
  document.getElementById('linkall').addEventListener('click', function(event) {
    event.preventDefault(); 
    showall(); 
  });
  document.getElementById('linkpelayan').addEventListener('click', function(event) {
    event.preventDefault(); 
    showpelayan(); 
  });
  document.getElementById('linkkitchen').addEventListener('click', function(event) {
    event.preventDefault(); 
    showkitchen(); 
  });
  document.getElementById('linkbartender').addEventListener('click', function(event) {
    event.preventDefault(); 
    showbartender(); 
  });
  document.getElementById('linkkasir').addEventListener('click', function(event) {
    event.preventDefault(); 
    showkasir(); 
  });
});
</script>

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


                            <!-- Modal Edit Data Karyawan-->
                            <div id="editModal" class="modal flex">
                              <!-- Modal content -->
                              <div class="modal-content relative z-10">
                                <span class="close absolute top-4 right-4">&times;</span>
                                <div class="flex-auto p-6">
                                  <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                                    <h5 class="font-semibold text-lg"><i class="ni ni-single-02 mr-2"></i>Edit Data Karyawan</h5>
                                    <div class="w-full mt-2 mb-0 h-1 bg-slate-700 rounded"></div>
                                  </div>
                                  <form id="updateForm" action="{{ route('updateuser', ['id_user' => ':id_user']) }}" method="POST" class="p-6">
                                    @csrf
                                    @method('PUT')
                                      <div class="mb-4">
                                        <label class="block font-normal" for="nama">Nama Lengkap</label>
                                        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Nama Lengkap" id="namaupdate" name="nama">
                                      </div>
                                      <div class="mb-4">
                                        <label class="block font-normal " for="telepon">No Telepon</label>
                                        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Telepon" id="hpupdate" name="telepon">
                                      </div>
                                      <div class="mb-4">
                                        <label class="block font-normal " for="alamat">Alamat</label>
                                        <textarea type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Alamat" id="alamatupdate" name="alamat"></textarea>
                                      </div>
                                      <div class="mb-4">
                                        <label class="block font-normal " for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Tanggal Lahir" id="tanggalupdate" name="tanggal_lahir">
                                      </div>
                                      <div class="mb-4">
                                        <label class="block font-normal " for="gaji">Gaji</label>
                                        <input type="number" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Gaji" id="gajiupdate" name="gaji">
                                      </div>
                                      <div class="text-center">
                                        <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Edit Data</button>
                                      </div>
                                  </form>
                                </div>
                              </div>
                            </div>





<!-- <script>
    // Get the modal
    var deleteModal = document.getElementById("deleteModal");

    // Get the button that opens the modal
    var deleteBtn = document.getElementById("deleteKaryawanBtn");

    // Get the <span> element that closes the modal
    var deleteModalClose = document.getElementById("deleteModalClose");

    // Get the cancel button inside the modal
    var cancelDeleteButton = document.getElementById("cancelDeleteButton");

    // When the user clicks the button, open the modal 
    deleteBtn.onclick = function() {
        deleteModal.style.display = "flex";
    }

    // When the user clicks on <span> (x), close the modal
    deleteModalClose.onclick = function() {
        deleteModal.style.display = "none";
    }

    // When the user clicks cancel button, close the modal
    cancelDeleteButton.onclick = function() {
        deleteModal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == deleteModal) {
            deleteModal.style.display = "none";
        }
    }

    // Script for handling delete operation
    var confirmDeleteButton = document.getElementById("confirmDeleteButton");
    confirmDeleteButton.onclick = function() {
        // Place your delete logic here
        // For example, you can use AJAX to send delete request to server
        // After successful deletion, you can close the modal
        deleteModal.style.display = "none";
        // Add logic here to perform actual delete operation
        alert("Data berhasil dihapus!"); // Example alert, replace with your actual delete logic
    }
</script> -->



<script>
    // Get the modal
    var modal = document.getElementById("editModal");

    // Get the button that opens the modal
    var btn = document.getElementById("editKaryawanBtn");

    // Get the <span> element that closes the modal
    var span = modal.getElementsByClassName("close")[0];

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