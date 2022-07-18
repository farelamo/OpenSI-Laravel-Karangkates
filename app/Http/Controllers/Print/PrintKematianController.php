<?php

namespace App\Http\Controllers\Print;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kematian;
use App\Traits\PrintImage;
use PDF;

class PrintKematianController extends Controller
{
    use PrintImage;

    public function print($id)
    {
        $kematian = Kematian::findOrFail($id);
        if($kematian->approve != 1){
            alert()->error('Maaf', 'Surat belum diapproval');
            return back();
        }

        $logo = $this->base_image('images/Logo.jpg');
        $pdf  = PDF::loadview('print.kematian', compact('kematian', 'logo')); //loadview(nama-view, data yang dikirim);
        $pdf->setPaper('F4', 'portrait');
        $pdf->render();
        return $pdf->download('surat-kematian-' . $kematian->nama);
    }
}
