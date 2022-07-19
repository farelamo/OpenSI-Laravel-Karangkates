<?php
    namespace App\Services\admin;

    use App\Models\Surat_Global;
    use App\Http\Requests\Admin\AdminRequest;

    class SuratGlobalService {
        public function getAll(){
            $surat_global = Surat_Global::select(['id', 'jenis', 'nomor_surat', 'approve'])->get();
            return view('admin.surat_global.index', compact('surat_global'));
        }

        public function update(AdminRequest $request, $id){
            try {
                $data = Surat_Global::where('id', $id)
                    ->select(['id', 'nomor_surat', 'approve', 'updated_at']);

                $data->update([
                    'nomor_surat'   => $request->nomor_surat,
                    'approve'       => 1
                ]);
                alert()->success('success', 'Surat berhasil diupdate');
                return redirect('/admin/surat-lainnya');
            } catch(Exception $e){
                alert()->error('error', 'Surat tidak berhasil diupdate');
                return redirect('/admin/surat-lainnya');
            }
        }
    }
?>