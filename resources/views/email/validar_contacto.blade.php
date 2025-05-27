<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo mensaje de contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f9f9f9;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            border: 1px solid #e1e1e1;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
        }
        h1 {
            color: #d32f2f;
        }
        p {
            line-height: 1.6;
        }
        strong {
            color: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Nuevo mensaje de contacto</h1>

        <p><strong>Nombres:</strong> {{ $data['nombres'] }}</p>
        <p><strong>Apellidos:</strong> {{ $data['apellidos'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Teléfono:</strong> {{ $data['telefono'] }}</p>
        <p><strong>Asunto:</strong> {{ $data['asunto'] }}</p>
        <p><strong>Mensaje:</strong></p>
        <p>{{ $data['mensaje'] }}</p>
    </div>
</body>
</html>
