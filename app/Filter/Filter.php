<?php

namespace App\Filter;

abstract class Filter
{
    protected $builder;
    protected $filters = [];

    const ORDER_TYPE = ['DESC', 'ASC'];

    public function apply($builder)
    {
        $this->builder = $builder;

        foreach($this->getFilter() as $filter => $value) {
            $filter = camel_case($filter);
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
        return array_null_filter($this->request->only($this->filters));
    }
}
