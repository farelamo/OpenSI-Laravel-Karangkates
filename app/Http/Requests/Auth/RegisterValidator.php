<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterValidator extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'fname'               => 'required|max:100',
            'lname'               => 'required|max:100',
            'email'               => 'email|required|unique:users,email',
            'password'            => 'required|max:8',
            'gender'              => 'required',
            'tempat_lahir'        => 'required',
            'tanggal_lahir'       => 'required',
            'nik'                 => 'required',
            'agama'               => 'required',
            'pekerjaan'           => 'required',
            'status_perkawinan'   => 'required',
            'kewarganegaraan'     => 'required',
            'alamat'              => 'required',
        ];
    }

    public function messages()
    {
        return [
            'fname.required'             => 'nama depan tidak boleh kosong',
            'lname.required'             => 'nama belakang tidak boleh kosong',
            'email.email'                => 'format email salah',
            'email.required'             => 'email tidak boleh kosong',
            'email.unique'               => 'email sudah digunakan',
            'password.required'          => 'password tidak boleh kosong',
            'password.max'               => 'maximal panjang password hanya 8 characters',
            'gender.required'            => 'gender tidak boleh kosong',
            'tempat_lahir.required'      => 'tempat lahir tidak boleh kosong',
            'tanggal_lahir.required'     => 'tanggal lahir tidak boleh kosong',
            'nik.required'               => 'nomor NIK tidak boleh kosong',
            'agama.required'             => 'agama tidak boleh kosong',
            'pekerjaan.required'         => 'pekerjaan tidak boleh kosong',
            'status_perkawinan.required' => 'status perkawinan tidak boleh kosong',
            'kewarganegaraan.required'   => 'kewarganegaraan tidak boleh kosong',
            'alamat.required'            => 'alamat tidak boleh kosong',
        ];
    }
}
