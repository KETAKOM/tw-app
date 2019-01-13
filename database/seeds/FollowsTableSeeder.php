<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FollowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('follows')->insert([
            'to_follow_user_id' => 1,
            'from_follow_user_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('follows')->insert([
            'to_follow_user_id' => 2,
            'from_follow_user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('follows')->insert([
            'to_follow_user_id' => 3,
            'from_follow_user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
