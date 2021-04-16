<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo</title>
</head>
<body>
    
    

    <p>Recibiste un mensaje de: {{ $mensaje['nombre'] }} - {{ $mensaje['materno'] }}</p>

    <p><strong>Del correo: </strong></p> {{ $mensaje['correo']}}
    <p>Carrera: </p> {{ $mensaje['carrera'] }}

</body>
</html>