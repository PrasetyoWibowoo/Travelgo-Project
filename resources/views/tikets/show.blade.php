@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="font-bold">Detail Tiket</h1>
    <p>Nama: {{ $tiket->nama }}</p>
    <p>Kendaraan: {{ $tiket->kendaraan }}</p>
    <p>Jumlah: {{ $tiket->jumlah }}</p>
    <p>Tujuan: {{ $tiket->tujuan ?? 'Tidak ada tujuan' }}</p>
    <p>Status: Tiket telah dipesan</p>
    <!-- Tidak ada tombol pemesanan di sini -->
</div>
@endsection