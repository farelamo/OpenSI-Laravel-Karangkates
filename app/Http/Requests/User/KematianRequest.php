<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class KematianRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama'          => 'required|max:200',
            'nik'           => 'required|max:16',
            'tempat_lahir'  => 'required|max:150',
            'tanggal_lahir' => 'required|max:100',
            'alamat'        => 'required',
            'hari'          => 'required|max:100',
            'jam'           => 'required|max:100',
            'tanggal'       => 'required|max:100',
            'daerah'        => 'required',
            'sebab'         => 'required',
            'tempat_makam'  => 'required',
            'hari_makam'    => 'required|max:100',
            'jam_makam'     => 'required|max:100',
            'tanggal_makam' => 'required|max:100',
        ];
    }

    public function messages()
    {
        return [
            'nama.required'             => 'Nama almarhum harus diisi',
            'nama.max'                  => 'Maximal panjang nama almarhum 200 character',
            'nik.required'              => 'NIK almarhum harus diisi',
            'nik.max'                   => 'Maximal panjang NIK almarhum 16 angka',
            'tempat_lahir.required'     => 'Tempat lahir almarhum harus diisi',
            'tempat_lahir.max'          => 'Maximal panjang tempat lahir almarhum 150 character',
            'tanggal_lahir.required'    => 'Tanggal lahir almarhum harus diisi',
            'tanggal_lahir.max'         => 'Maximal panjang tanggal lahir almarhum 100 character',
            'alamat.required'           => 'Alamat almarhum harus diisi',
            'hari.required'             => 'Hari kematian harus diisi',
            'hari.max'                  => 'Maximal panjang hari kematian 100 character',
            'jam.required'              => 'Maximal panjang hari kematian 100 character',
            'jam.max'                   => 'Maximal panjang jam kematian 100 character',
            'tanggal.required'          => 'Tanggal kematian harus diisi',
            'tanggal.max'               => 'Maximal panjang tanggal kematian 100 character',
            'daerah.required'           => 'Daerah kejadian kematian harus diisi',
            'sebab.required'            => 'Penyebab kematian harus diisi',
            'tempat_makam.required'     => 'Tempat pemakaman harus diisi',
            'hari_makam.required'       => 'Hari pemakaman harus diisi',
            'hari_makam.max'            => 'Maximal panjang hari pemakaman 100 character',
            'jam_makam.required'        => 'Hari pemakaman harus diisi',
            'jam_makam.max'             => 'Maximal panjang jam pemakaman 100 character',
            'tanggal_makam.required'    => 'Tanggal pemakaman harus diisi',
            'tanggal_makam.max'         => 'Maximal tanggal pemakaman usaha 100 character',
        ];
    }
}
