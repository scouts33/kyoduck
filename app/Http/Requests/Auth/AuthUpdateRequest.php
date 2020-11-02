<?php

namespace App\Http\Requests\Auth;

use App\Rules\PasswordChecker;
use App\Rules\Phone;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class AuthUpdateRequest extends FormRequest
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
            'password' => [
                'required_with:new_password_confirmation,new_password',
                new PasswordChecker($this->route()->parameters['auth']),
            ],
            'new_password' => [
                'confirmed',
                'required_with:password,new_password_confirmation'
            ],
            'new_password_confirmation' => [
                'required_with:password,new_password'
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
        return array_filter([
            'password' => $this->request->get('new_password') == null ? null : hash::make($this->request->get('new_password')),
            'name' => $this->request->get('name'),
            'mobile' => $this->request->get('mobile')
        ], function($val) {
             return !is_null($val);
        });
    }
}
