<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Masjid;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $admins = User::role('admin')->with('masjid')->get();
        return view('superadmin.admins.index', compact('admins'));
    }

    public function create()
    {
        $masjids = Masjid::all();
        return view('superadmin.admins.create', compact('masjids'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:6',
            'masjid_id' => 'required|exists:masjids,id',
        ]);

        $admin = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'masjid_id' => $request->masjid_id,
        ]);

        $admin->assignRole('admin');

        return redirect()->route('admin.index')->with('success', 'Admin berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $admin   = User::findOrFail($id);
        $masjids = Masjid::all();
        return view('superadmin.admins.edit', compact('admin', 'masjids'));
    }

    public function update(Request $request, $id)
    {
        $admin = User::findOrFail($id);

        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users,email,' . $id,
            'masjid_id' => 'required|exists:masjids,id',
        ]);

        $admin->update([
            'name'      => $request->name,
            'email'     => $request->email,
            'masjid_id' => $request->masjid_id,
        ]);

        if ($request->filled('password')) {
            $admin->update(['password' => Hash::make($request->password)]);
        }

        return redirect()->route('admin.index')->with('success', 'Admin berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $admin = User::findOrFail($id);
        $admin->delete();
        return redirect()->route('admin.index')->with('success', 'Admin berhasil dihapus.');
    }
}

