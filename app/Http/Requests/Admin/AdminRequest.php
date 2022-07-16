<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nomor_surat' => 'required|max:100',
        ];
    }

    public function messages()
    {
        return [
            'nomor_surat.required'  => 'Nomor surat harus diisi',
            'nomor_surat.max'       => 'Maximal panjang nomor surat 100 character',
        ];
    }
}
