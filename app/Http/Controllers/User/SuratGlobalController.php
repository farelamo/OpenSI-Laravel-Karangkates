<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\SuratGlobalRequest;
use App\Services\user\SuratGlobalService;

class SuratGlobalController extends Controller
{
    public function __construct(SuratGlobalService $service){
        $this->service = $service;
    }

    public function index()
    {
        return $this->service->getAll();
    }

    public function store(SuratGlobalRequest $request)
    {
        return $this->service->create($request);
    }

    public function destroy($id)
    {
        return $this->service->delete($id);
    }
}
