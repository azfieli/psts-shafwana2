@extends('layouts.app')

@section('content')
<div class="card shadow-sm border-0">
    <div class="card-header bg-white">
        <h5 class="mb-0">Form Input Nilai</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('nilai.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Pilih Siswa</label>
                    <select name="siswa_id" class="form-select @error('siswa_id') is-invalid @enderror">
                        <option value="">-- Pilih Siswa --</option>
                        @foreach($siswa as $s)
                            <option value="{{ $s->id }}">{{ $s->nis }} - {{ $s->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Mata Pelajaran</label>
                    <select name="mapel_id" class="form-select @error('mapel_id') is-invalid @enderror">
                        <option value="">-- Pilih Mapel --</option>
                        @foreach($mapel as $m)
                            <option value="{{ $m->id }}">{{ $m->mapel }} (SKS: {{ $m->sks }})</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Guru Pengampu</label>
                    <select name="guru_id" class="form-select @error('guru_id') is-invalid @enderror">
                        <option value="">-- Pilih Guru --</option>
                        @foreach($guru as $g)
                            <option value="{{ $g->id }}">{{ $g->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Input Nilai (0-100)</label>
                    <input type="number" name="nilai" class="form-control @error('nilai') is-invalid @enderror" placeholder="Contoh: 85">
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-success">Simpan Nilai</button>
                <a href="{{ route('nilai.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection