<?php
namespace App\Traits;

trait image{
    public function image1($image){
        $fileName = time().'_'.$image->getClientOriginalName();
        $filePath = $image->storeAs('/uploads', $fileName);
        return $filePath;
    }
}