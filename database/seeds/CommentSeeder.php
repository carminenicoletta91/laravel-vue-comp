<?php

use Illuminate\Database\Seeder;
use App\Comment;
use App\Post;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Comment::class,300) -> make() -> each(function($comment){
        $post = Post::inRandomOrder() -> first();
        $comment -> post()->associate($post);
        $comment ->save();


      });
    }
}
