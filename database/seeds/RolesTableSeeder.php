<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	Role :: insert ([ 
			'depa' => 1,
			'user' => 1,
			'status' => 1,
			]);
    }
}
