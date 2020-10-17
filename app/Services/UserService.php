<?php
namespace App\Services;

use App\Filter\Admin\AdminUserFilter;
use App\Http\Requests\Auth\AuthCreateRequest;
use App\Models\User;

class UserService
{
    public function create(AuthCreateRequest $request)
    {
        return User::create($request->getAdminInfo());
    }

    public function getAllUsers(AdminUserFilter $userFilter)
    {
        return User::queryAdminFilter($userFilter)->get();
    }
}
