<?php

use Illuminate\Database\Seeder;
use App\Stage;

class StagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stage::create([
        	'name' => 'Inicio',
        	'slug' => 'inicio'
        ]);

        Stage::create([
        	'name' => 'Personalización',
        	'slug' => 'personalizacion'
        ]);

        Stage::create([
        	'name' => 'Promoción',
        	'slug' => 'promocion'
        ]);

        Stage::create([
        	'name' => 'Proyectos',
        	'slug' => 'proyectos'
        ]);
    }
}
