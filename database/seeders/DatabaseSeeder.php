<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\FeedSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CommentSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            FeedSeeder::class,
            CommentSeeder::class,
        ]);
    }
}
