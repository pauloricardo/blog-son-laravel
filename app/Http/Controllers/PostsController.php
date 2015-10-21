<?php
/**
 * Created by PhpStorm.
 * User: paulo
 * Date: 19/10/2015
 * Time: 16:35
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function post($id){

        $post = \App\Models\Post::find($id);
        return view('posts.post',['post'=>$post]);
    }

    public function posts(){

        $posts = \App\Models\Post::all();
        return view('posts.posts',['posts'=>$posts]);
    }



}