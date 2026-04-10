<?php
namespace App\Http\Controllers;

use App\Models\P10NilaiGuru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class P10NilaiGuruController extends Controller
{
    public function index()
    {
        $guru = P10NilaiGuru::all();
        return view('guru.index', compact('guru'));
    }

    public function create()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nip'           => 'required|unique:p10_nilai_guru,nip',
            'nama'          => 'required',
            'jk'            => 'required|in:L,P',
            'tempat_lahir'  => 'required',
            'tanggal_lahir' => 'required|date',
            'telepon'       => 'required',
            'foto'          => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            // Simpan di folder public/uploads/guru
            $path = $request->file('foto')->store('uploads/guru', 'public');
            $validasi['foto'] = $path;
        }

        P10NilaiGuru::create($validasi);

        return redirect()->route('guru.index')->with('success', 'Data Guru berhasil ditambahkan!');
    }
}