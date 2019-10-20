<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->bigInteger('employee_id')->unsigned()->index();
            $table->foreign('employee_id','posts_employee')
                  ->references('id')
                  ->on('employees');
        });
        Schema::table('comments',function(Blueprint $table){
          $table->bigInteger('post_id')->unsigned()->index();
          $table->foreign('post_id','comments_post')
                ->references('id')
                ->on('posts');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('posts', function (Blueprint $table) {
          $table->dropforeign('posts_employee');
          $table->dropcolumn('employee_id');

      });
      Schema::table('comments', function (Blueprint $table) {
          $table->dropforeign('comments_post');
          $table->dropcolumn('post_id');

      });
    }
}
