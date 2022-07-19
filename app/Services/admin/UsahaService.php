<?php
    namespace App\Services\admin;

    use App\Models\Usaha;
    use App\Http\Requests\Admin\AdminRequest;

    class UsahaService {
        public function getAll(){
            $usaha = Usaha::select(['id', 'nama', 'nomor_surat', 'approve'])->get();
            return view('admin.usaha.index', compact('usaha'));
        }

        public function update(AdminRequest $request, $id){
            try {
                $data = Usaha::find($id)->select(['id', 'nomor_surat', 'approve', 'updated_at']);
                $data->update([
                    'nomor_surat'   => $request->nomor_surat,
                    'approve'       => 1
                ]);
                alert()->success('success', 'Surat berhasil diupdate');
                return redirect('/admin/surat-usaha');
            } catch(Exception $e){
                alert()->error('error', 'Surat tidak berhasil diupdate');
                return redirect('/admin/surat-usaha');
            }
        }
    }
?>