<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cotización DoctorsT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #7c3c8c;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .cotizacion {
            border: 1px solid #ccc;
            padding: 20px;
            margin-top: 30px;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .cotizacion h2 {
            margin-top: 0;
            color:  #09a69e;
        }
        .cotizacion table {
            width: 100%;
            border-collapse: collapse;
        }
        .cotizacion th, .cotizacion td {
            padding: 10px;
            border: 1px solid #ccc;
        }
        .cotizacion th {
            text-align: left;
            background-color:  #09a69e;
        }
        .cotizacion .subtotal {
            font-weight: bold;
            text-align: right;
        }
        .cotizacion .total {
            font-size: 1.5em;
            font-weight: bold;
            text-align: right;
            margin-top: 20px;
            color: #333;
        }
        .logo {
            float: right;
            margin-left: 10px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
    </style>
    
</head>

<body>
    <div class="container">
        <img class="logo" src="https://www.doctorstech.mx/themes/sns_simen/images/menu2.jpg" alt="ENCABEZADO">
        
        @foreach($products as $Cot)
            <br><br><br><br><br><br>
            <h5>Fecha: {{ $Cot->created_at }}</h5>
            <p>Vendedor: {{ $Cot->vendedor }}</p>
            <p>Cliente: Dr. {{ $Cot->nombreC }}</p>
            <p> Teléfono: {{ $Cot->numero }} </p>

            
            
            <h2>{{ $Cot->nombre }} con Transductor {{ $Cot->nombreT }}</h2>
            <h2>Características: </h2>
            <p>{{ $Cot->caracteristicas }}</p>
           
           

        @endforeach
        
        
      
       
        <div class="cotizacion">
            <h2>DOCTORS DEL SURESTE - COTIZACIÓN</h2>
           
            <table>
                <thead>
                    <tr>
                        <th>Equipo</th>
                        <th>Cantidad</th>
                        <th>Precio unitario</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> {{ $Cot->nombre }}</td>
                        <td>1</td>
                        <td>$ {{ $resultado }}</td>
                        <td class="subtotal">$ {{ $resultado }}</td>
                    </tr>
                    <tr>
                        <td>TRANSDUCTOR {{ $Cot->nombreT }}</td>
                        <td>1</td>
                        <td>$ {{ $precioTMX }}</td>
                        <td class="subtotal">$ {{ $precioTMX }}</td>
                    </tr>
                    <tr>
                        <td>LICENCIAS {{ $Cot->nombre }} {{ $Cot->nombreL }}</td>
                        <td></td>
                        <td>$ {{ $precioLMX }}</td>
                        <td class="subtotal">$ {{ $precioLMX }}</td>
                    </tr>
                    <tr>
                        <td>ACCESORIOS {{ $Cot->nombre }} {{ $Cot->nombreA }} </td>
                        <td>1</td>
                        <td>$ {{ $precioAMX }}</td>
                        <td class="subtotal">$ {{ $precioAMX }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="subtotal">Subtotal:</td>
                        <td class="subtotal">${{ $Subtotal }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="subtotal">IVA (16%):</td>
                        <td class="subtotal">${{ $IVA }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="total">Total:</td>
                        <td class="total">${{ $Total }}</td>
                    </tr>
                </tbody>
            </table>

            <h5>Notas: {{ $Cot->notas }}</h5>
            <h5>Condiciones de venta: {{ $Cot->condiciones }}</h5>
        </div>
     
        <h4>Esta cotización está expresada en la moneda nacional (MXN)</h4>
        <h4>Tiene vigencia de duración de 3 días</h4>
        <h4>Tiempo de entrega: 35 a 40 días hábiles</h4>
        <h4>Esta cotización únicamente es válida durante su periodo de vigencia</h4>
        <h4>*Esta cotización no incluye costos de envío ni de instalación*</h4>

    </div>
</body>
</html>
