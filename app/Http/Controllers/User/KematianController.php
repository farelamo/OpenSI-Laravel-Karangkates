<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kematian;
use App\Http\Requests\User\KematianRequest;
use Illuminate\Support\Facades\Auth;

class KematianController extends Controller
{
    public function index()
    {
        $kematian = Kematian::all()->except(['created_at', 'updated_at'])
                    ->where('user_id', Auth::user()->id);

        return view('user.kematian.index', compact('kematian'));
    }

    public function store(KematianRequest $request)
    {
        try {
            Kematian::create([
                'user_id'       => Auth::user()->id,
                'nomor_surat'   => null,
                'nama'          => $request->nama,
                'nik'           => $request->nik,
                'tempat_lahir'  => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat'        => $request->alamat,
                'hari'          => $request->hari,
                'jam'           => $request->jam,
                'tanggal'       => $request->tanggal,
                'daerah'        => $request->daerah,
                'sebab'         => $request->sebab,
                'tempat_makam'  => $request->tempat_makam,
                'hari_makam'    => $request->hari_makam,
                'jam_makam'     => $request->jam_makam,
                'tanggal_makam' => $request->tanggal_makam,
            ]);

            alert()->success('success', 'Surat berhasil dibuat');
            return redirect('/surat-kematian');
        }catch(Exception $e){
            alert()->error('error', 'Surat tidak berhasil dibuat');
            return redirect('/surat-kematian');
        }
    }

    public function show($id)
    {
        return view('user.kematian.show');
    }

    public function update(KematianRequest $request, $id)
    {
        try {
            $data = Kematian::find($id);
            $data->update([
                'user_id'       => Auth::user()->id,
                'nomor_surat'   => null,
                'nama'          => $request->nama,
                'nik'           => $request->nik,
                'tempat_lahir'  => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat'        => $request->alamat,
                'hari'          => $request->hari,
                'jam'           => $request->jam,
                'tanggal'       => $request->tanggal,
                'daerah'        => $request->daerah,
                'sebab'         => $request->sebab,
                'tempat_makam'  => $request->tempat_makam,
                'hari_makam'    => $request->hari_makam,
                'jam_makam'     => $request->jam_makam,
                'tanggal_makam' => $request->tanggal_makam,
            ]);

            alert()->success('success', 'Surat berhasil diupdate');
            return redirect('/surat-kematian');
        }catch(Exception $e){
            alert()->error('error', 'Surat tidak berhasil diupdate');
            return redirect('/surat-kematian');
        }
    }

    public function destroy($id)
    {
        try {
            $data = Kematian::find($id)->delete();
            alert()->success('success', 'Surat berhasil dihapus');
            return redirect('/surat-kematian');
        }catch(Exception $e){
            alert()->error('error', 'Surat tidak berhasil dihapus');
            return redirect('/surat-kematian');
        }
    }
}
