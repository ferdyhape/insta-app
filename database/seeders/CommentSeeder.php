<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'feed_id' => 1,
            'user_id' => 1,
            'content' => 'asikk',
        ]);
        Comment::create([
            'feed_id' => 1,
            'user_id' => 2,
            'content' => 'mantap gann',
        ]);
        Comment::create([
            'feed_id' => 2,
            'user_id' => 1,
            'content' => 'ggwp'
        ]);
        Comment::create([
            'feed_id' => 3,
            'user_id' => 2,
            'content' => 'ntapss',
        ]);
    }
}
