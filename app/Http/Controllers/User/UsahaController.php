<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\user\UsahaService;
use App\Http\Requests\User\UsahaRequest;

class UsahaController extends Controller
{
    public function __construct(UsahaService $service){
        $this->service = $service;
    }

    public function index()
    {
       return $this->service->getAll();
    }

    public function store(UsahaRequest $request)
    {
        return $this->service->create($request);
    }

    public function update(UsahaRequest $request, $id)
    {
        return $this->service->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->service->delete($id);
    }
}
