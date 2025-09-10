<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index() { return view('public.home'); }
    public function profil() { return view('public.profile'); }
    public function galeri() { return view('public.galeri'); }
    public function kontak() { return view('public.kontak'); }
}
