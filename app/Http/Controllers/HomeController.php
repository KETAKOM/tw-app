<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\PostRepositoryInterface;
use App\Repositories\FollowRepositoryInterface;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        PostRepositoryInterface $post_repository,
        FollowRepositoryInterface $follow_repository
    )
    {
        $this->middleware('auth');
        $this->post_repository = $post_repository;
        $this->follow_repository = $follow_repository;
    }

    /**
     * 画面の初期表示
     *
     */
    public function index()
    {
        $user = Auth::user();

        $posts = $this->post_repository->getFollowPostsByUserId($user->id);
        $follows = $this->follow_repository->getFollowsByUserId($user->id, true);
        $followers = $this->follow_repository->getFollowersByUserId($user->id, true);

        $user = [
            'user_id' => $user->id,
            'user_name' => $user->name
        ];

        return view('contents.top')->with([
            'user' => $user,
            'posts' => collect($posts->items()), 
            'follows' => $follows,
            'followers' => $followers,
        ]);
    }
}
