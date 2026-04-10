@extends('layouts.app')
@section('title', 'Edit Guru')

@section('content')
<div class="container">
    <h2>Edit Data Guru</h2>
    <form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Foto Saat Ini</label><br>
            @if($guru->foto)
                <img src="{{ asset('storage/'.$guru->foto) }}" width="120" class="mb-3 rounded">
            @endif
        </div>

        <!-- Copy field lain dari create.blade.php di atas, tapi tambahkan value="{{ old('..', $guru->..) }}" -->

        <button type="submit" class="btn btn-success">Update Guru</button>
        <a href="{{ route('guru.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection