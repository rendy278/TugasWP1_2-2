<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswas'));
    }
    
    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'nama' => 'required|string|max:100',
            'kelas' => 'required|string|max:10',
            'jurusan' => 'required|string|max:50',
            'nilai_tugas' => 'required|numeric|min:0|max:100',
            'nilai_quiz' => 'required|numeric|min:0|max:100',
            'nilai_uts' => 'required|numeric|min:0|max:100',
            'nilai_uas' => 'required|numeric|min:0|max:100',
        ]);        

        $data['nilai_akhir'] = (
            $data['nilai_tugas'] * 0.2 +
            $data['nilai_quiz'] * 0.2 +
            $data['nilai_uts'] * 0.3 +
            $data['nilai_uas'] * 0.3
        );

        Mahasiswa::create($data);

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $data = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'nilai_tugas' => 'required|numeric',
            'nilai_quiz' => 'required|numeric',
            'nilai_uts' => 'required|numeric',
            'nilai_uas' => 'required|numeric',
        ]);

        $data['nilai_akhir'] = (
            $data['nilai_tugas'] * 0.2 +
            $data['nilai_quiz'] * 0.2 +
            $data['nilai_uts'] * 0.3 +
            $data['nilai_uas'] * 0.3
        );

        $mahasiswa->update($data);

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus.');
    }
}
