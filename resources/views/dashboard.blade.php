@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <h2 class="mb-4">🏠 Dashboard Aplikasi Nilai Siswa</h2>
    
    <div class="row g-4">
        <div class="col-md-3">
            <div class="card bg-primary text-white h-100">
                <div class="card-body">
                    <h5 class="card-title">Total Kelas</h5>
                    <h2 class="mb-0">{{ $totalKelas ?? 0 }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white h-100">
                <div class="card-body">
                    <h5 class="card-title">Total Siswa</h5>
                    <h2 class="mb-0">{{ $totalSiswa ?? 0 }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-white h-100">
                <div class="card-body">
                    <h5 class="card-title">Total Guru</h5>
                    <h2 class="mb-0">{{ $totalGuru ?? 0 }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-info text-white h-100">
                <div class="card-body">
                    <h5 class="card-title">Total Mapel</h5>
                    <h2 class="mb-0">{{ $totalMapel ?? 0 }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection