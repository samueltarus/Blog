<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.frontend_blog');
});


Route::get('fronted-blogs','FrontendBlogController@all_blogs');
Route::get('frontend-blog-details','FrontendBlogController@blog_details');


//backend routes
Route::get('backend-blogs','BackendBlogController@all_blogs');
Route::get('backend-blog-details','BackendBlogController@blog_details');

Route::get('add-blog','BackendBlogController@add_blog');
Route::post('save-blog','BackendBlogController@save_blog');

Route::get('edit-blog/{blog_id}','BackendBlogController@edit_blog');
Route::post('update-blog/{blog_id}','BackendBlogController@update_blog');
Route::get('delete-blog/{blog_id}','BackendBlogController@delete_blog');


