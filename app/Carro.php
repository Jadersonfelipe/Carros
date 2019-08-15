<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carro extends Model
{
    use SoftDeletes;

    protected $fillable=[
        'modelo', 'placa', 'cor', 'marca_id'
    ];
    // public $timestamps = false;
    protected $table = 'carro';


    public function marca() {
        return $this->belongsTo('App\Marca');
    }






}
