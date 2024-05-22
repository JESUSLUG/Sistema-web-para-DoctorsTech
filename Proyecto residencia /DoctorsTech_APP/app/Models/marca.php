<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marca extends Model
{

protected $table = 'marca'; //  nombre de la tabla

use HasFactory;

public function productos(){
    return $this->hasMany('App\Models\productos');}
}