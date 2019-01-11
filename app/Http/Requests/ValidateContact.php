<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\Request;

class ValidateContact extends Requests
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email_contacto' => 'required|email',
            'password_contacto' => 'required'
        ];
    }
}
