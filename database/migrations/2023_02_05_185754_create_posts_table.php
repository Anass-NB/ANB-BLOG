<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('posts', function (Blueprint $table) {
      $table->id();
      $table->string("title");
      $table->string("slug");
      $table->string("summary");
      $table->text("content");
      $table->string("status", 3);
      $table->string("photo");
      $table->foreignId("category_id")->references("id")->on("categories")->onDelete("cascade");
      $table->foreignId("user_id")->references("id")->on("users")->onDelete("cascade");
      $table->softDeletes();
      $table->timestamps();

    });
  }


  public function down()
  {
    Schema::dropIfExists('posts');
  }
}
