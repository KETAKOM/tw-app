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

    /**
     * 呟きの作成
     *
     * @var string $userId
     * @return object
     */
    public function createPost();
}