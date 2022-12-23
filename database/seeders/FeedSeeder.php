<?php

namespace Database\Seeders;

use App\Models\Feed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feed::create([
            'user_id' => 1,
            'caption' => 'Caption post 1 user id 1',
            'picture_path' => 'D:Tes'
        ]);
        Feed::create([
            'user_id' => 1,
            'caption' => 'Caption post 2 user id 1',
            'picture_path' => 'D:Tes'
        ]);
        Feed::create([
            'user_id' => 1,
            'caption' => 'Caption post 3 user id 1',
            'picture_path' => 'D:Tes'
        ]);
        Feed::create([
            'user_id' => 2,
            'caption' => 'Caption post 1 user id 2',
            'picture_path' => 'D:Tes'
        ]);
        Feed::create([
            'user_id' => 2,
            'caption' => 'Caption post 2 user id 2',
            'picture_path' => 'D:Tes'
        ]);
        Feed::create([
            'user_id' => 2,
            'caption' => 'Caption post 3 user id 2',
            'picture_path' => 'D:Tes'
        ]);
    }
}
