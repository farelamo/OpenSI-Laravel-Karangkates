<?php

namespace App\Http\Controllers\Print;

use App\Http\Controllers\Controller;
use App\Services\Print\PrintUsahaService;

class PrintUsahaController extends Controller
{
    use PrintImage;

    public function __construct(PrintUsahaService $service){
        $this->service = $service;
    }

    public function print($id)
    {
        return $this->service->print($id);
    }
}
