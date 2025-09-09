<?php

// ==============================================
// User.php Model
// ==============================================

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'name',
        'email',
        'password',
        'masjid_id', // foreign key ke masjid
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relationship: User belongs to Masjid
     * User (admin) belongs to 1 masjid
     */
    public function masjid()
    {
        return $this->belongsTo(Masjid::class);
    }

    /**
     * Get laporans created by this user (if admin)
     */
    public function laporans()
    {
        return $this->hasMany(Laporan::class);
    }
}



