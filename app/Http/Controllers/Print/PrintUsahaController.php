<?php

namespace App\Http\Controllers\Print;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usaha;
use App\Traits\PrintImage;
use PDF;

class PrintUsahaController extends Controller
{
    use PrintImage;

    public function print($id)
    {
        $usaha = Usaha::findOrFail($id);
        if($usaha->approve != 1){
            alert()->error('Maaf', 'Surat belum diapproval');
            return back();
        }

        $logo = $this->base_image('images/Logo.jpg');
        $pdf  = PDF::loadview('print.usaha', compact('usaha', 'logo')); //loadview(nama-view, data yang dikirim);
        $pdf->setPaper('F4', 'portrait');
        $pdf->render();
        return $pdf->download('surat-usaha-' . $usaha->nama);
    }
}
