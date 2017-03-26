<?php

namespace App\Http\Requests;

class UserRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name': 'required|string',
            'email': 'required|email',
            'password': 'required|string|min:6|confirmation',
        ];
    }
}
