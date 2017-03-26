<?php

namespace App\Http\Requests;

class LocationRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'lat': 'required|float',
            'lng': 'required|float',
            'type_id': 'required|exists:types,id',
            'description': 'required|string',
        ];
    }
}
