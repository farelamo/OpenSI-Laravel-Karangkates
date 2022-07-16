<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginValidator extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email'     => 'email|required',
            'password'  => 'required|max:8',
        ];
    }

    public function messages()
    {
        return [
            'email.email'       => 'format email salah',
            'email.required'    => 'email harus diisi',
            'password.required' => 'password harus diisi',
            'password.max'      => 'maximal panjang password 8 character',
        ];
    }
}
