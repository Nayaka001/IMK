@extends('layouts.main')

@section('container')

    <div>
        <div class="flex">

            @include('partials.navbar')
    
            <div class="w-3/5 my-7 ml-24 sm:w-2/3 sm:ml-32 -mr-[70px] md:-mr-12">
                <div class="w-3/4 flex justify-between gap-6 sm:w-4/6 md:w-3/4 lg:w-10/12">
                    <form action="{{route('kasir.addnewdine')}}" method="GET" class="w-full">
                        <div class="flex items-center">
                            <input type="search" placeholder="Search" id="search" name="search" class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 peer "/>
                            <button class="items-center mx-3">
                                <ion-icon name="search-outline" size="small"></ion-icon>
                            </button>
                        </div>
                    </form>
                    <ion-icon name="person-circle-outline" class="flex items-center text-5xl -ml-7 -mr-3 -mt-1"></ion-icon>
                    <div class="text-center items-center">
                        <h1 class="text-sm">{{ auth()->user()->karyawan->nama }}</h1>
                        <p class="text-xs text-slate-500">Cashier</p>
                    </div>
                </div>
                <div class="w-3/4 flex justify-between my-5 overflow-x-scroll sm:w-4/6 md:w-3/4 lg:w-10/12 xl:overflow-visible">
                    <div id="AllLink" class="rounded-2xl bg-[#FFD369] w-fit px-3 py-2 shadow-md mx-2 font-bold">All</div>
                    <div id="kidsMealLink" class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Kids Meal</div>
                    <div id="sayuranLink" class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Sayuran</div>
                    <div id="steakLink" class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Steaks & Hotplates</div>
                    <div id="riceLink" class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold ">Rice Hotplate</div>
                    <div id="geprekLink" class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Geprek</div>
                    <div id="cemilanLink" class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Cemilan</div>
                    <div id="minumanLink" class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold ">Minuman</div>
                </div>
                <div id="all">
                    @foreach($kategori as $kategoris)
                    <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
                    <hr class="mt-5 w-full mx-3"> 
                    <div id="all" class="mx-auto mt-10 w-full container gap-6 sm:flex sm:flex-wrap sm:justify-start"> 
                        @foreach($menu as $menus)
                        @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                        <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-3/5 md:w-60 lg:w-56">
                            <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                            <div class="px-2 py-2">
                            <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                            <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                            <div class="justify-between flex">
                                <h1 class="font-bold mt-1 text-lg">Rp {{$menus->harga}}</h1>
                                <button id="addButton-{{$menus->id_menu}}" class="hover:rounded-full hover:bg-[#FFD369] h-8 group text-3xl">
                                    <ion-icon name="add-circle-outline" class="group-hover:text-white"></ion-icon>
                                </button>
                            </div>
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
                    <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
                    <hr class="mt-5 w-full mx-3"> 
                    <div id="all" class="mx-auto mt-10 w-full container gap-6 sm:flex sm:flex-wrap sm:justify-start">                     
                        @foreach($menu as $menus)
                        @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                        <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-3/5 md:w-60 lg:w-56">
                            <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                            <div class="px-2 py-2">
                            <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                            <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                            <div class="justify-between flex">
                                <h1 class="font-bold mt-1 text-lg">Rp {{$menus->harga}}</h1>
                                <button id="addButton-{{$menus->id_menu}}" class="hover:rounded-full hover:bg-[#FFD369] h-8 group text-3xl">
                                    <ion-icon name="add-circle-outline" class="group-hover:text-white"></ion-icon>
                                </button>
                            </div>
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
                    <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
                    <hr class="mt-5 w-full mx-3"> 
                    <div id="all" class="mx-auto mt-10 w-full container gap-6 sm:flex sm:flex-wrap sm:justify-start">                     
                        @foreach($menu as $menus)
                        @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                        <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-3/5 md:w-60 lg:w-56">
                            <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                            <div class="px-2 py-2">
                            <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                            <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                            <div class="justify-between flex">
                                <h1 class="font-bold mt-1 text-lg">Rp {{$menus->harga}}</h1>
                                <button id="addButton-{{$menus->id_menu}}" class="hover:rounded-full hover:bg-[#FFD369] h-8 group text-3xl">
                                    <ion-icon name="add-circle-outline" class="group-hover:text-white"></ion-icon>
                                </button>
                            </div>
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
                    <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
                    <hr class="mt-5 w-full mx-3"> 
                    <div id="all" class="mx-auto mt-10 w-full container gap-6 sm:flex sm:flex-wrap sm:justify-start">                     
                        @foreach($menu as $menus)
                        @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                        <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-3/5 md:w-60 lg:w-56">
                            <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                            <div class="px-2 py-2">
                            <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                            <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                            <div class="justify-between flex">
                                <h1 class="font-bold mt-1 text-lg">Rp {{$menus->harga}}</h1>
                                <button id="addButton-{{$menus->id_menu}}" class="hover:rounded-full hover:bg-[#FFD369] h-8 group text-3xl">
                                    <ion-icon name="add-circle-outline" class="group-hover:text-white"></ion-icon>
                                </button>
                            </div>
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
                    <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
                    <hr class="mt-5 w-full mx-3"> 
                    <div id="all" class="mx-auto mt-10 w-full container gap-6 sm:flex sm:flex-wrap sm:justify-start">                     
                        @foreach($menu as $menus)
                        @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                        <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-3/5 md:w-60 lg:w-56">
                            <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                            <div class="px-2 py-2">
                            <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                            <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                            <div class="justify-between flex">
                                <h1 class="font-bold mt-1 text-lg">Rp {{$menus->harga}}</h1>
                                <button id="addButton-{{$menus->id_menu}}" class="hover:rounded-full hover:bg-[#FFD369] h-8 group text-3xl">
                                    <ion-icon name="add-circle-outline" class="group-hover:text-white"></ion-icon>
                                </button>
                            </div>
                            </div>
                        </div>
                        @endif
                        @endforeach         
                    </div>
                    @endif
                    @endforeach
                </div>
                <div id="geprek" class="hidden"   >
                    @foreach($kategori as $kategoris)
                    @if($kategoris->kategori === 'GEPREK')
                    <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
                    <hr class="mt-5 w-full mx-3"> 
                    <div id="all" class="mx-auto mt-10 w-full container gap-6 sm:flex sm:flex-wrap sm:justify-start">                     
                        @foreach($menu as $menus)
                        @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                        <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-3/5 md:w-60 lg:w-56">
                            <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                            <div class="px-2 py-2">
                            <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                            <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                            <div class="justify-between flex">
                                <h1 class="font-bold mt-1 text-lg">Rp {{$menus->harga}}</h1>
                                <button id="addButton-{{$menus->id_menu}}" class="hover:rounded-full hover:bg-[#FFD369] h-8 group text-3xl">
                                    <ion-icon name="add-circle-outline" class="group-hover:text-white"></ion-icon>
                                </button>
                            </div>
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
                        <h1 class="text-3xl font-bold ml-3 pt-4">{{ $kategoris->subkategori }}</h1>
                        <hr class="mt-5 w-full mx-3">
                        <div id="all" class="mx-auto mt-10 w-full container gap-6 sm:flex sm:flex-wrap sm:justify-start">
                            @foreach($menu as $menus)
                                @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                                    <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-3/5 md:w-60 lg:w-56">
                                        <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                                        <div class="px-2 py-2">
                                            <div class="font-bold text-lg mb-1">{{ $menus->nama_menu }}</div>
                                            <p class="text-xs mb-1 text-gray-600">{{ $menus->keterangan }}</p>
                                            <div class="justify-between flex">
                                                <h1 class="font-bold mt-1 text-lg">Rp {{ $menus->harga }}</h1>
                                                <button id="addButton-{{ $menus->id_menu }}" class="hover:rounded-full hover:bg-[#FFD369] h-8 group text-3xl">
                                                    <ion-icon name="add-circle-outline" class="group-hover:text-white"></ion-icon>
                                                </button>
                                            </div>
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
                    <h1 class="text-3xl font-bold ml-3 pt-4">{{$kategoris->subkategori}}</h1>
                    <hr class="mt-5 w-full mx-3"> 
                    <div id="all" class="mx-auto mt-10 w-full container gap-6 sm:flex sm:flex-wrap sm:justify-start">                     
                        @foreach($menu as $menus)
                        @if($menus->id_ktgmenu == $kategoris->id_ktgmenu)
                        <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-3/5 md:w-60 lg:w-56">
                            <img src="{{ asset('img/menu/' . $menus->gambar_menu) }}" alt="Image Caption" class="w-full h-48 object-cover">
                            <div class="px-2 py-2">
                            <div class="font-bold text-lg mb-1">{{$menus->nama_menu}}</div>
                            <p class="text-xs mb-1 text-gray-600">{{$menus->keterangan}}</p>
                            <div class="justify-between flex">
                                <h1 class="font-bold mt-1 text-lg">Rp {{$menus->harga}}</h1>
                                <button id="addButton-{{$menus->id_menu}}" class="hover:rounded-full hover:bg-[#FFD369] h-8 group text-3xl">
                                    <ion-icon name="add-circle-outline" class="group-hover:text-white"></ion-icon>
                                </button>
                            </div>
                            </div>
                        </div>
                        @endif
                        @endforeach         
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>

            {{-- detail pesanan --}}
            <div class="flex sm:-ml-16">
                <div class="bg-white fixed h-screen ml-auto w-2/3 pt-7 px-2 rounded-lg lg:w-96 md:w-2/3 overflow-y-auto lg:right-0">
                    <h1 class="font-bold text-xl md:text-2xl">Detail Pesanan</h1>
                    <div class="my-5 bg-[#EEEEEE] py-1 rounded-lg px-1 md:w-[300px] lg:w-full">
                        <div class="flex my-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="size-8">
                                <path d="M11.99 2C6.47 2 2 6.48 2 12C2 17.52 6.47 22 11.99 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 11.99 2ZM15.29 16.71L11 12.41V7H13V11.59L16.71 15.3L15.29 16.71Z" fill="black"/>
                            </svg>
                            <p class="text-sm ml-0.5 md:text-base">{{ now()->format('d F Y g:i A') }}</p>
                        </div>
                        <div class="flex my-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="size-8">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7C16 8.06087 15.5786 9.07828 14.8284 9.82843C14.0783 10.5786 13.0609 11 12 11C10.9391 11 9.92172 10.5786 9.17157 9.82843C8.42143 9.07828 8 8.06087 8 7ZM8 13C6.67392 13 5.40215 13.5268 4.46447 14.4645C3.52678 15.4021 3 16.6739 3 18C3 18.7956 3.31607 19.5587 3.87868 20.1213C4.44129 20.6839 5.20435 21 6 21H18C18.7956 21 19.5587 20.6839 20.1213 20.1213C20.6839 19.5587 21 18.7956 21 18C21 16.6739 20.4732 15.4021 19.5355 14.4645C18.5979 13.5268 17.3261 13 16 13H8Z" fill="black"/>
                            </svg>
                            <p class="text-sm ml-0.5 md:text-base">{{ session('nama_pelanggan') }}</p>
                        </div>
                        <div class="flex my-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="size-8">
                                <path d="M22 7.5C22 5.57 17.52 4 12 4C6.48 4 2 5.57 2 7.5C2 9.31 5.95 10.81 11 10.98V15H9.35C8.53 15 7.8 15.5 7.49 16.26L6 20H8L9.2 17H14.8L16 20H18L16.5 16.26C16.2 15.5 15.46 15 14.65 15H13V10.98C18.05 10.81 22 9.31 22 7.5ZM12 6C16.05 6 18.74 6.86 19.72 7.5C18.74 8.14 16.05 9 12 9C7.95 9 5.26 8.14 4.28 7.5C5.26 6.86 7.95 6 12 6Z" fill="black"/>
                            </svg>
                            <p class="text-sm ml-0.5 md:text-base">{{session('nomor_meja')}}</p>
                        </div>
                        <div class="flex my-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="size-8">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.586 4.586C5 5.172 5 6.114 5 8V17C5 18.886 5 19.828 5.586 20.414C6.172 21 7.114 21 9 21H15C16.886 21 17.828 21 18.414 20.414C19 19.828 19 18.886 19 17V8C19 6.114 19 5.172 18.414 4.586C17.828 4 16.886 4 15 4H9C7.114 4 6.172 4 5.586 4.586ZM9 8C8.73478 8 8.48043 8.10536 8.29289 8.29289C8.10536 8.48043 8 8.73478 8 9C8 9.26522 8.10536 9.51957 8.29289 9.70711C8.48043 9.89464 8.73478 10 9 10H15C15.2652 10 15.5196 9.89464 15.7071 9.70711C15.8946 9.51957 16 9.26522 16 9C16 8.73478 15.8946 8.48043 15.7071 8.29289C15.5196 8.10536 15.2652 8 15 8H9ZM9 12C8.73478 12 8.48043 12.1054 8.29289 12.2929C8.10536 12.4804 8 12.7348 8 13C8 13.2652 8.10536 13.5196 8.29289 13.7071C8.48043 13.8946 8.73478 14 9 14H15C15.2652 14 15.5196 13.8946 15.7071 13.7071C15.8946 13.5196 16 13.2652 16 13C16 12.7348 15.8946 12.4804 15.7071 12.2929C15.5196 12.1054 15.2652 12 15 12H9ZM9 16C8.73478 16 8.48043 16.1054 8.29289 16.2929C8.10536 16.4804 8 16.7348 8 17C8 17.2652 8.10536 17.5196 8.29289 17.7071C8.48043 17.8946 8.73478 18 9 18H13C13.2652 18 13.5196 17.8946 13.7071 17.7071C13.8946 17.5196 14 17.2652 14 17C14 16.7348 13.8946 16.4804 13.7071 16.2929C13.5196 16.1054 13.2652 16 13 16H9Z" fill="black"/>
                            </svg>
                            <p class="text-sm ml-0.5 md:text-base">{{session('order_id')}}</p>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div id="deleteModal" class="fixed inset-0 z-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
                        <div class="absolute inset-0 bg-black opacity-50"></div>
                        <div class="bg-white rounded-lg p-6 z-10 max-w-md mx-auto">
                            <h2 class="text-xl font-bold mb-4">Konfirmasi Penghapusan</h2>
                            <p id="modalMessage">Apakah Anda yakin ingin menghapus item ini?</p>
                            <div class="mt-6 flex justify-end">
                                <button id="cancelButton" class="bg-gray-500 text-white px-4 py-2 rounded mr-2">Batal</button>
                                <button id="confirmDeleteButton" class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Modal -->
                    <!-- Modal -->
                    <div id="infoModal" class="fixed inset-0 z-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
                        <div class="absolute inset-0 bg-black opacity-50"></div>
                        <div class="bg-white rounded-lg p-6 z-10 max-w-md mx-auto">
                            <h2 class="text-xl font-bold mb-4">Informasi</h2>
                            <p id="infoModalMessage">Item already added!</p>
                            <div class="mt-6 flex justify-end">
                                <button id="infoModalCloseButton" class="bg-gray-500 text-white px-4 py-2 rounded">Tutup</button>
                            </div>
                        </div>
                    </div>

                    



                    {{-- menu --}}
                    <hr class="px-2">
                        <div id="selectedMenuItems" class="flex-none py-2">
                            <button class="hover:rounded-lg hover:bg-red-200 h-8 md:ml-0 absolute right-36 sm:right-60 md:right-[340px] lg:right-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="md:size-7 lg:size-8">
                                    <path d="M16 9V19H8V9H16ZM14.5 3H9.5L8.5 4H5V6H19V4H15.5L14.5 3ZM18 7H6V19C6 20.1 6.9 21 8 21H16C17.1 21 18 20.1 18 19V7Z" fill="#FF0000"/>
                                  </svg>
                            </button>
                            <div class="flex items-center gap-10 sm:gap-0 mt-6 lg:mt-0">
                                <img src="https://source.unsplash.com/50x50" alt="" class="rounded-lg hidden sm:flex md:size-[100px] lg:size-32">
                                <h1 class="w-[170px] text-sm font-semibold sm:w-52 sm:ml-2 md:text-base md:w-52 lg:w-full">Chicken Steak Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, amet?</h1>
                            </div>

                            <div class="flex item mt-1">
                                <h1 class="text-sm text-gray-600">Note : </h1>
                                <form action="">
                                    <textarea name="" id="" cols="13" rows="3" class="mt-1 ml-1 text-sm text-gray-600 py-0 px-1 sm:w-48 md:w-64 lg:w-72"></textarea>
                                </form>
                            </div>
                            
                            <div class="flex items-center gap-3 sm:gap-20 md:gap-32 lg:justify-between">
                                <div x-data="{ productQuantity: 1 }">
                                    <label for="Quantity" class="sr-only"> Quantity </label>
                                    <div class="flex items-center rounded border border-gray-200 w-14 h-7 my-2 md:w-20 md:h-7 lg:w-24 lg:h-8">
                                    <button
                                        type="button"
                                        x-on:click="productQuantity--"
                                        :disabled="productQuantity === 0"
                                        class="size-7 leading-7 md:size-9 md:leading-9 lg:size-10 lg:leading-10 text-gray-600 transition hover:opacity-75"
                                    >
                                        &minus;
                                    </button>
                                
                                    <input
                                        type="number"
                                        id="Quantity"
                                        x-model="productQuantity"
                                        class="h-5 w-8 lg:h-7 lg:w-9 border-transparent text-center text-xs px-0 lg:text-lg [-moz-appearance:_textfield] sm:text-sm [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
                                    />
                                
                                    <button
                                        type="button"
                                        x-on:click="productQuantity++"
                                        class="size-7 leading-7 md:size-9 md:leading-9 lg:size-10 lg:leading-10 text-gray-600 transition hover:opacity-75"
                                    >
                                        &plus;
                                    </button>
                                    </div>
                                </div>
                                <h1 class="font-bold text-lg lg:text-xl">Rp 15.000</h1>
                            </div>
                        </div>
                    <hr class="px-2">
                    {{-- end menu --}}
    
                    <div class="flex items-center gap-2 mt-5 sm:gap-20 md:gap-[150px] lg:justify-between">
                        <h1 class="font-semibold text-sm py-4 text-gray-600 lg:text-base">Subtotal</h1>
                        <h1 id="subTotal" class="font-bold text-lg lg:text-xl">Rp.0</h1>
                    </div>                   
                    <div id="moneyDisplay" class="hidden">
                        <div class="flex items-center gap-2 sm:gap-20 md:gap-[150px] lg:justify-between">
                            <h1 class="font-semibold text-sm py-4 text-gray-600 lg:text-base">Uang</h1>
                            <h1 id="money" class="font-semibold text-lg lg:text-xl"></h1>
                        </div>
                        <div class="flex items-center gap-2 sm:gap-20 md:gap-[150px] lg:justify-between">
                            <h1 class="font-semibold text-sm py-4 text-gray-600 lg:text-base">Kembalian</h1>
                            <h1 id="change" class="font-bold text-lg lg:text-xl"></h1>
                        </div>
                    </div>

                    {{-- <form action="{{ route('save-menu-to-session') }}" method="POST">
                        @csrf
                        <input type="hidden" name="menuId" value="${menuId}">
                        <input type="hidden" name="menuName" value="${menuName}">
                        <input type="hidden" name="menuPrice" value="${menuPrice}">
                        <input type="hidden" name="productQuantity" value="${productQuantity}">
                        <button type="submit">Simpan ke Session</button>
                    </form> --}}
                    <button id="confirmOrderBtn" class="bg-[#FFD369] p-2 w-fit rounded-lg font-bold hover:text-white px-6 sm:w-60 md:w-[300px] lg:w-full my-4">Konfirmasi</button>
                    

                    <div id="moneySection" class="hidden mt-5 h-screen">
                        <h1 class="text-xl md:text-2xl font-bold pt-7">Masukkan Uang</h1>

                        <div class="sm:hidden">
                            <input id="inputDisplay" type="number" placeholder="Masukkan Uang" class="mt-7 w-[149px] p-1">
                        </div>
                        <button class="sm:hidden bg-green-500 text-xl p-1 mt-3 rounded-lg focus:outline-none w-[149px]" onclick="confirmMoney(true)">OK</button>

                        
                        <div class="items-center lg:justify-center mt-7 hidden sm:flex sm:justify-start">
                            <div class="bg-white p-4 rounded-lg shadow-lg lg:w-72 sm:w-56 md:w-64">
                                <div id="display" class="bg-gray-100 text-right p-4 rounded-lg text-2xl mb-4">0</div>
                                <div class="grid grid-cols-3 gap-4">
                                  <button class="bg-[#FFD369] text-2xl p-4 rounded-lg focus:outline-none" onclick="appendNumber(1)">1</button>
                                  <button class="bg-[#FFD369] text-2xl p-4 rounded-lg focus:outline-none" onclick="appendNumber(2)">2</button>
                                  <button class="bg-[#FFD369] text-2xl p-4 rounded-lg focus:outline-none" onclick="appendNumber(3)">3</button>
                                  <button class="bg-[#FFD369] text-2xl p-4 rounded-lg focus:outline-none" onclick="appendNumber(4)">4</button>
                                  <button class="bg-[#FFD369] text-2xl p-4 rounded-lg focus:outline-none" onclick="appendNumber(5)">5</button>
                                  <button class="bg-[#FFD369] text-2xl p-4 rounded-lg focus:outline-none" onclick="appendNumber(6)">6</button>
                                  <button class="bg-[#FFD369] text-2xl p-4 rounded-lg focus:outline-none" onclick="appendNumber(7)">7</button>
                                  <button class="bg-[#FFD369] text-2xl p-4 rounded-lg focus:outline-none" onclick="appendNumber(8)">8</button>
                                  <button class="bg-[#FFD369] text-2xl p-4 rounded-lg focus:outline-none" onclick="appendNumber(9)">9</button>
                                  <button class="bg-red-500 text-2xl p-4 rounded-lg focus:outline-none" onclick="clearDisplay()">C</button>
                                  <button class="bg-[#FFD369] text-2xl p-4 rounded-lg focus:outline-none" onclick="appendNumber(0)">0</button>
                                  <button class="bg-green-500 text-2xl p-4 rounded-lg focus:outline-none" onclick="confirmMoney()">OK</button>
                                </div>
                        </div>
                    </div>
                    
                </div>

            </div>
            {{-- end detail pesanan --}}
        </div>
        <script>
            let itemIdToDelete;
            let subtotal = 0;
        
            document.addEventListener('DOMContentLoaded', (event) => {
                const buttons = document.querySelectorAll('[id^="addButton-"]');
                const selectedMenuItems = document.getElementById('selectedMenuItems');
                const subtotalElement = document.getElementById('subTotal');
        
                function formatNumber(number) {
                    return number.toLocaleString('id-ID');
                }
        
                function updateSubtotal() {
                    subtotalElement.textContent = `Rp. ${formatNumber(Math.floor(subtotal))}`;
                }
        
                function updateSubtotalForQuantityChange() {
                    subtotal = 0; // Inisialisasi ulang subtotal
                    const menuItems = selectedMenuItems.querySelectorAll('.menu-item');
                    menuItems.forEach(item => {
                        const priceElement = item.querySelector('.total-price');
                        const quantityElement = item.querySelector('.quantity-input');
                        const menuPrice = parseFloat(priceElement.dataset.price);
                        const productQuantity = parseInt(quantityElement.value);
                        subtotal += menuPrice * productQuantity;
                    });
                    updateSubtotal();
                }
        
                // Event listener untuk tombol add
                buttons.forEach(button => {
                    button.addEventListener('click', (e) => {
                        const buttonId = e.target.closest('button').id;
                        const menuId = buttonId.split('-')[1];
                        const menuCard = e.target.closest('.rounded-md');
                        const menuImage = menuCard.querySelector('img').src;
                        const menuName = menuCard.querySelector('.font-bold').textContent;
                        const menuPriceText = menuCard.querySelector('.justify-between h1').textContent;
                        const menuPrice = parseFloat(menuPriceText.replace(/[^0-9.-]+/g, "")); // Remove any non-numeric characters
        
                        // Check if the menu item is already added
                        if (selectedMenuItems.querySelector(`.menu-item[data-id="${menuId}"]`)) {
                            showInfoModal('Item already added!');
                            return;
                        }
        
                        const selectedMenuItemHTML = `
                            <div class="flex-none py-2 menu-item" data-id="${menuId}">
                                <button class="hover:rounded-lg hover:bg-red-200 h-8 delete-button" data-id="${menuId}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="md:size-7 lg:size-8">
                                        <path d="M16 9V19H8V9H16ZM14.5 3H9.5L8.5 4H5V6H19V4H15.5L14.5 3ZM18 7H6V19C6 20.1 6.9 21 8 21H16C17.1 21 18 20.1 18 19V7Z" fill="#FF0000"/>
                                    </svg>
                                </button>
                                <div class="flex items-center gap-10 sm:gap-0 mt-6 lg:mt-0">
                                    <img src="${menuImage}" alt="" class="rounded-lg hidden sm:flex md:size-[100px] lg:size-32">
                                    <h1 class="w-[170px] text-sm font-semibold sm:w-52 sm:ml-2 md:text-base md:w-52 lg:w-full">${menuName}</h1>
                                </div>
                                <div class="flex item mt-1">
                                    <h1 class="text-sm text-gray-600">Note : </h1>
                                    <form action="">
                                        <textarea name="" id="" cols="13" rows="3" class="mt-1 ml-1 text-sm text-gray-600 py-0 px-1 sm:w-48 md:w-64 lg:w-72"></textarea>
                                    </form>
                                </div>
                                <div class="flex items-center gap-3 sm:gap-20 md:gap-32 lg:justify-between">
                                    <div class="flex items-center rounded border border-gray-200 w-14 h-7 my-2 md:w-20 md:h-7 lg:w-24 lg:h-8">
                                        <button
                                            type="button"
                                            class="button-minus size-7 leading-7 md:size-9 md:leading-9 lg:size-10 lg:leading-10 text-gray-600 transition hover:opacity-75"
                                        >
                                            &minus;
                                        </button>
                                        <input
                                            type="number"
                                            id="Quantity"
                                            class="quantity-input h-5 w-8 lg:h-7 lg:w-9 border-transparent text-center text-xs px-0 lg:text-lg [-moz-appearance:_textfield] sm:text-sm [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"
                                            value="1"
                                        />
                                        <button
                                            type="button"
                                            class="button-plus size-7 leading-7 md:size-9 md:leading-9 lg:size-10 lg:leading-10 text-gray-600 transition hover:opacity-75"
                                        >
                                            &plus;
                                        </button>
                                    </div>
                                    <h1 class="total-price font-bold text-lg lg:text-xl" data-price="${menuPrice.toFixed(0)}">Rp.<span>${formatNumber(menuPrice.toFixed(0))}</span></h1>
                                </div>
                            </div>
                            <hr class="px-2">
                        `;
        
                        // Append the new menu item HTML to the selected menu items container
                        selectedMenuItems.insertAdjacentHTML('beforeend', selectedMenuItemHTML);
        
                        subtotal += menuPrice;
                        updateSubtotal();
        
                        // Event listeners for the quantity buttons and input
                        const newMenuItem = selectedMenuItems.querySelector(`.menu-item[data-id="${menuId}"]`);
                        const buttonMinus = newMenuItem.querySelector('.button-minus');
                        const buttonPlus = newMenuItem.querySelector('.button-plus');
                        const quantityInput = newMenuItem.querySelector('.quantity-input');
                        const totalPriceElement = newMenuItem.querySelector('.total-price span');
                        let productQuantity = parseInt(quantityInput.value);
        
                        buttonMinus.addEventListener('click', () => {
                            if (productQuantity > 0) {
                                productQuantity--;
                                quantityInput.value = productQuantity;
                                totalPriceElement.textContent = formatNumber(Math.floor(productQuantity * parseFloat(totalPriceElement.parentElement.dataset.price)));
                                updateSubtotalForQuantityChange();
                            }
                        });
        
                        buttonPlus.addEventListener('click', () => {
                            productQuantity++;
                            quantityInput.value = productQuantity;
                            totalPriceElement.textContent = formatNumber(Math.floor(productQuantity * parseFloat(totalPriceElement.parentElement.dataset.price)));
                            updateSubtotalForQuantityChange();
                        });
        
                        quantityInput.addEventListener('input', () => {
                            productQuantity = parseInt(quantityInput.value);
                            totalPriceElement.textContent = formatNumber(Math.floor(productQuantity * parseFloat(totalPriceElement.parentElement.dataset.price)));
                            updateSubtotalForQuantityChange();
                        });
        
                        // Add event listener to the delete button of the newly added item
                        const newDeleteButton = newMenuItem.querySelector(`.delete-button[data-id="${menuId}"]`);
                        newDeleteButton.addEventListener('click', (e) => {
                            itemIdToDelete = menuId;
                            showModal();
                        });
                    });
                });
        
                function removeItemAndUpdateSubtotal(menuId) {
                    const itemToDelete = selectedMenuItems.querySelector(`.menu-item[data-id="${menuId}"]`);
                    if (itemToDelete) {
                        const priceElement = itemToDelete.querySelector('.total-price');
                        const quantityElement = itemToDelete.querySelector('#Quantity');
                        const menuPrice = parseFloat(priceElement.dataset.price);
                        const productQuantity = parseInt(quantityElement.value);
                        subtotal -= menuPrice * productQuantity;
                        itemToDelete.remove();
                        updateSubtotal();
                    }
                }
        
                // Modal functionality
                const deleteModal = document.getElementById('deleteModal');
                const cancelButton = document.getElementById('cancelButton');
                const confirmDeleteButton = document.getElementById('confirmDeleteButton');
                const modalMessage = document.getElementById('modalMessage');
                const infoModal = document.getElementById('infoModal');
                const infoModalCloseButton = document.getElementById('infoModalCloseButton');
                const infoModalMessage = document.getElementById('infoModalMessage');
        
                const showModal = (message = 'Apakah Anda yakin ingin menghapus item ini?') => {
                    modalMessage.textContent = message;
                    deleteModal.classList.remove('opacity-0', 'pointer-events-none');
                    deleteModal.classList.add('opacity-100');
                };
        
                const hideModal = () => {
                    deleteModal.classList.add('opacity-0', 'pointer-events-none');
                    deleteModal.classList.remove('opacity-100');
                };
        
                cancelButton.addEventListener('click', hideModal);
        
                confirmDeleteButton.addEventListener('click', () => {
                    removeItemAndUpdateSubtotal(itemIdToDelete);
                    hideModal();
                });
        
                const showInfoModal = (message) => {
                    infoModalMessage.textContent = message;
                    infoModal.classList.remove('opacity-0', 'pointer-events-none');
                    infoModal.classList.add('opacity-100');
                };
        
                const hideInfoModal = () => {
                    infoModal.classList.add('opacity-0', 'pointer-events-none');
                    infoModal.classList.remove('opacity-100');
                };
        
                infoModalCloseButton.addEventListener('click', hideInfoModal);
            });
        </script>
        
            
            
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
        <script>
            function formatNumber(number) {
                return number.toLocaleString('id-ID');
            }
            
            function parseFormattedNumber(formattedNumber) {
                return parseInt(formattedNumber.replace(/\./g, ''));
            }
            
            function appendNumber(number) {
                const display = document.getElementById('display');
                if (display.innerText === '0') {
                    display.innerText = number;
                } else {
                    display.innerText += number;
                }
                // Update display with formatted number
                display.innerText = formatNumber(parseFormattedNumber(display.innerText));
            }
            
            function clearDisplay() {
                document.getElementById('display').innerText = '0';
            }
            
            function confirmMoney(isInput = false) {
                let money;
                if (isInput) {
                    money = parseFormattedNumber(document.getElementById('inputDisplay').value);
                } else {
                    const display = document.getElementById('display').innerText;
                    money = parseFormattedNumber(display);
                }
        
                console.log('Money:', money);
                
                const subtotalText = document.getElementById('subTotal').innerText.replace('Rp. ', '');
                const subtotal = parseFormattedNumber(subtotalText);
                
                console.log('Subtotal:', subtotal);
        
                if (money >= subtotal) {
                    const change = money - subtotal;
                    document.getElementById('money').innerText = `Rp ${formatNumber(money)}`;
                    document.getElementById('change').innerText = `Rp ${formatNumber(change)}`;
                    document.getElementById('moneySection').classList.add('hidden');
                    document.getElementById('moneyDisplay').classList.remove('hidden');
                } else {
                    alert('Jumlah uang tidak mencukupi');
                }
            }
            
            document.getElementById('confirmOrderBtn').addEventListener('click', function() {
                document.getElementById('moneySection').classList.remove('hidden');
                document.getElementById('moneySection').scrollIntoView({ behavior: 'smooth' });
            });
        
            // Disable scrolling past the confirm order button
            document.addEventListener('scroll', function() {
                var confirmOrderButton = document.getElementById('confirmOrderBtn');
                var rect = confirmOrderButton.getBoundingClientRect();
                var moneySection = document.getElementById('moneySection');
            
                if (rect.top < window.innerHeight && moneySection.classList.contains('hidden')) {
                    window.scrollTo(0, rect.top + window.scrollY - window.innerHeight + confirmOrderButton.offsetHeight);
                }
            }, { passive: true });
        </script>
        
        
        
@endsection