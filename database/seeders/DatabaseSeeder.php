<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            CategorySeeder::class,
            SubjectSeeder::class,
            UserSeeder::class,
            // WorkerSeeder::class,
            MagazineSeeder::class,
            PartnerSeeder::class,
        ]);
        \App\Models\Blog::factory()->count(50)->create();
        // \App\Models\Category::factory()->count(15)->create();
        // \App\Models\Partner::factory()->count(100)->create();

        // $this->call([
        //     PageSeeder::class,
        // ]);
    }
}
