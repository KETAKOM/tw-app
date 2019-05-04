<?php

namespace App\Repositories;

interface FollowRepositoryInterface
{
    /**
     * ユーザーIDからフォローしている人の一覧を取得
     *
     * @var string $userId
     * @return object
     */
    public function getFollowsByUserId($userId, $count);

    /**
     * ユーザーIDからフォローされている人の一覧を取得
     *
     * @var string $userId
     * @return object
     */
    public function getFollowersByUserId($userId, $count);

    /**
     * フォローの登録
     *
     * @var string $userId
     * @return object
     */
    public function toFollow($toUserId, $fromUserId);

    /**
     * フォローの解除
     *
     * @var string $userId
     * @return object
     */
    public function unFollow($toUserId, $fromUserId);
}