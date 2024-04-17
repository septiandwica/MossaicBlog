<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $data['getUser'] = User::getRecordUser();
        $data['getCategory'] = Category::getActiveCategory();
        $data['getBlog'] = Blog::getArticle();

        return view('admin.dashboard', $data);
    }
}
