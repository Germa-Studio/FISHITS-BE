<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(LocationsTableSeeder::class);
        $this->call(RegionpicTableSeeder::class);
        $this->call(ShipTypeTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(FishTableSeeder::class);
        $this->call(UsersHasFishTableSeeder::class);
        $this->call(PendaratansTableSeeder::class);
        $this->call(BubblesTableSeeder::class);
    }
}
