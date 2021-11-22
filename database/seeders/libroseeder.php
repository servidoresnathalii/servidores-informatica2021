<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class libroseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libro')->insert([
        'nombre'=>'Estructura de Datos',
        'autor'=>'Luis Joyanes',
        ]);
        DB::table('libro')->insert([
        'nombre'=>'Programacion orientada a objetos',
        'autor'=>'Luis Joyanes',
        ]);
    }
}
