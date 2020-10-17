<?php

namespace App\Http\Controllers\Admin;

use App\Filter\Admin\AdminUserFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthCreateRequest;
use App\Services\UserService;

class UserController extends Controller
{
    private $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(AdminUserFilter $userFilter)
    {
        $adminUsers = $this->userService->getAllUsers($userFilter);

        return view('', [
            'adminUsers' => $adminUsers,
        ]);
    }

    public function store(AuthCreateRequest $request)
    {
        $this->userService->create($request);

        session()->flash('success', "Send Successfully");
        return redirect('/admin/user');
    }
}
