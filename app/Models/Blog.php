<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use function PHPUnit\Framework\returnSelf;


class Blog extends Model
{
    use HasFactory;

    static public function getSingle($id)
    {
        return self::find($id);
    }
    public function user(){
        return $this->belongsTo(User::class, "user_id");
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

        if(!empty(Auth::check()) && Auth::user()->role_id != 1){
            $query = $query->where('blogs.user_id', '=', Auth::user()->id);
        }
    
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
    static public function getActiveArticle() {
        $query = self::select('blogs.*', 'users.name as author', 'categories.name as category_name')
            ->join('users', 'users.id', '=', 'blogs.user_id')
            ->join('categories', 'categories.id', '=', 'blogs.category_id')
            ->where('blogs.is_deleted', '=', '0')
            ->where('blogs.status', '=', '1')
            ->orderBy('blogs.id', 'desc')
            ->distinct()
            ->paginate(9);
    
        return $query;
    }
    static public function getArticlesByTag($tag) {
        $query = self::select('blogs.*', 'users.name as author', 'categories.name as category_name')
        ->join('users', 'users.id', '=', 'blogs.user_id')
        ->join('categories', 'categories.id', '=', 'blogs.category_id')
        ->join('blog_tags', 'blog_tags.blog_id', '=', 'blogs.id');

    if (!empty($tag)) {  // Check for tag directly
        $query->where(function ($query) use ($tag) {
            $query->where('blogs.title', 'like', '%' . $tag . '%')
                ->orWhere('blog_tags.name', '=', $tag);
        });
    }

    $query = $query->where('blogs.is_deleted', '=', '0')
        ->where('blogs.status', '=', '1')
        ->orderBy('blogs.id', 'desc')
        ->distinct()
        ->paginate(9);
    return $query;
    }
    
    static public function getArticleSlug($slug){
        return self::select('blogs.*', 'users.name as author', 'categories.name as category_name')
            ->join('users','users.id','=','blogs.user_id')
            ->join('categories','categories.id','=','blogs.category_id')
            ->where('blogs.is_deleted','=','0')
            ->where('blogs.status','=','1')
            ->where('blogs.slug','=', $slug)
            ->first();
    }
    static public function getRecent(){
         return self::select('blogs.*', 'users.name as author', 'categories.name as category_name')
            ->join('users','users.id','=','blogs.user_id')
            ->join('categories','categories.id','=','blogs.category_id')
            ->where('blogs.is_deleted','=','0')
            ->where('blogs.status','=','1')
            ->orderBy('blogs.id','desc')
            ->limit(3)
            ->get();
    }
    static public function getRelated($category_id, $id) {
        return self::select('blogs.*', 'users.name as author', 'categories.name as category_name')
            ->join('users', 'users.id', '=', 'blogs.user_id')
            ->join('categories', 'categories.id', '=', 'blogs.category_id')
            ->where('blogs.category_id', '=', $category_id) 
            ->where('blogs.id', '<>', $id)
            ->where('blogs.is_deleted', '=', 0)
            ->where('blogs.status', '=', 1)
            ->orderBy('blogs.id', 'desc')
            ->limit(3)
            ->get();
    }
    
    static public function getArticleCategory($category_id){
        return self::select('blogs.*', 'users.name as author', 'categories.name as category_name')
            ->join('users','users.id','=','blogs.user_id')
            ->join('categories','categories.id','=','blogs.category_id')
            ->where('blogs.category_id','=', $category_id)
            ->where('blogs.is_deleted','=','0')
            ->where('blogs.status','=','1')
            ->paginate(6);
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

    public function getComment(){
        return $this->hasMany(BlogComment::class,'blog_id')->orderBy('blog_comments.id','desc');
    }

    
}
