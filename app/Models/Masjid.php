<?php

// ==============================================
// Masjid.php Model  
// ==============================================

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masjid extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
    ];

    /**
     * Relationship: Masjid has one User (admin)
     * Setiap masjid punya 1 admin
     */
    public function user()
    {
        return $this->hasOne(User::class, 'masjid_id');
    }

    /**
     * Alternative name for clarity
     * Admin dari masjid ini
     */
    public function admin()
    {
        return $this->hasOne(User::class, 'masjid_id');
    }

    /**
     * Relationship: Masjid has many Laporans
     * Setiap masjid bisa punya banyak laporan
     */
    public function laporans()
    {
        return $this->hasMany(Laporan::class);
    }
}