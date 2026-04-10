@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header"><h5>Tambah Guru Baru</h5></div>
    <div class="card-body">
        <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>NIP</label>
                    <input type="text" name="nip" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Jenis Kelamin</label>
                    <select name="jk" class="form-select">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>No. Telepon</label>
                    <input type="text" name="telepon" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Foto Profil</label>
                    <input type="file" name="foto" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-success">Simpan Data Guru</button>
        </form>
    </div>
</div>
@endsection