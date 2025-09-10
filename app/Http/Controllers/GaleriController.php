<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    /**
     * Menampilkan semua foto galeri.
     */
    public function index()
    {
        $galeris = Galeri::all();
        return view('public.galeri', compact('galeris'));
    }
}
