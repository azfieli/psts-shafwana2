@extends('layouts.app')

@section('content')
<div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Daftar Guru</h5>
        <a href="{{ route('guru.create') }}" class="btn btn-primary btn-sm">Tambah Guru</a>
    </div>
    <div class="card-body">
        <table class="table table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Foto</th>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th>Jenis Kelamin</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($guru as $g)
                <tr>
                    <td>
                        @if($g->foto)
                            <img src="{{ asset('storage/'.$g->foto) }}" width="50" height="50" class="rounded-circle" style="object-fit: cover;">
                        @else
                            <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center" style="width:50px; height:50px;">?</div>
                        @endif
                    </td>
                    <td>{{ $g->nip }}</td>
                    <td>{{ $g->nama }}</td>
                    <td>{{ $g->jk == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                    <td>{{ $g->telepon }}</td>
                    <td>
                        <button class="btn btn-info btn-sm">Detail</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection