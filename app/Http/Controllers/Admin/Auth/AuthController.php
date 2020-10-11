<?php
namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthCreateRequest;
use App\Services\AdminUserService;

class AuthController extends Controller
{
    private $adminUserService;

    public function __construct(AdminUserService $adminUserService)
    {
        $this->adminUserService = $adminUserService;
    }

    public function index()
    {
        return view('admin.auth.register');
    }

    public function store(AuthCreateRequest $request)
    {
        dd($this->adminUserService->create($request));
    }

    public function create()
    {
        dd(123);

        return view('admin.auth.register');
    }
    public function show()
    {

    }

    public function login()
    {

    }
}
