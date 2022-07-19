<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProfileService;

class ProfileController extends Controller
{
    public function __construct(ProfileService $service){
        $this->service = $service;
    }

    public function index()
    {
        return $this->service->getAll();
    }

    public function update(Request $request, $id)
    {
        return $this->service->update($request, $id);
    }

    public function changePhoto(Request $request, $id){
        return $this->service->changePhoto($request, $id);
    }
}
