<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendBlogController extends Controller
{
    public function all_blogs(){
        return view('frontend.frontend_blog');

    }

    public function blog_details(){
        
        return view('frontend.frontend_blog_view');
    }
}
