<?php

use Illuminate\Database\Seeder;


class studentsSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    lucaLabs\Student::create([
      'name' => 'Luca',
      'surname' => 'Fabrizio'
      'birthday' => '1988-05-21'
    ]);
  }
}
