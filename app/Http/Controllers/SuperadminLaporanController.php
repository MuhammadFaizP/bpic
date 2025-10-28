<?php

namespace App\Http\Controllers;

use App\Models\Masjid;
use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuperadminLaporanController extends Controller
{
    // Halaman filter (tanpa parameter masjid)
    public function filterPage(Request $request)
    {
        // Get all masjid untuk dropdown
        $masjids = Masjid::orderBy('nama')->get();
        
        // Array bulan
        $bulanList = [
            ['number' => 1, 'name' => 'Januari'],
            ['number' => 2, 'name' => 'Februari'],
            ['number' => 3, 'name' => 'Maret'],
            ['number' => 4, 'name' => 'April'],
            ['number' => 5, 'name' => 'Mei'],
            ['number' => 6, 'name' => 'Juni'],
            ['number' => 7, 'name' => 'Juli'],
            ['number' => 8, 'name' => 'Agustus'],
            ['number' => 9, 'name' => 'September'],
            ['number' => 10, 'name' => 'Oktober'],
            ['number' => 11, 'name' => 'November'],
            ['number' => 12, 'name' => 'Desember'],
        ];
        
        $masjid = null;
        $laporans = collect();
        
        // Jika ada parameter masjid_id dari form filter
        if ($request->has('masjid_id') && $request->masjid_id) {
            $masjid = Masjid::find($request->masjid_id);
            
            if ($masjid) {
                $tahun = $request->get('tahun', date('Y'));
                
                $laporans = Laporan::where('masjid_id', $masjid->id)
                    ->where('tahun', $tahun)
                    ->get();
            }
        }
        
        return view('superadmin.masjid.laporan', compact('masjids', 'masjid', 'bulanList', 'laporans'));
    }

    // Method yang sudah ada (untuk akses langsung dari CRUD Masjid jika diperlukan)
    public function index(Request $request, $masjid)
    {
        // Get all masjid untuk dropdown
        $masjids = Masjid::orderBy('nama')->get();
        
        // Get masjid yang dipilih
        $masjid = Masjid::findOrFail($masjid);
        
        // Array bulan
        $bulanList = [
            ['number' => 1, 'name' => 'Januari'],
            ['number' => 2, 'name' => 'Februari'],
            ['number' => 3, 'name' => 'Maret'],
            ['number' => 4, 'name' => 'April'],
            ['number' => 5, 'name' => 'Mei'],
            ['number' => 6, 'name' => 'Juni'],
            ['number' => 7, 'name' => 'Juli'],
            ['number' => 8, 'name' => 'Agustus'],
            ['number' => 9, 'name' => 'September'],
            ['number' => 10, 'name' => 'Oktober'],
            ['number' => 11, 'name' => 'November'],
            ['number' => 12, 'name' => 'Desember'],
        ];
        
        // Get tahun dari request atau default tahun sekarang
        $tahun = $request->get('tahun', date('Y'));
        
        // Get laporan berdasarkan masjid dan tahun
        $laporans = Laporan::where('masjid_id', $masjid->id)
            ->where('tahun', $tahun)
            ->get();
        
        return view('superadmin.masjid.laporan', compact('masjids', 'masjid', 'bulanList', 'laporans'));
    }

    public function preview($masjid, $id, $type)
    {
        $laporan = Laporan::findOrFail($id);
        
        // Validasi bahwa laporan ini milik masjid yang benar
        if ((int)$laporan->masjid_id != (int)$masjid) {
            abort(403, 'Unauthorized access');
        }
        
        $fileColumn = 'file_' . $type;
        
        if (!$laporan->$fileColumn) {
            abort(404, 'File tidak ditemukan');
        }
        
        // ===== PERBAIKAN: Gunakan path private, bukan public =====
        // Cek apakah file path sudah include 'private/' atau belum
        $filePath = $laporan->$fileColumn;
        
        // Jika path di database sudah lengkap (contoh: "private/laporan/file.pdf")
        if (Storage::exists($filePath)) {
            $fullPath = Storage::path($filePath);
        } 
        // Jika path di database hanya nama file (contoh: "laporan/file.pdf")
        elseif (Storage::exists('private/' . $filePath)) {
            $fullPath = Storage::path('private/' . $filePath);
        }
        // Fallback ke storage_path langsung
        else {
            $fullPath = storage_path('app/private/' . $filePath);
        }
        
        if (!file_exists($fullPath)) {
            abort(404, 'File tidak ditemukan di storage: ' . $fullPath);
        }
        
        return response()->file($fullPath);
    }

    public function download($masjid, $id, $type)
    {
        $laporan = Laporan::findOrFail($id);
        
        // Validasi bahwa laporan ini milik masjid yang benar
        if ((int)$laporan->masjid_id != (int)$masjid) {
            abort(403, 'Unauthorized access');
        }
        
        $fileColumn = 'file_' . $type;
        
        if (!$laporan->$fileColumn) {
            abort(404, 'File tidak ditemukan');
        }
        
        // ===== PERBAIKAN: Gunakan path private, bukan public =====
        $filePath = $laporan->$fileColumn;
        
        // Cek apakah file path sudah include 'private/' atau belum
        if (Storage::exists($filePath)) {
            $fullPath = Storage::path($filePath);
        } 
        elseif (Storage::exists('private/' . $filePath)) {
            $fullPath = Storage::path('private/' . $filePath);
        }
        else {
            $fullPath = storage_path('app/private/' . $filePath);
        }
        
        if (!file_exists($fullPath)) {
            abort(404, 'File tidak ditemukan di storage: ' . $fullPath);
        }
        
        $fileName = basename($laporan->$fileColumn);
        
        return response()->download($fullPath, $fileName);
    }
}