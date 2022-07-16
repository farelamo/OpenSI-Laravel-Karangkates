<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usaha extends Model
{
    use HasFactory;

    protected $table    = 'usaha';
    protected $fillable = [
        'user_id', 'nomor_surat', 'nama_surat', 'nama', 
        'jenis', 'tempat', 'pemasaran', 'tahun_berdiri',
        'approve'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
