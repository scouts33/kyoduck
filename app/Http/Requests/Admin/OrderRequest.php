<?php

namespace App\Http\Requests\Admin;

use App\Rules\Phone;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OrderRequest extends FormRequest
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
            'name' => 'required',
            'mobile' => [
                'required',
                new Phone()
            ],
            'fummung' => 'required',
            'zip_code' => 'required|numeric',
            'address' => 'required|string',
            'address_detail' => 'required|string',
            'gender' => Rule::in(['M', 'F']),
            'delivery_at' => 'date',
        ];
    }

    public function getOrder()
    {
        return $this->only([
            'name',
            'mobile',
            'fummung',
            'zip_code',
            'address',
            'address_detail',
            'pum',
            'hwajang',
            'ditgil',
            'gitgode',
            'gindong',
            'chima',
            'chongjang',
            'age',
            'abgil',
            'gender',
            'git',
            'subyub',
            'subnubi',
            'gitsubi',
            'jedan',
            'jeabong',
            'delivery_at',
            'etc',
            'design',
        ]);
    }

}
