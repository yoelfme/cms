<?php

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Collection;
use Cms\Section\Section;

class SectionsSeeder extends Seeder {

    public function run()
    {
        $this->haveSections(50);
    }

    public function haveSections($num = 10)
    {
        $faker = Faker::create();
        $sections = new Collection();

        for ($i=0; $i<$num; $i++)
        {
            $name = $faker->unique()->sentence(2);

            $sections->add(Section::create([
                'name' => $name,
                'slug_url' => \Str::slug($name),
                'type' =>$faker->randomElement(['page','blog']),
                'menu_order' => rand(1,10),
                'menu' => rand(0,1),
                'published' => rand(0,1)
            ]));
        }

        return $sections;
    }

}