<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Alquileres</title>
</head>
<body>
    <h1>Listado de Alquileres</h1>
    <table>
        <thead>
            <tr>
                <th>User</th>
                <th>Book</th>
                <th>Loan Date</th>
                <th>Return Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rentals as $rental)
            <tr>
                <td>{{ $rental->user->name }}</td> <!-- Mostramos el nombre del usuario -->
                <td>{{ $rental->book->title }}</td> <!-- Mostramos el título del libro -->
                <td>{{ $rental->rental_date }}</td>
                <td>{{ $rental->return_date }}</td>
                <td>
                    <a href="{{ route('rentals.edit', $rental->id) }}">Editar</a>
                    <form action="{{ route('rentals.destroy', $rental->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Botón para crear un nuevo alquiler -->
    <a href="{{ route('rentals.create') }}">Rent a book</a>
</body>
</html>
