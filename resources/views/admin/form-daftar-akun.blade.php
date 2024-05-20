@extends('layouts.main-admin')

@section('content')

<!-- <div class="w-full px-6 py-6 mx-auto">
  <div class="modal-content relative z-10">
    <span class="close absolute top-4 right-4">&times;</span>
    <div class="flex-auto p-6">
      <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
        <h5>Tambah Admin</h5>
      </div>
      <form id="tambahAdminForm" class="p-6">
        <div class="mb-4">
          <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Nama" id="nama" name="nama">
        </div>
        <div class="mb-4">
          <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Username" id="username" name="username">
        </div>
        <div class="mb-4">
          <input type="email" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Email" id="email" name="email">
        </div>
        <div class="mb-4">
          <input type="password" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password" id="password" name="password">
        </div>
        <div class="text-center">
          <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div> -->

<div class="w-full px-3 py-6 max-w-full lg:w-full lg:flex-none">
    <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-gray-400 border-solid bg-[#cfdbd5] bg-transparent bg-clip-border">
        <div class="border-black/12.5 mb-6 rounded-t-2xl border-b-0 border-solid bg-[#cfdbd5] bg-transparent p-6 pb-0 font-semibold">
            <div class="flex-auto p-6">
                    <h5>Pendaftaran Akun Karyawan</h5>
                <form id="tambahAdminForm" action="{{route('store.daftar')}}" method="POST" class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                  @csrf
                    <div class="mb-4">
                    <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Username" id="nama_lengkap" name="username">
                    </div>
                    <div class="mb-4">
                    <input type="password" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password" id="nama_lengkap" name="password">
                    </div>
                    {{-- <div class="mb-4">
                    <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Konfirm Password" id="nama_lengkap" name="nama_lengkap">
                    </div> --}}
                    <div class="mb-4">
                    <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Nama Lengkap" id="nama_lengkap" name="nama">
                    </div>
                    <div class="mb-4">
                    <input type="date" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Tanggal Lahir" id="tanggal_lahir" name="tgl_lahir">
                    </div>
                    <div class="mb-4 col-span-2">
                    <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Alamat" id="alamat" name="alamat">
                    </div>
                    <div class="mb-4">
                    <input type="tel" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="No Telepon" id="no_telepon" name="no_hp">
                    </div>
                    <div class="mb-4">
                    <select class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="level_user" name="level_user">
                        <option value="">Pilih Posisi</option>
                        <option value="Kasir">Kasir</option>
                        <option value="Bartender">Bartender</option>
                        <option value="Kitchen">Kitchen</option>
                        <option value="Pelayan">Pelayan</option>
                    </select>
                    </div>
                    <div class="mb-4">
                    <input type="number" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Gaji" id="gaji" name="gaji">
                    </div>
                    <div class="mb-4 col-span-2">
                    <input type="file" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="foto" name="foto">
                    </div>
                    <div class="text-center col-span-2">
                    <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')