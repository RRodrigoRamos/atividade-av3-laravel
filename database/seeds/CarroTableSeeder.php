<?php

use Illuminate\Database\Seeder;
use App\Carro;

class CarroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Carro::create([
        'numbcarro'=>1232134,
        'marca'=>'Ford',
        'nomecarro'=>'Ford Focus',
        'proprietario'=>'Rodrigo Ramos',
        'nplaca'=>'AB-1212',
        'cor'=>'Vermelho Vinho',
        'fabricacao'=>2013,
        ]);
    }
}
