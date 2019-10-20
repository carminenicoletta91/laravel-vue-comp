<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Employee;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Post::class,50) -> make() -> each(function($post){
        $employee = Employee::inRandomOrder() -> first();
        $post -> employee()->associate($employee);
        $post ->save();


      });
    }
}
