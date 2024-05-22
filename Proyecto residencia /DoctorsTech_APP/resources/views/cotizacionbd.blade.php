<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASEDATOSCOTIZACIONES</title>
    <style>
        body {
            background-color: #7c3c8c;
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
            background-color: #1e5282;
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
            background-color: #0056b3;
        }

        /* Cambio de color para los enlaces */
        a {
            color: #09a69e;
            text-decoration: none; /* Quita el subrayado por defecto */
        }

        /* Cambio de color al pasar el cursor sobre los enlaces */
        a:hover {
            color: #FF2600;
        }

        /* Estilos para el botón de volver al menú */
        .menu-button {
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

        .menu-button:hover {
            background-color: #FF2600;
        }
    </style>
</head>
<body>
    <h1>BASE DE DATOS DE COTIZACIONES</h1>
    <h2>SELECCIONE LA COTIZACIÓN QUE DESEA GENERAR</h2>
    <ul>
        @foreach ($cotizacion as $cotizacion)
            <li><a href="{{route('pdfCot', $cotizacion->id)}}">Cotización # {{$cotizacion->id}} Creada: {{$cotizacion->created_at}} por {{$cotizacion->vendedor}}</a></li>
        @endforeach
    </ul>

    <!-- Botón de volver al menú principal -->
    <button class="menu-button" onclick="window.location.href='menu'"> VOLVER AL MENÚ </button>
</body>
</html>

