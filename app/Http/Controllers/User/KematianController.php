<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\KematianRequest;
use App\Services\user\KematianService;

class KematianController extends Controller
{
    public function __construct(KematianService $service){
        $this->service = $service;
    }

    public function index()
    {
        return $this->service->getAll();
    }

    public function store(KematianRequest $request)
    {
        return $this->service->create($request);
    }

    public function update(KematianRequest $request, $id)
    {
        return $this->service->update($request, $id);
    }

    public function destroy($id)
    {
       return $this->service->delete($id);
    }
}
