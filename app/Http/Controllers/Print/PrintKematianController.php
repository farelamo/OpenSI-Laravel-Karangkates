<?php

namespace App\Http\Controllers\Print;

use App\Http\Controllers\Controller;
use App\Services\Print\PrintKematianService;


class PrintKematianController extends Controller
{
    public function __construct(PrintKematianService $service){
        $this->service = $service;
    }

    public function print($id)
    {
        return $this->service->print($id);
    }
}
