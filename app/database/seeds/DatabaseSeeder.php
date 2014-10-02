<?php

class DatabaseSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Eloquent::unguard();

    $this->call('ArticleTableSeeder');
    $this->call('PageTableSeeder');
    $this->call('SentrySeeder');
  }

}