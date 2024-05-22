@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COTIZACIÓN</title>
    <style>
        body {
            background-color:#7c3c8c; 
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1, h2 {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            background-color: #09a69e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        textarea,
        select {
            width: calc(100% - 20px);
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #7c3c8c;
        }

        .salir-button {
            width: 120px;
            height: 40px;
            background-color: #FF5733;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: block;
            margin: 20px auto;
        }

        .salir-button:hover {
            background-color: #FF2600;
        }

        .buscar-button {
        width: 120px;
        height: 40px;
        background-color: #28a745; /* Cambiar el color a verde */
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        display: block;
        margin: 20px auto;
    }

    .buscar-button:hover {
        background-color: #218838; /* Cambiar el color de fondo al pasar el mouse */
    }
    </style>
</head>
<body>
    <h1>FORMULARIO DE COTIZACIÓN</h1>
    <h2> Seleccione los campos necesarios para generar una cotización: </h2>
    
    <form action="{{route('cotizacion.store')}}" method="POST">
        @csrf
        <h2>DOCTORS DEL SURESTE</h2>

        <label for="vendedor">Nombre del Vendedor:</label>
        <input type="text" name="vendedor" placeholder="Nombre del vendedor">

        <!-- Selección de la llave foránea para el cliente -->
        <label for="clientes_id">Seleccione al cliente:</label>
        <select name="clientes_id" id="clientes_id">
            @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nombreC }}</option>
            @endforeach
        </select>

        <!-- Selección de la llave foránea para Especialidad -->
        <label for="especialidad_id">Especialidad:</label>
        <select name="especialidad_id" id="especialidad_id">
            @foreach($especialidad as $especialidades)
                <option value="{{ $especialidades->id }}">{{ $especialidades->nombre }}</option>
            @endforeach
        </select>

         <!-- Selección de la llave foránea para producto -->
         <label for="productos_id">Producto:</label>
         <select name="productos_id" id="productos_id">
             @foreach($productos as $producto)
                 <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
             @endforeach
         </select>



         <label for="dolar">Cambio del dolar:</label>
         <input type="text" name="dolar" placeholder="Tipo de cambio del dolar">

         <label for="aumento">Aumento al total del precio:</label>
        <input type="text" name="aumento" placeholder="Este campo solo es visible para usuarios y se expresa en pesos MX">

        <label for="descuento">Descuento al total del precio:</label>
        <input type="text" name="descuento" placeholder="Este campo solo es visible para usuarios y se expresa en pesos MX">


        <label for="condiciones">Condiciones de venta:</label>
        <textarea name="condiciones" placeholder="Condiciones de venta" rows="5"></textarea>

        <label for="notas">Notas:</label>
        <textarea name="notas" placeholder="Notas" rows="5"></textarea>

        <input type="submit" value="Introducir cotización en la base de datos">
    </form>


    <button class="buscar-button" onclick="window.location.href='cotizacionbd'">BUSCA TU COTIZACIÓN</button>

    <button class="salir-button" onclick="window.location.href='menu'">VOLVER AL MENÚ</button>
</body>
</html>

