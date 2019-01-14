<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\PostRepositoryInterface;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PostRepositoryInterface $post_repository)
    {
        $this->middleware('auth');
        $this->post_repository = $post_repository;
    }

    /**
     * 画面の初期表示
     *
     */
    public function index()
    {
        $user = Auth::user();

        $posts = $this->post_repository->getFollowPostsByUserId($user->id);

        $user = [
            'user_id' => $user->id,
            'user_name' => $user->name
        ];

        return view('contents.top')->with([
            'user' => $user,
            'posts' => collect($posts->items()), 
        ]);
    }
}
