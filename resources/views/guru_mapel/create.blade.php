@extends('layouts.app')
@section('title', 'Tambah Guru Mapel')

@section('content')
<div class="container">
    <h2>Tambah Guru ke Mata Pelajaran</h2>
    <form action="{{ route('guru-mapel.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Guru</label>
            <select name="guru_id" class="form-control" required>
                @foreach($guru as $g)
                    <option value="{{ $g->id }}">{{ $g->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Mata Pelajaran</label>
            <select name="mapel_id" class="form-control" required>
                @foreach($mapel as $m)
                    <option value="{{ $m->id }}">{{ $m->mapel }} (SKS: {{ $m->sks }})</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection