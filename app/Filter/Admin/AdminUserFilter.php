<?php

namespace App\Filter\Admin;

use App\Filter\Filter;

class AdminUserFilter extends Filter
{
    protected $filters = [
        'email',
        'name'
    ];

    public function name($name)
    {
        $this->builder->where('name', $name);
    }

    public function email($email)
    {
        $this->builder->where('email', $email);
    }

    public function mobile($mobile)
    {
        $this->builder->where('mobile', $mobile);
    }

    public function init()
    {

    }
}

