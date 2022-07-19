<?php

namespace App\Http\Controllers\Print;

use App\Http\Controllers\Controller;
use App\Services\Print\PrintGlobalService;

class PrintGlobalController extends Controller
{
    public function __construct(PrintGlobalService $service){
        $this->service = $service;
    }

    public function print($jenis, $id){
        return $this->service->print($jenis, $id);
    }
}
