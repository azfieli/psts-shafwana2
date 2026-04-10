@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5>Data Siswa</h5>
        <a href="{{ route('siswa.create') }}" class="btn btn-primary btn-sm">Tambah Siswa</a>
    </div>
    <div class="card-body text-center">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>JK</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $s)
                <tr class="align-middle">
                    <td>
                        @if($s->foto)
                            <img src="{{ asset('storage/'.$s->foto) }}" width="50" class="rounded">
                        @else
                            <img src="https://via.placeholder.com/50" class="rounded">
                        @endif
                    </td>
                    <td>{{ $s->nis }}</td>
                    <td class="text-start">{{ $s->nama }}</td>
                    <td>{{ $s->jk }}</td>
                    <td>{{ $s->kelas->kelas }}</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection