@extends('layouts.main')

@section('container')

    <div class="container my-5 p-3 bg-white w-80 mx-auto">
        <div class="mb-8 text-center">
            <h3 class="font-bold text-lg">Homesteak Annisa</h3>
            <p>Jl. Air Bersih Ujung Gang Jati</p>
        </div>
        <hr class="border border-dashed border-black">
        <hr class="border border-dashed border-black mt-0.5">
        <div class="my-3">
            <div class="flex justify-between">
                <p>No Order</p>
                <p>001</p>
            </div>
            <div class="flex justify-between">
                <p>Kasir</p>
                <p>Nayaka</p>
            </div>
            <div class="flex justify-between">
                <p>Waktu</p>
                <p>28 Mei 2024 12.01 PM</p>
            </div>
            <div class="flex justify-between">
                <p>Nama Pelanggan</p>
                <p>Fildza</p>
            </div>
            <div class="flex justify-between">
                <p>Jenis Pesanan</p>
                <p>Makan di Tempat</p>
            </div>
        </div>
        <hr class="border border-dashed border-black">
        <div class="my-3">
            {{-- menu --}}
            <div>
                <p>Chicken Steak</p>
                <div class="flex gap-6 justify-between">
                    <div class="flex gap-5">
                        <p>1</p>
                        <p>X</p>
                        <p>15.000</p>
                    </div>
                    <p>Rp 15.000</p>
                </div>
            </div>
            {{-- menu --}}
            <div>
                <p>Chicken Steak</p>
                <div class="flex gap-6 justify-between">
                    <div class="flex gap-5">
                        <p>1</p>
                        <p>X</p>
                        <p>15.000</p>
                    </div>
                    <p>Rp 15.000</p>
                </div>
            </div>
        </div>
        <hr class="border border-dashed border-black">
        <div class="my-3">
            <div class="flex justify-between">
                <p class="font-bold">Total</p>
                <p class="font-bold">Rp 30.000</p>
            </div>
            <div class="flex justify-between">
                <p>Bayar (Cash)</p>
                <p>Rp 50.000</p>
            </div>
            <div class="flex justify-between">
                <p>Kembali</p>
                <p>Rp 20.000</p>
            </div>
        </div>
        <hr class="border border-dashed border-black">
        <hr class="border border-dashed border-black mt-0.5">
        <h1 class="font-bold text-lg my-5 text-center">Thank You</h1>
    </div>

    <script>
        window.print();
    </script>

@endsection



