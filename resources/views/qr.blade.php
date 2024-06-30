<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generar QR</title>
</head>
<body>
    <h1>Generar código QR</h1>

    @php
        // Aquí generamos el código QR
        $url = '7590dsds';  // El contenido que quieres que tenga el código QR
        $qrCode = 'https://api.qrserver.com/v1/create-qr-code/?data=' . urlencode($url) . '&size=300x300';
    @endphp

    <img src="{{ $qrCode }}" alt="Código QR">

</body>
</html>
