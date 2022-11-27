<?php

namespace Database\Seeders;

use App\Models\Moisture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoistureSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Moisture::factory()->count(50)->create();
    }
}
