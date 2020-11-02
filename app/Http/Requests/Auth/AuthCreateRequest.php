<?php

namespace App\Http\Requests\Auth;

use App\Rules\Phone;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
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
                Rule::unique('admin_users', 'email')
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
            ],
            'mobile' => [
                'required',
                new Phone()
            ]
        ];
    }

    /**
     * @return array
     */
    public function getAdminInfo()
    {
        return[
            'email' => $this->request->get('email'),
            'password' => Hash::make($this->request->get('password')),
            'name' => $this->request->get('name'),
            'mobile' => $this->request->get('mobile'),
        ];
    }
}
