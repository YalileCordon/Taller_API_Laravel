<?php

namespace Database\Seeders;

use App\Models\Dresses;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            CategoriesTableSeeder::class,
            DressesTableSeeder::class,
            // ...otros seeders...
        ]);
        // Category::factory(50)->create();
        // Dresses::factory(50)->create();
        
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
