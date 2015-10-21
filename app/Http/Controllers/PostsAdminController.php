<?php
/**
 * Created by PhpStorm.
 * User: paulo
 * Date: 19/10/2015
 * Time: 16:35
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PostsAdminController extends Controller
{
        /**
         * @var \App\Models\Post
         */
        private $post;
        public function __construct(\App\Models\Post $post){
            $this->post = $post;
        }

        public function index(){
            $posts = $this->post->paginate(10);
            return view('admin.index', ['posts'=>$posts]);
        }

}