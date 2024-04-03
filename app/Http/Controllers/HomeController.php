<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        $articles = Blog::getArticle()->shuffle()->take(2);  // Fetch 5 published articles
        $data['articles'] = $articles;
        return view('frontend.index', $data);
    }
    
    public function about() {
        return view("frontend.about");
    }
    public function category() {
        return view("frontend.category");

    }
    public function article() {
        return view("frontend.article");

    }
}
