<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $table = 'productos'; // Aquí debes especificar el nombre de tu tabla

use HasFactory;
public function detalle_cotizacion(){
    return $this->hasMany('App\Models\detalle_cotizacion');
}

//Relaciones inversas de base de datos:

    public function marca(){
        return $this->belongsTo('App\Models\marca');
    } 
    
    public function tipo_equipo(){
        return $this->belongsTo('App\Models\tipo_equipo');
    }

    public function especialidad(){
        return $this->belongsTo('App\Models\especialidad');
    }

    public function accesorios(){
        return $this->belongsTo('App\Models\accesorios');
    }

    public function transductores(){
        return $this->belongsTo('App\Models\transductores');
    }

    public function licencias(){
        return $this->belongsTo('App\Models\licencias');
    }
}