<?php

namespace Database\Seeders;

use App\Models\LikeDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikeDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LikeDetail::create([
            'user_id' => 2,
            'feed_id' => 1,
        ]);
        LikeDetail::create([
            'user_id' => 1,
            'feed_id' => 1,
        ]);
        LikeDetail::create([
            'user_id' => 1,
            'feed_id' => 2,
        ]);
        LikeDetail::create([
            'user_id' => 1,
            'feed_id' => 3,
        ]);
        LikeDetail::create([
            'user_id' => 2,
            'feed_id' => 4,
        ]);
    }
}
