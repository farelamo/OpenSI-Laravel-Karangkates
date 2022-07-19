<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Surat_Global;
use App\Http\Requests\Admin\AdminRequest;
use App\Services\admin\SuratGlobalService;

class SuratGlobalController extends Controller
{
    public function __construct(SuratGlobalService $service){
        $this->service = $service;
    }

    public function index(){
        return $this->service->getAll();
    }

    public function update(AdminRequest $request, $id){
        return $this->service->update($request, $id);
    }
}
