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
     * ユーザーIDからフォローしている人と自分の呟きを時系列で取得
     *
     * @var string $userId
     * @return object
     */
    public function getFollowPostsByUserId($userId)
    {
        return $this->post
            ->join('users', 'users.id', '=','posts.user_id')
            ->join('follows', 'follows.to_follow_user_id', '=','users.id')
            ->select('posts.*', 'users.name as user_name')
            ->where('follows.from_follow_user_id', '=', $userId)
            ->orWhere('posts.user_id', '=', $userId)
            ->orderBy('posts.created_at', 'DESC')
            ->paginate(20);
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