<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class newsSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('news')->insert($this->getData());
    }

    private function getData(): array
    {
        $faker = Factory::create('ru_RU');
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            for ($n = 1; $n <= 10; $n++) {
                $title = $faker->sentence(mt_rand(3, 10));
                $data[] = [
                    'category_id' => $n,
                    'news_sources_id' => $n,
                    'title' => $title,
                    'slug' => \Str::slug($title),
                    'image' => $faker->imageUrl(),
                    'description' => $faker->text(mt_rand(100, 200))
                ];
            }
        }
        return $data;
    }
}
