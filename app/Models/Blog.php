<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use function PHPUnit\Framework\returnSelf;


class Blog extends Model
{
    use HasFactory;

    static public function getSingle($id)
    {
        return self::find($id);
    }
    public function category()
    {
      return $this->belongsTo(Category::class,'category_id');
    }
    
    static public function getArticle(){
        $query = self::select('blogs.*', 'users.name as author', 'categories.name as category_name')
            ->join('users','users.id','=','blogs.user_id')
            ->join('categories','categories.id','=','blogs.category_id')
            ->where('blogs.is_deleted','=','0')
            ->orderBy('blogs.id','desc');
    
        if(request()->filled('author')){
            $query->where('users.name', 'like', '%' . request()->input('author') . '%');
        }
        if(request()->filled('title')){
            $query->where('blogs.title', 'like', '%' . request()->input('title') . '%');
        }
        if(request()->filled('category')){
            $query->where('categories.name', 'like', '%' . request()->input('category') . '%');
        }
        if(request()->filled('status') && request()->input('status') != 'all'){
            $query->where('blogs.status', '=', request()->input('status'));
        }
    
        return $query->paginate(10);
    }
    public function getImage(){
        if(!empty($this->image_file) && file_exists('upload/blogs/'.$this->image_file)){
            return url('upload/blogs/'.$this->image_file);
        }else{
            return url('upload/blogs/seo.jpg');;
        }
    }
    public function getTags(){
        return $this->hasMany(BlogTags::class,'blog_id');
    }

    
}
