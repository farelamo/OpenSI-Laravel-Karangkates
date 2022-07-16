<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UsahaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama'          => 'required|max:200',
            'jenis'         => 'required|max:200',
            'tempat'        => 'required',
            'pemasaran'     => 'required',
            'tahun_berdiri' => 'required|max:4',
        ];
    }

    public function messages()
    {
        return [
            'nama.required'             => 'Nama usaha harus diisi',
            'nama.max'                  => 'maximal panjang nama usaha 200 character',
            'jenis.required'            => 'Jenis usaha harus diisi',
            'jenis.max'                 => 'maximal panjang jenis usaha 200 character',
            'tempat.required'           => 'Tempat usaha harus diisi',
            'pemasaran.required'        => 'Area pemasaran usaha harus diisi',
            'tahun_berdiri.required'    => 'Tahun berdiri usaha harus diisi',
            'tahun_berdiri.max'         => 'maximal panjang tahun 4 angka',
        ];
    }
}
