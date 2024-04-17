<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendPageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeatherController;


use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('frontend/index');
// });
// Route::fallback(function () {
//     return view('errors.404');
// });
   // routes/web.php
Route::get('/fetch-weather', [WeatherController::class, 'fetchWeather'])->name('fetch.weather');

Route::get("/", [HomeController::class,"index"])->name('home');
Route::get("about", [HomeController::class,"about"])->name('about');
Route::get("category", [HomeController::class,"category"])->name('category');
Route::get("article", [HomeController::class,"category"])->name('article');
Route::get('article/tag/{tag}', [HomeController::class, 'getArticlesByTag'])->name('article.tag');
Route::get('article/{slug}', [HomeController::class, 'article'])->name('article.detail');
Route::get('category/{slug}', [HomeController::class, 'article'])->name('category.show');


// Route::get("/", [HomeController::class,""]);



Route::controller(AuthController::class)->group(    function () {
    Route::get('register', 'register')->name('register');
    
    Route::post('register', 'registerSave')->name('register.save');
    
    Route::get('login', 'login')->name('login');

    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::group(['middleware' => ['auth', 'user']], function () {
    Route::get("dashboard", [DashboardController::class,"dashboard"])->name('dashboard');

    Route::get("dashboard/account-settings", [UserController::class,"accountsettings"])->name('account-settings');
    Route::post("dashboard/account-settings", [UserController::class, "accountupdate"])->name('account-settings');
    Route::get("dashboard/change-password", [UserController::class,"changepassword"])->name('change-password');
    Route::post("dashboard/change-password", [UserController::class, "updatepassword"])->name('change-password');

    Route::get("index", [HomeController::class,"index"])->name('index');

    Route::get('dashboard/blog/list', [BlogController::class, 'blog'])->name('dashboard/blog/list');
    Route::get('dashboard/blog/add', [BlogController::class, 'add_blog'])->name('dashboard/blog/add');
    Route::post('dashboard/blog/add', [BlogController::class, 'add_blog_action'])->name('dashboard/blog/add');
    Route::get('dashboard/blog/edit/{id}', [BlogController::class, 'edit_blog'])->name('dashboard/blog/edit');
    Route::post('dashboard/blog/edit/{id}', [BlogController::class, 'edit_blog_action'])->name('dashboard/blog/edit');
    Route::get('dashboard/blog/delete/{id}', [BlogController::class, 'delete_blog'])->name('dashboard/blog/delete');

    Route::post('blog-comment', [HomeController::class, 'blogcomment'])->name('blog-comment');
    Route::post('blog-comment-reply', [HomeController::class, 'blogcommentreply'])->name('blog-comment-reply');

});


Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard/users/list', [UserController::class, 'user'])->name('dashboard/users/list');
    Route::get('dashboard/users/add', [UserController::class, 'add_user'])->name('dashboard/users/add');
    Route::post('dashboard/users/add', [UserController::class, 'add_user_action'])->name('dashboard/users/add');
    Route::get('dashboard/users/edit/{id}', [UserController::class, 'edit_user'])->name('dashboard/users/edit');
    Route::post('dashboard/users/edit/{id}', [UserController::class, 'edit_user_action'])->name('dashboard/users/edit');
    Route::get('dashboard/users/delete/{id}', [UserController::class, 'delete_user'])->name('dashboard/users/delete');

    Route::get('dashboard/category/list', [CategoryController::class, 'category'])->name('dashboard/category/list');
    Route::get('dashboard/category/add', [CategoryController::class, 'add_category'])->name('dashboard/category/add');
    Route::post('dashboard/category/add', [CategoryController::class, 'add_category_action'])->name('dashboard/category/add');
    Route::get('dashboard/category/edit/{id}', [CategoryController::class, 'edit_category'])->name('dashboard/category/edit');
    Route::post('dashboard/category/edit/{id}', [CategoryController::class, 'edit_category_action'])->name('dashboard/category/edit');
    Route::get('dashboard/category/delete/{id}', [CategoryController::class, 'delete_category'])->name('dashboard/category/delete');

    Route::get('dashboard/frontendpage/list', [FrontendPageController::class, 'frontendpage'])->name('dashboard/frontendpage/list');
    Route::get('dashboard/frontendpage/add', [FrontendPageController::class, 'add_frontendpage'])->name('dashboard/frontendpage/add');
    Route::post('dashboard/frontendpage/add', [FrontendPageController::class, 'add_frontendpage_action'])->name('dashboard/frontendpage/add');
    Route::get('dashboard/frontendpage/edit/{id}', [FrontendPageController::class, 'edit_frontendpage'])->name('dashboard/frontendpage/edit');
    Route::post('dashboard/frontendpage/edit/{id}', [FrontendPageController::class, 'edit_frontendpage_action'])->name('dashboard/frontendpage/edit');
});

