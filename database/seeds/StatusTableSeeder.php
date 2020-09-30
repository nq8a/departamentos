<?php

use Illuminate\Database\Seeder;
use App\Statu;
class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Statu :: insert ([ 
            'name' => 'Activo', 
        ]);
        Statu :: insert ([ 
            'name' => 'Inactivo', 
        ]);
        Statu :: insert ([ 
            'name' => 'Bloqueado', 
        ]);
    }
}
