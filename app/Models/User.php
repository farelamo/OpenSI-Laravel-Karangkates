<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'fname', 'lname', 'email', 'password',
        'gender', 'tempat_lahir', 'tanggal_lahir',
        'nik', 'role', 'agama', 'pekerjaan', 
        'status_perkawinan', 'kewarganegaraan', 'alamat',
        'picture'
    ];
    protected $hidden   = ['password', 'remember_token',];
    protected $casts    = ['email_verified_at' => 'datetime',];

    public function belum_menikahs(){
        return $this->hasMany(Belum_Menikah::class);
    }
    
    public function usahas(){
        return $this->hasMany(Usaha::class);
    }
}
