<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  /**
   * Seed the application's database.
   * 主要seeder
   * @return void
   */
  public function run() {
    $this->call([
			SubjectTableSeeder::class,
			PostTableSeeder::class
		]);
  }
}
