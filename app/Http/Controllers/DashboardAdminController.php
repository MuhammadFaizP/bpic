<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Support\Facades\Auth;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $laporans = Laporan::where('masjid_id', $user->masjid_id)
                           ->orderBy('tahun', 'desc')
                           ->orderBy('bulan', 'desc')
                           ->get();

        return view('admin.dashboard', compact('laporans'));
    }
}
