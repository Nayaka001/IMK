@extends('layouts.main-admin')

@section('content')
<style>
  .text-pink-700 {
  color: #d6336c; /* Contoh kode warna pink */
}
</style>

<div class="w-full px-3 py-6 max-w-full lg:w-full lg:flex-none">
  <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-gray-400 border-solid bg-[#e8eddf] bg-transparent bg-clip-border">
    <div class="border-black/12.5 mb-6 rounded-t-2xl border-b-0 border-solid bg-[#e8eddf] bg-transparent p-6 pb-0 font-semibold">
      <div class="flex-auto p-2">
        <h5>Pendaftaran Akun Karyawan</h5>
        <div class="w-full mt-2 mb-2 h-1 bg-slate-700 rounded"></div>
              <form action="{{route('store.user')}}" method="POST" enctype="multipart/form-data" class="space-y-4 text-slate-700 p-4">
                @csrf
                <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
                  <div class="w-full  px-2 md:w-1/2">
                      <div class="mb-2">
                        <label class="block font-normal " for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan Nama Lengkap" id="nama_lengkap" name="nama_lengkap" required>
                        <p id="nama-error" class="text-sm m-1 text-pink-700 hidden">Nama tidak valid</p>
                        </div>
                        
                      <div class="mb-2">
                        <label class="block font-normal " for="username">Username</label>
                        <input type="text" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan username" id="username" name="username" required>
                        <p id="user-error" class="text-sm m-1 text-pink-700 hidden">Username tidak valid</p>
                      </div>
                      <div class="mb-2">
                        <label class="block font-normal " for="password">Password</label>
                        <input type="password" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan Password" id="password" name="password" required>
                        <p id="pass-error" class="text-sm m-1 text-pink-700 hidden">Password tidak valid</p>
                      </div>
                      <div class="mb-2">
                        <label class="block font-normal " for="konfirm-password">Konfirmasi Password</label>
                        <input type="password" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Konfirmasi Password" id="konfirm-password" name="konfirm-password" required>
                        <p id="konfpass-error" class="text-sm m-1 text-pink-700 hidden">Password tidak sesuai</p>
                      </div>
                      <div class="mb-2">
                        <label class="block font-normal " for="level-user">Posisi</label>
                        <select class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="level_user" name="level_user" required>
                            <option value="">Pilih Posisi</option>
                            <option value="Kasir">Kasir</option>
                            <option value="Bartender">Bartender</option>
                            <option value="Kitchen">Kitchen</option>
                            <option value="Pelayan">Pelayan</option>
                        </select>
                      </div>
                      
                  </div>
                  <div class="w-full  px-2 md:w-1/2">
                  <div class="mb-2">
                        <label class="block font-normal " for="no_telepone">No Telepon</label>
                        <input type="tel" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan No Telepon" id="no_telepon" name="no_hp" required>
                        <p id="no-error" class="text-sm m-1 text-pink-700 hidden">No Handphone tidak sesuai</p>
                      </div>
                    <div class="mb-2">
                      <label class="block font-normal " for="alamat">Alamat</label>
                      <textarea type="tel" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Alamat" id="alamat" name="alamat" required></textarea>

                    </div>
                    <div class="mb-2">
                      <label class="block font-normal " for="gaji">Gaji</label>
                      <input type="number" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Masukkan Gaji" id="gaji" name="gaji" required>
                      <p id="gaji-error" class="text-sm m-1 text-pink-700 hidden" >Gaji Tidak Valid</p>
                    </div>
                    <div class="mb-4">
                      <label class="block font-normal " for="tanggal-lahir">Tanggal lahir</label>
                      <input type="date" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Tanggal Lahir" id="tanggal_lahir" name="tgl_lahir" required>
                      <p id="ttl-error" class="text-sm m-1 text-pink-700 hidden">Tanggal Lahir Tidak Valid</p>
                    </div>

                    <div class="mb-2 col-span-2">
                      <label class="block font-normal " for="gaji">Masukkan foto</label>
                      <input type="file" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-500 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" id="foto" name="foto" required>
                    </div>
                    <div class="flex flex-none md:w-full space-y-4 md:space-y-0 justify-end text-right">
                      <div class="w-full text-right col-span-2 mx-2 md:ml-auto">
                        <button id="tambahKaryawanBtn" class="inline-block w-1/6 px-6 py-3 mt-6 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Simpan</button>

                        <button id="refresh" type="submit" class="inline-block w-1/6 px-6 py-3 mt-6 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Refresh</button>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
           
        <div class="w-full mb-2 h-1 bg-slate-700 rounded"></div>
      </div>
    </div>
  </div>
</div>


<!-- The Modal -->
<div id="konfirmModal" class="modal flex">
    <!-- Modal content -->
      <div class="modal-content relative z-10">
        <span class="close absolute top-4 right-4">&times;</span>
        <div class="flex-auto p-6">
          <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
            <h5><i class="fas fa-bell w-60 h-60 mr-2 text-xl"></i>Apakah data yang Anda masukkan sudah benar?</h5>
            <div class="w-full mt-2 h-1 bg-slate-700 rounded"></div>
          </div>
          <p class="text-center">Username, password, dan posisi karyawan yang Anda masukkan tidak dapat diubah lagi jika data telah disimpan.</p>
          <div class="flex flex-none md:w-full space-y-4 md:space-y-0 justify-end text-right">
            <div class="w-full text-right col-span-2 mx-2 md:ml-auto">
            <a id="cancelButton" class="inline-block w-1/6 px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Batal</a>
              <button type="submit" class="inline-block w-1/6 px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Simpan data</button>
            </div>
          </div>
        </div>
      </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('form');
    const namaLengkap = document.getElementById('nama_lengkap');
    const username = document.getElementById('username');
    const password = document.getElementById('password');
    const konfirmPassword = document.getElementById('konfirm-password');
    const noTelepon = document.getElementById('no_telepon');
    const gaji = document.getElementById('gaji');
    const tanggalLahir = document.getElementById('tanggal_lahir');
    const simpanBtn = document.getElementById('tambahKaryawanBtn');

    const namaError = document.getElementById('nama-error');
    const userError = document.getElementById('user-error');
    const passError = document.getElementById('pass-error');
    const konfPassError = document.getElementById('konfpass-error');
    const noError = document.getElementById('no-error');
    const gajiError = document.getElementById('gaji-error');
    const ttlError = document.getElementById('ttl-error');

    const regexNama = /^[A-Za-z\s]+$/;
    const regexUsername = /^[A-Za-z0-9]+$/;
    const regexNoTelepon = /^[0-9]{10,15}$/;
    const regexGaji = /^[0-9]{6,7}$/;

    function validateNamaLengkap(input, error) {
      if (!regexNama.test(input.value)) {
        error.classList.remove('hidden');
        return false;
      } else {
        error.classList.add('hidden');
        return true;
      }
    }

    function validateUsername(input, error) {
      if (!regexUsername.test(input.value)) {
        error.classList.remove('hidden');
        return false;
      } else {
        error.classList.add('hidden');
        return true;
      }
    }

    function validatePassword(input, error) {
      if (input.value.length < 8) {
        error.classList.remove('hidden');
        return false;
      } else {
        error.classList.add('hidden');
        return true;
      }
    }

    function validateKonfirmPassword(input, error) {
      if (password.value !== konfirmPassword.value) {
        error.classList.remove('hidden');
        return false;
      } else {
        error.classList.add('hidden');
        return true;
      }
    }

    function validateNoTelepon(input, error) {
      if (!regexNoTelepon.test(input.value)) {
        error.classList.remove('hidden');
        return false;
      } else {
        error.classList.add('hidden');
        return true;
      }
    }

    function validateGaji(input, error) {
    if (!regexGaji.test(input.value)) {
    error.classList.remove('hidden');
    return false;
    } else {
    error.classList.add('hidden');
    return true;
    }
  }


    function validateTanggalLahir(input, error) {
        const now = new Date();
        const tanggalLahir = new Date(input.value);
        const ageDifMs = now - tanggalLahir;
        const ageDate = new Date(ageDifMs);
        const age = Math.abs(ageDate.getUTCFullYear() - 1970);
        if (age < 18) {
          error.classList.remove('hidden');
          return false;
        } else {
          error.classList.add('hidden');
          return true;
        }
      }

    function checkFormValidity() {
      let isValid = true;
      if (namaLengkap?.value) {
        isValid = validateNamaLengkap(namaLengkap, namaError) && isValid;
      }
      if (username?.value) {
        isValid = validateUsername(username, userError) && isValid;
      }
      if (password?.value) {
        isValid = validatePassword(password, passError) && isValid;
      }
      if (konfirmPassword?.value) {
        isValid = validateKonfirmPassword(konfirmPassword, konfPassError) && isValid;
      }
      if (noTelepon?.value) {
        isValid = validateNoTelepon(noTelepon, noError) && isValid;
      }
      if (gaji?.value) {
        isValid = validateGaji(gaji, gajiError) && isValid;
      }
      if (tanggalLahir?.value) {
        isValid = validateTanggalLahir(tanggalLahir, ttlError) && isValid;
      }

      simpanBtn.disabled = !isValid;
      simpanBtn.style.cursor = isValid ? 'pointer' : 'not-allowed';
        return isValid;
      
    }

    form.addEventListener('input', function() {
      simpanBtn.disabled = !checkFormValidity();
    });

    form.addEventListener('submit', function(event) {
      if (!checkFormValidity()) {
        event.preventDefault();
      }
    });
  });
</script>



<script>
    // Get the modal
    var modal = document.getElementById("konfirmModal");

    // Get the button that opens the modal
    var btn = document.getElementById("tambahKaryawanBtn");

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


<script>
    // Mendapatkan modal
    var modal = document.getElementById("konfirmModal");

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