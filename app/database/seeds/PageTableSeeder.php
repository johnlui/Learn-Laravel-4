<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PageTableSeeder extends Seeder {

  public function run()
  {
    $faker = Faker::create();

    foreach(range(1, 10) as $index)
    {
      Page::create([
        'title'   => $faker->sentence($nbWords = 6),
        'body'    => $faker->paragraph($nbSentences = 5),
        'user_id' => 1,
      ]);
    }
  }

}