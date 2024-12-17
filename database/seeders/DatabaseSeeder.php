<?php

namespace Database\Seeders;

use App\Models\Car;
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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $categories = Category::factory(10)->create();
        
        for ($i=0; $i < 100; $i++) { 
            Car::factory()->create([
                // 'type' => 'Skoda',
                'category_id' => $categories->random()->id
            ]);
        }
    }
}
