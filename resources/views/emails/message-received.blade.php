<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mensaje Recibido</title>
</head>
<body>
	<p>Recibiste un mensaje de: {{ $msj['nombre']}} - {{ $msj['email']}}</p>
	<p>Asunto: {{ $msj['subject']}}</p>
	<p>Contenido: {{ $msj['content']}}</p>

</body>
</html>