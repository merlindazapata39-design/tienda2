<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle Persona</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-xl mx-auto bg-white p-6 shadow rounded">
        <h1 class="text-2xl font-bold mb-4">Detalle de Persona</h1>

        <div class="space-y-2">
            <p><strong>Nombre:</strong> {{ $persona->nombre }}</p>
            <p><strong>Apellido:</strong> {{ $persona->apellido }}</p>
            <p><strong>CI:</strong> {{ $persona->ci }}</p>
            <p><strong>Celular:</strong> {{ $persona->celular }}</p>
            <p><strong>Fecha de nacimiento:</strong> {{ $persona->fecha_de_nacimiento }}</p>
            <p><strong>Correo:</strong> {{ $persona->correo }}</p>
        </div>

        <div class="mt-4">
            <a href="{{ route('persona.index') }}" class="text-blue-500">Volver al listado</a>
        </div>
    </div>
</body>
</html>
