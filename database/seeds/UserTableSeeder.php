<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\User::class, 10)->create()->each(function($p){
            for($i = 0 ; $i <= 5 ; $i++){
                $p->posts()->save(factory(\App\Models\Post::class)->make());
            }
        });

    }
}
