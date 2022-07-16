<?php
    namespace App\Traits;

    use Illuminate\Support\Facades\File;
    use Illuminate\Support\Facades\Storage;

    trait UploadMedia {
        
        public function uploads($file, $path){
            if($file){
                $filename = time() . '-'. $file->getClientOriginalName();
                Storage::disk('public')->put($path . $filename, File::get($file));

                return $data = [
                    'filename' => $filename,
                ];
            }
        }
    }
?>