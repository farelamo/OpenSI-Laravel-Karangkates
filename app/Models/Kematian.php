<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kematian extends Model
{
    use HasFactory;

    protected $table    = 'kematian';
    protected $fillable = [
        'user_id', 'nomor_surat', 'nama', 'nik',
        'tempat_lahir', 'tanggal_lahir', 'alamat',
        'hari', 'jam', 'tanggal', 'daerah', 'sebab',
        'tempat_makam', 'hari_makam', 'jam_makam', 'tanggal_makam',
        'approve',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
