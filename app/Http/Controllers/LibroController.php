<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    // GET /libros
    public function index()
    {
        return Libro::all();
    }

    // GET /libros/{id}
    public function show($id)
    {
        $libro = Libro::find($id);
        if (!$libro) {
            return response()->json(['error' => 'Libro no encontrado'], 404);
        }
        return $libro;
    }

    // PUT /libros/{id}/estado
    public function actualizarEstado(Request $request, $id)
    {
        $libro = Libro::findOrFail($id);

        $request->validate([
            'estado' => 'required|in:disponible,no_disponible',
        ]);

        $libro->estado = $request->estado;
        $libro->save();

        return redirect()->route('libros.show', ['id' => $libro->id])
                     ->with('success', 'Estado actualizado correctamente');
    }
}
