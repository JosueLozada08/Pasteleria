<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Pasteles</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Incluimos Bootstrap JS al final del body -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

    <div class="header">
        <h1>Eliminar Pasteles</h1>
    </div>

    <div class="nav">
        <a class="nav-link active" aria-current="page" href="/pasteles/crear">Crear</a>
        <a class="nav-link" href="/pasteles/leer">Leer</a>
        <a class="nav-link" href="/pasteles/eliminar">Borrar</a>
    </div>

    <div class="container">
        <!-- Formulario de búsqueda -->
        <form method="GET" action="{{ route('pasteles.search') }}">
            <div class="form-group">
                <label for="search">Buscar por nombre o ID:</label>
                <input type="text" name="search" id="search" placeholder="Ingrese nombre o ID" required>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>

        <!-- Mostrar resultados de la búsqueda -->
        @if(isset($pasteles) && $pasteles->isNotEmpty())
            <h2>Resultados de la búsqueda:</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Sabor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pasteles as $pastel)
                        <tr>
                            <td>{{ $pastel->id }}</td>
                            <td>{{ $pastel->nombre }}</td>
                            <td>{{ $pastel->descripcion }}</td>
                            <td>{{ $pastel->sabor }}</td>
                            <td>
                                <!-- Formulario para eliminar el pastel -->
                                <form action="{{ route('pasteles.destroy', $pastel->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este pastel?');">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @elseif(isset($pasteles))
            <p>No se encontraron resultados para "{{ request()->input('search') }}".</p>
        @endif

        <!-- Mensaje de éxito o error -->
        @if (session('success'))
            <div class="alert alert-success mt-3" role="alert">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger mt-3" role="alert">
                {{ session('error') }}
            </div>
        @endif
    </div>

</body>
</html>
