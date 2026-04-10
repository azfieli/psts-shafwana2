<?php

namespace App\Http\Controllers;

use App\Models\P10NilaiKelas;
use App\Models\P10NilaiSiswa;
use App\Models\P10NilaiGuru;
use App\Models\P10NilaiMapel;

class DashboardController extends Controller
{
    public function index()
    {
        $totalKelas = P10NilaiKelas::count();
        $totalSiswa = P10NilaiSiswa::count();
        $totalGuru  = P10NilaiGuru::count();
        $totalMapel = P10NilaiMapel::count();

        return view('dashboard', compact('totalKelas', 'totalSiswa', 'totalGuru', 'totalMapel'));
    }
}