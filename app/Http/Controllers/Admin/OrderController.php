<?php

namespace App\Http\Controllers\Admin;

use App\Filter\Admin\OrderFilter;
use App\Http\Controllers\Controller;
use App\Services\OrderService;

class OrderController extends Controller
{
    private $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function index(OrderFilter $filter)
    {
        $orders = $this->orderService->getOrderFindByFilter($filter);

        return view('admin.order.list', [
           'orders' => $orders,
        ]);
    }

    public function create()
    {
        return view('admin.order.create');
    }
}
