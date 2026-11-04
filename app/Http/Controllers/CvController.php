<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index()
    {
        // Mengambil data CV pertama dari database
        $cv = Cv::first();
        return view('admin.cv.index', compact('cv'));
    }

    public function create()
    {
        return view('admin.cv.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_lengkap' => 'required',
            'nim'          => 'required',
            'prodi'        => 'required',
            'email'        => 'required|email',
        ]);

        // Menyimpan data form ke tabel cv di database
        Cv::create($request->all());

        return redirect()->route('cv.index')->with('success', 'Data CV berhasil disimpan!');
    }

    public function edit($id)
    {
        $cv = Cv::findOrFail($id);
        return view('admin.cv.edit', compact('cv'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nim'          => 'required',
            'prodi'        => 'required',
            'email'        => 'required|email',
        ]);

        $cv = Cv::findOrFail($id);
        $cv->update($request->all());

        return redirect()->route('cv.index')->with('success', 'Data CV berhasil diperbarui!');
    }
}
