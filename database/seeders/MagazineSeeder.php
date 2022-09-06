<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Magazine;

class MagazineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $magazines = [
            ['Bärde biz 1','1.pdf', 'download-11.jpg'],
            ['Bärde biz 2','2.pdf', 'download-12.jpg'],
            ['Bärde biz 3','3.pdf', 'download-13.jpg'],
        ];

        foreach ($magazines as $value) {
            $magazine = new Magazine();
            $magazine->name = $value[0];
            $magazine->filename = $value[1];
            $magazine->photo = $value[2];
            $magazine->save();
        }
    }
}
