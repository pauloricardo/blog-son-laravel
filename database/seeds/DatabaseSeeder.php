<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        factory('App\Models\User')->create(
            [
                'name' => 'Paulo Ricardo',
                'email' => 'paulorangel161@gmail.com',
                'password' => bcrypt('paul1508'),
                'remember_token' => str_random(10)
            ]
        );

        $this->call(UserTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(TagTableSeeder::class);

        Model::reguard();
    }
}
