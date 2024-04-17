<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogComment;
use App\Models\BlogCommentReply;
use App\Models\Category;
use App\Models\FePage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    //
    public function index() {
        $getPage = FePage::getSlug('Home');
        $data['meta_tit'] = !empty($getPage) ? $getPage->meta_title : '';
        // $data['meta_desc'] = !empty($getPage) ? $getPage->meta_description : '';
        // $data['meta_keys'] = !empty($getPage) ? $getPage->meta_keywords : '';

        $heroarticles = Blog::getActiveArticle()->shuffle()->take(3);
        $categories = Category::with('blogs')
            ->where('status', 1)
            ->where('is_deleted', 0)
            ->get();

        $topiccategories = Category::getCategoryFront();
    
        return view('frontend.index', compact('heroarticles', 'categories', 'topiccategories'), $data);
    }
    
    public function about() {

        $getPage = FePage::getSlug('About');
        $data['meta_tit'] = !empty($getPage) ? $getPage->meta_title : '';
        $data['meta_desc'] = !empty($getPage) ? $getPage->meta_description : '';
        $data['meta_keys'] = !empty($getPage) ? $getPage->meta_keywords : '';
        $data['desc'] = !empty($getPage) ? $getPage->description : '';
        $founders = User::getFounders(); 
        return view("frontend.about", compact("founders"), $data);
    }
    public function category() {
        $getPage = FePage::getSlug('Category');
        $data['meta_tit'] = !empty($getPage) ? $getPage->meta_title : '';
        $data['meta_desc'] = !empty($getPage) ? $getPage->meta_description : '';
        $data['meta_keys'] = !empty($getPage) ? $getPage->meta_keywords : '';

        $data['getArticle'] = Blog::getActiveArticle();
       
        return view("frontend.category" , $data);

    }
    public function article($slug)
    {
    // Check for category slug
    $categoryshow = Category::getCategorySlug($slug);
    if (!empty($categoryshow)) {
        $data['meta_tit'] = $categoryshow->meta_title;
        $data['meta_keys']= $categoryshow->meta_keywords;
        $data['meta_desc'] = $categoryshow->meta_description;
        $data['bc_tit'] = $categoryshow->name;

        $data['getArticle'] = Blog::getArticleCategory($categoryshow->id);

        return view("frontend.category", $data);
    } else {
        $articledetail = Blog::getArticleSlug($slug);
       if(!empty($articledetail)){
        
        $data['recentpost'] = Blog::getRecent();
        $data['relatedpost'] = Blog::getRelated($articledetail->category_id, $articledetail->id)->shuffle();
        $data['articledetail'] = $articledetail;

        $data['meta_tit'] = $articledetail->title;
        $data['meta_keys'] = $articledetail->meta_keywords;
        $data['meta_desc'] = $articledetail->meta_description;

        if (empty($relatedpost)) {
            $relatedpost = [];
        }

        return view("frontend.article", $data);
       }else {
            abort(404);
        }
 
    }

    }
    public function getArticlesByTag($tag)
    {
        // Decode the URL-encoded tag
        $tag = urldecode($tag);
        // Call the Blog model method (assuming it's named getActiveArticle)
        $articles = Blog::getArticlesByTag($tag);
        // $data['getArticle'] = Blog::getActiveArticle();

        return view('frontend.articlebytag', compact('articles', 'tag'));
    }

    public function blogcomment(Request $request){
        $blogcomment = new BlogComment();
        $blogcomment->user_id = Auth::user()->id;
        $blogcomment->blog_id = $request->blog_id;
        $blogcomment->comment = $request->comment;
        $blogcomment->save();

        return redirect()->back()->with('success','Your Comment Succesfully Added');
    }
    public function blogcommentreply(Request $request){
        $blogcomment = new BlogCommentReply();
        $blogcomment->user_id = Auth::user()->id;
        $blogcomment->blog_comment_id = $request->blog_comment_id;
        $blogcomment->comment = $request->comment;
        $blogcomment->save();

        return redirect()->back()->with('success','Your Comment Succesfully Added');
    }

    
}
