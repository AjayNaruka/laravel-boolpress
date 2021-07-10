<?php

use App\Post;
use Illuminate\Database\Seeder;
use illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<20;$i++){
        $new_post= new Post();
        $new_post['title'] = $i++.' Titolo iniziale test';
        $new_post['slug']= Str::slug($new_post['title'],'-');
        $new_post['content']= $i++.'Lorem ipsum dolor sit amet consectetur adipisicing elit. Et odit natus laborum quo dignissimos, soluta nisi. Beatae omnis, at similique consectetur explicabo doloremque placeat dolores ad, nulla est id recusandae.';
        $new_post->save();
        }
        
    }
}
