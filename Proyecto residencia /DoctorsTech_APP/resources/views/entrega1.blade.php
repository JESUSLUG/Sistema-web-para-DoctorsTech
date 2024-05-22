<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCUMENTOD</title>
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
    <h1> ENTREGA 1</h1>
    <h2> Introduzca los documentos que desea agregar</h2>
    
   




    <button class="salir-button" onclick="window.location.href='menu'">VOLVER AL MENÚ</button>
</body>
</html>

