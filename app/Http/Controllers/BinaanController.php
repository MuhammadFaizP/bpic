<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;

class BinaanController extends Controller
{
    /**
     * Menampilkan daftar semua masjid dengan kategorisasi.
     */
    public function index()
    {
        // Ambil data masjid yang sudah dikelompokkan berdasarkan kategori
        $masjidByKategori = Mitra::getAllGroupedByCategory();
        
        // Hitung total masjid
        $totalMasjid = count(Mitra::all());
        
        // Kirim data ke view
        return view('binaan.index', compact('masjidByKategori', 'totalMasjid'));
    }

    /**
     * Menampilkan daftar masjid berdasarkan kategori tertentu.
     */
    public function indexByCategory($kategori)
    {
        // Validasi kategori yang valid
        $validCategories = ['BPIC', 'Al-Jabbar', 'Al-Jabbar Gedebage'];
        
        if (!in_array($kategori, $validCategories)) {
            abort(404, 'Kategori tidak ditemukan');
        }
        
        // Ambil data masjid berdasarkan kategori
        $mitras = Mitra::getByCategory($kategori);
        $totalMasjid = count($mitras);
        
        return view('binaan.category', compact('mitras', 'kategori', 'totalMasjid'));
    }

    /**
     * Menampilkan detail dari satu masjid.
     */
    public function show($id)
    {
        $mitras = Mitra::find($id);

        if (!$mitras) {
            abort(404, 'Masjid tidak ditemukan');
        }

        return view('binaan.show', compact('mitras'));
    }

    /**
     * API endpoint untuk mendapatkan data masjid dalam format JSON
     * (opsional - untuk keperluan AJAX atau filtering dinamis)
     */
    public function apiIndex(Request $request)
    {
        $kategori = $request->get('kategori');
        $search = $request->get('search');
        
        $mitras = Mitra::all();
        
        // Filter berdasarkan kategori jika ada
        if ($kategori) {
            $mitras = array_filter($mitras, function($mitra) use ($kategori) {
                return $mitra->kategori === $kategori;
            });
        }
        
        // Filter berdasarkan search jika ada
        if ($search) {
            $mitras = array_filter($mitras, function($mitra) use ($search) {
                return stripos($mitra->nama, $search) !== false;
            });
        }
        
        return response()->json([
            'data' => array_values($mitras),
            'total' => count($mitras)
        ]);
    }
}