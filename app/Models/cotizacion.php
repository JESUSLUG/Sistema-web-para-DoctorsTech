<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class cotizacion extends Model
{
    protected $table = 'cotizacion'; // Aquí debes especificar el nombre de tu tabla

    use HasFactory;
    public function productos(){
        return $this->hasMany('App\Models\productos');
    }

    public function clientes(){
        return $this->belongsTo('App\Models\clientes');
        return $this->belongsTo(clientes::class, 'id_clientes');
    } 

    public function especialidad(){
        return $this->belongsTo('App\Models\especialidad');
    }
    
 

}
