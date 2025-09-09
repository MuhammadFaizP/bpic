<?php

namespace App\Http\Controllers;

use App\Models\Masjid;
use App\Models\User;
use Illuminate\Http\Request;

class MasjidController extends Controller
{
    public function __construct()
    {
        // Only superadmin can access this controller
        $this->middleware(['auth', 'role:superadmin']);
    }

    /**
     * Display a listing of masjids
     */
    public function index()
    {
        $masjids = Masjid::with(['user', 'laporans'])->get();
        
        return view('superadmin.masjid.index', compact('masjids'));
    }

    /**
     * Show the form for creating a new masjid
     */
    public function create()
    {
        // Get admins that are not assigned to any masjid yet
        $availableAdmins = User::role('admin')
            ->whereNull('masjid_id')
            ->get();
        
        return view('superadmin.masjid.create', compact('availableAdmins'));
    }

    /**
     * Store a newly created masjid
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'nullable|string',
            'admin_id' => 'nullable|exists:users,id'
        ]);

        // Validate that selected admin has admin role and not assigned to other masjid
        if ($request->admin_id) {
            $admin = User::find($request->admin_id);
            if (!$admin->hasRole('admin') || $admin->masjid_id) {
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'Admin yang dipilih tidak valid atau sudah terikat dengan masjid lain!');
            }
        }

        // Create masjid
        $masjid = Masjid::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);

        // Assign admin to masjid if selected
        if ($request->admin_id) {
            $admin = User::find($request->admin_id);
            $admin->update(['masjid_id' => $masjid->id]);
        }

        return redirect()->route('superadmin.masjid.index')
            ->with('success', 'Masjid berhasil ditambahkan!');
    }

    /**
     * Show the form for editing masjid
     */
    public function edit(Masjid $masjid)
    {
        // Get admins that are not assigned to any masjid (except current masjid's admin)
        $availableAdmins = User::role('admin')
            ->where(function($query) use ($masjid) {
                $query->whereNull('masjid_id')
                      ->orWhere('masjid_id', $masjid->id);
            })
            ->get();
        
        return view('superadmin.masjid.edit', compact('masjid', 'availableAdmins'));
    }

    /**
     * Update the specified masjid
     */
    public function update(Request $request, Masjid $masjid)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'nullable|string',
            'admin_id' => 'nullable|exists:users,id'
        ]);

        // Validate that selected admin has admin role and not assigned to other masjid
        if ($request->admin_id) {
            $admin = User::find($request->admin_id);
            if (!$admin->hasRole('admin') || ($admin->masjid_id && $admin->masjid_id != $masjid->id)) {
                return redirect()->back()
                    ->withInput()
                    ->with('error', 'Admin yang dipilih tidak valid atau sudah terikat dengan masjid lain!');
            }
        }

        // Update masjid
        $masjid->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ]);

        // Handle admin assignment changes
        $currentAdmin = $masjid->user;
        
        if ($request->admin_id) {
            // Remove current admin if different
            if ($currentAdmin && $currentAdmin->id != $request->admin_id) {
                $currentAdmin->update(['masjid_id' => null]);
            }
            
            // Assign new admin
            $newAdmin = User::find($request->admin_id);
            $newAdmin->update(['masjid_id' => $masjid->id]);
        } else {
            // Remove current admin if admin_id is null
            if ($currentAdmin) {
                $currentAdmin->update(['masjid_id' => null]);
            }
        }

        return redirect()->route('superadmin.masjid.index')
            ->with('success', 'Masjid berhasil diupdate!');
    }

    /**
     * Remove the specified masjid
     */
    public function destroy(Masjid $masjid)
    {
        // Check if masjid has reports
        if ($masjid->laporans()->count() > 0) {
            return redirect()->route('superadmin.masjid.index')
                ->with('error', 'Tidak dapat menghapus masjid yang sudah memiliki laporan!');
        }

        // Delete masjid (admin relationship will be automatically removed)
        $masjid->delete();

        return redirect()->route('superadmin.masjid.index')
            ->with('success', 'Masjid berhasil dihapus!');
    }
}