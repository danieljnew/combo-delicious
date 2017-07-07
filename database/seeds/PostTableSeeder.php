<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post([
          'title' => 'Learning Laravel',
          'content' => 'This is a test of the seed functionality.'
        ]);
        $post->save();
        $post = new \App\Post([
          'title' => 'Really Learning Laravel',
          'content' => 'This is a test of the seed functionality once again.'
        ]);
        $post->save();
    }
}
