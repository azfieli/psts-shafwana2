<?php
namespace App\Http\Controllers;

use App\Models\P10NilaiSiswa;
use App\Models\P10NilaiKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class P10NilaiSiswaController extends Controller
{
    public function index()
    {
        $siswa = P10NilaiSiswa::with('kelas')->get();
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        $kelas = P10NilaiKelas::all();
        return view('siswa.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nis' => 'required|unique:p10_nilai_siswa,nis',
            'nama' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'kelas_id' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('uploads/siswa', 'public');
            $validasi['foto'] = $path;
        }

        P10NilaiSiswa::create($validasi);
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambah!');
    }public function edit($id)
{
    $siswa = P10NilaiSiswa::findOrFail($id);
    $kelas = P10NilaiKelas::all();
    return view('siswa.edit', compact('siswa', 'kelas'));
}

public function update(Request $request, $id)
{
    $siswa = P10NilaiSiswa::findOrFail($id);
    
    $validasi = $request->validate([
        'nis' => 'required|unique:p10_nilai_siswa,nis,'.$id,
        'nama' => 'required',
        'jk' => 'required',
        'kelas_id' => 'required',
        'foto' => 'image|mimes:jpeg,png,jpg|max:2048'
    ]);

    if ($request->hasFile('foto')) {
        // Hapus foto lama jika ada
        if ($siswa->foto) {
            Storage::disk('public')->delete($siswa->foto);
        }
        $path = $request->file('foto')->store('uploads/siswa', 'public');
        $validasi['foto'] = $path;
    }

    $siswa->update($validasi);
    return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui!');
}
}