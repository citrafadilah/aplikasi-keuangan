<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use App\Models\Riwayat;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index()
    {
        $riwayat = Riwayat::all();
        return view('riwayat.index', compact('riwayat'));
    }    
}
