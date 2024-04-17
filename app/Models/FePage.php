<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FePage extends Model
{
    use HasFactory;
    protected $table = 'fepages';

    static public function getSingle($id){
        return self::find($id);
    }
    static public function getPage(){
        return self::get();
    }
    static public function getSlug($slug){
        return self::where('slug', '=', $slug)->first();
    }
}
