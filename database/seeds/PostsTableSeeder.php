<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=50; $i++) {
            $day =  mt_rand(1,31);
            $time =  mt_rand(0,23);
            $minute =  mt_rand(0,59);
            DB::table('posts')->insert([
                'user_id' => 1,
                'parent_post_id' => NULL,
                'text' => 'スモールライトー! LV:' . $i,
                'created_at' => Carbon::create(2018, 12, $day, $time, $minute, 00),
                'updated_at' => NULL,
            ]);
        }

        for ($i=1; $i<=50; $i++) {
            $day =  mt_rand(1,31);
            $time =  mt_rand(0,23);
            $minute =  mt_rand(0,59);
            DB::table('posts')->insert([
                'user_id' => 2,
                'parent_post_id' => NULL,
                'text' => 'タイムマシーン! LV:' . $i,
                'created_at' => Carbon::create(2018, 12, $day, $time, $minute, 00),
                'updated_at' => NULL,
            ]);
        }

        for ($i=1; $i<=50; $i++) {
            $day =  mt_rand(1,31);
            $time =  mt_rand(0,23);
            $minute =  mt_rand(0,59);
            DB::table('posts')->insert([
                'user_id' => 3,
                'parent_post_id' => NULL,
                'text' => '翻訳こんにゃくー! LV:' . $i,
                'created_at' => Carbon::create(2018, 12, $day, $time, $minute, 00),
                'updated_at' => NULL,
            ]);
        }
    }
}
