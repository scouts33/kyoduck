<?php
namespace App\Services;


use App\Filter\Admin\OrderFilter;
use App\Models\order;

class OrderService
{
    /**
     * @param OrderFilter $orderFilter
     * @return mixed
     */
    public function getOrderFindByFilter(OrderFilter $orderFilter)
    {
        return order::queryAdminFilter($orderFilter)->simplePaginate(1);
    }
}
