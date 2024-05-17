@extends('layouts.main')

@section('container')

<div class="flex overflow-x-hidden">

        @include('partials.navbar')

        <div class="w-full my-7 ml-24 mr-7 sm:ml-36">
            <div class="w-3/4 flex justify-between gap-6 md:w-5/6 lg:w-full">
                <form action="" class="w-full">
                    <div class="flex items-center">
                        <input type="search" placeholder="Search" class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 peer "/>
                        <button class="items-center mx-3">
                            <ion-icon name="search-outline" size="small"></ion-icon>
                        </button>
                    </div>
                </form>
                <ion-icon name="person-circle-outline" class="flex items-center text-5xl -ml-7 -mr-3 -mt-1"></ion-icon>
                <div class="text-center items-center">
                    <h1 class="text-sm">Sadtria</h1>
                    <p class="text-xs text-slate-500">Cashier</p>
                </div>
            </div>
            <div class="w-3/4 flex justify-between my-5 overflow-x-scroll sm:w-4/5 md:w-11/12 lg:w-full lg:overflow-visible">
                <a href="/menu">
                    <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">All</div>
                </a>
                <a href="/menu/kids">
                    <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Kids Meal</div>
                </a>
                <a href="/menu/sayuran">
                    <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Sayuran</div>
                </a>
                <a href="/menu/steak">
                    <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Steaks & Hotplates</div>
                </a>
                <a href="/menu/rice">
                    <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold ">Rice Hotplate</div>
                </a>
                <a href="/menu/geprek">
                    <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Geprek</div>
                </a>
                <a href="/menu/cemilan">
                    <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold">Cemilan</div>
                </a>
                <a href="/menu/minuman">
                    <div class="rounded-2xl bg-[#FFD369] w-fit px-3 py-2 shadow-md mx-2 font-bold ">Minuman</div>
                </a>
            </div>

            <h1 class="text-3xl font-bold ml-3 pt-4">Tea & Lime</h1>
            <hr class="mt-5 w-full mx-3">

            <div class="mt-10 w-full mx-auto container gap-6 flex flex-wrap sm:justify-start">
                <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                    <img src="https://source.unsplash.com/600x400" alt="Image Caption" class="w-full">
                    <div class="px-2 py-2">
                      <div class="font-bold text-lg mb-1">Chicken Steak</div>
                      <p class="text-xs mb-1 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, libero!</p>
                      <h1 class="font-bold mt-1 text-lg ">Rp 15.000</h1>
                    </div>
                </div>
                <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                    <img src="https://source.unsplash.com/600x400" alt="Image Caption" class="w-full">
                    <div class="px-2 py-2">
                      <div class="font-bold text-lg mb-1">Chicken Steak</div>
                      <p class="text-xs mb-1 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, libero!</p>
                      <h1 class="font-bold mt-1 text-lg">Rp 15.000</h1>
                    </div>
                </div>
                <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                    <img src="https://source.unsplash.com/600x400" alt="Image Caption" class="w-full">
                    <div class="px-2 py-2">
                      <div class="font-bold text-lg mb-1">Chicken Steak</div>
                      <p class="text-xs mb-1 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, libero!</p>
                      <h1 class="font-bold mt-1 text-lg">Rp 15.000</h1>
                    </div>
                </div>
                <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                    <img src="https://source.unsplash.com/600x400" alt="Image Caption" class="w-full">
                    <div class="px-2 py-2">
                      <div class="font-bold text-lg mb-1">Chicken Steak</div>
                      <p class="text-xs mb-1 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, libero!</p>
                      <h1 class="font-bold mt-1 text-lg">Rp 15.000</h1>
                    </div>
                </div>
            </div>

            <h1 class="text-3xl font-bold ml-3 mt-3">Other Beverages</h1>
            <hr class="mt-5 w-full mx-3">

            <div class="mt-10 w-full mx-auto container gap-6 flex flex-wrap sm:justify-start">
                <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                    <img src="https://source.unsplash.com/600x400" alt="Image Caption" class="w-full">
                    <div class="px-2 py-2">
                      <div class="font-bold text-lg mb-1">Chicken Steak</div>
                      <p class="text-xs mb-1 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, libero!</p>
                      <h1 class="font-bold mt-1 text-lg ">Rp 15.000</h1>
                    </div>
                </div>
                <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                    <img src="https://source.unsplash.com/600x400" alt="Image Caption" class="w-full">
                    <div class="px-2 py-2">
                      <div class="font-bold text-lg mb-1">Chicken Steak</div>
                      <p class="text-xs mb-1 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, libero!</p>
                      <h1 class="font-bold mt-1 text-lg">Rp 15.000</h1>
                    </div>
                </div>
                <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                    <img src="https://source.unsplash.com/600x400" alt="Image Caption" class="w-full">
                    <div class="px-2 py-2">
                      <div class="font-bold text-lg mb-1">Chicken Steak</div>
                      <p class="text-xs mb-1 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, libero!</p>
                      <h1 class="font-bold mt-1 text-lg">Rp 15.000</h1>
                    </div>
                </div>
                <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                    <img src="https://source.unsplash.com/600x400" alt="Image Caption" class="w-full">
                    <div class="px-2 py-2">
                      <div class="font-bold text-lg mb-1">Chicken Steak</div>
                      <p class="text-xs mb-1 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, libero!</p>
                      <h1 class="font-bold mt-1 text-lg">Rp 15.000</h1>
                    </div>
                </div>
            </div>

            <h1 class="text-3xl font-bold ml-3 mt-3">Milkshake</h1>
            <hr class="mt-5 w-full mx-3">

            <div class="mt-10 w-full mx-auto container gap-6 flex flex-wrap sm:justify-start">
                <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                    <img src="https://source.unsplash.com/600x400" alt="Image Caption" class="w-full">
                    <div class="px-2 py-2">
                      <div class="font-bold text-lg mb-1">Chicken Steak</div>
                      <p class="text-xs mb-1 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, libero!</p>
                      <h1 class="font-bold mt-1 text-lg ">Rp 15.000</h1>
                    </div>
                </div>
                <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                    <img src="https://source.unsplash.com/600x400" alt="Image Caption" class="w-full">
                    <div class="px-2 py-2">
                      <div class="font-bold text-lg mb-1">Chicken Steak</div>
                      <p class="text-xs mb-1 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, libero!</p>
                      <h1 class="font-bold mt-1 text-lg">Rp 15.000</h1>
                    </div>
                </div>
                <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                    <img src="https://source.unsplash.com/600x400" alt="Image Caption" class="w-full">
                    <div class="px-2 py-2">
                      <div class="font-bold text-lg mb-1">Chicken Steak</div>
                      <p class="text-xs mb-1 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, libero!</p>
                      <h1 class="font-bold mt-1 text-lg">Rp 15.000</h1>
                    </div>
                </div>
                <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                    <img src="https://source.unsplash.com/600x400" alt="Image Caption" class="w-full">
                    <div class="px-2 py-2">
                      <div class="font-bold text-lg mb-1">Chicken Steak</div>
                      <p class="text-xs mb-1 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, libero!</p>
                      <h1 class="font-bold mt-1 text-lg">Rp 15.000</h1>
                    </div>
                </div>
            </div>

            <h1 class="text-3xl font-bold ml-3 mt-3">Fresh Juice</h1>
            <hr class="mt-5 w-full mx-3">

            <div class="mt-10 w-full mx-auto container gap-6 flex flex-wrap sm:justify-start">
                <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                    <img src="https://source.unsplash.com/600x400" alt="Image Caption" class="w-full">
                    <div class="px-2 py-2">
                      <div class="font-bold text-lg mb-1">Chicken Steak</div>
                      <p class="text-xs mb-1 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, libero!</p>
                      <h1 class="font-bold mt-1 text-lg ">Rp 15.000</h1>
                    </div>
                </div>
                <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                    <img src="https://source.unsplash.com/600x400" alt="Image Caption" class="w-full">
                    <div class="px-2 py-2">
                      <div class="font-bold text-lg mb-1">Chicken Steak</div>
                      <p class="text-xs mb-1 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, libero!</p>
                      <h1 class="font-bold mt-1 text-lg">Rp 15.000</h1>
                    </div>
                </div>
                <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                    <img src="https://source.unsplash.com/600x400" alt="Image Caption" class="w-full">
                    <div class="px-2 py-2">
                      <div class="font-bold text-lg mb-1">Chicken Steak</div>
                      <p class="text-xs mb-1 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, libero!</p>
                      <h1 class="font-bold mt-1 text-lg">Rp 15.000</h1>
                    </div>
                </div>
                <div class="rounded-md shadow-lg overflow-hidden mb-7 bg-transparent w-1/3 md:w-80">
                    <img src="https://source.unsplash.com/600x400" alt="Image Caption" class="w-full">
                    <div class="px-2 py-2">
                      <div class="font-bold text-lg mb-1">Chicken Steak</div>
                      <p class="text-xs mb-1 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, libero!</p>
                      <h1 class="font-bold mt-1 text-lg">Rp 15.000</h1>
                    </div>
                </div>
            </div>

        </div>
@endsection