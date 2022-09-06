<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Partner;
use App\Models\Link;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partner>
 */
class PartnerFactory extends Factory
{

    public function configure()
    {
        return $this->afterMaking(function (Partner $partner) {
            //
        })->afterCreating(function (Partner $partner) {

            $sources = [['instagram', 2], ['website', 4], ['phone', 1], ['facebook', 5], ['mail', 3], ['map', 6]];
            $rand = rand(1, 4);
            for ($i=0; $i < $rand; $i++) { 
                $link = new Link();
                $randt = rand(0, 5);
                $link->partner_id = $partner->id;
                $link->name = $sources[$randt][0];
                $link->sort_order = $sources[$randt][1];
                $link->link = $this->faker->name();
                $link->save();
            }
                $link = new Link();
                $link->partner_id = $partner->id;
                $link->name = $this->faker->name();
                $link->link = $this->faker->name();
                $link->save();
        });
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id'=> Category::inRandomOrder()->first()->id,
            'name'=> $this->faker->name(),
            'name_ru'=> $this->faker->name(),
            'description'=> $this->faker->paragraph(),
            'description_ru'=> $this->faker->paragraph(),
            'address'=> $this->faker->address(),
            'sort_order'=> rand(1,6),
        ];
    }
}
