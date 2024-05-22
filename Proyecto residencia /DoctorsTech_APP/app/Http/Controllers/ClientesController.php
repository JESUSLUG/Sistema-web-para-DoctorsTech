<?php

namespace App\Http\Controllers;
use App\Models\clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
 // Método para la ruta '/clientes'
 public function clientes()
 {
   return view('clientes');
 }

 // Método para la ruta '/clientesdb'
 public function clientesbd()
 {
    $clientes = clientes::paginate();  
   return view('clientesbd', compact('clientes')); 
 }

   /* public function index(){
        $clientes = Cliente::paginate();
    }*/


    public function __invoke(){ return view("clientes");}

    public function store(Request $request)
{
    try {
        $cliente = new clientes();

        $cliente->nombreC = $request->input('nombreC');
        $cliente->dirección = $request->input('direccion');
        $cliente->numero = $request->input('telefono');
        $cliente->contacto = $request->input('contacto');
        $cliente->email = $request->input('email');
        $cliente->especialidad = $request->input('especialidad');

        $cliente->save();

        // Redirecciona de vuelta a la misma vista
        return back()->with('success', 'Cliente guardado correctamente');
    } catch (\Exception $e) {
        // Manejo de errores
        return back()->with('error', 'Error al guardar el cliente: ' . $e->getMessage());
    }
}
}
