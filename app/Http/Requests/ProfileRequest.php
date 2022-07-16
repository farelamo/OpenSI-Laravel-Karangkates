<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'email'               => 'email|required',
            'gender'              => 'required',
            'tempat_lahir'        => 'required',
            'tanggal_lahir'       => 'required',
            'agama'               => 'required',
            'status_perkawinan'   => 'required',
            'nik'                 => 'required',
            'kewarganegaraan'     => 'required',
            'pekerjaan'           => 'required',
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
