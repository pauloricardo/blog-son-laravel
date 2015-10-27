<?php
/**
 * Created by PhpStorm.
 * User: paulo
 * Date: 19/10/2015
 * Time: 16:35
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

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

        public function create(){
            return view('admin.posts.create');
        }

        public function store(\App\Http\Requests\PostRequest $request){
            $tags = array_filter(array_map('trim',explode(",", $request->tags)));
            $tagsIds = [];
            foreach($tags as $tag){
                $tagsIds[] = \App\Models\Tag::firstOrCreate(['name'=>$tag])->id;
            }
            $post = $this->post->create($request->all());
            $post->tags()->sync($tagsIds);

            return redirect()->route('admin.posts.index');
        }
        public function edit($id){
            $post = $this->post->find($id);

            return view('admin.posts.edit',['post'=>$post]);
        }
    public function update($id, \App\Http\Requests\PostRequest $request){
        $post = $this->post->find($id)->update($request->all());

        return redirect()->route('admin.posts.index');
    }
    public function destroy($id){
        $post = $this->post->find($id)->delete();
        return redirect()->route('admin.posts.index');
    }

}