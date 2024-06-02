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
                <p>{{ $latestOrderId }}</p>
            </div>
            <div class="flex justify-between">
                <p>Kasir</p>
                <p>{{ auth()->user()->karyawan->nama }}</p>
            </div>
            <div class="flex justify-between">
                <p>Waktu</p>
                <p>{{$latestWaktuId}}</p>
            </div>
            <div class="flex justify-between">
                <p>Nama Pelanggan</p>
                <p>{{$pelangganid}}</p>
            </div>
            <div class="flex justify-between">
                <p>Jenis Pesanan</p>
                <p>{{$tipeid}}</p>
            </div>
        </div>
        <hr class="border border-dashed border-black">
        <div class="my-3">
            {{-- menu --}}
            @foreach($order_detail as $order)
            <div>
                <p>{{$order->menu->nama_menu}}</p>
                <div class="flex gap-6 justify-between">
                    <div class="flex gap-5">
                        <p>{{$order->jumlah}}</p>
                        <p>X</p>
                        <p>Rp {{ number_format($order->subtotal, 0, ',', '.') }}</p>
                    </div>
                    <p>Rp {{ number_format($order->jumlah * $order->subtotal, 0, ',', '.') }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <hr class="border border-dashed border-black">
        <div class="my-3">
            <div class="flex justify-between">
                <p class="font-bold">Total</p>
                <p class="font-bold">Rp {{ number_format($total_harga, 0, ',', '.') }}</p>
            </div>
            <div class="flex justify-between">
                <p>Bayar (Cash)</p>
                <p>Rp {{ number_format($bayarid, 0, ',', '.') }}</p>
            </div>
            <div class="flex justify-between">
                <p>Kembali</p>
                <p>Rp {{ number_format($kembaliid, 0, ',', '.') }}</p>
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



