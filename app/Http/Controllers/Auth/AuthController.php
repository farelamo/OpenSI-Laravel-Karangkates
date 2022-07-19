<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginValidator;
use App\Http\Requests\Auth\RegisterValidator;
use App\Services\Auth\AuthService;

class AuthController extends Controller
{
    public function __construct(AuthService $service){
        $this->service = $service;
    }
    
    public function indexLogin()
    {
        return $this->service->indexLogin();
    }

    public function login(LoginValidator $request)
    {
        return $this->service->login($request);
    }
    
    public function indexRegister()
    {
        return $this->service->indexRegister();
    }

    public function register(RegisterValidator $request)
    {
        return $this->service->register($request);
    }

    public function logout()
    {
        return $this->service->logout();
    }
}
