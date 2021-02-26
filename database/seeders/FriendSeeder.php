<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Friend;

class FriendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Friend::insert([
            [
                'marital_status_id' => 1,
                'sex_id'            => 1,
                'name'              => 'Gabriel',
                'lastname'          => 'Guerra'
            ],
            [
                'marital_status_id' => 1,
                'sex_id'            => 1,
                'name'              => 'Jesus',
                'lastname'          => 'Guerra'
            ],
            [
                'marital_status_id' => 2,
                'sex_id'            => 1,
                'name'              => 'Franklim',
                'lastname'          => 'Guerra'
            ],
            [
                'marital_status_id' => 2,
                'sex_id'            => 2,
                'name'              => 'Jenny',
                'lastname'          => 'Salazar'
            ]
        ]);
    }
}
