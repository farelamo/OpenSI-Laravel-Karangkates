<?php
    namespace App\Services\admin;

    use App\Models\Kematian;
    use App\Http\Requests\Admin\AdminRequest;

    class KematianService {
        public function getAll(){
            $kematian = Kematian::select(['id', 'nama', 'nomor_surat', 'approve'])->get();
            return view('admin.kematian.index', compact('kematian'));
        }

        public function update(AdminRequest $request, $id){
            try {
                $data = Kematian::where('id', $id)
                    ->select(['id', 'nomor_surat', 'approve', 'updated_at']);

                $data->update([
                    'nomor_surat'   => $request->nomor_surat,
                    'approve'       => 1
                ]);
                alert()->success('success', 'Surat berhasil diupdate');
                return redirect('/admin/surat-kematian');
            } catch(Exception $e){
                alert()->error('error', 'Surat tidak berhasil diupdate');
                return redirect('/admin/surat-kematian');
            }
        }
    }
?>