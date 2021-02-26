<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sex;

class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sex::insert([
            ['id' => 1, 'value' => 'Male'],
            ['id' => 2, 'value' => 'Female'],
        ]);
    }
}
