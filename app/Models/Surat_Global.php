<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat_Global extends Model
{
    use HasFactory;
    protected $table    = 'surat_global';
    protected $fillable = ['user_id', 'nomor_surat', 'jenis', 'approve'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
