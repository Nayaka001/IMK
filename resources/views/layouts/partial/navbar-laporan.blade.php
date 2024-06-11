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
</div>

<!-- <script>
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

        setActiveButton('penjualanButton');
    });
</script> -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Function to add 'border-2 border-solid' class to active button
        function setActiveButton(buttonId) {
            // Reset all buttons to default state
            resetOtherButtons(buttonId);

            // Activate the specified button
            const button = document.getElementById(buttonId);
            if (button) {
                button.classList.add('border-2', 'border-solid');
            }
        }

        // Function to reset specific buttons to default state
        function resetOtherButtons(activeButtonId) {
            const buttonIds = ['penjualanButton', 'pengeluaranButton'];

            buttonIds.forEach(id => {
                if (id !== activeButtonId) {
                    const button = document.getElementById(id);
                    if (button) {
                        button.classList.remove('border-2', 'border-solid');
                    }
                }
            });
        }

        // Event listeners to set active button based on current section
        document.getElementById('linkpenjualan').addEventListener('click', function() {
            setActiveButton('penjualanButton');
        });

        document.getElementById('linkpengeluaran').addEventListener('click', function() {
            setActiveButton('pengeluaranButton');
        });

        setActiveButton('penjualanButton'); // Set default active button
    });
</script>