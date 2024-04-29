<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="h-screen m-0 bg-cover object-center object-cover bg-no-repeat bg-fixed flex" style="background-image: url(img/login.jpg) ">
        <div class="w-3/4 h-3/4 bg-black bg-opacity-40 m-auto md:flex md:justify-between ">
            <div class="text-white px-5 md:w-1/2">
                <h1 class="text-white text-4xl font-bold text-center mt-5">LOGIN</h1>
                <form action="{{route('login.login')}}" method="POST">
                    @csrf
                    <label for="username" class="mx-10">
                        <span class="block font-semibold mb-1 after:content-['*'] after:text-pink-500 after:ml-0.5">Username</span>
                        <input type="text" id="username" placeholder="masukkan username" class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 text-black focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 " required/>
                        <p class="pt-1 text-xs">Username tidak valid</p>
                    </label>
                    <label for="password">
                        <span class="block font-semibold mb-1 after:content-['*'] after:text-pink-500 after:ml-0.5">Password</span>
                        <input type="password" id="password" placeholder="masukkan password" class="px-3 py-2 border shadow rounded w-full block text-sm text-black placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500" required/>
                         <p class="pt-1 text-xs">Password tidak valid</p>
                    </label>
                    <button id="submitBtn" class="my-28 outline outline-[#FFEA00] px-5 py-2 rounded-full text-white font-semibold font-inter block mx-auto w-full hover:bg-[#FFEA00] hover:text-black focus:ring focus:ring-yellow-300" type="submit">Login</button>
                </form>
                
            </div>
            <div class="hidden md:flex md:w-1/2 md:mx-0 md:justify-end">
                <img src="img/logo.jpg" alt="">
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>