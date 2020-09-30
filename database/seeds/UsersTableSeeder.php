<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //factory(User::class, 200)->create();
			User :: insert ([ 
			'name1' => 'Renny',
			'name2' => 'Jesús',
			'lastname1' => 'Quezada',
			'lastname2' => 'Ochoa',
			'email' => 'rquezada@gmail.com',
			'status' => 1,
			'depa' => 1,
			'password' => Hash::make(123456),
			]);
    }
}
