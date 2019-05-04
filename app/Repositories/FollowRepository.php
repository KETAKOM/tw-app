<?php

namespace App\Repositories;
use App\Models\Follow;

class FollowRepository implements FollowRepositoryInterface
{
    protected $follow;

    /**
    * @param object $Follow
    */
    public function __construct(Follow $follow)
    {
        $this->follow = $follow;
    }

    /**
     * ユーザーIDからフォローしている人の一覧、又は人数を取得
     *
     * @var string $userId
     * @return object
     */
    public function getFollowsByUserId($userId, $count = false)
    {
        $follows = $this->follow
            ->where('to_follow_user_id', '=', $userId);

        if ($count) {
            return $follows->count();
        }
        return $follows->get();
    }

    /**
     * ユーザーIDからフォローされている人の一覧、又は人数を取得
     *
     * @var string $userId
     * @return object
     */
    public function getFollowersByUserId($userId, $count = false)
    {
        $followers = $this->follow
            ->where('from_follow_user_id', '=', $userId);

        if ($count) {
            return $followers->count();
        }
        return $followers->get();
    }

    /**
     * フォローの登録
     *
     * @var string $userId
     * @return object
     */
    public function toFollow($toUserId, $fromUserId)
    {
        $follow = new Follow();
        $follow->to_follow_user_id = $toUserId;
        $follow->from_follow_user_id = $fromUserId;
        $follow->save();
    }

    /**
     * フォローの解除
     *
     * @var string $userId
     * @return object
     */
    public function unFollow($toUserId, $fromUserId)
    {

    }
}