 <!-- sidenav  -->
 <aside class="max-w-62.5 ease-nav-brand z-10 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
      <div class="h-19.5">
        <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
          <img src="/assets/img/logo.jpg" class="inline h-full max-w-full rounded-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
          <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Home Steak Annisa</span>
        </a>
      </div>

      <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

      <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ request()->routeIs('index.admin') ? 'bg-[#cfdbd5] rounded-lg font-semibold text-slate-700' : '' }}" href="{{ route('index.admin') }}">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#cfdbd5] bg-center stroke-0 text-center xl:p-2.5 {{ request()->routeIs('index.admin') ? 'bg-gradient-to-tl from-[#000000] to-[#CCCCBD]' : '' }}">
                <i class="fas fa-home text-lg text-gray-700 {{ request()->routeIs('index.admin') ? 'text-white' : '' }}"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ request()->routeIs('daftar-akun') ? 'bg-[#cfdbd5] rounded-lg font-semibold text-slate-700' : '' }}" href="{{ route('daftar-akun') }}">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#cfdbd5] bg-center stroke-0 text-center xl:p-2.5 {{ request()->routeIs('daftar-akun') ? 'bg-gradient-to-tl from-[#000000] to-[#CCCCBD]' : '' }}">
                <i class="fa fa-user-plus text-lg text-gray-700 {{ request()->routeIs('daftar-akun') ? 'text-white' : '' }}"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Pendaftaran Akun</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ request()->routeIs('user', 'user-pelayan', 'user-kitchen', 'user-bartender', 'user-kasir') ? 'bg-[#cfdbd5] rounded-lg font-semibold text-slate-700' : '' }}" href="{{ route('user', 'user-pelayan', 'user-kitchen', 'user-bartender', 'user-kasir') }}">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#cfdbd5] bg-center stroke-0 text-center xl:p-2.5 {{ request()->routeIs('user', 'user-pelayan', 'user-kitchen', 'user-bartender', 'user-kasir') ? 'bg-gradient-to-tl from-[#000000] to-[#CCCCBD]' : '' }}">
                <i class="fa fa-users text-lg text-gray-700 {{ request()->routeIs('user', 'user-pelayan', 'user-kitchen', 'user-bartender', 'user-kasir') ? 'text-white' : '' }}"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Karyawan</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ request()->routeIs('menu') ? 'bg-[#cfdbd5] rounded-lg font-semibold text-slate-700' : '' }}" href="{{ route('menu') }}">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#cfdbd5] bg-center stroke-0 text-center xl:p-2.5 {{ request()->routeIs('menu') ? 'bg-gradient-to-tl from-[#000000] to-[#CCCCBD]' : '' }}">
                <i class="fa fa-pizza-slice text-lg text-gray-700 {{ request()->routeIs('menu') ? 'text-white' : '' }}"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Menu</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ request()->routeIs('meja') ? 'bg-[#cfdbd5] rounded-lg font-semibold text-slate-700' : '' }}" href="{{ route('meja') }}">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#cfdbd5] bg-center stroke-0 text-center xl:p-2.5 {{ request()->routeIs('meja') ? 'bg-gradient-to-tl from-[#000000] to-[#CCCCBD]' : '' }}">
                <i class="fas fa-table text-lg text-gray-700 {{ request()->routeIs('meja') ? 'text-white' : '' }}"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Data Meja</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ request()->routeIs('laporan-penjualan') ? 'bg-[#cfdbd5] rounded-lg font-semibold text-slate-700' : '' }}" href="{{ route('laporan-penjualan') }}">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#cfdbd5] bg-center stroke-0 text-center xl:p-2.5 {{ request()->routeIs('laporan-penjualan') ? 'bg-gradient-to-tl from-[#000000] to-[#CCCCBD]' : '' }}">
                <i class="fas fa-file-archive text-lg text-gray-700 {{ request()->routeIs('laporan-penjualan') ? 'text-white' : '' }}"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Laporan</span>
            </a>
          </li>

          <!-- <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ request()->routeIs('laporan-pendapatan') ? 'bg-[#cfdbd5] rounded-lg font-semibold text-slate-700' : '' }}" href="{{ route('laporan-pendapatan') }}">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#cfdbd5] bg-center stroke-0 text-center xl:p-2.5 {{ request()->routeIs('laporan-pendapatan') ? 'bg-gradient-to-tl from-[#000000] to-[#CCCCBD]' : '' }}">
                <i class="fa fa-utensils text-lg text-gray-700 {{ request()->routeIs('laporan-pendapatan') ? 'text-white' : '' }}"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Laporan Pendapatan</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="./pages/tables.html">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#cfdbd5] bg-center stroke-0 text-center xl:p-2.5">
                <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>office</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(153.000000, 2.000000)">
                          <path class="fill-slate-800 opacity-60" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                          <path class="fill-slate-800" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Laporan Pengeluaran</span>
            </a>
          </li> -->

          <li class="w-full mt-4">
            <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60">Account pages</h6>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ request()->routeIs('profile') ? 'bg-[#cfdbd5] rounded-lg font-semibold text-slate-700' : '' }}" href="{{ route('profile') }}">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-[#cfdbd5] bg-center stroke-0 text-center xl:p-2.5 {{ request()->routeIs('profile') ? 'bg-gradient-to-tl from-[#000000] to-[#CCCCBD]' : '' }}">
                <i class="fa fa-utensils text-lg text-gray-700 {{ request()->routeIs('profile') ? 'text-white' : '' }}"></i>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Profile</span>
            </a>
          </li>

          <!-- <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="./pages/sign-in.html">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>document</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(154.000000, 300.000000)">
                          <path class="fill-slate-800 opacity-60" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"></path>
                          <path class="fill-slate-800" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Sign In</span>
            </a>
          </li>

          <li class="mt-0.5 w-full">
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="./pages/sign-up.html">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                <svg width="12px" height="20px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>spaceship</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(4.000000, 301.000000)">
                          <path
                            class="fill-slate-800"
                            d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"
                          ></path>
                          <path class="fill-slate-800 opacity-60" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                          <path class="fill-slate-800 opacity-60" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z"></path>
                          <path class="fill-slate-800 opacity-60" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Sign Up</span>
            </a>
          </li> -->
        </ul>
      </div>
      
</aside>

    <!-- end sidenav -->

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
      <!-- Navbar -->
      <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 sm:px-0 py-1 mx-auto flex-wrap-inherit">
          <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
              <li class="text-sm leading-normal">
                <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
              </li>
              @if (request()->routeIs('index.admin'))
              <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Dashboard</li>
              @elseif (request()->routeIs('user') || request()->routeIs('user-pelayan') || request()->routeIs('user-kitchen') || request()->routeIs('user-bartender') || request()->routeIs('kasir'))
              <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Karyawan</li>
              @elseif (request()->routeIs('daftar-akun'))
              <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Pendaftaran Akun</li>
              @elseif (request()->routeIs('menu'))
              <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Menu</li>
              @elseif (request()->routeIs('meja'))
              <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Meja</li>
              @elseif (request()->routeIs('laporan-penjualan'))
              <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Laporan Penjualan</li>
              @elseif (request()->routeIs('laporan-pendapatan'))
              <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Laporan Pendapatan</li>
              @endif
            </ol>
            @if (request()->routeIs('index.admin'))
            <h6 class="mb-0 font-bold capitalize">Dashboard</h6>
            @elseif (request()->routeIs('user') || request()->routeIs('user-pelayan') || request()->routeIs('user-kitchen') || request()->routeIs('user-bartender') || request()->routeIs('kasir'))
            <h6 class="mb-0 font-bold capitalize">Karyawan</h6>
            @elseif (request()->routeIs('daftar-akun'))
            <h6 class="mb-0 font-bold capitalize">Pendaftaran Akun</h6>
            @elseif (request()->routeIs('menu'))
            <h6 class="mb-0 font-bold capitalize">Data Menu</h6>
            @elseif (request()->routeIs('meja'))
            <h6 class="mb-0 font-bold capitalize">Data Meja</h6>
            @elseif (request()->routeIs('laporan-penjualan'))
            <h6 class="mb-0 font-bold capitalize">Laporan Penjualan</h6>
            @elseif (request()->routeIs('laporan-pendapatan'))
            <h6 class="mb-0 font-bold capitalize">Laporan Pendapatan</h6>
            @endif
          </nav>

          <div class="flex items-center md:ml-auto ml-0 pr-0">
            <h5 class="text-center text-sm text-slate-500">Kamis, 9 Mei 2024</h5>
          </div>

          <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-0 md:mr-0 lg:flex lg:basis-auto justify-end">
            <!-- @if (request()->routeIs('index.admin'))
            <div class="flex items-center md:ml-auto md:pr-4">
              <select class="inline-block px-0.5 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-2 border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-black text-black hover:opacity-75">
                <option value="option1">Daily</option>
                <option value="option2">Weekly</option>
                <option value="option3">Monthly</option>
              </select>
            </div>
            @endif
            <div class="flex items-center md:ml-auto md:pr-4">
              <span class="inline-block p-2 m-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-2 border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-black text-black hover:opacity-75">
                Logout
              </span>
            </div> -->
            <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full md:pr-4">
              <!-- online builder btn  -->
              <!-- <li class="flex items-center">
                <a class="inline-block px-8 py-2 mb-0 mr-4 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro border-fuchsia-500 ease-soft-in hover:scale-102 active:shadow-soft-xs text-fuchsia-500 hover:border-fuchsia-500 active:bg-fuchsia-500 active:hover:text-fuchsia-500 hover:text-fuchsia-500 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
              </li> -->
              @if (request()->routeIs('index.admin') || request()->routeIs('laporan-penjualan') || request()->routeIs('laporan-pendapatan'))
              <div class="flex items-center ml-2 md:ml-auto md:pr-4">
                <select class="inline-block px-0.5 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-2 border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-black text-black hover:opacity-75">
                  <option value="option1">Daily</option>
                  <option value="option2">Weekly</option>
                  <option value="option3">Monthly</option>
                </select>
              </div>
              @endif
              <div class="flex items-center ml-2 md:ml-auto md:pr-4">
                <span id="logoutBtn" class="inline-block p-2 m-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-2 border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-black text-black hover:opacity-75">
                  Logout
                </span>

                  <!-- The Modal -->
                  <div id="myModal" class="modal flex">
                      <!-- Modal content -->
                        <div class="modal-content relative z-10">
                          <span class="close absolute top-4 right-4">&times;</span>
                          <div class="flex-auto p-6">
                            <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                              <h5><i class="fas fa-bell w-60 h-60 mr-2 text-xl"></i>Apakah anda yakin ingin keluar?</h5>
                              <div class="w-full mt-2 h-1 bg-slate-700 rounded"></div>
                            </div>
                            <!-- <p class="text-center">Username, password, dan posisi karyawan yang Anda masukkan tidak dapat diubah lagi jika data telah disimpan.</p> -->
                            <div class="flex flex-none md:w-full space-y-4 md:space-y-0 justify-end text-right">
                              <div class="w-full text-right col-span-2 mx-2 md:ml-auto">
                              <a id="cancelButton" class="inline-block w-1/6 px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Batal</a>
                                <button type="submit" class="inline-block w-1/6 px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Keluar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>



              </div>
              <li class="flex items-center ml-2">
                <a href="{{ route('profile') }}" class="block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand text-slate-500">
                  <i class="fa fa-user sm:mr-1"></i>
                  <span class="hidden sm:inline">Admin</span>
                </a>
              </li>
              <li class="flex items-center pl-4 xl:hidden">
                <a href="javascript:;" class="block p-0 text-sm transition-all ease-nav-brand text-slate-500" sidenav-trigger>
                  <div class="w-4.5 overflow-hidden">
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                    <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                    <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                  </div>
                </a>
              </li>
              <li class="flex items-center px-4">
                <a href="javascript:;" class="p-0 text-sm transition-all ease-nav-brand text-slate-500">
                  <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog"></i>
                  <!-- fixed-plugin-button-nav  -->
                </a>
              </li>

              <!-- notifications -->

              
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- end Navbar -->

      <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("logoutBtn");

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