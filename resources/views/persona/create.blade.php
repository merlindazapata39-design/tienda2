<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Persona</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-xl mx-auto bg-white p-6 shadow rounded">
        <h1 class="text-2xl font-bold mb-4">Crear Persona</h1>

        <form action="{{ route('persona.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block">Nombre</label>
                <input type="text" name="nombre" placeholder="Ingrese su nombre" class= "w-full border px-4 py-2 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500" required>
            </div>

            <div>
                <label class="block">Apellido</label>
                <input type="text" name="apellido" class="w-full border px-4 py-2 rounded" required>
            </div>

            <div>
                <label class="block">CI</label>
                <input type="text" name="ci" class="w-full border px-4 py-2 rounded" required>
            </div>

            <div>
                <label class="block">Celular</label>
                <input type="text" name="celular" class="w-full border px-4 py-2 rounded">
            </div>

            <div>
                <label class="block">Fecha de Nacimiento</label>
                <input type="date" name="fecha_de_nacimiento" class="w-full border px-4 py-2 rounded" required>
            </div>

            <div>
                <label class="block">Correo</label>
                <input type="email" name="correo" class="w-full border px-4 py-2 rounded">
            </div>

            <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Guardar</button>
        </form>
    </div>
</body>
</html>
