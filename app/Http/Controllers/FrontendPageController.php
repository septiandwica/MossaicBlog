<?php

namespace App\Http\Controllers;

use App\Models\FePage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class FrontendPageController extends Controller
{
    public function frontendpage(){
        $data['getPage'] = FePage::getPage();
        return view("admin.frontendpage.list", $data);
    }
    public function add_frontendpage(Request $request){
        // $data['getCategory'] = FePage::getPage();
        return view("admin.frontendpage.add");
    }
    
    public function add_frontendpage_action(Request $request){

        // dd($request->all());
        $request->validate([ 
            'title' => 'required',
            'slug' => 'required',
            'meta_tit' => 'required',
        ]);
        $maxMetaLength = 100;

        $FePage = new FePage();
        $FePage->slug = trim($request->slug);
        $FePage->title = trim($request->title);
        $FePage->description = trim($request->desc);
        $FePage->meta_title= trim($request->meta_tit);
        $FePage->meta_description = trim(Str::limit($request->meta_desc, $maxMetaLength));
        $FePage->meta_keywords = trim($request->meta_keys);


        $FePage->save();

        return redirect("dashboard/frontendpage/list")->with("success","Page added successfully.");
    }

    public function edit_frontendpage($id){
    
        $data['getPage'] = FePage::getSingle($id);
        return view('admin.frontendpage.edit', $data);
        
    }

    public function edit_frontendpage_action( $id, Request $request){
        // dd($request->all());
        $maxMetaLength = 100;

        $FePage = FePage::getSingle($id);
        $FePage->slug = trim($request->slug);
        $FePage->title = trim($request->title);
        $FePage->description = trim($request->desc);
        $FePage->meta_title= trim($request->meta_tit);
        $FePage->meta_description = trim(Str::limit($request->meta_desc, $maxMetaLength));
        $FePage->meta_keywords = trim($request->meta_keys);

        $FePage->save();

        return redirect("dashboard/frontendpage/list")->with("success","Page Edited successfully.");
    }
}
