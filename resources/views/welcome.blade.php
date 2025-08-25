<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body>
        <h1 class="bg-blue-400">hola</h1>
        <div class="bg-gray-900 h-5" ></div>
        <div class="bg-zinc-950 h-5"></div>

        <div class="h-120 flex justify-center">
            <div class="bg-red-100 w-120 h-100 p-7 rounded-lg shadow-lg">
                <h1 class="text-2xl font-bold mb-6 text-purple-700 text-center" >FORMULARIO DE REGISTRO </h1> 
                <label for=""> NOMBRE </label>
                <input class="w-full px-3 py-2 border rounded-lg border border-zinc-950" type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre"> 
                
                <div>
                    <label for=""> APELLIDO </label>
                    <input class="w-full border border-zinc-950" type="text">
                </div>

                    <div>
                        <label for=""> Inserte su numero de carnet </label>
                        <input class="border border-zinc-950" type="number"> 
                    </div>

                <div>
                    <label for="">Fecha de nacimiento</label>
                    <input class="border border-zinc-950" type="date">  
                </div>

                <div>
                        <label for="">Inserte su numero de celular</label>
                        <input class="border border-zinc-950" type="number"> 
                </div>

                <div>
                    <label for="">Inserte su correo</label>
                    <input class="border border-zinc-950" type="emaiL">  
                </div>

                <button>Enviar</button>
                <button>Borrar formulario</button>
            </div>   
        </div>
        

          <div class="bg-gray-100 flex items-center justify-center min-h-screen">

            <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
                <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">FORMULARIO DE REGISTRO</h2>
                <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                    <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingresa tu nombre">
                    </div>
                    <div>
                    <label for="apellido" class="block text-gray-700 text-sm font-bold mb-2">Apellido</label>
                    <input type="text" id="apellido" name="apellido" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingresa tu apellido">
                    </div>
                </div>

                 <div class="mb-4">
                    <label for="celular" class="block text-gray-700 text-sm font-bold mb-2">Numero de carnet</label>
                    <input type="number" id="ci" name="ci" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ej: 123456789">
                </div>

                <div class="mb-4">
                    <label for="celular" class="block text-gray-700 text-sm font-bold mb-2">Celular</label>
                    <input type="number" id="celular" name="celular" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ej: 123456789">
                </div>

                <div class="mb-4">
                    <label for="fecha_nacimiento" class="block text-gray-700 text-sm font-bold mb-2">Fecha de Nacimiento</label>
                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-6">
                    <label for="correo" class="block text-gray-700 text-sm font-bold mb-2">Correo Electrónico</label>
                    <input type="email" id="correo" name="correo" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="usuario@ejemplo.com">
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Registrarse</button>
                </form>
            </div>

            </div>

        
        <div>
           <h1>GALERIA DE IMAGENES</h1> 
           <img src="https://vanacco.com/wp-content/uploads/2020/06/Form-1.jpg" alt="">
           <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQNjxD_8LS5onDYXz32lEpyds1ySaW7vvmsg&s" alt="">
        </div>


        <h2>Accesorios</h2>
        <H3>Cadenas</H3>
        <h4>Hombre</h4>
        <h4>Mujer</h4>
        <h2>Abarrotes</h2>
        <h3>fideos</h3>
    </body>
</html>
