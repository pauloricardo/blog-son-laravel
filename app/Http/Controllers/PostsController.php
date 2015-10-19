<?php
/**
 * Created by PhpStorm.
 * User: paulo
 * Date: 19/10/2015
 * Time: 16:35
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PostsController extends AppController
{
    public function post($id){
        return view('posts.post');
    }


}