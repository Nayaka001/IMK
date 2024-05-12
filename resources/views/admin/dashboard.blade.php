@extends('layouts.main-admin')

@section('content')

<!-- cards -->
      <div class="w-full px-6 py-6 mx-auto">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3">
          <!-- card1 -->
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-gradient-to-b from-[#FFD369] to-[#FFFFFF] shadow-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-0 font-sans text-sm font-bold leading-normal">Menu</p>
                      <h5 class="mb-0 font-bold">
                        50
                        <span class="text-sm leading-normal font-weight-bolder text-lime-500"></span>
                      </h5>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-[#000000] to-[#CCCCBD]">
                      <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card2 -->
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-gradient-to-b from-[#FFD369] to-[#FFFFFF] shadow-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-0 font-sans text-sm font-semibold leading-normal">Kitchen</p>
                      <h5 class="mb-0 font-bold">
                        7
                        <span class="text-sm leading-normal font-weight-bolder text-lime-500"></span>
                      </h5>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-[#000000] to-[#CCCCBD]">
                      <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card3 -->
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-gradient-to-b from-[#FFD369] to-[#FFFFFF] shadow-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-0 font-sans text-sm font-semibold leading-normal">Bartender</p>
                      <h5 class="mb-0 font-bold">
                        8
                        <span class="text-sm leading-normal text-red-600 font-weight-bolder"></span>
                      </h5>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-[#000000] to-[#CCCCBD]">
                      <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card4 -->
          <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-gradient-to-b from-[#FFD369] to-[#FFFFFF] shadow-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-0 font-sans text-sm font-semibold leading-normal">Kasir</p>
                      <h5 class="mb-0 font-bold">
                        2
                        <span class="text-sm leading-normal font-weight-bolder text-lime-500"></span>
                      </h5>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-[#000000] to-[#CCCCBD]">
                      <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Row 2 -->
        <div class="flex flex-wrap mt-6 -mx-3">
            <div class="w-full max-w-full px-3 xl:w-2/3 xl:flex-none">
                <div class="flex flex-wrap -mx-3">

                    <!-- card 1 -->
                  <div class="w-full max-w-full mt-0 md:mt-0 lg:mt-o xl:mt-0 px-3 md:w-1/2 md:flex-none xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-gradient-to-br from-[#FFD369] to-[#FFFFFF] shadow-xl border-0 border-transparent border-solid rounded-2xl bg-clip-border">
                      <div class="p-4 mx-6 mb-0 text-center bg-transparent border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div class="w-16 h-16 text-center bg-center icon bg-transparent border-black border-2 border-solid shadow-soft-2xl rounded-xl">
                          <i class="relative text-black opacity-100 fas fa-landmark text-xl top-31/100"></i>
                        </div>
                      </div>
                      <div class="flex-auto p-4 pt-0 text-center">
                        <h6 class="mb-0 font-sans font-bold text-center">Total Pendapatan</h6>
                        <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
                        <h5 class="mb-0 font-bold text-black">+2.000.000</h5>
                      </div>
                    </div>
                  </div>
                  <!-- card 2 -->
                  <div class="w-full max-w-full mt-6 md:mt-0 lg:mt-0 xl:mt-0 px-3 md:w-1/2 md:flex-none xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-gradient-to-br from-[#FFD369] to-[#FFFFFF] shadow-xl border-0 border-transparent border-solid rounded-2xl bg-clip-border">
                      <div class="p-4 mx-6 mb-0 text-center bg-transparent border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div class="w-16 h-16 text-center bg-center icon bg-transparent border-black border-2 border-solid shadow-soft-2xl rounded-xl">
                          <i class="relative text-black opacity-100 fab fa-paypal text-xl top-31/100"></i>
                        </div>
                      </div>
                      <div class="flex-auto p-4 pt-0 text-center">
                        <h6 class="mb-0 font-sans font-bold text-center">Total Pengeluaran</h6>
                        <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
                        <h5 class="mb-0 font-bold text-black">700</h5>
                      </div>
                    </div>
                  </div>
                  <!-- card 3 -->
                  <div class="w-full max-w-full mt-6 md:mt-6 lg:mt-0 xl:mt-0 px-3 md:w-1/2 md:flex-none xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-gradient-to-br from-[#FFD369] to-[#FFFFFF] shadow-xl border-0 border-transparent border-solid rounded-2xl bg-clip-border">
                      <div class="p-4 mx-6 mb-0 text-center bg-transparent border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div class="w-16 h-16 text-center bg-center icon bg-transparent border-black border-2 border-solid shadow-soft-2xl rounded-xl">
                          <i class="relative text-black opacity-100 fas fa-landmark text-xl top-31/100"></i>
                        </div>
                      </div>
                      <div class="flex-auto p-4 pt-0 text-center">
                        <h6 class="mb-0 font-sans font-bold text-center">Total Penjualan</h6>
                        <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
                        <h5 class="mb-0 font-bold text-black">500</h5>
                      </div>
                    </div>
                  </div>
                  <!-- card 4 -->
                  <div class="w-full max-w-full mt-6 md:mt-6 lg:mt-0 xl:mt-0 px-3 md:w-1/2 md:flex-none xl:w-1/4">
                    <div class="relative flex flex-col min-w-0 break-words bg-gradient-to-br from-[#FFD369] to-[#FFFFFF] shadow-xl border-0 border-transparent border-solid rounded-2xl bg-clip-border">
                      <div class="p-4 mx-6 mb-0 text-center bg-transparent border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <div class="w-16 h-16 text-center bg-center icon bg-transparent border-black border-2 border-solid shadow-soft-2xl rounded-xl">
                          <i class="relative text-black opacity-100 fas fa-landmark text-xl top-31/100"></i>
                        </div>
                      </div>
                      <div class="flex-auto p-4 pt-0 text-center">
                        <h6 class="mb-0 font-sans font-bold text-center">Total Customer</h6>
                        <hr class="h-px my-4 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
                        <h5 class="mb-0 font-bold text-black">500</h5>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="w-full max-w-full mt-6 lg:w-full lg:flex-none">
                    <div class="border-black/12.5 shadow-soft-xl relative z-20 flex min-w-0 flex-col break-words rounded-2xl border-0 border-gray-400 border-solid bg-[#e8eddf] bg-transparent bg-clip-border">
                      <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-[#e8eddf] bg-transparent p-6 pb-0 font-semibold">
                        <h6>Statistik Pendapatan dan Pengeluaran</h6>
                        <p class="text-sm leading-normal">
                          <i class="fa fa-arrow-up text-lime-500"></i>
                          <span class="font-semibold">4% more</span> in 2024
                        </p>
                      </div>
                      <div class="flex-auto p-4">
                        <div>
                          <canvas id="chart-line" height="300"></canvas>
                        </div>
                      </div>
                    </div>
                  
                </div>

            </div>
            <div class="w-full max-w-full mt-6 px-3 md:mt-6 lg:mt-0 md:flex-none xl:w-1/3">
                <div class="relative flex flex-col h-full min-w-0 mb-6 break-words bg-[#e8eddf] bg-transparent border-0 border-gray-400 border-solid rounded-2xl shadow-soft-xl border-black/12.5 bg-clip-border">
                  <div class="p-6 px-4 pb-0 mb-0 bg-[#e8eddf] bg-transparent border-b-0 border-gray-400 border-solid rounded-t-2xl border-black/12.5">
                    <div class="flex flex-wrap -mx-3">
                      <div class="max-w-full px-3 md:w-1/2 md:flex-none">
                        <h6 class="mb-0 font-semibold">Menu Terlaris</h6>
                      </div>
                      <div class="flex-none w-1/2 max-w-full px-3 text-right">
                        <select class="inline-block px-0.5 py-2 mb-0 font-semibold text-center uppercase align-middle transition-all bg-transparent border-2 rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-slate-700 text-slate-700 hover:opacity-75">
                          <option value="" hidden selected>Filter Menu</option>
                          <option value="option1">Makanan</option>
                          <option value="option2">Minuman</option>
                          <option value="option3">Cemilan</option>
                        </select>
                      </div>
                      <!-- <div class="flex items-center justify-end max-w-full px-3 md:w-1/2 md:flex-none">
                        <i class="mr-2 far fa-calendar-alt"></i>
                        <small>23 - 30 March 2020</small>
                      </div> -->
                    </div>
                  </div>
                  <div class="flex-auto p-4 pt-6">
                    <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                      <li class="relative flex px-4 py-2 pl-0 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5] border-b border-solid border-transparent rounded-t-inherit rounded-xl shadow-xl shadow-slate-700">
                        <div class="flex items-center xl:w-1/6 align-middle px-2">
                          <span class="max-w-full py-1 px-2 mx-auto border border-black rounded-full text-black font-semibold">#1</span>
                        </div>
                        <div class="flex-col items-center xl:w-2/6">
                          <h6 class="max-w-full text-4xl text-slate-700 font-mono">Chicken Steak Double Max Bento</h6>
                          <span class="leading-normal font-mono text-sm text-slate-700">Rp 25.000</span>
                          <div class="flex border border-solid border-transparent border-black rounded-full p-0 w-1/4 my-2">
                            <span class="text-red-600 mx-auto">250</span>
                          </div>
                        </div>
                        <div class="flex flex-col items-center justify-center xl:w-3/6">
                          <img src="assets/img/menu1.jpg" alt="Description of Image" class=" rounded-lg h-16 w-16">
                        </div>
                      </li>
                      <li class="relative flex px-4 py-2 pl-0 mt-6 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5] border-b border-solid border-transparent rounded-t-inherit rounded-xl shadow-slate-700 shadow-xl">
                        <div class="flex items-center xl:w-1/6 align-middle px-2">
                          <span class="max-w-full py-1 px-2 mx-auto border border-black rounded-full text-black font-semibold">#2</span>
                        </div>
                        <div class="flex-col items-center xl:w-2/6">
                          <h6 class="max-w-full text-4xl text-slate-700 font-mono">Chicken Steak Double Max Bento</h6>
                          <span class="leading-normal font-mono text-sm text-slate-700">Rp 25.000</span>
                          <div class="flex border border-solid border-transparent border-black rounded-full p-0 w-1/4 my-2">
                            <span class="text-red-600 mx-auto">250</span>
                          </div>
                        </div>
                        <div class="flex flex-col items-center justify-center xl:w-3/6">
                          <img src="./assets/img/menu1.jpg" alt="Description of Image" class=" rounded-lg h-16 w-16">
                        </div>
                      </li>
                      <li class="relative flex px-4 py-2 pl-0 mt-6 bg-gradient-to-b from-[#FFD369] to-[#cfdbd5] border-b border-solid border-transparent rounded-t-inherit rounded-xl shadow-xl shadow-slate-700">
                        <div class="flex items-center xl:w-1/6 align-middle px-2">
                          <span class="max-w-full py-1 px-2 mx-auto border border-black rounded-full text-black font-semibold">#3</span>
                        </div>
                        <div class="flex-col items-center xl:w-2/6">
                          <h6 class="max-w-full text-4xl text-slate-700 font-mono">Chicken Steak Double Max Bento</h6>
                          <span class="leading-normal font-mono text-sm text-slate-700">Rp 25.000</span>
                          <div class="flex border border-solid border-transparent border-black rounded-full p-0 w-1/4 my-2">
                            <span class="text-red-600 mx-auto">250</span>
                          </div>
                        </div>
                        <div class="flex flex-col items-center justify-center xl:w-3/6">
                          <img src="./assets/img/menu1.jpg" alt="Description of Image" class=" rounded-lg h-16 w-16">
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

        </div>

        <!-- cards row 3 -->
        <!-- <div class="flex flex-wrap mt-6 -mx-3">
          <div class="w-full px-3 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-wrap -mx-3">
                  <div class="max-w-full px-3 lg:w-1/2 lg:flex-none">
                    <div class="flex flex-col h-full">
                      <p class="pt-2 mb-1 font-semibold">Built by developers</p>
                      <h5 class="font-bold">Soft UI Dashboard</h5>
                      <p class="mb-12">From colors, cards, typography to complex elements, you will find the full documentation.</p>
                      <a class="mt-auto mb-0 text-sm font-semibold leading-normal group text-slate-500" href="javascript:;">
                        Read More
                        <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                      </a>
                    </div>
                  </div>
                  <div class="max-w-full px-3 mt-12 ml-auto text-center lg:mt-0 lg:w-5/12 lg:flex-none">
                    <div class="h-full bg-gradient-to-tl from-purple-700 to-pink-500 rounded-xl">
                      <img src="./assets/img/shapes/waves-white.svg" class="absolute top-0 hidden w-1/2 h-full lg:block" alt="waves" />
                      <div class="relative flex items-center justify-center h-full">
                        <img class="relative z-20 w-full pt-6" src="./assets/img/illustrations/rocket-white.png" alt="rocket" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full max-w-full px-3 lg:w-5/12 lg:flex-none">
            <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border p-4">
              <div class="relative h-full overflow-hidden bg-cover rounded-xl" style="background-image: url('./assets/img/ivancik.jpg')">
                <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80"></span>
                <div class="relative z-10 flex flex-col flex-auto h-full p-4">
                  <h5 class="pt-2 mb-6 font-bold text-white">Work with the rockets</h5>
                  <p class="text-white">Wealth creation is an evolutionarily recent positive-sum game. It is all about who take the opportunity first.</p>
                  <a class="mt-auto mb-0 text-sm font-semibold leading-normal text-white group" href="javascript:;">
                    Read More
                    <i class="fas fa-arrow-right ease-bounce text-sm group-hover:translate-x-1.25 ml-1 leading-normal transition-all duration-200"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div> -->

        <!-- cards row 4 -->

        <footer class="pt-4">
          <div class="w-full px-6 mx-auto">
            <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
              <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                  ©
                  <script>
                    document.write(new Date().getFullYear() + ",");
                  </script>
                  made with <i class="fa fa-heart"></i> by
                  <span class="font-semibold text-red-500" target="_blank">Kelompok 2</span>
                  for
                  <span class="font-semibold text-slate-700">Home Steak Annisa</span>.
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <!-- end cards -->

@endsection('content')