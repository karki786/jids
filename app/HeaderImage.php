<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderImage extends Model
{
    protected  $guarded=['id'];
    private static $path = '/uploads/headerImage';

    public function getAllData($data=array()){

        $news = HeaderImage::query();
        if(isset($data['keywords'])){
            $data = str_replace(' ','', $data['keywords']);
            $news->whereRaw("(CONCAT_WS('',title)) LIKE LOWER('%".(trim($data)) ."%')");
        }




        return $news->orderBy('created_at','desc')->paginate(20);
    }

    public function upload($file)
    {
        $imageName = $file->getClientOriginalName();
        $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);

        $file->move(public_path() . self::$path, $fileName);

        return $fileName;
    }
}
