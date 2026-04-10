@extends('layouts.app')
@section('title', 'Input Nilai')

@section('content')
<div class="container">
    <h2>Input Nilai Siswa</h2>
    <form action="{{ route('nilai.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Siswa</label>
            <select name="siswa_id" class="form-control" required>
                @foreach($siswa as $s)
                    <option value="{{ $s->id }}">{{ $s->nama }} ({{ $s->nis }})</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Mata Pelajaran</label>
            <select name="mapel_id" class="form-control" required>
                @foreach($mapel as $m)
                    <option value="{{ $m->id }}">{{ $m->mapel }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Guru</label>
            <select name="guru_id" class="form-control" required>
                @foreach($guru as $g)
                    <option value="{{ $g->id }}">{{ $g->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Nilai</label>
            <input type="number" name="nilai" min="0" max="100" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan Nilai</button>
    </form>
</div>
@endsection