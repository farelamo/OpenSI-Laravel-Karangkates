<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class SuratGlobalRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'jenis' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'jenis.required' => 'Jenis surat harus dipilih',
        ];
    }
}
