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
    public function index(){
        $posts = \App\Models\Post::all();

        return view('home.index',['posts'=>$posts]);
    }
    public function about(){
        return view('home.about');
    }

    public function contact(){
        return view('home.contact');
    }
}