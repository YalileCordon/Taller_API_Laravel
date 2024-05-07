<?php

namespace Database\Seeders;

use App\Models\Dresses;
use Illuminate\Database\Seeder;

class DressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dresses::factory(50)->create();
    }
}