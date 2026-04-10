<?php

namespace App\Http\Controllers;

use App\Models\P10NilaiKelas;
use Illuminate\Http\Request;

class P10NilaiKelasController extends Controller
{
    public function index()
    {
        $kelas = P10NilaiKelas::all();
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kelas' => 'required|string|max:50',
            'kapasitas' => 'required|integer',
            'terisi' => 'required|integer',
        ]);

        P10NilaiKelas::create($request->all());
        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kelas = P10NilaiKelas::findOrFail($id);
        return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kelas' => 'required|string|max:50',
            'kapasitas' => 'required|integer',
            'terisi' => 'required|integer',
        ]);

        $kelas = P10NilaiKelas::findOrFail($id);
        $kelas->update($request->all());
        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil diupdate');
    }

    public function destroy($id)
    {
        $kelas = P10NilaiKelas::findOrFail($id);
        $kelas->delete();
        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil dihapus');
    }
}