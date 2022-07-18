<?php
    namespace App\Traits;

    trait PrintImage {

        public function base_image($public_path){

            $path   = public_path($public_path);
            $type   = pathinfo($path, PATHINFO_EXTENSION);
            $data   = file_get_contents($path);
            $image  = 'data:image/' . $type . ';base64,' . base64_encode($data);
            
            return $image;
        }
    }
?>