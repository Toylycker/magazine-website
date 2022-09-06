<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = [
            ['Blogerçylyk', 'Блогерство'],
            ['Biznes', 'Бизнес'],
            ['Marketing', 'Маркетинг'],
            ['Wagt menejment', 'Тайм менеджмент'],
            ['Gözellik we saglyk', 'Красота и здоровье'],
            ['Sport', 'Спорт'],
            ['Syýahatçylyk', 'Путешествие'],
        ];

        foreach ($objects as $object) {
            $subject = new Subject();
            $subject->name = $object[0];
            $subject->name_ru = $object[1];
            $subject->save();
        }
    }
}
