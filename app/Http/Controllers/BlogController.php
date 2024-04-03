<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogTags;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class BlogController extends Controller
{
    public function blog(){
        $data['getArticle'] = Blog::getArticle();
        return view("admin.blog.list", $data);
    }
    public function add_blog(Request $request){
        $data['getCategory'] = Category::getActiveCategory();
        return view("admin.blog.add", $data);
    }
    
    public function add_blog_action(Request $request){

        // dd($request->all());
        $request->validate([ 
            'title' => 'required',
            'desc' => 'required',
            'image_file' => 'required',
            // 'status' => 'required',
        ]);
        $maxMetaLength = 100;

        $blog = new Blog();
        $blog->user_id = Auth::user()->id;
        $blog->title = trim($request->title);
        $blog->category_id = $request->category_id; 
        $blog->description = trim($request->desc);
        $blog->meta_description = trim(Str::limit($request->meta_desc, $maxMetaLength));
        $blog->meta_keywords = trim($request->meta_keys);
        $blog->status = 2; 

        $slug = Str::slug($request->title); 
        $checkSlug = Blog::where('slug','=', $slug)->first();
        if(!empty($checkSlug)){
            $dbslug = $slug.'-'.$blog->id; 
        }else{
            $dbslug = $slug;
        }
        $blog->slug = $dbslug;

        if(!empty($request->file('image_file'))){
            $ext = $request->file('image_file')->getClientOriginalExtension();
            $file = $request->file('image_file');
            $filename = $dbslug.'.'.$ext;
            $file->move('upload/blogs', $filename);

            $blog->image_file = $filename;
        }
        

        $blog->save();
        BlogTags::InsertDeleteTag($blog->id, $request->tags);

        return redirect("dashboard/blog/list")->with("success","Blog added successfully.");
    }

    public function edit_blog($id){
    
        $data['getCategory'] = Category::getActiveCategory();
        $data['getArticle'] = Blog::getSingle($id);
        return view('admin.blog.edit', $data);
        
    }

    public function edit_blog_action( $id, Request $request){
        // dd($request->all());
        $request->validate([ 
            'title' => 'required',
            'desc' => 'required',
            'status' => 'required',
        ]);
        $maxMetaLength = 100;

        $blog = Blog::getSingle($id);
        $blog->title = trim($request->title);
        $blog->category_id = $request->category_id; 
        $blog->description = trim($request->desc);
        $blog->meta_description = trim(Str::limit($request->meta_desc, $maxMetaLength));
        $blog->meta_keywords = trim($request->meta_keys);
        $blog->status = $request->status; 

        if(!empty($request->file('image_file'))){
            if(!empty($blog->getImage())){
                unlink('upload/blogs/'.$blog->image_file);
            }

            $ext = $request->file('image_file')->getClientOriginalExtension();
            $file = $request->file('image_file');
            $filename = $blog->slug.'.'.$ext;
            $file->move('upload/blogs', $filename);

            $blog->image_file = $filename;
        }

        $blog->save();
        BlogTags::InsertDeleteTag($blog->id, $request->tags);
        
        return redirect("dashboard/blog/list")->with("success","Blog Edited successfully.");
    }

    public function delete_blog($id){
        $blog = Blog::getSingle($id);

        if ($blog) {
            $blog->is_deleted = 1;
            $blog->save();
            return redirect()->back()->with("success", "blog deleted successfully.");
        } else {
            return redirect()->back()->with("error", "blog not found.");
        }
    }
}
