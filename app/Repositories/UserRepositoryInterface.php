<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    /**
     * ユーザー情報にフォロー状態を追加した一覧を取得
     *
     * @var string $userId
     * @return object
     */
    public function getUserListWithFollowState($userId);
}