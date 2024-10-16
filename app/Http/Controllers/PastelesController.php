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

    public function leer()
    {
        $pasteles = Pastel::all(); // Obtener todos los pasteles desde la base de datos
        return view('pasteles.leer', compact('pasteles')); // Enviar los datos a la vista
    }


    public function update(Request $request, Pastel $pastel)
    {
        // Añadir el ID del pastel a la sesión para identificar en qué modal mostrar los errores
        session(['pastel_id' => $pastel->id]);
    
        // Validación de los campos
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'sabor' => 'required|string',
            'decoracion' => 'required|string',
            'ingredientes' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'calorias' => 'required|integer|min:0',
        ]);
    
        // Limpiar el ID del pastel de la sesión
        session()->forget('pastel_id');
    
        // Actualizar los datos del pastel
        $pastel->update($validatedData);
    
        // Redirigir con un mensaje de éxito
        return redirect()->back()->with('success', 'Pastel actualizado correctamente.');
    }
    
   public function eliminar()
{
    // Mostramos el formulario de búsqueda
    return view('pasteles.eliminar');
}

public function search(Request $request)
{
    // Obtener el término de búsqueda (nombre o ID)
    $searchTerm = $request->input('search');

    // Buscar pasteles que coincidan con el ID o el nombre
    $pasteles = Pastel::where('id', $searchTerm)
                    ->orWhere('nombre', 'like', "%{$searchTerm}%")
                    ->get();

    // Si se encuentran resultados, los mostramos en la vista
    return view('pasteles.eliminar', compact('pasteles'));
}

public function destroy($id)
{
    // Buscar el pastel por ID
    $pastel = Pastel::find($id);
    
    if ($pastel) {
        $pastel->delete(); // Eliminar el pastel
        return redirect()->route('pasteles.eliminar')->with('success', 'Pastel eliminado correctamente.');
    } else {
        return redirect()->route('pasteles.eliminar')->with('error', 'Pastel no encontrado.');
    }
}



}

