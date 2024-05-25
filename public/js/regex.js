document.addEventListener('DOMContentLoaded', function () {
    const namaPelangganInput = document.getElementById('nama-pelanggan');
    const jumlahOrangInput = document.getElementById('jumlah-orang');

    const namaError = document.getElementById('nama-error');
    const jumlahError = document.getElementById('jumlah-error');

    // Regex for validation
    const namaRegex = /^[a-zA-Z\s]+$/;  // Hanya huruf dan spasi
    const jumlahRegex = /^[1-9]\d*$/;  // Angka lebih dari 0

    // Function to validate Nama Pelanggan
    function validateNamaPelanggan() {
        if (!namaRegex.test(namaPelangganInput.value)) {
            namaError.classList.remove('invisible');
        } else {
            namaError.classList.add('invisible');
        }
    }

    // Function to validate Jumlah Orang
    function validateJumlahOrang() {
        if (!jumlahRegex.test(jumlahOrangInput.value)) {
            jumlahError.classList.remove('invisible');
        } else {
            jumlahError.classList.add('invisible');
        }
    }

    // Add event listeners
    namaPelangganInput.addEventListener('input', validateNamaPelanggan);
    jumlahOrangInput.addEventListener('input', validateJumlahOrang);
});
