<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected  $guarded=['id'];
    private static $path = '/uploads/page';

    public function getAllData($data=array()){

        $news = Page::query();
        if(isset($data['keywords'])){
            $data = str_replace(' ','', $data['keywords']);
            $news->whereRaw("(CONCAT_WS('',title)) LIKE LOWER('%".(trim($data)) ."%')");
        }




        return $news->where('slug','about-english')->orderBy('created_at','desc')->paginate(20);
    }

    public function upload($file)
    {
        $imageName = $file->getClientOriginalName();
        $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);

        $file->move(public_path() . self::$path, $fileName);

        return $fileName;
    }


    public function getAllNepaliData($data=array()){

        $news = Page::query();
        if(isset($data['keywords'])){
            $data = str_replace(' ','', $data['keywords']);
            $news->whereRaw("(CONCAT_WS('',title)) LIKE LOWER('%".(trim($data)) ."%')");
        }




        return $news->where('slug','about-nepali')->orderBy('created_at','desc')->paginate(20);
    }

    public function getCommitteeEnglishData($data=array()){

        $news = Page::query();
        if(isset($data['keywords'])){
            $data = str_replace(' ','', $data['keywords']);
            $news->whereRaw("(CONCAT_WS('',title)) LIKE LOWER('%".(trim($data)) ."%')");
        }




        return $news->where('slug','committee-english')->orderBy('created_at','desc')->paginate(20);
    }

    public function getCommitteeNepaliData($data = array())
    {

        $news = Page::query();
        if (isset($data['keywords'])) {
            $data = str_replace(' ', '', $data['keywords']);
            $news->whereRaw("(CONCAT_WS('',title)) LIKE LOWER('%" . (trim($data)) . "%')");
        }


        return $news->where('slug', 'committee-nepali')->orderBy('created_at', 'desc')->paginate(20);
    }
}
