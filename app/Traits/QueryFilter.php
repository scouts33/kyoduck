<?php

namespace App\Traits;


trait QueryFilter
{
    public function scopeQueryFilter($query, $filter) {
        return $filter->apply($query);
    }
}
