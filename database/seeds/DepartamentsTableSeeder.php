<?php

use Illuminate\Database\Seeder;
use App\Departament;

class DepartamentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departament :: insert ([ 
            'name' => 'Administrativo',
            'status' => 1, 
        ]);
        Departament :: insert ([ 
            'name' => 'Operativo',
            'status' => 1,  
        ]);
        Departament :: insert ([ 
            'name' => 'Mantenimiento',
            'status' => 1,  
        ]);
    }
}
