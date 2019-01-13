<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\PostRepositoryInterface;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PostRepositoryInterface $post_repository)
    {
        // $this->middleware('auth');

        $this->post_repository = $post_repository;
    }

    /**
     * ツイート一覧の取得
     *
     */
    public function get(Request $request)
    {
        $userId = $request->user_id;
        $posts = $this->post_repository->getPostsByUserId($userId);
        
        return $posts;
    }

    /**
     * ツイート作成
     *
     */
    public function store()
    {
        $post = new Post();
        $post->user_id = 1;
        $post->parent_post_id = 1;
        $post->text = "初めての呟き";
        $post->save();
        return "CreaatePost";
    }

    /**
     * ツイート削除
     *
     */
    public function delete()
    {
        return "DeletePost";
    }
}
