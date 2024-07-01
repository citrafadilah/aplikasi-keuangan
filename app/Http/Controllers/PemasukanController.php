<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use App\Models\Riwayat;
use Illuminate\Http\Request;

class PemasukanController extends Controller
{
    public function index()
    {
        // $pemasukan = Pemasukan::all();
        $pemasukan = Riwayat::where('jenis_transaksi', 'pemasukan')->get();
        return view('pemasukan.index', compact('pemasukan'));
    }

    public function create()
    {
        return view('pemasukan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required|string|max:255',
            'jumlah' => 'required|numeric',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        $pemasukan = Pemasukan::create($request->all());

        return view('pemasukan.index', compact('pemasukan'));
    }

    public function show($id)
    {
        $pemasukan = Riwayat::where('jenis_transaksi', 'pemasukan')->findOrFail($id);
        return response()->json($pemasukan);
    }

    public function edit($id)
    {
        $pemasukan = Pemasukan::findOrFail($id);
        return view('pemasukan.edit', compact('pemasukan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'sumber_pemasukan' => 'required|string|max:255',
            'jumlah' => 'required|numeric',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        $pemasukan = Riwayat::where('jenis_transaksi', 'pemasukan')->findOrFail($id);
        $pemasukan->update($request->all());

        return response()->json($pemasukan);
    }

    public function destroy($id)
    {
        $pemasukan = Riwayat::where('jenis_transaksi', 'pemasukan')->findOrFail($id);
        $pemasukan->delete();

        return response()->json(null, 204);
    }
}
