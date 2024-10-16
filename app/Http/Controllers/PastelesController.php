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
        
        $pasteles = Pastel::all(); 
    
     
        return view('persona.borrar', compact('personas')); 
    }


    public function destroy($id)
    {
        // Buscar la persona por ID
        $pastel = Pastel::find($id);
        
        // Verificar si la persona existe
        if ($pastel) {
            $pastel->delete(); // Eliminar la persona
            // Redirigir a la página de creación con un mensaje de éxito
            return redirect()->route('pasteles.crear')->with('success', 'Persona borrada correctamente.');
        } else {
            // Redirigir a la página de creación con un mensaje de error si no se encontró la persona
            return redirect()->route('pasteles.crear')->with('error', 'La persona no se encontró.');
        }
    }
    
        
    
        public function search(Request $request)
        {
            // Obtener el término de búsqueda (nombre o ID)
            $searchTerm = $request->input('search');
        
            // Buscar la persona por ID o Nombre
            $pastel = Pastel::where('id', $searchTerm)
                        ->orWhere('nombre', 'like', "%{$searchTerm}%")
                        ->first();
        
            // Si se encuentra la persona, devolver la vista con los datos
            if ($pastel) {
                return view('persona.borrar', compact('persona'));
            } else {
                // Si no se encuentra, devolver con un mensaje de error
                return redirect()->back()->with('error', 'Persona no encontrada.');
            }
        }


}

