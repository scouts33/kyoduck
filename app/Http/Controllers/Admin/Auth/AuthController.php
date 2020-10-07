<?php
namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.register');
    }

    public function store()
    {

    }

    public function create()
    {
        return view('admin.auth.register');
    }
    public function show()
    {

    }

    public function login()
    {

    }
}
