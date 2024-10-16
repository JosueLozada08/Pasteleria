<!-- Modal -->
<div class="modal fade" id="modal{{ $pastel->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Pastel</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('pasteles.update', $pastel->id) }}">
          @csrf
          @method('PUT') <!-- Este método debe estar para actualizar -->

          <!-- Campos del formulario -->
          <div class="form-group">
            <label for="nombre">Nombre del pastel:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $pastel->nombre }}" required class="form-control">
          </div>

          <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" id="descripcion" rows="4" required class="form-control">{{ $pastel->descripcion }}</textarea>
          </div>

          <div class="form-group">
            <label for="sabor">Sabor:</label>
            <input type="text" name="sabor" id="sabor" value="{{ $pastel->sabor }}" required class="form-control">
          </div>

          <div class="form-group">
            <label for="decoracion">Decoración:</label>
            <input type="text" name="decoracion" id="decoracion" value="{{ $pastel->decoracion }}" required class="form-control">
          </div>

          <div class="form-group">
            <label for="ingredientes">Ingredientes:</label>
            <textarea name="ingredientes" id="ingredientes" rows="4" required class="form-control">{{ $pastel->ingredientes }}</textarea>
          </div>

          <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" step="0.01" value="{{ $pastel->precio }}" required class="form-control">
          </div>

          <div class="form-group">
            <label for="calorias">Calorías:</label>
            <input type="number" name="calorias" id="calorias" value="{{ $pastel->calorias }}" required class="form-control">
          </div>

          <!-- Botón para enviar -->
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>
