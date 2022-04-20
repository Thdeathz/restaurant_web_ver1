<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRestaurantRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'name' => [
                'bail',
                'required',
                'string',
                'min:2',
                'max:50',
            ],

            'address' => [
                'bail',
                'required',
                'string',
            ],

            'price' => [
                'bail',
                'required',
            ],

            'image' => [
                'nullable',
                'file',
                'image',
            ],

            'description' => [
                'bail',
                'required',
                'string',
            ],
        ];
    }
}
