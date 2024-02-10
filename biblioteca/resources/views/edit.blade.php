<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Libro</title>
</head>
<body>
    <section>
        <h1>Editar Libro</h1>
        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="title_update_book">Título:</label>
                <input type="text" id="title_update_book" name="title_update_book" value="{{ $book->title }}">
            </div>
            <div>
                <label for="category_update_book">Categoría:</label>
                <input type="text" id="category_update_book" name="category_update_book" value="{{ $book->category }}">
            </div>
            <div>
                <label for="author_id_update_book">Autor:</label>
                <select id="author_id_update_book" name="author_id_update_book">
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}"
                            @if($author->id === $book->author_id)selected
                            @endif>{{ $author->name }} {{ $author->surname }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Actualizar Libro</button>
        </form>
    </section>
</body>
</html>
