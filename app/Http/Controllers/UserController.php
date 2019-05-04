<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\PostRepositoryInterface;
use App\Repositories\FollowRepositoryInterface;
use App\Repositories\UserRepositoryInterface;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        PostRepositoryInterface $post_repository,
        FollowRepositoryInterface $follow_repository,
        UserRepositoryInterface $user_repository
    )
    {
        $this->middleware('auth');
        $this->post_repository = $post_repository;
        $this->follow_repository = $follow_repository;
        $this->user_repository = $user_repository;
    }

    /**
     * 画面の初期表示
     *
     */
    public function list()
    {
        $user = Auth::user();

        $userList = $this->user_repository->getUserListWithFollowState($user->id);
        dd($userList);

        // $user = [
        //     'user_id' => $user->id,
        //     'user_name' => $user->name
        // ];

        // return view('contents.top')->with([
        //     'user' => $user,
        //     'posts' => collect($posts->items()), 
        //     'follows' => $follows,
        //     'followers' => $followers,
        // ]);
    }
}
