<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modelPost = new \App\Models\Post();
        $posts = \App\Models\Post::all(['id']);
        foreach($posts as $id){
            for($i = 0 ; $i < 10 ; $i++){
                factory(\App\Models\Comment::class)->create([
                    'post_id' => $id->id
                ]);
            }

        }

    }
}
