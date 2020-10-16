<?php

namespace App\Filter\Admin;

use App\Filter\Filter;

class AdminUserFilter extends Filter
{
    protected $filters = [
        'email',
        'name',
        'mobile'
    ];

    public function name($name)
    {
        $this->builder->where('name', 'like', "%{$name}%");
    }

    public function email($email)
    {
        $this->builder->where('email', 'like', "%{$email}%");
    }

    public function mobile($mobile)
    {
        $this->builder->where('mobile', 'like', "%{$mobile}%");
    }

    public function init()
    {
        $this->builder->orderBy('id', 'desc')->paginate(15);
    }
}

