<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;

class UsersTableSeeder extends Seeder
{

      /**
       * Run the database seeds.
       *
       * @return void
       */
      public function run(Faker $faker)
      {


        for ($i=0; $i < 6; $i++) {
          $user = new User;
          $user->name = $faker->sentence(10);
          $user->email = $faker->email(10);
          $user->password = $faker->password(10);
          $user->save();
        }


      }




}
