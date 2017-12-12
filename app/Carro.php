<?php

namespace App;

use Illuminate\Database\Eloquent\Model;;

class Carro extends Model
{

      /**
       * The database table used by the model.
       *
       * @var string
       */
      protected $table = 'carros';

      protected $fillable = ['token','id','numbcarro', 'marca', 'nomecarro', 'proprietario', 'nplaca', 'cor', 'fabricacao'];
}
