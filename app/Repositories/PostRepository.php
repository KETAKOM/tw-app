<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    protected $post;

    /**
    * @param object $post
    */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * ユーザーIDから呟きを複数取得
     *
     * @var string $userId
     * @return object
     */
    public function getPostsByUserId($userId)
    {
        return $this->post
            ->join('users', 'users.id', '=','posts.user_id')
            ->select('posts.*', 'users.name as user_name')
            ->where('user_id', '=', $userId)
            ->get();
    }

    /**
     * 呟きの作成
     *
     * @var string $userId
     * @return object
     */
    public function createPost()
    {
        $post = new Post();
        $post->user_id = 5;
        $post->parent_post_id = 1;
        $post->text = "初めての呟き";
        return $post->save();
    }

    
}