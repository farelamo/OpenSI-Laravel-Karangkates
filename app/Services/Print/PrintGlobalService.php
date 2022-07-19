<?php 
    namespace App\Services\Print;
    
    use App\Models\Surat_Global;
    use App\Traits\PrintImage;
    use PDF;

    class PrintGlobalService {

        use PrintImage;

        public function print($jenis, $id)
        {
            $global = Surat_Global::where('jenis', $jenis)->findOrFail($id);
            if($global->approve != 1){
                alert()->error('Maaf', 'Surat belum diapproval');
                return back();
            }

            $logo = $this->base_image('images/Logo.jpg');
            if($jenis == 'Belum Menikah'){
                $pdf = PDF::loadview('print.belum_menikah', compact('global', 'logo'));
            }else if($jenis == 'Surat Domisili'){
                $pdf = PDF::loadview('print.surat_domisili', compact('global', 'logo'));
            }
            $pdf->setPaper('F4', 'portrait');
            $pdf->render();
            return $pdf->download('Surat-' . $jenis);
        }
    }
?>