<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Crear Pastel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
</head>
<body>

    <div class="header">
        <h1>Crear Nuevo Pastel</h1>
    </div>

    <div class="nav">
        <a class="nav-link active" aria-current="page" href="/pasteles/crear">Crear</a>
        <a class="nav-link" href="/pasteles/leer">Leer</a>
        <a class="nav-link" href="/pasteles/eliminar">Borrar</a>
    </div>

    <div class="container">
        <h2>Crear Nuevo Pastel</h2>
        <form method="POST" action="{{ route('pasteles.bank') }}">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre del pastel:</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="sabor">Sabor:</label>
                <textarea name="sabor" id="sabor" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="decoracion">Decoración:</label>
                <textarea name="decoracion" id="decoracion" rows="2" required></textarea>
            </div>

            <div class="form-group">
                <label for="ingredientes">Ingredientes:</label>
                <textarea name="ingredientes" id="ingredientes" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="calorias">Calorías:</label>
                <input type="text" name="calorias" id="calorias" required>
            </div>

            <div class="form-actions">
                <button type="submit">Guardar</button>
            </div>
        </form>

        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
    </div>

</body>
</html>
