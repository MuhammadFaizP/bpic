<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $laporans = Laporan::where('masjid_id', $user->masjid_id)
                           ->orderBy('tahun', 'desc')
                           ->orderBy('bulan', 'desc')
                           ->get();

        return view('admin.laporan.index', compact('laporans'));
    }

    public function create()
    {
        return view('admin.laporan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'bulan'          => 'required|integer|min:1|max:12',
            'tahun'          => 'required|integer|min:2000',
            'file_kinerja'   => 'required|file|mimes:pdf,doc,docx,xls,xlsx',
            'file_keuangan'  => 'required|file|mimes:pdf,doc,docx,xls,xlsx',
            'file_aset'      => 'required|file|mimes:pdf,doc,docx,xls,xlsx',
        ]);

        $user = Auth::user();

        $laporan = new Laporan();
        $laporan->masjid_id = $user->masjid_id;
        $laporan->user_id   = $user->id;
        $laporan->bulan     = $request->bulan;
        $laporan->tahun     = $request->tahun;

        $laporan->file_kinerja  = $request->file('file_kinerja')->store('laporan/kinerja');
        $laporan->file_keuangan = $request->file('file_keuangan')->store('laporan/keuangan');
        $laporan->file_aset     = $request->file('file_aset')->store('laporan/aset');

        $laporan->save();

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil diupload.');
    }
}
