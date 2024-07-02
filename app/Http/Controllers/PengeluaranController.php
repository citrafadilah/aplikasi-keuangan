<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use App\Models\Riwayat;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function index()
    {
        $pengeluaran = Riwayat::where('jenis_transaksi', 'pengeluaran')->get();
        return view('pengeluaran.index', compact('pengeluaran'));
    }

    public function create()
    {
        return view('pengeluaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required|string|max:255',
            'jumlah' => 'required|numeric',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        $pengeluaran = Riwayat::create($request->all());

        return redirect()->route('pengeluaran.index')->with('success', 'Pengeluaran berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pengeluaran = Riwayat::findOrFail($id);
        return view('pengeluaran.edit', compact('pengeluaran'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'deskripsi' => 'required|string|max:255',
            'jumlah' => 'required|numeric',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        $pengeluaran = Riwayat::where('jenis_transaksi', 'pengeluaran')->findOrFail($id);
        $pengeluaran->update($request->all());
        
        return redirect()->route('pengeluaran.index')->with('success', 'Pengeluaran berhasil diubah');
    }

    public function destroy(Pengeluaran $pengeluaran)
    {
        $pengeluaran->delete();

        return view('pengeluaran.index', compact('pengeluaran'));
    }
}
