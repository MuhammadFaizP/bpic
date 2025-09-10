<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DateTime;

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
        $masjid = $user->masjid;

        // Cek apakah user punya masjid
        if (!$masjid) {
            return redirect()->back()->with('error', 'User tidak terikat dengan masjid manapun.');
        }

        // Generate nama file berdasarkan nama masjid dan bulan
        $namaMasjid = $this->cleanFileName($masjid->nama);
        $namaBulan = DateTime::createFromFormat('!m', $request->bulan)->format('F');
        $tahun = $request->tahun;
        
        $filePrefix = "{$namaMasjid}_{$namaBulan}_{$tahun}";

        // Cek duplikasi laporan untuk bulan dan tahun yang sama
        $existingLaporan = Laporan::where('masjid_id', $user->masjid_id)
                                  ->where('bulan', $request->bulan)
                                  ->where('tahun', $request->tahun)
                                  ->first();

        if ($existingLaporan) {
            return redirect()->back()
                           ->withInput()
                           ->with('error', "Laporan untuk bulan {$namaBulan} {$tahun} sudah ada. Silakan edit laporan yang sudah ada.");
        }

        // Buat instance laporan
        $laporan = new Laporan();
        $laporan->masjid_id = $user->masjid_id;
        $laporan->user_id   = $user->id;
        $laporan->bulan     = $request->bulan;
        $laporan->tahun     = $request->tahun;

        // Upload dan rename files
        $laporan->file_kinerja  = $this->storeFileWithCustomName($request->file('file_kinerja'), $filePrefix . '_Kinerja', 'laporan/kinerja');
        $laporan->file_keuangan = $this->storeFileWithCustomName($request->file('file_keuangan'), $filePrefix . '_Keuangan', 'laporan/keuangan');
        $laporan->file_aset     = $this->storeFileWithCustomName($request->file('file_aset'), $filePrefix . '_Aset', 'laporan/aset');

        $laporan->save();

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil diupload.');
    }

    public function show(Laporan $laporan)
    {
        // Pastikan user hanya bisa lihat laporan masjidnya sendiri
        if ($laporan->masjid_id !== Auth::user()->masjid_id) {
            abort(403, 'Unauthorized access');
        }

        return view('admin.laporan.show', compact('laporan'));
    }

    public function edit(Laporan $laporan)
    {
        // Pastikan user hanya bisa edit laporan masjidnya sendiri
        if ($laporan->masjid_id !== Auth::user()->masjid_id) {
            abort(403, 'Unauthorized access');
        }

        return view('admin.laporan.edit', compact('laporan'));
    }

    public function update(Request $request, Laporan $laporan)
    {
        // Pastikan user hanya bisa update laporan masjidnya sendiri
        if ($laporan->masjid_id !== Auth::user()->masjid_id) {
            abort(403, 'Unauthorized access');
        }

        $request->validate([
            'bulan'          => 'required|integer|min:1|max:12',
            'tahun'          => 'required|integer|min:2000',
            'file_kinerja'   => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx',
            'file_keuangan'  => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx',
            'file_aset'      => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx',
        ]);

        $user = Auth::user();
        $masjid = $user->masjid;

        // Generate nama file berdasarkan nama masjid dan bulan
        $namaMasjid = $this->cleanFileName($masjid->nama);
        $namaBulan = DateTime::createFromFormat('!m', $request->bulan)->format('F');
        $tahun = $request->tahun;
        
        $filePrefix = "{$namaMasjid}_{$namaBulan}_{$tahun}";

        // Update basic info
        $laporan->bulan = $request->bulan;
        $laporan->tahun = $request->tahun;

        // Update files jika ada upload baru
        if ($request->hasFile('file_kinerja')) {
            // Hapus file lama
            if ($laporan->file_kinerja) {
                Storage::delete($laporan->file_kinerja);
            }
            // Upload file baru
            $laporan->file_kinerja = $this->storeFileWithCustomName($request->file('file_kinerja'), $filePrefix . '_Kinerja', 'laporan/kinerja');
        }

        if ($request->hasFile('file_keuangan')) {
            if ($laporan->file_keuangan) {
                Storage::delete($laporan->file_keuangan);
            }
            $laporan->file_keuangan = $this->storeFileWithCustomName($request->file('file_keuangan'), $filePrefix . '_Keuangan', 'laporan/keuangan');
        }

        if ($request->hasFile('file_aset')) {
            if ($laporan->file_aset) {
                Storage::delete($laporan->file_aset);
            }
            $laporan->file_aset = $this->storeFileWithCustomName($request->file('file_aset'), $filePrefix . '_Aset', 'laporan/aset');
        }

        $laporan->save();

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil diupdate.');
    }

    public function destroy(Laporan $laporan)
    {
        // Pastikan user hanya bisa hapus laporan masjidnya sendiri
        if ($laporan->masjid_id !== Auth::user()->masjid_id) {
            abort(403, 'Unauthorized access');
        }

        // Hapus files dari storage
        if ($laporan->file_kinerja) {
            Storage::delete($laporan->file_kinerja);
        }
        if ($laporan->file_keuangan) {
            Storage::delete($laporan->file_keuangan);
        }
        if ($laporan->file_aset) {
            Storage::delete($laporan->file_aset);
        }

        // Hapus record dari database
        $laporan->delete();

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil dihapus.');
    }

    /**
     * Helper function untuk membersihkan nama file dari karakter yang tidak diinginkan
     */
    private function cleanFileName($fileName)
    {
        // Ganti spasi dengan underscore dan hapus karakter khusus
        $clean = preg_replace('/[^A-Za-z0-9\-_]/', '_', $fileName);
        // Hapus multiple underscores
        $clean = preg_replace('/_+/', '_', $clean);
        // Hapus underscore di awal dan akhir
        $clean = trim($clean, '_');
        
        return $clean;
    }

    /**
     * Helper function untuk upload file dengan nama custom
     */
    private function storeFileWithCustomName($file, $customName, $directory)
    {
        // Dapatkan extension file asli
        $extension = $file->getClientOriginalExtension();
        
        // Buat nama file lengkap
        $fileName = $customName . '.' . $extension;
        
        // Simpan file dengan nama custom
        $path = $file->storeAs($directory, $fileName);
        
        return $path;
    }
}