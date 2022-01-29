<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class newsSourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('news_sources')->insert($this->getData());
    }

    private function getData(): array
    {
        $faker = Factory::create('ru_RU');
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'title' => $faker->sentence(mt_rand(3,10)),
                'site_url' => $faker->url(),
                'description' => $faker->text(mt_rand(50,80))
            ];
        }
        return $data;
    }
}
