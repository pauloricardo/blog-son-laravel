<?php
/**
 * Created by PhpStorm.
 * User: paulo
 * Date: 19/10/2015
 * Time: 16:02
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    /**
     * @var \App\Models\Post
     */
    private $post;
    public function __construct(\App\Models\Post $post){
        $this->post = $post;
    }
    public function index(){
        $posts = $this->post->paginate(5);

        return view('home.index',['posts'=>$posts]);
    }
    public function about(){
        return view('home.about');
    }

    public function contact(){
        return view('home.contact');
    }
}