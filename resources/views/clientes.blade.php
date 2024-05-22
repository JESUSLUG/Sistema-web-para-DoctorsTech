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
    <title>BASE DE DATOS DE CLIENTES</title>
    <style>
        body {
            background-color: #09a69e; /* Cambio de color de fondo */
            color: white;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin: 0;
            padding: 0;
            position: relative;
        }

        h1, h2 {
            text-align: center;
            margin-top: 20px; /* Añadido margen superior */
        }

        .header-image {
            width: 80%;
            height: 400px;
            background-image: url('https://www.soloequiposmedicos.com/wp-content/uploads/2018/10/ultrasonido-e1540584666808.jpg');
            background-size: cover;
            background-position: center;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5); /* Añadida sombra */
        }

        form {
            margin: 20px auto;
            max-width: 500px;
            padding: 20px;
            background-color: #7c3c8c; /* Ajuste de opacidad */
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3); /* Añadida sombra */
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-top: 5px;
            box-sizing: border-box; /* Añadido box-sizing para incluir el relleno en el ancho */
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .salir-button, .volver-menu {
            display: inline-block;
            width: 120px; /* Ajuste del ancho */
            height: 40px; /* Ajuste de la altura */
            text-align: center;
            line-height: 15px; /* Ajuste de la línea de texto */
            border-radius: 10px;
            position: absolute;
            bottom: 20px; /* Ajuste de la posición vertical */
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .salir-button {
            background-color: #FF5733; /* Cambio de color */
            left: 20px;
        }

        .salir-button:hover {
            background-color: #FF2600; /* Cambio de color al pasar el ratón */
        }

        .volver-menu {
            background-color: #4CAF50; /* Color verde */
            right: 20px;
        }

        .volver-menu:hover {
            background-color: #45a049; /* Cambio de color al pasar el ratón */
        }
    </style>
</head>
<body>
    <h1>BASE DE DATOS DE CLIENTES</h1>
    <div class="header-image"></div>
    <h2>Rellena los campos correspondientes a la información del cliente</h2>

    <h1>INTRODUCE LOS DATOS DEL CLIENTE:</h1> 
    <form action="{{route('clientes.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <input type="text" name="nombreC">
        </label>

        <label>
            Dirección:
            <textarea name="direccion"></textarea>
        </label>

        <label>
            Teléfono:
            <input type="text" name="telefono">
        </label>

        <label>
            Contacto:
            <input type="text" name="contacto">
        </label>

        <label>
            Email:
            <input type="text" name="email">
        </label>

        <label>
            Especialidad:
            <input type="text" name="especialidad">
        </label>

        <input type="submit" value="Registrar cliente">
    </form>
    <button class="salir-button" onclick="window.location.href='menu'">VOLVER AL MENÚ</button>
    <button class="volver-menu" onclick="window.location.href='cotizacion'">REALIZAR COTIZACIÓN</button>
</body>
</html>


