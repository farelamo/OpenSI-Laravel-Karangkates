<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\ProfileRequest;
use App\Traits\UploadMedia;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    use UploadMedia;

    public function index()
    {
        $user   = Auth::user();
        $agama  = ['islam', 'protestan', 'katolik', 'hindu', 'buddha', 'khonghucu'];
        $status = ['belum kawin', 'kawin', 'cerai hidup', 'cerai mati'];
        $gender = ['Pria', 'Perempuan'];
        $data = [
            'id'                => $user->id,
            'fname'             => $user->fname,
            'lname'             => $user->lname,
            'email'             => $user->email,
            'gender'            => $user->gender,
            'tempat_lahir'      => $user->tempat_lahir,
            'tanggal_lahir'     => $user->tanggal_lahir,
            'agama'             => $user->agama,
            'status'            => $user->status_perkawinan,
            'nik'               => $user->nik,
            'kewarganegaraan'   => $user->kewarganegaraan,
            'pekerjaan'         => $user->pekerjaan,
            'alamat'            => $user->alamat,
            'picture'           => $user->picture
        ];
        return view('profile', compact('data', 'agama', 'status', 'gender'));
    }

    public function update(Request $request, $id)
    {
        try {
            $data = User::findOrFail($id);
            $data->update([
                'fname'             => $request->fname,
                'lname'             => $request->lname,
                'email'             => $request->email,
                'gender'            => $request->gender,
                'tempat_lahir'      => $request->tempat_lahir,
                'tanggal_lahir'     => $request->tanggal_lahir,
                'agama'             => $request->agama,
                'status'            => $request->status_perkawinan,
                'nik'               => $request->nik,
                'kewarganegaraan'   => $request->kewarganegaraan,
                'pekerjaan'         => $request->pekerjaan,
                'alamat'            => $request->alamat
            ]);
            alert()->success('success', 'Profile berhasil diupdate');
            return redirect('/profile');
        }catch(Exception $e){
            alert()->error('error', 'Profile gagal diupdate');
            return redirect('/profile');
        }
    }

    public function changePhoto(Request $request, $id){
        try{ 
            if($file = $request->file('picture')){
                
                $dataType = $file->getClientOriginalExtension();
                if($dataType == '.jpg' || $dataType == '.jpeg' || $dataType == '.png'){
                    alert()->error('error', 'Format foto phofile hanya jpg, jpeg dan png');
                    return redirect('/profile');
                }

                $data = User::findOrFail($id);
                if(Storage::disk('public')->exists('/profile/' .$data->picture)){
                    File::delete("storage/profile/" . $data->picture);
                }

                $fileData = $this->uploads($file, '/profile/');
                $data->update(['picture' => $fileData['filename']]);

                alert()->success('success', 'Foto profile berhasil diupdate');
                return redirect('/profile/');
            }
        }catch(Exception $e){
            alert()->error('error', 'Foto profile gagal diupdate');
            return redirect('/profile');
        }
    }
}
