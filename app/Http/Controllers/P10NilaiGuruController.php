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
        $request->validate([
            'nip' => 'required|unique:p10_nilai_guru',
            'nama' => 'required',
            'jk' => 'required|in:L,P',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'telepon' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto_guru', 'public');
        }

        P10NilaiGuru::create($data);
        return redirect()->route('guru.index')->with('success', 'Guru berhasil ditambahkan');
    }

    public function edit($id)
    {
        $guru = P10NilaiGuru::findOrFail($id);
        return view('guru.edit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nip' => 'required|unique:p10_nilai_guru,nip,'.$id,
            'nama' => 'required',
            'jk' => 'required|in:L,P',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'telepon' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $guru = P10NilaiGuru::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('foto')) {
            if ($guru->foto) Storage::disk('public')->delete($guru->foto);
            $data['foto'] = $request->file('foto')->store('foto_guru', 'public');
        }

        $guru->update($data);
        return redirect()->route('guru.index')->with('success', 'Guru berhasil diupdate');
    }

    public function destroy($id)
    {
        $guru = P10NilaiGuru::findOrFail($id);
        if ($guru->foto) Storage::disk('public')->delete($guru->foto);
        $guru->delete();
        return redirect()->route('guru.index')->with('success', 'Guru berhasil dihapus');
    }
}