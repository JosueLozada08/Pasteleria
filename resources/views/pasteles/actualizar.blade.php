<!-- Modal -->
<div class="modal fade" id="modal{{ $pastel->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $pastel->id }}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <h1 class="modal-title fs-5" id="exampleModalLabel{{ $pastel->id }}">Actualizar Pastel</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <!-- Mostrar errores de validación si los hay -->
        @if ($errors->any() && session('pastel_id') == $pastel->id)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('pasteles.update', $pastel->id) }}">
            @csrf
            @method('PUT')

            <!-- Campos del formulario -->
            <div class="form-group mb-3">
                <label for="nombre{{ $pastel->id }}">Nombre del pastel:</label>
                <input type="text" name="nombre" id="nombre{{ $pastel->id }}" value="{{ old('nombre', $pastel->nombre) }}" required class="form-control">
            </div>

            <div class="form-group mb-3">
                <label for="descripcion{{ $pastel->id }}">Descripción:</label>
                <textarea name="descripcion" id="descripcion{{ $pastel->id }}" rows="4" required class="form-control">{{ old('descripcion', $pastel->descripcion) }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="sabor{{ $pastel->id }}">Sabor:</label>
                <input type="text" name="sabor" id="sabor{{ $pastel->id }}" value="{{ old('sabor', $pastel->sabor) }}" required class="form-control">
            </div>

            <div class="form-group mb-3">
                <label for="decoracion{{ $pastel->id }}">Decoración:</label>
                <input type="text" name="decoracion" id="decoracion{{ $pastel->id }}" value="{{ old('decoracion', $pastel->decoracion) }}" required class="form-control">
            </div>

            <div class="form-group mb-3">
                <label for="ingredientes{{ $pastel->id }}">Ingredientes:</label>
                <textarea name="ingredientes" id="ingredientes{{ $pastel->id }}" rows="4" required class="form-control">{{ old('ingredientes', $pastel->ingredientes) }}</textarea>
            </div>

            <div class="form-group mb-3">
                <label for="precio{{ $pastel->id }}">Precio:</label>
                <input type="number" name="precio" id="precio{{ $pastel->id }}" step="0.01" value="{{ old('precio', $pastel->precio) }}" required class="form-control">
            </div>

            <div class="form-group mb-3">
                <label for="calorias{{ $pastel->id }}">Calorías:</label>
                <input type="number" name="calorias" id="calorias{{ $pastel->id }}" value="{{ old('calorias', $pastel->calorias) }}" required class="form-control">
            </div>

            <!-- Campo oculto para mantener el ID del pastel en sesión en caso de errores de validación -->
            <input type="hidden" name="pastel_id" value="{{ $pastel->id }}">

            <!-- Botón para enviar -->
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>
