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
  <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-gray-400 border-solid bg-[#e8eddf] bg-transparent bg-clip-border">
    <div class="border-black/12.5 mb-6 rounded-t-2xl border-b-0 border-solid bg-[#e8eddf] bg-transparent p-6 pb-0 font-semibold">
      <div class="flex-auto p-6">
        <h5>Pendaftaran Akun Karyawan</h5>
        <!-- <div class="w-full px-3 py-6 max-w-full lg:w-full lg:flex-none">
          <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-gray-400 border-solid bg-[#cfdbd5] bg-transparent bg-clip-border">
            <div class="border-black/12.5 mb-6 rounded-t-2xl border-b-0 border-solid bg-[#cfdbd5] bg-transparent p-6 pb-0 font-semibold"> -->
              <form class="space-y-4 text-slate-700 p-4">
                <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
                  <div class="w-full  px-2 md:w-1/2">
                      <div class="mb-2">
                        <label class="block font-normal " for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-black bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan Nama Lengkap" id="nama_lengkap" name="nama_lengkap" required>
                        <p id="nama-error" class="text-sm m-1 text-pink-700  hidden">Nama tidak valid</p>
                        </div>
                      <div class="mb-2">
                        <label class="block font-normal " for="username">Username</label>
                        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-black bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan username" id="username" name="username" required>
                        <p id="user-error" class="text-sm m-1 text-pink-700  hidden">Username tidak valid</p>
                      </div>
                      <div class="mb-2">
                        <label class="block font-normal " for="password">Password</label>
                        <input type="password" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-black bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan Password" id="password" name="password" required>
                        <p id="pass-error" class="text-sm m-1 text-pink-700  hidden">Password tidak valid</p>
                      </div>
                      <div class="mb-2">
                        <label class="block font-normal " for="konfirm-password">Konfirmasi Password</label>
                        <input type="password" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-black bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Konfirmasi Password" id="konfirm-password" name="konfirm-password" required>
                        <p id="konfirpass-error" class="text-sm m-1 text-pink-700  hidden">Konfirmasi Password Tidak Sesuai</p>
                      </div>
                      <div class="mb-2">
                        <label class="block font-normal " for="level-user">Posisi</label>
                        <select class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-black bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="level_user" name="level_user" required>
                            <option value="">Pilih Posisi</option>
                            <option value="Kasir">Kasir</option>
                            <option value="Bartender">Bartender</option>
                            <option value="Kitchen">Kitchen</option>
                            <option value="Pelayan">Pelayan</option>
                        </select>
                      </div>
                      <!-- <div class="mb-2">
                        <label class="block font-normal " for="no_telepone">No Telepone</label>
                        <input type="tel" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-black bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan No Telepon" id="no_telepon" name="no_hp">
                      </div> -->
                      <!-- <div class="mb-4">
                      <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Nama Lengkap" id="nama_lengkap" name="nama">
                      </div>
                      <div class="mb-4">
                      <input type="date" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Tanggal Lahir" id="tanggal_lahir" name="tgl_lahir">
                      </div>
                      <div class="mb-4 col-span-2">
                      <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Alamat" id="alamat" name="alamat">
                      </div> -->
                  </div>
                  <div class="w-full  px-2 md:w-1/2">
                  <div class="mb-2">
                        <label class="block font-normal " for="no_telepone">No Telepon</label>
                        <input type="tel" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-black bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan No Telepon" id="no_telepon" name="no_hp" required>
                        <p id="no-error" class="text-sm m-1 text-pink-700  hidden">No Handphone Tidak Valid</p>
                      </div>
                    <div class="mb-2">
                      <label class="block font-normal " for="alamat">Alamat</label>
                      <textarea type="tel" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-black bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Alamat" id="alamat" name="alamat" required></textarea>
                    </div>
                    <div class="mb-2">
                      <label class="block font-normal " for="gaji">Gaji</label>
                      <input type="number" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-black bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan Gaji" id="gaji" name="gaji" required>
                      <p id="gaji-error" class="text-sm m-1 text-pink-700  hidden">Gaji Tidak Valid</p>
                    </div>
                    <div class="mb-4">
                      <label class="block font-normal " for="gaji">Tanggal lahir</label>
                      <input type="date" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-black bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Tanggal Lahir" id="tanggal_lahir" name="tgl_lahir" required>
                      <p id="ttl-error" class="text-sm m-1 text-pink-700  hidden">Tanggal Lahir Tidak Valid</p>
                    </div>

                    <!-- <div class="flex flex-none -mx-2 space-y-4 md:space-y-0">
                      <div class="w-full px-2 md:w-1/3 mb-2">
                        <label class="block font-normal " for="gaji">Tanggal lahir</label>
                        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-black bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Tanggal lahir" id="tgl_lahir" name="tgl-lahir">
                      </div>
                      <div class="w-full px-2 md:w-1/3 mb-2">
                        <label class="block font-normal " for="bln_lahir">Bulan lahir</label>
                        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-black bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Bulan lahir" id="bln_lahir" name="bln_lahir">
                      </div>
                      <div class="w-full px-2 md:w-1/3 mb-2">
                        <label class="block font-normal " for="thn_lahir">Tahun lahir</label>
                        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-black bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Tahun lahir" id="thn_lahir" name="thn_lahir">
                      </div>
                    </div> -->
                    <div class="mb-2 col-span-2">
                      <label class="block font-normal " for="gaji">Masukkan foto</label>
                      <input type="file" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-black bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="foto" name="foto">
                    </div>
                    <div class="flex flex-none md:w-full space-y-4 md:space-y-0 justify-end text-right">
                      <div class="w-full text-right col-span-2 mx-2 md:ml-auto">
                        <a id="tambahKaryawanBtn" class="inline-block w-1/6 px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Simpan</a>

                        <!-- The Modal -->
                        <div id="myModal" class="modal flex">
                              <!-- Modal content -->
                              <div class="modal-content relative z-10">
                                <span class="close absolute top-4 right-4">&times;</span>
                                <div class="flex-auto p-6">
                                  <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                                    <h5><i class="fas fa-bell w-20 h-20 mr-2"></i>Apakah data yang Anda masukkan sudah benar?</h5>
                                  </div>
                                  <p class="text-center">Username, password, dan posisi karyawan yang Anda masukkan tidak dapat diubah lagi jika data telah disimpan.</p>
                                  <div class="flex flex-none md:w-full space-y-4 md:space-y-0 justify-end text-right">
                                    <div class="w-full text-right col-span-2 mx-2 md:ml-auto">
                                      <button type="submit" class="inline-block w-1/6 px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Simpan data</button>
                                      <a id="cancelButton" class="inline-block w-1/6 px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Batal</a>
                                    </div>
                                  </div>
                                  <!-- <form id="tambahKaryawanForm" class="p-6">
                                      <div class="mb-4">
                                        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Nama Lengkap" id="nama" name="nama">
                                      </div>
                                      <div class="mb-4">
                                        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Username" id="username" name="username">
                                      </div>
                                      <div class="mb-4">
                                        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Posisi" id="posisi" name="posisi">
                                      </div>
                                      <div class="mb-4">
                                        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Telephone" id="jabatan" name="jabatan">
                                      </div>
                                      <div class="mb-4">
                                        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Alamat" id="alamat" name="alamat">
                                      </div>
                                      <div class="mb-4">
                                        <input type="date" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Tanggal Lahir" id="tanggal_lahir" name="tanggal_lahir">
                                      </div>
                                      <div class="mb-4">
                                        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Gaji" id="gaji" name="gaji">
                                      </div>
                                      <div class="text-center">
                                        <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Edit Data</button>
                                      </div>
                                  </form> -->
                                </div>
                              </div>
                            </div>

                        <button type="submit" class="inline-block w-1/6 px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Refresh</button>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            <!-- </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</div>

<script>
 document.addEventListener('DOMContentLoaded', function () {
    const form = {
        namaKaryawan: document.getElementById('nama_lengkap'),
        username: document.getElementById('username'),
        password: document.getElementById('password'),
        konfPass: document.getElementById('konfirm-password'),
        noTelepon: document.getElementById('no_telepon'),
        gaji: document.getElementById('gaji'),
        tanggalLahir: document.getElementById('tanggal_lahir'),
        namaError: document.getElementById('nama-error'),
        userError: document.getElementById('user-error'),
        passError: document.getElementById('pass-error'),
        konfPassError: document.getElementById('konfirpass-error'),
        noError: document.getElementById('no-error'),
        gajiError: document.getElementById('gaji-error'),
        ttlError: document.getElementById('ttl-error'),
        submitButton: document.getElementById('tambahKaryawanBtn'),
    };

    const regexNama = /^[a-zA-Z\s]+$/;
    const regexUsername = /^[a-zA-Z0-9_]{3,20}$/;
    const regexPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+}{"':;?/>.<,]).{8,}$/;
    const regexNoTelepon = /^\d{10,14}$/;
    const regexGaji = /^\d+$/;
    const regexTanggalLahir = /^(19[0-9]{2}|2[0-9]{3})-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])$/;

    function validateNama(input) {
        if (!regexNama.test(input.value)) {
            form.namaError.classList.remove('hidden');
            return false;
        } else {
            form.namaError.classList.add('hidden');
            return true;
        }
    }

    function validateUser(input) {
        if (!regexUsername.test(input.value)) {
            form.userError.classList.remove('hidden');
            return false;
        } else {
            form.userError.classList.add('hidden');
            return true;
        }
    }

    function validatePass(input) {
        if (!regexPassword.test(input.value)) {
            form.passError.classList.remove('hidden');
            return false;
        } else {
            form.passError.classList.add('hidden');
            return true;
        }
    }

    function validateKonfPass() {
        if (form.password.value !== form.konfPass.value) {
            form.konfPassError.classList.remove('hidden');
            return false;
        } else {
            form.konfPassError.classList.add('hidden');
            return true;
        }
    }

    function validateNo(input) {
        if (!regexNoTelepon.test(input.value)) {
            form.noError.classList.remove('hidden');
            return false;
        } else {
            form.noError.classList.add('hidden');
            return true;
        }
    }

    function validateGaji(input) {
        if (!regexGaji.test(input.value)) {
            form.gajiError.classList.remove('hidden');
            return false;
        } else {
            form.gajiError.classList.add('hidden');
            return true;
        }
    }

    function validateTTL(input) {
        if (!regexTanggalLahir.test(input.value)) {
            form.ttlError.classList.remove('hidden');
            return false;
        } else {
            form.ttlError.classList.add('hidden');
            return true;
        }
    }

    function checkFormValidity() {
        let isValid = true;

        if (form.namaKaryawan) {
            isValid = validateNama(form.namaKaryawan) && isValid;
        }
        if (form.username) {
            isValid = validateUser(form.username) && isValid;
        }
        if (form.password) {
            isValid = validatePass(form.password) && isValid;
        }
        if (form.konfPass) {
            isValid = validateKonfPass() && isValid;
        }
        if (form.noTelepon) {
            isValid = validateNo(form.noTelepon) && isValid;
        }
        if (form.gaji) {
            isValid = validateGaji(form.gaji) && isValid;
        }
        if (form.tanggalLahir) {
            isValid = validateTTL(form.tanggalLahir) && isValid;
        }

        form.submitButton.disabled = !isValid;
        form.submitButton.classList.toggle('bg-gray', !isValid);
        form.submitButton.classList.toggle('bg-black', isValid);
        form.submitButton.classList.toggle('cursor-not-allowed', !isValid);
    }

    form.namaKaryawan.addEventListener('input', checkFormValidity);
    form.username.addEventListener('input', checkFormValidity);
    form.password.addEventListener('input', checkFormValidity);
    form.konfPass.addEventListener('input', checkFormValidity);
    form.noTelepon.addEventListener('input', checkFormValidity);
    form.gaji.addEventListener('input', checkFormValidity);
    form.tanggalLahir.addEventListener('input', checkFormValidity);
});




</script>

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


<script>
    // Mendapatkan modal
    var modal = document.getElementById("myModal");

    // Mendapatkan tombol Batal
    var cancelButton = document.getElementById("cancelButton");

    // Fungsi untuk menutup modal
    function closeModal() {
        modal.style.display = "none";
    }

    // Event listener untuk tombol Batal
    cancelButton.onclick = function() {
        closeModal();
    }

    // Event listener untuk tombol close (jika ada)
    var closeBtn = document.querySelector(".close");
    closeBtn.onclick = function() {
        closeModal();
    }

    // Menutup modal jika user klik area luar modal
    window.onclick = function(event) {
        if (event.target == modal) {
            closeModal();
        }
    }
</script>


<!-- <div class="flex-auto p-4">
  <div class="flex flex-wrap -mx-3">
    <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                        
    </div>
  </div>
</div> -->

@endsection('content')