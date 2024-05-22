<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_equipo extends Model
{
    protected $table = 'tipo_equipo'; // Aquí debes especificar el nombre de tu tabla

use HasFactory;


public function productos(){
    return $this->hasMany('App\Models\productos');
}
}