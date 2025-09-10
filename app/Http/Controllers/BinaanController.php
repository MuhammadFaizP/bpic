<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;

class BinaanController extends Controller
{
    /**
     * Menampilkan daftar semua masjid.
     */
    public function index()
    {
        $mitras = Mitra::all();
        return view('binaan.index', compact('mitras'));
    }

    /**
     * Menampilkan detail dari satu masjid.
     */
    public function show($id)
    {
        $mitras = Mitra::find($id);

        if (!$mitras) {
            abort(404);
        }

        return view('binaan.show', compact('mitras'));
    }
}
