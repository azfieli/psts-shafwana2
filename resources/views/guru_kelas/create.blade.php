@extends('layouts.app')
@section('title', 'Tambah Guru Kelas')

@section('content')
<div class="container">
    <h2>Tambah Guru ke Kelas</h2>
    <form action="{{ route('guru-kelas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Guru</label>
            <select name="guru_id" class="form-control" required>
                @foreach($guru as $g)
                    <option value="{{ $g->id }}">{{ $g->nama }} ({{ $g->nip }})</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Kelas</label>
            <select name="kelas_id" class="form-control" required>
                @foreach($kelas as $k)
                    <option value="{{ $k->id }}">{{ $k->kelas }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection