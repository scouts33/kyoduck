<?php

namespace App\Filter\Admin;

use App\Filter\Filter;

class OrderFilter extends Filter
{
    protected $filters = [
        'name',
        'mobile',
    ];

    public function name($name)
    {
        $this->builder->where('name', 'like', "%{$name}%");
    }

    public function mobile($mobile)
    {
        $this->builder->where('mobile', 'like', "%{$mobile}%");
    }

    public function init()
    {

    }
}
