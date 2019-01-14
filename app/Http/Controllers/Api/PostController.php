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
        $posts = $this->post_repository->getFollowPostsByUserId($userId);

        return response()->json(['posts' => $posts]);
    }

    /**
     * ツイート作成
     *
     */
    public function store()
    {
        $posts = $this->post_repository->createPost();
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
