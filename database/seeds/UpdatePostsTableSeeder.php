<?php

use App\Category;
use App\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdatePostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();

        foreach($posts as $cat){
            $cat['category_id']=rand(1,4);
            $cat->update();
        }
    }
}
