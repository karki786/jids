<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $guarded=['id'];
    private static $path = '/uploads/setting';
    public function upload($file)
    {
        $imageName = $file->getClientOriginalName();

        $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
        $file->move(public_path() . self::$path, $fileName);

        return $fileName;
    }
}
