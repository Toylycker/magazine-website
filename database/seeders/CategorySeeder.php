<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = [
            ['Kafe/restoranlar', 'Кафе/рестораны'],
            ['Konditer önümleri', 'Контитерские изделия'],
            ['Toý hyzmatlary', 'Свадебный услуги'],
            ['Egin-eşik we moda', 'Одежда и мода'],
            ['Gözellik we saglyk', 'Красота и здоровье'],
            ['Dermanhanalar', 'Аптеки'],
            ['Gozgalmaýan emläk', 'Недвижимость'],
            ['Logistika', 'Логистика'],
            ['Hyzmatlar', 'Услуги'],
            ['Önümler', 'Товары'],
            ['Öý we ofis üçin', 'Для дома и офиса'],
            ['Gurluşyk', 'Строительство'],
            ['Mobil programmalary', 'Мобильные приложения'],
            ['Kompýuter we tehnika', 'Компьютер и техника'],
            ['Awto', 'Авто'],
        ];

        foreach ($objects as $object) {
            $category = new Category();
            $category->name = $object[0];
            $category->name_ru = $object[1];
            $category->save();
        }
    }
}
