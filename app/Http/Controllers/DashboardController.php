<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPemasukan = Pemasukan::sum('jumlah');
        $totalPengeluaran = Pengeluaran::sum('jumlah');
        return view('dashboard', compact('totalPemasukan', 'totalPengeluaran'));
    }
}
