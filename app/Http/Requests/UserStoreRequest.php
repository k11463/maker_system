<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'required|email',
            'username' => 'required',
            'legal_name' => 'required',
            'birthday' => 'required|date',
            'phone' => 'required|integer',
            'line_id' => 'required',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => '不可為空'
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'Email',
        ];
    }
}
