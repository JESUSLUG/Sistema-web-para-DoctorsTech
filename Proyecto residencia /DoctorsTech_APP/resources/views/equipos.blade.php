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
    <title>BASE DE DATOS DE EQUIPOS</title>
    <style>
        body {
            background-color: #7c3c8c;
            color: white;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin: 0;
            padding: 0;
            position: relative;
        }

        h1, h2 {
            text-align: center;
            margin-top: 20px;
        }

        .header-image {
            width: 80%;
            height: 400px;
            background-image: url('https://static.wixstatic.com/media/ae921f_f353becd6f9e4b8fba688b0abee3c36d~mv2.jpg/v1/fill/w_1208,h_749,al_c/ae921f_f353becd6f9e4b8fba688b0abee3c36d~mv2.jpg');
            background-size: cover;
            background-position: center;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
        }

        form {
            margin: 20px auto;
            max-width: 500px;
            padding: 20px;
            background-color: #09a69e;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        textarea,
        select {
            width: calc(100% - 20px);
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-top: 5px;
            margin-bottom: 10px;
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
            background-color: #7c3c8c;
        }

        .salir-button {
            position: absolute;
            bottom: 20px;
            left: 20px;
            width: 120px;
            height: 40px;
            background-color: #FF5733;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .salir-button:hover {
            background-color: #FF2600;
        }
    </style>
</head>
<body>
    <h1>BASE DE DATOS DE EQUIPOS</h1>
    <div class="header-image"></div>
    <h2>Esta página está destinada a que el usuario llene la base de datos de productos de la empresa</h2>
    
    <form action="{{ route('equipos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre del equipo:</label>
        <input type="text" name="nombre" placeholder="Nombre">
        
        <label for="precio">Precio:</label>
        <input type="text" name="precio" placeholder="Precio en dólares">
        
        <label for="caracteristicas">Características:</label>
        <textarea name="caracteristicas" placeholder="Características" rows="5"></textarea>

        <label for="imagen">Insertar imagen:</label>
<input type="file" name="imagen" accept="image/*">


          <!-- Selección de la llave foránea para Marca -->
          <label for="marca_id">Marca:</label>
          <select name="marca_id" id="marca_id">
              @foreach($marca as $marcas)
                  <option value="{{ $marcas->id }}">{{ $marcas->marca }}</option>
              @endforeach
          </select>
  

        <!-- Selección de la llave foránea para Tipo de Equipo -->
        <label for="tipo_equipo_id">Tipo de Equipo:</label>
        <select name="tipo_equipo_id" id="tipo_equipo_id">
            @foreach($tipo_equipo as $tipo_equipos)
                <option value="{{ $tipo_equipos->id }}">{{ $tipo_equipos->nombre }}</option>
            @endforeach
        </select>

        <!-- Selección de la llave foránea para Accesorio -->
        <label for="accesorio_id">Accesorio:</label>
        <select name="accesorio_id" id="accesorio_id">
            @foreach($accesorio as $accesorios)
                <option value="{{ $accesorios->id }}">{{ $accesorios->nombreA }}</option>
            @endforeach
        </select>

        <!-- Selección de la llave foránea para Especialidad -->
        <label for="especialidad_id">Especialidad:</label>
        <select name="especialidad_id" id="especialidad_id">
            @foreach($especialidad as $especialidades)
                <option value="{{ $especialidades->id }}">{{ $especialidades->nombre }}</option>
            @endforeach
        </select>

        <!-- Selección de la llave foránea para Licencias -->
        <label for="licencia_id">Licencias:</label>
        <select name="licencia_id" id="licencia_id">
            @foreach($licencias as $licencia)
                <option value="{{ $licencia->id }}">{{ $licencia->nombreL }}</option>
            @endforeach
        </select>

        <!-- Selección de la llave foránea para Transductores -->
        <label for="transductor_id">Transductores:</label>
        <select name="transductor_id" id="transductor_id">
            @foreach($transductores as $transductor)
                <option value="{{ $transductor->id }}">{{ $transductor->nombreT }}</option>
            @endforeach
        </select>

        <input type="submit" value="Registrar equipo médico">
    </form>
    <button class="salir-button" onclick="window.location.href='menu'">VOLVER AL MENÚ</button>
</body>
</html>
