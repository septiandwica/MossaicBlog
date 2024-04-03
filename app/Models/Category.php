<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'status', 
    ];
    
    static public function getSingle($id)
    {
        return self::find($id);
    }
    static public function getRecordCategory(){
        return self::select('categories.*')
        ->where('is_deleted','=','0')
        ->orderBy('id','desc')
        ->paginate(10);
    }
    static public function getActiveCategory(){
        return self::select('categories.*')
        ->where('is_deleted','=','0')
        ->where('status' ,'=','1')
        ->get();
    }
    public function getImage(){
        if(!empty($this->image_file) && file_exists('upload/category/'.$this->image_file)){
            return url('upload/category/'.$this->image_file);
        }else{
            return url('upload/placeholder/seo.jpg');;
        }
    }
    
}