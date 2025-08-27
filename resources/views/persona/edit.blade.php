<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Persona</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-xl mx-auto bg-white p-6 shadow rounded">
        <h1 class="text-2xl font-bold mb-4">Editar Persona</h1>

        <form action="{{ route('persona.update', $persona->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block">Nombre</label>
                <input type="text" name="nombre" value="{{ $persona->nombre }}" class="w-full border px-4 py-2 rounded" required>
            </div>

            <div>
                <label class="block">Apellido</label>
                <input type="text" name="apellido" value="{{ $persona->apellido }}" class="w-full border px-4 py-2 rounded" required>
            </div>

            <div>
                <label class="block">CI</label>
                <input type="text" name="ci" value="{{ $persona->ci }}" class="w-full border px-4 py-2 rounded" required>
            </div>

            <div>
                <label class="block">Celular</label>
                <input type="text" name="celular" value="{{ $persona->celular }}" class="w-full border px-4 py-2 rounded">
            </div>

            <div>
                <label class="block">Fecha de Nacimiento</label>
                <input type="date" name="fecha_de_nacimiento" value="{{ $persona->fecha_de_nacimiento }}" class="w-full border px-4 py-2 rounded" required>
            </div>

            <div>
                <label class="block">Correo</label>
                <input type="email" name="correo" value="{{ $persona->correo }}" class="w-full border px-4 py-2 rounded">
            </div>

            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Actualizar</button>
        </form>
    </div>
</body>
</html>
