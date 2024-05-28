@extends('layouts.main')

@section('container')

<div class="flex overflow-x-hidden">

        @include('partials.navbar')

        {{-- alert --}}
        @if(session('notification'))
        <div id="alert" class="fixed top-0 right-0 m-4 rounded-xl border border-gray-100 bg-white p-4 z-50 ease-in-out duration-300 transition-opacity hidden" role="alert">
            <div class="flex items-start gap-4">
                <span class="text-green-600">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                    />
                  </svg>
                </span>
            
                <div class="flex-1">
                  <strong class="block font-medium text-gray-900"> Berhasil! </strong>
            
                  <p class="mt-1 text-sm text-gray-700">{{ session('notification') }}</p>
                </div>
            </div>
        </div>
        @endif
        {{-- end alert --}}
        {{-- <div role="alert" class="rounded-xl border border-gray-100 bg-white p-4">
            <div class="flex items-start gap-4">
              <span class="text-green-600">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="h-6 w-6"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                  />
                </svg>
              </span>
          
              <div class="flex-1">
                <strong class="block font-medium text-gray-900"> Changes saved </strong>
          
                <p class="mt-1 text-sm text-gray-700">Your product changes have been saved.</p>
              </div>
          
              <button class="text-gray-500 transition hover:text-gray-600">
                <span class="sr-only">Dismiss popup</span>
          
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="h-6 w-6"
                >
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
        </div> --}}





        
        
        <div class="w-full my-7 ml-24 mr-7 sm:ml-36">
            <div class="w-3/4 flex justify-between gap-6 md:w-5/6 lg:w-full">
                <form action="{{ route('index.menu') }}" method="GET" class="w-full">
                    <div class="flex items-center">
                        <input type="search" placeholder="Search" id="search" name="search" class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 peer "/>
                        <button class="items-center mx-3 z-0">
                            <ion-icon name="search-outline" size="small"></ion-icon>
                        </button>
                    </div>
                </form>
                <ion-icon name="person-circle-outline" class="flex items-center text-5xl -ml-7 -mr-3 -mt-1 z-0"></ion-icon>
                <div class="text-center items-center">
                    <h1 class="text-sm">{{ auth()->user()->karyawan->nama }}</h1>
                    <p class="text-xs text-slate-500">Cashier</p>
                </div>
            </div>
            <div class="w-3/4 flex justify-between my-5 overflow-x-scroll sm:w-4/5 md:w-11/12 lg:w-full lg:overflow-visible">
              <div id="AllLink" class="rounded-2xl bg-[#FFD369] w-fit px-3 py-2 shadow-md mx-2 font-bold">All</div>
              <div id="kidsMealLink" class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Kids Meal</div>
              <div id="sayuranLink" class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Sayuran</div>
              <div id="steakLink" class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Steaks & Hotplates</div>
              <div id="riceLink" class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold ">Rice Hotplate</div>
              <div id="geprekLink" class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Geprek</div>
              <div id="cemilanLink" class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Cemilan</div>
              <div id="minumanLink" class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold ">Minuman</div>
            </div>
            <div id="search-results" class="mt-10 w-full mx-auto container gap-6">
              <div id="all">
              @foreach($kategori as $kategoris)
                <div class="w-full">
                  <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
                  <hr class="mt-3 w-full mx-3">
                </div>
                <div class="mt-5 flex flex-wrap sm:justify-start">
                  @foreach($menu as $menus)
                    @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                      <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                          <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                          <div class="px-2 py-2">
                            <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                            <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                            {{-- <div class="flex justify-between"> --}}
                              <h1 class="font-bold mt-1 text-lg ">Rp {{$menus->harga}}</h1>
                              {{-- <button class="hover:rounded-full hover:bg-[#FFD369] h-8 group">
                                  <ion-icon name="add-circle-outline" size="large" class="group-hover:text-white"></ion-icon>
                              </button> --}}
                            {{-- </div> --}}
                          </div>
                      </div>
                    @endif
                  @endforeach
                </div>
              @endforeach
              </div>
              <div id="kidsmeal" class="hidden">
              @foreach($kategori as $kategoris)
              @if($kategoris->kategori === 'KIDS MEAL')
                <div class="w-full">
                  <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
                  <hr class="mt-3 w-full mx-3">
                </div>
                <div class="mt-5 flex flex-wrap sm:justify-start">
                  @foreach($menu as $menus)
                    @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                      <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                          <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                          <div class="px-2 py-2">
                            <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                            <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                            {{-- <div class="flex justify-between"> --}}
                              <h1 class="font-bold mt-1 text-lg ">Rp {{$menus->harga}}</h1>
                              {{-- <button class="hover:rounded-full hover:bg-[#FFD369] h-8 group">
                                  <ion-icon name="add-circle-outline" size="large" class="group-hover:text-white"></ion-icon>
                              </button> --}}
                            {{-- </div> --}}
                          </div>
                      </div>
                    @endif
                  @endforeach
                </div>
                @endif
              @endforeach
              </div>
              <div id="sayuran" class="hidden">
              @foreach($kategori as $kategoris)
              @if($kategoris->kategori === 'SAYURAN')
                <div class="w-full">
                  <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
                  <hr class="mt-3 w-full mx-3">
                </div>
                <div class="mt-5 flex flex-wrap sm:justify-start">
                  @foreach($menu as $menus)
                    @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                      <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                          <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                          <div class="px-2 py-2">
                            <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                            <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                            {{-- <div class="flex justify-between"> --}}
                              <h1 class="font-bold mt-1 text-lg ">Rp {{$menus->harga}}</h1>
                              {{-- <button class="hover:rounded-full hover:bg-[#FFD369] h-8 group">
                                  <ion-icon name="add-circle-outline" size="large" class="group-hover:text-white"></ion-icon>
                              </button> --}}
                            {{-- </div> --}}
                          </div>
                      </div>
                    @endif
                  @endforeach
                </div>
                @endif
              @endforeach
              </div>
              <div id="steak" class="hidden">
              @foreach($kategori as $kategoris)
              @if($kategoris->kategori === 'STEAKS & HOTPLATES')
                <div class="w-full">
                  <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
                  <hr class="mt-3 w-full mx-3">
                </div>
                <div class="mt-5 flex flex-wrap sm:justify-start">
                  @foreach($menu as $menus)
                    @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                      <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                          <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                          <div class="px-2 py-2">
                            <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                            <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                            {{-- <div class="flex justify-between"> --}}
                              <h1 class="font-bold mt-1 text-lg ">Rp {{$menus->harga}}</h1>
                              {{-- <button class="hover:rounded-full hover:bg-[#FFD369] h-8 group">
                                  <ion-icon name="add-circle-outline" size="large" class="group-hover:text-white"></ion-icon>
                              </button> --}}
                            {{-- </div> --}}
                          </div>
                      </div>
                    @endif
                  @endforeach
                </div>
                @endif
              @endforeach
              </div>
              <div id="rice" class="hidden">
              @foreach($kategori as $kategoris)
              @if($kategoris->kategori === 'RICE HOTPLATE')
                <div class="w-full">
                  <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
                  <hr class="mt-3 w-full mx-3">
                </div>
                <div class="mt-5 flex flex-wrap sm:justify-start">
                  @foreach($menu as $menus)
                    @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                      <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                          <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                          <div class="px-2 py-2">
                            <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                            <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                            {{-- <div class="flex justify-between"> --}}
                              <h1 class="font-bold mt-1 text-lg ">Rp {{$menus->harga}}</h1>
                              {{-- <button class="hover:rounded-full hover:bg-[#FFD369] h-8 group">
                                  <ion-icon name="add-circle-outline" size="large" class="group-hover:text-white"></ion-icon>
                              </button> --}}
                            {{-- </div> --}}
                          </div>
                      </div>
                    @endif
                  @endforeach
                </div>
                @endif
              @endforeach
              </div>
              <div id="geprek" class="hidden">
              @foreach($kategori as $kategoris)
              @if($kategoris->kategori === 'GEPREK')
                <div class="w-full">
                  <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
                  <hr class="mt-3 w-full mx-3">
                </div>
                <div class="mt-5 flex flex-wrap sm:justify-start">
                  @foreach($menu as $menus)
                    @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                      <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                          <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                          <div class="px-2 py-2">
                            <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                            <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                            {{-- <div class="flex justify-between"> --}}
                              <h1 class="font-bold mt-1 text-lg ">Rp {{$menus->harga}}</h1>
                              {{-- <button class="hover:rounded-full hover:bg-[#FFD369] h-8 group">
                                  <ion-icon name="add-circle-outline" size="large" class="group-hover:text-white"></ion-icon>
                              </button> --}}
                            {{-- </div> --}}
                          </div>
                      </div>
                    @endif
                  @endforeach
                </div>
                @endif
              @endforeach
              </div>
              <div id="cemilan" class="hidden">
              @foreach($kategori as $kategoris)
              @if($kategoris->kategori === 'CEMILAN')
                <div class="w-full">
                  <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
                  <hr class="mt-3 w-full mx-3">
                </div>
                <div class="mt-5 flex flex-wrap sm:justify-start">
                  @foreach($menu as $menus)
                    @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                      <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                          <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                          <div class="px-2 py-2">
                            <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                            <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                            {{-- <div class="flex justify-between"> --}}
                              <h1 class="font-bold mt-1 text-lg ">Rp {{$menus->harga}}</h1>
                              {{-- <button class="hover:rounded-full hover:bg-[#FFD369] h-8 group">
                                  <ion-icon name="add-circle-outline" size="large" class="group-hover:text-white"></ion-icon>
                              </button> --}}
                            {{-- </div> --}}
                          </div>
                      </div>
                    @endif
                  @endforeach
                </div>
                @endif
              @endforeach
              </div>
              <div id="minuman" class="hidden">
              @foreach($kategori as $kategoris)
              @if($kategoris->kategori === 'MINUMAN')
                <div class="w-full">
                  <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
                  <hr class="mt-3 w-full mx-3">
                </div>
                <div class="mt-5 flex flex-wrap sm:justify-start">
                  @foreach($menu as $menus)
                    @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                      <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                          <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                          <div class="px-2 py-2">
                            <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                            <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                            {{-- <div class="flex justify-between"> --}}
                              <h1 class="font-bold mt-1 text-lg ">Rp {{$menus->harga}}</h1>
                              {{-- <button class="hover:rounded-full hover:bg-[#FFD369] h-8 group">
                                  <ion-icon name="add-circle-outline" size="large" class="group-hover:text-white"></ion-icon>
                              </button> --}}
                            {{-- </div> --}}
                          </div>
                      </div>
                    @endif
                  @endforeach
                </div>
                @endif
              @endforeach
              </div>
              
          </div>
        </div>
        {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#search').on('input', function(){
                    var query = $(this).val();
                    $.ajax({
                        url: '{{ route("index.menu") }}',
                        type: 'GET',
                        data: {search: query},
                        success: function(response){
                            $('#search-results').html(response);
                        }
                    });
                });
            });
        </script> --}}
        <script>
          // Mendapatkan elemen yang diperlukan
          const allMenu = document.getElementById('all');
          const kidsMealMenu = document.getElementById('kidsmeal');
          const sayuranMenu = document.getElementById('sayuran');
          const steakMenu = document.getElementById('steak');
          const riceMenu = document.getElementById('rice');
          const geprekMenu = document.getElementById('geprek');
          const cemilanMenu = document.getElementById('cemilan');
          const minumanMenu = document.getElementById('minuman');
      
          // Menyembunyikan elemen #all dan menampilkan elemen #sayuran
          function showAllMenu() {
              allMenu.style.display = 'block';
              kidsMealMenu.style.display = 'none';
              sayuranMenu.style.display = 'none';
              steakMenu.style.display = 'none';
              riceMenu.style.display = 'none';
              geprekMenu.style.display = 'none';
              cemilanMenu.style.display = 'none';
              minumanMenu.style.display = 'none';
          }
          function showKidsMealMenu() {
              allMenu.style.display = 'none';
              kidsMealMenu.style.display = 'block';
              sayuranMenu.style.display = 'none';
              steakMenu.style.display = 'none';
              riceMenu.style.display = 'none';
              geprekMenu.style.display = 'none';
              cemilanMenu.style.display = 'none';
              minumanMenu.style.display = 'none';
          }
          function showSayuranMenu() {
              allMenu.style.display = 'none';
              kidsMealMenu.style.display = 'none';
              sayuranMenu.style.display = 'block';
              steakMenu.style.display = 'none';
              riceMenu.style.display = 'none';
              geprekMenu.style.display = 'none';
              cemilanMenu.style.display = 'none';
              minumanMenu.style.display = 'none';
          }
          function showSteakMenu() {
              allMenu.style.display = 'none';
              kidsMealMenu.style.display = 'none';
              sayuranMenu.style.display = 'none';
              steakMenu.style.display = 'block';
              riceMenu.style.display = 'none';
              geprekMenu.style.display = 'none';
              cemilanMenu.style.display = 'none';
              minumanMenu.style.display = 'none';
          }
          function showRiceMenu() {
              allMenu.style.display = 'none';
              kidsMealMenu.style.display = 'none';
              sayuranMenu.style.display = 'none';
              steakMenu.style.display = 'none';
              riceMenu.style.display = 'block';
              geprekMenu.style.display = 'none';
              cemilanMenu.style.display = 'none';
              minumanMenu.style.display = 'none';
          }
          function showGeprekMenu() {
              allMenu.style.display = 'none';
              kidsMealMenu.style.display = 'none';
              sayuranMenu.style.display = 'none';
              steakMenu.style.display = 'none';
              riceMenu.style.display = 'none';
              geprekMenu.style.display = 'block';
              cemilanMenu.style.display = 'none';
              minumanMenu.style.display = 'none';
          }
          function showCemilanMenu() {
              allMenu.style.display = 'none';
              kidsMealMenu.style.display = 'none';
              sayuranMenu.style.display = 'none';
              steakMenu.style.display = 'none';
              riceMenu.style.display = 'none';
              geprekMenu.style.display = 'none';
              cemilanMenu.style.display = 'block';
              minumanMenu.style.display = 'none';
          }
          function showMinumanMenu() {
              allMenu.style.display = 'none';
              kidsMealMenu.style.display = 'none';
              sayuranMenu.style.display = 'none';
              steakMenu.style.display = 'none';
              riceMenu.style.display = 'none';
              geprekMenu.style.display = 'none';
              cemilanMenu.style.display = 'none';
              minumanMenu.style.display = 'block';
          }

          // Mendengarkan klik pada tautan "Kids Meal"
          document.getElementById('AllLink').addEventListener('click', function(event) {
          event.preventDefault(); // Menghentikan perilaku bawaan dari tautan
          showAllMenu(); // Memanggil fungsi untuk menampilkan menu Kids Meal
          });
          document.getElementById('kidsMealLink').addEventListener('click', function(event) {
          event.preventDefault(); // Menghentikan perilaku bawaan dari tautan
          showKidsMealMenu(); // Memanggil fungsi untuk menampilkan menu Kids Meal
          });
          document.getElementById('sayuranLink').addEventListener('click', function(event) {
          event.preventDefault(); 
          showSayuranMenu(); 
          });
          document.getElementById('steakLink').addEventListener('click', function(event) {
          event.preventDefault(); 
          showSteakMenu(); 
          });
          document.getElementById('riceLink').addEventListener('click', function(event) {
          event.preventDefault(); 
          showRiceMenu(); 
          });
          document.getElementById('geprekLink').addEventListener('click', function(event) {
          event.preventDefault(); 
          showGeprekMenu(); 
          });
          document.getElementById('cemilanLink').addEventListener('click', function(event) {
          event.preventDefault(); 
          showCemilanMenu(); 
          });
          document.getElementById('minumanLink').addEventListener('click', function(event) {
          event.preventDefault(); 
          showMinumanMenu(); 
          });
      </script>
@endsection