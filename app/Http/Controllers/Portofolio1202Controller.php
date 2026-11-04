<?php

namespace App\Http\Controllers;

use App\Models\Portofolio1202;
use Illuminate\Http\Request;

class Portofolio1202Controller extends Controller
{
    public function index()
    {
        $dataPortofolio = Portofolio1202::all();
        return view('admin.portofolio.index', compact('dataPortofolio'));
    }

    public function create()
    {
        return view('admin.portofolio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_proyek' => 'required',
            'kategori'     => 'required',
            'deskripsi'    => 'required',
        ]);

        Portofolio1202::create($request->all());

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $portofolio = Portofolio1202::findOrFail($id);
        return view('admin.portofolio.edit', compact('portofolio'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_proyek' => 'required',
            'kategori'     => 'required',
            'deskripsi'    => 'required',
        ]);

        $portofolio = Portofolio1202::findOrFail($id);
        $portofolio->update($request->all());

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $portofolio = Portofolio1202::findOrFail($id);
        $portofolio->delete();

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil dihapus!');
    }
}
