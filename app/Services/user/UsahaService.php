<?php 
    namespace App\Services\user;

    use App\Models\Usaha;
    use Illuminate\Support\Facades\Auth;
    use App\Http\Requests\User\UsahaRequest;

    class UsahaService {
        public function getAll(){
            $usaha = Usaha::all()->except(['created_at', 'updated_at'])
                    ->where('user_id', Auth::user()->id);

            return view('user.usaha.index', compact('usaha'));
        }

        public function create(UsahaRequest $request){
            try {
                Usaha::create([
                    'user_id'       => Auth::user()->id,
                    'nomor_surat'   => null,
                    'nama'          => $request->nama,
                    'jenis'         => $request->jenis,
                    'tempat'        => $request->tempat,
                    'pemasaran'     => $request->pemasaran,
                    'tahun_berdiri' => $request->tahun_berdiri,
                ]);

                alert()->success('success', 'Surat berhasil dibuat');
                return redirect('/surat-usaha');
            }catch(Exception $e){
                alert()->error('error', 'Surat tidak berhasil dibuat');
                return redirect('/surat-usaha');
            }
        }

        public function update(UsahaRequest $request, $id){
            try {
                $data = Usaha::find($id);
                $data->update([
                    'user_id'       => Auth::user()->id,
                    'nomor_surat'   => null,
                    'nama'          => $request->nama,
                    'jenis'         => $request->jenis,
                    'tempat'        => $request->tempat,
                    'pemasaran'     => $request->pemasaran,
                    'tahun_berdiri' => $request->tahun_berdiri,
                ]);

                alert()->success('success', 'Surat berhasil diupdate');
                return redirect('/surat-usaha');
            }catch(Exception $e){
                alert()->error('error', 'Surat tidak berhasil diupdate');
                return redirect('/surat-usaha');
            }
        }

        public function delete($id){
            try {
                $data = Usaha::find($id)->delete();
                alert()->success('success', 'Surat berhasil dihapus');
                return redirect('/surat-usaha');
            }catch(Exception $e){
                alert()->error('error', 'Surat tidak berhasil dihapus');
                return redirect('/surat-usaha');
            }
        }
    }
?>