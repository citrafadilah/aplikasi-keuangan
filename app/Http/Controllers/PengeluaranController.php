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

        $pengeluaran = Pengeluaran::create($request->all());

        return view('pengeluaran.index', compact('pengeluaran'));
    }

    public function edit(Pengeluaran $pengeluaran)
    {
        $pengeluaran = Pengeluaran::findOrFail($pengeluaran);
        return view('pengeluaran.edit', compact('pengeluaran'));
    }

    public function update(Request $request, Pengeluaran $pengeluaran)
    {
        $request->validate([
            'jenis_pengeluaran' => 'required|string|max:255',
            'jumlah' => 'required|numeric',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|string',
        ]);

        $pengeluaran->update($request->all());

        return view('pengeluaran.index', compact('pengeluaran'));
    }

    public function destroy(Pengeluaran $pengeluaran)
    {
        $pengeluaran->delete();

        return view('pengeluaran.index', compact('pengeluaran'));
    }
}
