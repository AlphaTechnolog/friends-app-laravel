<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MaritalStatus;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MaritalStatus::insert([
            ['id' => 1, 'value' => 'Single'],
            ['id' => 2, 'value' => 'Married'],
            ['id' => 3, 'value' => 'Divorced'],
            ['id' => 4, 'value' => 'Widower'],
        ]);
    }
}
