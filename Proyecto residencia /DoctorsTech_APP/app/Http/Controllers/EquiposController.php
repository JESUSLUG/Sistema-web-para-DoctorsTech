<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\productos;
use Illuminate\Http\Request;
use App\Models\marca;
use App\Models\tipo_equipo;
use App\Models\accesorio;
use App\Models\especialidad;
use App\Models\licencias;
use App\Models\transductores;

class EquiposController extends Controller
{
    public function equipos()
    {
        $marca = marca::all();
        $tipo_equipo = tipo_equipo::all();
        $accesorio = accesorio::all();
        $especialidad = especialidad::all();
        $licencias = licencias::all();
        $transductores = transductores::all();

        return view('equipos')->with([
            'marca' => $marca,
            'tipo_equipo' => $tipo_equipo,
            'accesorio' => $accesorio,
            'especialidad' => $especialidad,
            'licencias' => $licencias,
            'transductores' => $transductores
        ]);
    }


    public function equiposbd()
    {
        $equipos = productos::paginate();
        return view('equiposbd')->with('equipos', $equipos);
    }

    public function __invoke()
    {
        return view("equipos");
    }

    public function store(Request $request)
    {
        try {
            $equipo = new productos();

            $equipo->nombre = $request->input('nombre');
            $equipo->precio = $request->input('precio');
            $equipo->caracteristicas = $request->input('caracteristicas');
            
            // Llaves foráneas
            $equipo->id_marca = $request->input('marca_id');
            $equipo->id_tipo_equipo = $request->input('tipo_equipo_id');
            $equipo->id_accesorio = $request->input('accesorio_id');
            $equipo->id_especialidad = $request->input('especialidad_id');
            $equipo->id_licencias = $request->input('licencia_id');
            $equipo->id_transductores = $request->input('transductor_id');

            $equipo->save();

            return back()->with('success', 'Producto guardado correctamente en la base de datos');
        } catch (\Illuminate\Database\QueryException $e) {
            return back()->with('error', 'Error al guardar el producto en la base de datos: ' . $e->getMessage());
        } catch (\Exception $e) {
            return back()->with('error', 'Error inesperado al guardar el producto: ' . $e->getMessage());
        }
    }

    /*public function viewPDFEquipment($idProduct){

        $product = DB::table('productos')
        ->join('marca', 'productos.id_marca', 'marca.id')
        ->where('productos.id', $idProduct)->get();  

        $data = [
           'titulo' => 'Styde.net',
           'products' => $product
       ];
   
       $pdf = \PDF::loadView('pdf', $data);
  
       return $pdf->stream('archivo.pdf');
     }*/
}
