<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{

      /**
       * Run the database seeds.
       *
       * @return void
       */
      public function run(Faker $faker)
      {



          $user = new User();
          $user->name = 'admin';
          $user->email = 'admin@admin.com';
          $user->password = bcrypt('password');
          $user->save();


      }




}
