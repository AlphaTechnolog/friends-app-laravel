<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\MaritalStatusSeeder;
use Database\Seeders\SexSeeder;
use Database\Seeders\FriendSeeder;

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
            MaritalStatusSeeder::class,
            SexSeeder::class,
            FriendSeeder::class,
        ]);
    }
}
