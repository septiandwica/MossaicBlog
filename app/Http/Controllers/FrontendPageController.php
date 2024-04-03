<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendPageController extends Controller
{
    public function frontendpage(){
        return view("admin.frontendpage.list");
    }
}
