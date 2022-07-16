<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Surat_Global;
use App\Http\Requests\User\SuratGlobalRequest;
use Illuminate\Support\Facades\Auth;

class SuratGlobalController extends Controller
{
    public function index()
    {
        $surat_global = Surat_Global::all()
                            ->except(['created_at', 'updated_at'])
                            ->where('user_id', Auth::user()->id);

        return view('user.surat_global.index', compact('surat_global'));
    }

    public function store(SuratGlobalRequest $request)
    {
        try {
            if($request->jenis === 'kosong'){
                alert()->error('error', 'Jenis surat harus dipilih');
                return redirect('/surat-lainnya');
            }

            $check = Surat_Global::select('id')
                            ->where([
                                ['user_id', Auth::user()->id],
                                ['jenis', $request->jenis]
                            ])
                            ->get()->toArray();
            if($check){
                alert()->warning('warning', 'Silahkan hapus dahulu surat yang lama');
                return redirect('/surat-lainnya');
            }

            surat_global::create([
                'user_id'       => Auth::user()->id,
                'nomor_surat'   => null,
                'jenis'         => $request->jenis
            ]);

            alert()->success('success', 'Surat berhasil dibuat');
            return redirect('/surat-lainnya');
        }catch(Exception $e){
            alert()->error('error', 'Surat tidak berhasil dibuat');
            return redirect('/surat-lainnya');
        }
    }

    public function show($id)
    {
        return view('user.surat_global.show');
    }

    public function destroy($id)
    {
        try {
            $data = Surat_Global::find($id)->delete();
            alert()->success('success', 'Surat berhasil dihapus');
            return redirect('/surat-lainnya');
        }catch(Exception $e){
            alert()->error('error', 'Surat tidak berhasil dihapus');
            return redirect('/surat-lainnya');
        }
    }
}
