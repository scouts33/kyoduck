<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AuthCreateRequest extends FormRequest
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
            'email' => [
                'required',
                'email',
//                Rule::unique('Admin_users', 'email')
            ],
            'password' => [
                'required',
                'confirmed'
            ],
            'password_confirmation' => [
                'required',
            ],
            'name' => [
                'required'
            ]
        ];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getAdminInfo()
    {
        return $this->only([
            'email',
            'password',
            'name'
        ]);
    }
}
