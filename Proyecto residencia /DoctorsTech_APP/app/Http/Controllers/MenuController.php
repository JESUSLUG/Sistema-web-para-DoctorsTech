<?php

namespace App\Http\Controllers;
use App\Models\clientes;
use Illuminate\Http\Request;

class MenuController extends Controller
{
   public function __invoke(){ return view("menu");}


   public function ViewPDF(){

      $data = [
         'titulo' => 'Styde.net'
     ];
 
     $pdf = \PDF::loadView('pdf');

     return $pdf->stream('archivo.pdf');
   }
}
