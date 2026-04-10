@extends('layouts.app')
@section('title', 'Edit Kelas')

@section('content')
<div class="container">
    <h2>Edit Kelas</h2>
    <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nama Kelas</label>
            <input type="text" name="kelas" value="{{ $kelas->kelas }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kapasitas</label>
            <input type="number" name="kapasitas" value="{{ $kelas->kapasitas }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Terisi</label>
            <input type="number" name="terisi" value="{{ $kelas->terisi }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('kelas.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection