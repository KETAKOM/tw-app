<?php

namespace App\Repositories;

interface PostRepositoryInterface
{
    /**
     * ユーザーIDから呟きを複数取得
     *
     * @var string $userId
     * @return object
     */
    public function getPostsByUserId($userId);
}