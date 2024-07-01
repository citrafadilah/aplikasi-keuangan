@extends('layout.index')
@section('titles', 'Dashboard - Aplikasi Keuangan')
@section('content')
<br>
<h1>Dashboard Aplikasi Keuangan</h1>
<br>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Pemasukan</div>
                <div class="card-body">
                    <h5 class="card-title">Total Pendapatan</h5>
                    <p class="card-text"></p>{{ $totalPemasukan }}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Pengeluaran</div>
                <div class="card-body">
                    <h5 class="card-title">Total Pengeluaran</h5>
                    <p class="card-text">{{ $totalPengeluaran }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Laporan</div>
                <div class="card-body">
                    <h5 class="card-title">Laporan Keuangan</h5>
                    <p class="card-text">Laporan keuangan bulan ini tersedia.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
