<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Personas</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-6xl mx-auto bg-white p-6 shadow rounded">
        <h1 class="text-2xl font-bold mb-4">Listado de Personas</h1>
        
        <a href="{{route('persona.create')}}" class="mb-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-cyan-600">Crear Nueva persona</a>

        @if(session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif

        <table class="w-full table-auto border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Apellido</th>
                    <th class="px-4 py-2">CI</th>
                    <th class="px-4 py-2">Fecha de Nacimiento</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($personas as $persona)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $persona->id }}</td>
                        <td class="px-4 py-2">{{ $persona->nombre }}</td>
                        <td class="px-4 py-2">{{ $persona->apellido }}</td>
                        <td class="px-4 py-2">{{ $persona->ci }}</td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('persona.show', $persona->id) }}" class="text-blue-500">Ver</a>
                            <a href="{{ route('persona.edit', $persona->id) }}" class="text-yellow-500">Editar</a>
                            <form action="{{ route('persona.destroy', $persona->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
