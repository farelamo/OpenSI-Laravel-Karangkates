<?php

namespace App\Http\Controllers\Print;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kematian;
use PDF;

class PrintKematianController extends Controller
{
    public function print($id)
    {
        $kematian = Kematian::findOrFail($id);
        $pdf = PDF::loadview('print.kematian', compact('kematian')); //loadview(nama-view, data yang dikirim);
        return $pdf->download('surat-kematian-pdf');
    }
}
