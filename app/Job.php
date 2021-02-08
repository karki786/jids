<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $guarded=['id'];

    public function getAllData($data=array()){

        $news = job::query();
        if(isset($data['keywords'])){
            $data = str_replace(' ','', $data['keywords']);
            $news->whereRaw(" 		(CONCAT_WS('',title)) LIKE LOWER('%".(trim($data)) ."%')");
        }




        return $news->orderBy('created_at','desc')->paginate(20);
    }
}
