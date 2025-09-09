<?php

namespace App\Http\Controllers;

use App\Models\Masjid;
use App\Models\Laporan;
use Illuminate\Http\Request;

class DashboardSuperAdminController extends Controller
{
    public function index(Request $request)
    {
        $bulan = $request->input('bulan', date('m'));
        $tahun = $request->input('tahun', date('Y'));

        $masjids = Masjid::with(['laporans' => function($q) use ($bulan, $tahun) {
            $q->where('bulan', $bulan)->where('tahun', $tahun);
        }])->get();

        return view('superadmin.dashboard', compact('masjids', 'bulan', 'tahun'));
    }
}
