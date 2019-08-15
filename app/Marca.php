<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable=[
        'nome'
    ];
    public $timestamps = false;

    protected $table = 'marca';

    public function carros() {
        return $this->hasMany('App\Carro');
    }




}
    