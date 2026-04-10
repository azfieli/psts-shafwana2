@extends('layouts.app')
@section('title', 'Guru Kelas')

@section('content')
<div class="container">
    <h2>Guru Kelas</h2>
    <a href="{{ route('guru-kelas.create') }}" class="btn btn-primary mb-3">+ Tambah Guru Kelas</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Guru</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($guru_kelas as $gk)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $gk->guru->nama }}</td>
                <td>{{ $gk->kelas->kelas }}</td>
                <td>
                    <form action="{{ route('guru-kelas.destroy', $gk->id) }}" method="POST" class="d-inline">
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