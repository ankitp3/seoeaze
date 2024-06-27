<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ForgotPasswordRequest extends Request
{
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
            'email' => 'required',
            'g-recaptcha-response' => 'required|recaptcha',
        ];
    }
}