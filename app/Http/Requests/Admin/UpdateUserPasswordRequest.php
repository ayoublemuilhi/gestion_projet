<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserPasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'current_password' => 'required',
            'new_pwd' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'current_password.required' => 'ancienne password est requis',
            'new_pwd.required' => 'nouveau password est requis',
        ];
    }
}
