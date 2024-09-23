<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $platforms = ['TikTok', 'Instagram'];

        foreach ($platforms as $platform) {
            $obj = new Type();
            $obj->name = $platform;
            $obj->save();
        }
    }
}
