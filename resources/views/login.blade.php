@extends('layouts.main')

@section('container')
    
<div class="h-screen m-0 bg-cover object-center object-cover bg-no-repeat flex bg-gradient-to-tr from-[#FFD369] to-[#FFFFFF]" >
    <svg xmlns="http://www.w3.org/2000/svg" width="294" height="240" viewBox="0 0 294 240" fill="none" class="z-0 -top-20 -left-5 absolute">
        <path d="M288.5 61C208 274.5 131 32 7.5 239.5C-106.547 239.5 -144 162.696 -144 55C-144 -52.6955 -51.5468 -140 62.5 -140C176.547 -140 320.738 -24.5 288.5 61Z" fill="#FDF6FD"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="300" height="200" viewBox="0 0 345 259" fill="none" class="z-0 absolute bottom-0 right-0">
        <path d="M413 195C413 302.696 320.547 390 206.5 390C92.4532 390 0 302.696 0 195C317 299.5 92.4532 0 206.5 0C320.547 0 413 87.3045 413 195Z" fill="#FDF6FD"/>
    </svg>
    <div class="w-5/6 h-5/6 bg-[#FFFFF0] rounded-[20px] m-auto md:flex md:justify-between z-20 md:h-[540px]">
        <div class="px-5 ml-5 md:w-1/2">
            <h1 class="text-[#FFD369] text-5xl font-bold text-center mt-10">LOGIN</h1>
                <form action="{{route('login.login')}}" method="POST">
                    @csrf
                    @if(session('loginerror'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <strong class="font-bold">Oops!</strong>
                            <span class="block sm:inline">{{ session('loginerror') }}</span>
                        </div>
                    @endif
                    <label for="username" class="mx-10">
                        <span class="block font-semibold mb-1">Username</span>
                        <input type="text" id="username" name="username" placeholder="masukkan username" class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 text-black focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500" required />
                        <p class="pt-1 text-xs"></p>
                    </label>
                    <label for="password">
                        <span class="block font-semibold mb-1">Password</span>
                        <input type="password" id="password" name="password" placeholder="masukkan password" class="px-3 py-2 border shadow rounded w-full block text-sm text-black placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500" required />
                        <p id="username" class="pt-1 text-xs"></p>
                    </label>
                    <button id="submitBtn" class="my-28 outline outline-[#FFD369] px-5 py-2 rounded-full text-black font-bold font-inter block mx-auto w-full hover:bg-[#FFD369] hover:text-amber-50 focus:ring focus:ring-[#FFD369]" type="submit">Login</button>
                    
                </form>
                
            </div>
            <div class="hidden md:flex md:w-1/2 md:mx-0 md:justify-end">
                <img src="img/bg2.png" alt="" class="md:object-cover">
            </div>
        </div>
    </div>
@endsection
