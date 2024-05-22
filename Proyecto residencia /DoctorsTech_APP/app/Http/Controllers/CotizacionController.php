<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\clientes;
use App\Models\productos;
use App\Models\especialidad;
use App\Models\cotizacion;


class CotizacionController extends Controller
{

  public function cotizacion()
    {
        $clientes = clientes::all();
        $especialidad = especialidad::all();
        $productos = productos::all();

        return view('cotizacion')->with([
            'clientes' => $clientes,
            'especialidad' => $especialidad,
            'productos' => $productos
        ]);
    }


 public function cotizacionbd()
 {
    $cotizacion = cotizacion::paginate();
        return view('cotizacionbd')->with('cotizacion', $cotizacion);
 }


    public function __invoke(){ return view ("cotizacion");}
    

    public function store(Request $request)
    {
        try {
            $cotizacion = new cotizacion();

            $cotizacion->vendedor = $request->input('vendedor');
            $cotizacion->dolar = $request->input('dolar');
            $cotizacion->aumento = $request->input('aumento');
            $cotizacion->descuento = $request->input('descuento');
            $cotizacion->condiciones = $request->input('condiciones');
            $cotizacion->notas = $request->input('notas');

            // Llaves foráneas
          
            $cotizacion->id_cliente = $request->input('clientes_id');
            $cotizacion->id_especialidad = $request->input('especialidad_id');
            $cotizacion->id_producto = $request->input('productos_id');
        
            $cotizacion->save();

            return back()->with('success', 'Cotizacion guardada correctamente');
        } catch (\Exception $e) {
            // Manejo de errores
            return back()->with('error', 'Error al guardar la cotizacion: ' . $e->getMessage());
        }
    }

    public function viewPDFcot($idCot){

        $Cot = DB::table('cotizacion')
        ->join('clientes', 'cotizacion.id_cliente', 'clientes.id')
        ->join('productos', 'cotizacion.id_producto', 'productos.id')
        ->join('transductores', 'productos.id_transductores', 'transductores.id')
        ->join('licencias', 'productos.id_licencias', 'licencias.id')
        ->join('accesorio', 'productos.id_accesorio', 'accesorio.id')
        ->where('cotizacion.id', $idCot)
        ->get();  

    // Realiza los cálculos
    $aumento = $Cot->pluck('aumento')->first();
    $descuento = $Cot->pluck('descuento')->first();
    $precio = $Cot->pluck('precio')->first();
    $dolar = $Cot->pluck('dolar')->first();
    $precioT = $Cot->pluck('precioT')->first();
    $precioL = $Cot->pluck('precioL')->first();
    $precioA = $Cot->pluck('precioA')->first();

        $precioMX= $precio * $dolar;
        $precioTMX= $precioT * $dolar;
        $precioLMX= $precioL * $dolar;
        $precioAMX= $precioA * $dolar;
        $resultado = $precioMX + $aumento - $descuento;
        $Subtotal= $resultado + $precioTMX + $precioLMX + $precioAMX;
        $IVA = ($Subtotal/100)*16;
        $Total = $Subtotal+$IVA;

        $data = [
           'titulo' => 'Styde.net',
           'products' => $Cot,
            'clientes' => $Cot,
            'transductores' => $Cot,
           'precioMX'=>$precioMX,
           'precioTMX'=>$precioTMX,
           'precioLMX'=>$precioLMX,
           'precioAMX'=>$precioAMX,
           'resultado' => $resultado,
           'Subtotal' => $Subtotal,
           'IVA' => $IVA,
           'Total' => $Total
       ];
   
       $pdf = \PDF::loadView('pdf', $data);
  
       return $pdf->stream('archivo.pdf');
     }
}
