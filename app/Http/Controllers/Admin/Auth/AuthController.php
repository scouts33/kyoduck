<?php
namespace App\Http\Controllers\Admin\Auth;

use App\Filter\Admin\AdminUserFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthCreateRequest;
use App\Http\Requests\Auth\AuthUpdateRequest;
use App\Models\AdminUser;
use App\Services\AdminUserService;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Client\Request;

class AuthController extends Controller
{
    use RegistersUsers;

    private $adminUserService;
    public function __construct(AdminUserService $adminUserService)
    {
        $this->adminUserService = $adminUserService;
    }

    public function index(AdminUserFilter $adminUserFilter)
    {
        $adminUsers = $this->adminUserService->getAllAdminUsers($adminUserFilter);

        return view('admin.auth.index', [
                'adminUsers' => $adminUsers
            ]
        );
    }

    public function store(AuthCreateRequest $request)
    {
        $this->adminUserService->create($request);

        session()->flash('success', "Send Successfully");
        return redirect('/admin/auth');
    }

    public function create()
    {
        return view('admin.auth.register');
    }

    public function show()
    {

    }

    public function edit(AdminUser $auth)
    {
        return view('admin.auth.edit', [
            'adminUser' => $auth
        ]);
    }

    public function update(AuthUpdateRequest $request)
    {
    }

    public function destroy(AdminUser $auth)
    {
        $auth->delete();

        session()->flash('success', "Send Successfully");
        return redirect('/admin/auth');
    }
}
