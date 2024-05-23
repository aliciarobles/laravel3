

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mis préstamos</title>
</head>
<body>
    <h1>Mis Préstamos</h1>
    <ul>
        @foreach($prestamos as $prestamo)
        <li>{{ $prestamo->libro->titulo }} - Fecha de Préstamo: {{ $prestamo->fecha_prestamo }} - Fecha de Devolución: {{ $prestamo->fecha_devolucion }}</li>
        @endforeach
    </ul>
</body>
</html>
