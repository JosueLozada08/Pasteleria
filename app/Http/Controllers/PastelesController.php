<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pastel;  // Cambiar de Pasteles a Pastel

class PastelesController extends Controller
{
    public function crear()
    {
        return view('pasteles.crear');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'sabor' => 'required|string',
            'decoracion' => 'required|string',
            'ingredientes' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'calorias' => 'required|integer|min:0',
        ]);

        // Crear nueva instancia del modelo Pastel (en singular)
        $pastel = new Pastel();  // Cambiado a singular
        
        // Asignar los valores del request a la instancia del modelo
        $pastel->nombre = $request->nombre;
        $pastel->descripcion = $request->descripcion;
        $pastel->sabor = $request->sabor;
        $pastel->decoracion = $request->decoracion;
        $pastel->ingredientes = $request->ingredientes;
        $pastel->precio = $request->precio;
        $pastel->calorias = $request->calorias;

        // Guardar los datos en la base de datos
        $pastel->save();

        // Redirigir con un mensaje de éxito
        return redirect()->back()->with('success', 'Pastel creado correctamente.');
    }
}
