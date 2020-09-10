<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendBlogController extends Controller
{
    public function all_blogs(){

        return view('backend.backend_blog');

    }

    public function blog_details(){

        return view('backend.backend_blog_view');

    }

    public function add_blog(){

         return view('backend.backend_add_blog');

      }
      public function save_blog(){

        return view('backend.backend_add_blog');

     }

    public function edit_blog(){

            return view('backend.backend_edit_blog');

        }


    public function update_blog(){

        return view('backend.backend_edit_blog');

    }
   public function delete_blog(){

           return view('backend.backend_edit_blog');

       }



    }
