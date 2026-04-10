@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Daftar Nilai Siswa</h5>
        <a href="{{ route('nilai.create') }}" class="btn btn-primary btn-sm">+ Input Nilai Baru</a>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>NIS - Nama Siswa</th>
                    <th>Mata Pelajaran</th>
                    <th>Guru Pengampu</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($nilai as $n)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $n->siswa->nis }} - {{ $n->siswa->nama }}</td>
                    <td>{{ $n->mapel->mapel }}</td>
                    <td>{{ $n->guru->nama }}</td>
                    <td>
                        <span class="badge {{ $n->nilai >= 75 ? 'bg-success' : 'bg-danger' }}">
                            {{ $n->nilai }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection