<?php
namespace App\Services;


use App\Http\Requests\Auth\AuthCreateRequest;
use App\Models\AdminUser;

class AdminUserService
{
    public function create(AuthCreateRequest $request)
    {
        return AdminUser::create($request->getAdminInfo());
    }

    public function getAllAdminUsers($adminUserFilter)
    {
        return AdminUser::queryAdminFilter($adminUserFilter)->paginate();
    }
}
