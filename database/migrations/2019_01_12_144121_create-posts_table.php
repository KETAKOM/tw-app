<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

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
            $table->increments('id')->comment('投稿ID');
            $table->integer('user_id')->comment('ツイートしたユーザーID');
            $table->integer('parent_post_id')->nullable()->comment('親元投稿ID');
            $table->string('text')->default('')->comment('ツイート内容');
            $table->timestamps();
        });
        // ALTER 文を実行しテーブルにコメントを設定
        DB::statement("ALTER TABLE posts COMMENT '投稿情報管理テーブル'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
