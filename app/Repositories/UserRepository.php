<?php

namespace App\Repositories;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    protected $user;

    /**
    * @param object $User
    */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * ユーザー情報にフォロー状態を追加した一覧を取得
     *
     * @var string $userId
     * @return object
     */
    public function getUserListWithFollowState($userId)
    {
        return $this->user
            ->leftJoin('follows', 'users.id', '=', 'follows.to_follow_user_id')
            ->where('users.id', '!=', $userId)
            ->where('follows.to_follow_user_id', '=', $userId)
            ->get();
    }
}