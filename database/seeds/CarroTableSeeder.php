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
        'nplaca'=>'ABA-1212',
        'cor'=>'Vermelho Vinho',
        'fabricacao'=>2013,
        ]);

      Carro::create([
        'numbcarro'=>1232135,
        'marca'=>'Fiat',
        'nomecarro'=>'Palio Fire',
        'proprietario'=>'Renan Costa',
        'nplaca'=>'ABC-1212',
        'cor'=>'Prata',
        'fabricacao'=>2017,
        ]);

      Carro::create([
        'numbcarro'=>1232136,
        'marca'=>'Fiat',
        'nomecarro'=>'Picate Toro',
        'proprietario'=>'Rodrigo Ramos',
        'nplaca'=>'NYY-1515',
        'cor'=>'Branco',
        'fabricacao'=>2018,
        ]);

      Carro::create([
        'numbcarro'=>1232137,
        'marca'=>'Ford',
        'nomecarro'=>'Fiest Ret',
        'proprietario'=>'Leandro Lima',
        'nplaca'=>'ABB-1121',
        'cor'=>'Preto',
        'fabricacao'=>2015,
        ]);
    }
}
