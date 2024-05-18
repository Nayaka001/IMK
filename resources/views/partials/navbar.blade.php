@extends('layouts.main')

<div class="fixed">
    <div class="w-20 h-screen bg-[#2C2C2C] flex flex-col rounded-3xl sm:w-28">
        <img src="/img/logo1.png" alt="" class="-mt-3 sm:-mt-7">
        <div class="flex-col justify-between">
            <a href="{{ route('index.menu') }}">
                <div class="items-center group py-1 w-16 h-14 mx-auto hover:bg-[#FFD369] hover:rounded-xl sm:w-20 sm:h-16 {{ request()->routeIs('index.menu') ? 'bg-[#FFD369] rounded-xl' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 30 30" fill="none" class="mx-auto">
                        <path d="M1.25 27.475C1.25 28.175 1.8125 28.7375 2.5125 28.7375H18.75C19.45 28.7375 20.0125 28.175 20.0125 27.475V26.25H1.25V27.475ZM10.625 11.2375C5.9375 11.2375 1.25 13.75 1.25 18.75H20C20 13.75 15.3125 11.2375 10.625 11.2375ZM4.525 16.25C5.9125 14.3125 8.8625 13.7375 10.625 13.7375C12.3875 13.7375 15.3375 14.3125 16.725 16.25H4.525ZM1.25 21.25H20V23.75H1.25V21.25ZM22.5 6.25V1.25H20V6.25H13.75L14.0375 8.75H25.9875L24.2375 26.25H22.5V28.75H24.65C25.7 28.75 26.5625 27.9375 26.6875 26.9125L28.75 6.25H22.5Z" fill="#FFFFF0"/>
                      </svg>                    
                    <h5 class="text-white mt-1 text-center text-[13px] group-hover:text-black {{ request()->routeIs('index.menu') ? 'text-black' : '' }}">Menu</h5>
                </div>
            </a>
            <a href="{{ route('new-order') }}">
                <div class="items-center group my-10 py-1 w-16 h-14 mx-auto hover:bg-[#FFD369] hover:rounded-xl sm:w-20 sm:h-16 {{ request()->routeIs('new-order') ? 'bg-[#FFD369] rounded-xl' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 35 36" fill="none" class="mx-auto">
                        <path d="M4.27832 12.4526H20.32V15.3826H4.27832V12.4526ZM4.27832 9.52254H20.32V6.59253H4.27832V9.52254ZM4.27832 21.2426H14.4867V18.3126H4.27832V21.2426ZM26.1679 16.6571L27.2033 15.617C27.7721 15.0456 28.6908 15.0456 29.2596 15.617L30.295 16.6571C30.8637 17.2285 30.8637 18.1514 30.295 18.7228L29.2596 19.7629L26.1679 16.6571ZM25.1325 17.6973L17.4033 25.4618V28.5676H20.495L28.2242 20.8031L25.1325 17.6973Z" fill="#FFFFF0"/>
                    </svg>
                    <h5 class="text-white text-center text-[13px] group-hover:text-black {{ request()->routeIs('new-order') ? 'text-black' : '' }}">New Order</h5>
                </div>
            </a>
            <a href="{{ route('order-list') }}">
                <div class="items-center group my-10 py-1 w-16 h-14 mx-auto hover:bg-[#FFD369] hover:rounded-xl sm:w-20 sm:h-16 {{ request()->routeIs('order-list') ? 'bg-[#FFD369] rounded-xl' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 33 35" fill="none" class="mx-auto">
                        <path d="M15.125 9.92578H23.375V12.7617H15.125V9.92578ZM15.125 15.5977H23.375V18.4336H15.125V15.5977ZM15.125 21.2695H23.375V24.1055H15.125V21.2695ZM9.625 9.92578H12.375V12.7617H9.625V9.92578ZM9.625 15.5977H12.375V18.4336H9.625V15.5977ZM9.625 21.2695H12.375V24.1055H9.625V21.2695ZM27.6375 4.25391H5.3625C4.675 4.25391 4.125 4.82109 4.125 5.53008V28.5012C4.125 29.0684 4.675 29.7773 5.3625 29.7773H27.6375C28.1875 29.7773 28.875 29.0684 28.875 28.5012V5.53008C28.875 4.82109 28.1875 4.25391 27.6375 4.25391ZM26.125 26.9414H6.875V7.08984H26.125V26.9414Z" fill="#FFFFF0"/>
                    </svg>
                    <h5 class="text-white text-center text-[13px] group-hover:text-black {{ request()->routeIs('order-list') ? 'text-black' : '' }}">Order List</h5>
                </div>
            </a>
            <a href="{{ route('report') }}">
                <div class="items-center group my-10 py-1 w-16 h-14 mx-auto hover:bg-[#FFD369] hover:rounded-xl sm:w-20 sm:h-16 {{ request()->routeIs('report') ? 'bg-[#FFD369] rounded-xl' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 35 35" fill="none" class="mx-auto">
                        <path d="M10.2083 23.3333H20.4167V26.25H10.2083V23.3333ZM10.2083 17.5H24.7917V20.4166H10.2083V17.5ZM10.2083 11.6666H24.7917V14.5833H10.2083V11.6666ZM27.7083 5.83329H21.6125C21 4.14163 19.3958 2.91663 17.5 2.91663C15.6042 2.91663 14 4.14163 13.3875 5.83329H7.29167C7.0875 5.83329 6.89792 5.84788 6.70833 5.89163C6.13958 6.00829 5.62917 6.29996 5.23542 6.69371C4.97292 6.95621 4.75417 7.27704 4.60833 7.62704C4.4625 7.96246 4.375 8.34163 4.375 8.74996V29.1666C4.375 29.5604 4.4625 29.9541 4.60833 30.3041C4.75417 30.6541 4.97292 30.9604 5.23542 31.2375C5.62917 31.6312 6.13958 31.9229 6.70833 32.0395C6.89792 32.0687 7.0875 32.0833 7.29167 32.0833H27.7083C29.3125 32.0833 30.625 30.7708 30.625 29.1666V8.74996C30.625 7.14579 29.3125 5.83329 27.7083 5.83329ZM17.5 5.46871C18.0979 5.46871 18.5938 5.96454 18.5938 6.56246C18.5938 7.16038 18.0979 7.65621 17.5 7.65621C16.9021 7.65621 16.4063 7.16038 16.4063 6.56246C16.4063 5.96454 16.9021 5.46871 17.5 5.46871ZM27.7083 29.1666H7.29167V8.74996H27.7083V29.1666Z" fill="#FFFFF0"/>
                    </svg>
                    <h5 class="text-white text-center text-[13px] group-hover:text-black {{ request()->routeIs('report') ? 'text-black' : '' }}">Report</h5>
                </div>
            </a>
        </div>
    </div>
</div>