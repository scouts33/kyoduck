<?php

namespace App\Traits;


trait QueryFilter
{
    public function scopeQueryFilter($query, $filter) {
        return $filter->apply($query);
    }

    public function scopeQueryAdminFilter($query, $filter) {
        return $filter->adminApply($query);
    }
}
