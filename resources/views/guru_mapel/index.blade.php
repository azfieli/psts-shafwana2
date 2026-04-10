@extends('layouts.app')
@section('title', 'Guru Mapel')

@section('content')
<div class="container">
    <h2>Guru Mata Pelajaran</h2>
    <a href="{{ route('guru-mapel.create') }}" class="btn btn-primary mb-3">+ Tambah Guru Mapel</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Guru</th>
                <th>Mata Pelajaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($guru_mapel as $gm)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $gm->guru->nama }}</td>
                <td>{{ $gm->mapel->mapel }}</td>
                <td>
                    <form action="{{ route('guru-mapel.destroy', $gm->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection