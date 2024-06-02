<div class="w-3/4 flex justify-start my-6 px-4 overflow-x-scroll sm:w-4/5 md:w-11/12 lg:w-full lg:overflow-visible">
        <div id="linkpenjualan">
            <span id="penjualanButton" style="background-color: #FFD369;" class="inline-block p-2 mr-4 m-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent {{ request()->routeIs('user') ? 'border-2 border-solid' : '' }} rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 bg-gray-500 border-black text-black hover:opacity-75">
                Laporan Penjualan
                <i class="fa fa-users text-lg text-gray-700 ml-2"></i>
            </span>
        </div>
        <div id="linkpengeluaran">
            <span id="pengeluaranButton" style="background-color: #FFD369;" class="inline-block p-2 m-2 mb-0 mx-4 font-bold text-center uppercase align-middle transition-all bg-transparent {{ request()->routeIs('user.pelayan') ? 'border-2 border-solid' : '' }} rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-black text-black hover:opacity-75">
                laporan Pengeluaran
                <i class="ni ni-single-02 text-lg text-gray-700 ml-2"></i>
            </span>
        </div>
        <!-- <div id="linkkitchen">
            <span id="kitchenButton" style="background-color: #FFD369;"  class="inline-block p-2 m-2 mx-4 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent {{ request()->routeIs('user-kitchen') ? 'border-2 border-solid' : '' }} rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-black text-black hover:opacity-75">
                Kitchen
                <i class="fa fa-utensils text-lg text-gray-700 ml-2"></i>
            </span>
        </div>
        <div id="linkbartender">
            <span id="bartenderButton" style="background-color: #FFD369;" class="inline-block p-2 m-2 mx-4 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent {{ request()->routeIs('user-bartender') ? 'border-2 border-solid' : '' }} rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-black text-black hover:opacity-75">
                Bartender
                <i class="fa fa-blender text-lg text-gray-700 ml-2"></i>
            </span>
        </div>
        <div id="linkkasir">
            <span id="kasirButton" style="background-color: #FFD369;" class="inline-block p-2 mx-4 m-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent {{ request()->routeIs('user-kasir') ? 'border-2 border-solid' : '' }} rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-black text-black hover:opacity-75">
                Kasir
                <i class="fa fa-cash-register text-lg text-gray-700 ml-2"></i>
            </span>
        </div>
    </a> -->





    <!-- <a href="/menu/kids">
        <span class="inline-block p-2 m-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border-2 border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs bg-150 active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25 border-orange text-black hover:opacity-75">
            Logout
        </span>
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
                    <div class="rounded-2xl bg-white w-fit px-3 py-2 shadow-md hover:bg-[#FFD369] mx-2 font-bold ">Minuman</div>
                </a> -->
</div>

<script>
    // JavaScript to toggle active styles based on current active section
    document.addEventListener("DOMContentLoaded", function() {
        // Function to add 'border-2 border-solid' class to active button
        function setActiveButton(buttonId) {
            // Reset all buttons to default state
            resetAllButtons();

            // Activate the specified button
            const button = document.getElementById(buttonId);
            if (button) {
                button.classList.add('border-2', 'border-solid');
            }
        }

        // Function to reset all buttons to default state
        function resetAllButtons() {
            const buttons = document.querySelectorAll('.inline-block');
            buttons.forEach(btn => {
                btn.classList.remove('border-2', 'border-solid');
            });
        }

        // Event listeners to set active button based on current section
        document.getElementById('linkpenjualan').addEventListener('click', function() {
            setActiveButton('penjualanButton');
        });

        document.getElementById('linkpengeluaran').addEventListener('click', function() {
            setActiveButton('pengeluaranButton');
        });

        // document.getElementById('linkkitchen').addEventListener('click', function() {
        //     setActiveButton('kitchenButton');
        // });

        // document.getElementById('linkbartender').addEventListener('click', function() {
        //     setActiveButton('bartenderButton');
        // });

        // document.getElementById('linkkasir').addEventListener('click', function() {
        //     setActiveButton('kasirButton');
        // });

        // Set initial active button based on current page or state
        // For example, if 'linkpelayan' is the active section initially:
        setActiveButton('penjualanButton');
    });
</script>