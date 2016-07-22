<?php

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
         array('name' => 'Admin','email' => 'admin@egci427.com','admin' => '1','password' => bcrypt('adminadmin'),
		array('name' => 'Bob','email' => 'bob@egci427.com','admin' => '0','password' => bcrypt('bobbob'),
		array('name' => 'Jane','email' => 'jane@egci427.com','admin' => '0','password' => bcrypt('janejane'),
      ]
    );
    }
}
