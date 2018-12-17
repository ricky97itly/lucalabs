<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
  * Seed the application's database.
  *
  * @return void
  */
  public function run()
  {
    DB::table('students')->delete();
    $this->call(StudentsSeeder::class);
    // $this->call(UsersTableSeeder::class);
  }
}
