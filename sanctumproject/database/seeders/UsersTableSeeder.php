<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
     
        'name'=>'sagar',
        'email'=>'sag@gmail.com',

        'password'=> Hash::make('[sagar]')

]);
    }
}
