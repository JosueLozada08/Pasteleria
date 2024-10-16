<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pasteles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/leer.css') }}">

    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- Incluimos Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Incluimos Bootstrap JS al final del body -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

    <div class="header">
        <h1>Lista de Pasteles</h1>
    </div>

    <div class="nav">
        <a class="nav-link active" aria-current="page" href="/pasteles/crear">Crear</a>
        <a class="nav-link" href="/pasteles/leer">Leer</a>
        <a class="nav-link" href="/pasteles/eliminar">Borrar</a>
    </div>

    <div class="container">
        @if($pasteles->isEmpty())
            <p>No hay pasteles creados aún.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Sabor</th>
                        <th>Decoración</th>
                        <th>Ingredientes</th>
                        <th>Precio</th>
                        <th>Calorías</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($pasteles as $pastel)
                    <tr>
                        <td>{{ $pastel->nombre }}</td>
                        <td>{{ $pastel->descripcion }}</td>
                        <td>{{ $pastel->sabor }}</td>
                        <td>{{ $pastel->decoracion }}</td>
                        <td>{{ $pastel->ingredientes }}</td>
                        <td>{{ $pastel->precio }}</td>
                        <td>{{ $pastel->calorias }}</td>
                        <td>
                            <!-- Botón para abrir el modal de actualización -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal{{ $pastel->id }}">
                                <i class="bi bi-pencil"></i> Editar
                            </button>

                            <!-- Inclusión del modal -->
                            @include('pasteles.actualizar', ['pastel' => $pastel])
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <!-- Mensaje de éxito -->
            @if (session('success'))
                <div class="alert alert-success mt-3" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        @endif
    </div>

    <!-- Incluimos Bootstrap JS al final del body -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
