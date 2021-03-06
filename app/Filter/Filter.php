<?php

namespace App\Filter;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

abstract class Filter
{
    protected $request;
    protected $builder;
    protected $filters = [];

    const ORDER_TYPE = ['DESC', 'ASC'];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function adminApply($builder)
    {
        $this->builder = $builder;
//        option, value

        $filter = Str::camel($this->request->get('option'));
        if(method_exists($this, $filter)) {
            $this->{$filter}($this->request->get('value'));
        }

        if (method_exists($this, 'init')) {
            $this->init();
        }
    }
    public function apply($builder)
    {
        $this->builder = $builder;

        foreach($this->getFilter() as $filter => $value) {
            $filter = Str::camel($filter);
            if(method_exists($this, $filter)) {
                $this->{$filter}($value);
            }
        }

        if (method_exists($this, 'init')) {
            $this->init();
        }

    }

    public function getFilter()
    {
        return array_filter($this->request->only($this->filters));
    }
}
