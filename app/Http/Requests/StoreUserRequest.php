<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => [
                'bail',
                'required',
                'string',
                'min:2',
                'max:50',
            ],

            'email' => [
                'bail',
                'required',
                'string',
                'unique:App\Models\User,email'
            ],

            'password' => [
                'bail',
                'required',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute còn trống',
            'unique' => ':attribute đã được dùng',
        ];
    }

    public function attributes(): array
    {
        return [
            'password' => 'Mật khẩu',
        ];
    }
}
