<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Autores</title>
</head>
<body>
    <h1>Listado de Autores</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo Electrónico</th>
                <th>Fecha de Nacimiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
            <tr>
                <td>{{ $author->name }}</td>
                <td>{{ $author->surname }}</td>
                <td>{{ $author->email }}</td>
                <td>{{ $author->age }}</td>
                <td>
                    <a href="{{ route('authors.edit', $author->id) }}">Editar</a>
                    <form action="{{ route('authors.destroy', $author->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Botón para crear un nuevo autor -->
    <a href="{{ route('authors.create') }}">Crear Nuevo Autor</a>
</body>
</html>
