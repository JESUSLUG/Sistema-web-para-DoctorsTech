<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $table = 'clientes'; // Aquí debes especificar el nombre de tu tabla

use HasFactory;
public function cotizacion(){
    return $this->hasMany('App\Models\cotizacion');
}

}