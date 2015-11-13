<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;

class CategoryPostTableSeeder extends Seeder
{
    public function run()
    {
        $post = Post::find(1);
        $post->categories()->attach([13]);

        $post = Post::find(2);
        $post->categories()->attach([15]);

        $post = Post::find(3);
        $post->categories()->attach([22]);

        $post = Post::find(4);
        $post->categories()->attach([5,24]);

        $post = Post::find(5);
        $post->categories()->attach([4,12]);

        $post = Post::find(6);
        $post->categories()->attach([10]);

        $post = Post::find(7);
        $post->categories()->attach([4,12]);

        $post = Post::find(8);
        $post->categories()->attach([18]);

        $post = Post::find(9);
        $post->categories()->attach([3,4,12]);  

        $post = Post::find(10);
        $post->categories()->attach([5]);  

        $post = Post::find(11);
        $post->categories()->attach([5]); 

        $post = Post::find(12);
        $post->categories()->attach([18]);      
    }
}
