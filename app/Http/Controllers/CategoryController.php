<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function category(){
        $data['getCategory'] = Category::getRecordCategory();
        return view("admin.category.list", $data);
    }
    public function add_category(Request $request){
        return view("admin.category.add");

    }
    public function add_category_action(Request $request){
        
        $request->validate([ 
            'name' => 'required',
            'meta_title' => 'required',
            'meta_desc' => 'required|string:max:100',
            'meta_keys' => 'required',
            'image_file' => 'required',
            'status' => 'required',
        ]);

        $maxMetaLength = 100;

        $category = new Category();
        $category->name = trim($request->name);
        $category->meta_title = trim($request->meta_title);
        $category->meta_description = trim(Str::limit($request->meta_desc, $maxMetaLength));
        $category->meta_keywords = trim($request->meta_keys);
        $category->status = $request->status; 
       
        $slug = Str::slug($request->name); 
        $checkSlug = Category::where('slug','=', $slug)->first();
        if(!empty($checkSlug)){
            $dbslug = $slug.'-'.$category->id; 
        }else{
            $dbslug = $slug;
        }
        $category->slug = $dbslug;

        if(!empty($request->file('image_file'))){
            $ext = $request->file('image_file')->getClientOriginalExtension();
            $file = $request->file('image_file');
            $filename = $dbslug.'.'.$ext;
            $file->move('upload/category', $filename);

            $category->image_file = $filename;
        }

        $category->save();
        return redirect("dashboard/category/list")->with("success","Category added successfully.");
    }

    public function edit_category($id){
        $data['getCategory'] = Category::getSingle($id);
        return view('admin.category.edit', $data);
        
    }

    public function edit_category_action( $id, Request $request){
        $request->validate([ 
            'name' => 'required',
            'meta_title' => 'required',
            'meta_desc' => 'required|string:max:100',
            'meta_keys' => 'required',
            'status' => 'required',

        ]);
        
        $maxMetaLength = 100;

        $category =  Category::getSingle($id);
        $category->name = trim($request->name);
        $category->meta_title = trim($request->meta_title);
        $category->meta_description = trim(Str::limit($request->meta_desc, $maxMetaLength));;
        $category->meta_keywords = trim($request->meta_keys);
        $category->status = $request->status; 

        if(!empty($request->file('image_file'))){
            if(!empty($category->getImage())){
                unlink('upload/category/'.$category->image_file);
            }
                $ext = $request->file('image_file')->getClientOriginalExtension();
                $file = $request->file('image_file');
                $filename = $category->slug.'.'.$ext;
                $file->move('upload/category', $filename);
    
                $category->image_file = $filename;
            
        }
        
        


        $category->save();

        return redirect("dashboard/category/list")->with("success", "Category updated successfully.");
    }

    public function delete_category($id){
        $category = Category::getSingle($id);

        if ($category) {
            $category->is_deleted = 1;
            $category->save();
            return redirect()->back()->with("success", "Category deleted successfully.");
        } else {
            return redirect()->back()->with("error", "Category not found.");
        }
    }
}
