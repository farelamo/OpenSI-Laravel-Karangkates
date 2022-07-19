<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminRequest;
use App\Services\admin\UsahaService;

class UsahaController extends Controller
{
    public function __construct(UsahaService $service){
        $this->service = $service;
    }

    public function index(){
        return $this->service->getAll();
    }

    public function update(AdminRequest $request, $id){
        return $this->service->update($request, $id);
    }
}
