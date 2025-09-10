<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Masjid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        // Only superadmin can access this controller
        $this->middleware(['auth', 'role:superadmin']);
    }

    /**
     * Display a listing of users
     */
    public function index()
    {
        $users = User::with(['masjid', 'roles'])->get();
        
        return view('superadmin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new user
     */
    public function create()
    {
        // Get masjids that don't have admin yet
        $masjids = Masjid::whereDoesntHave('user')->get();
        
        return view('superadmin.users.create', compact('masjids'));
    }

    /**
     * Store a newly created user
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|in:admin,superadmin',
            'masjid_id' => 'nullable|exists:masjids,id|required_if:role,admin'
        ]);

        // Create user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'masjid_id' => $request->role == 'admin' ? $request->masjid_id : null,
        ]);

        // Assign role
        $user->assignRole($request->role);

        return redirect()->route('superadmin.users.index')
            ->with('success', 'User berhasil ditambahkan!');
    }

    /**
     * Show the form for editing user
     */
    public function edit(User $user)
    {
        // Get available masjids (without admin) + current user's masjid if any
        $masjids = Masjid::whereDoesntHave('user')
            ->orWhere('id', $user->masjid_id)
            ->get();
        
        return view('superadmin.users.edit', compact('user', 'masjids'));
    }

    /**
     * Update the specified user
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8',
            'role' => 'required|in:admin,superadmin',
            'masjid_id' => 'nullable|exists:masjids,id|required_if:role,admin'
        ]);

        // Update basic info
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'masjid_id' => $request->role == 'admin' ? $request->masjid_id : null,
        ];

        // Update password if provided
        if ($request->filled('password')) {
            $userData['password'] = Hash::make($request->password);
        }

        $user->update($userData);

        // Update role if changed
        if (!$user->hasRole($request->role)) {
            $user->syncRoles([$request->role]);
        }

        return redirect()->route('superadmin.users.index')
            ->with('success', 'User berhasil diupdate!');
    }

    /**
     * Remove the specified user
     */
    public function destroy(User $user)
    {
        // Don't allow deleting own account
        if ($user->id === auth()->id()) {
            return redirect()->route('superadmin.users.index')
                ->with('error', 'Tidak dapat menghapus akun sendiri!');
        }

        // Delete user
        $user->delete();

        return redirect()->route('superadmin.users.index')
            ->with('success', 'User berhasil dihapus!');
    }
}