<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('persona.index', compact('personas'));
    }

    public function create()
    {
        return view('persona.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'ci' => 'required',
            'fecha_de_nacimiento' => 'required|date',
        ]);

        Persona::create($request->all());

        return redirect()->route('persona.index')->with('success', 'Persona creada correctamente.');
    }

    public function show($id)
    {
        $persona = Persona::findOrFail($id);
        return view('persona.show', compact('persona'));
    }

    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        return view('persona.edit', compact('persona'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'ci' => 'required',
            'fecha_de_nacimiento' => 'required|date',
        ]);

        $persona = Persona::findOrFail($id);
        $persona->update($request->all());

        return redirect()->route('persona.index')->with('success', 'Persona actualizada correctamente.');
    }

    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();

        return redirect()->route('persona.index')->with('success', 'Persona eliminada correctamente.');
    }
}

