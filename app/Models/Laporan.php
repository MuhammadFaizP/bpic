<?php

// ==============================================
// Laporan.php Model
// ==============================================

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'masjid_id',
        'user_id', // admin yang upload
        'bulan',
        'tahun',
        'file_kinerja',
        'file_keuangan',
        'file_aset',
    ];

    /**
     * Relationship: Laporan belongs to Masjid
     */
    public function masjid()
    {
        return $this->belongsTo(Masjid::class);
    }

    /**
     * Relationship: Laporan belongs to User (admin yang upload)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}