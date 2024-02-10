<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Libro</title>
</head>
<body>
    <section>
        <h1>Create New Book</h1>
        <form action="{{ '/books/store' }}" method="POST">
            @csrf
            <div>
                <label for="title_create_book">Title:</label>
                <input type="text" id="title_create_book" name="title_create_book">
            </div>
            <div>
                <label for="category_create_book">Category:</label>
                <input type="text" id="category_create_book" name="category_create_book">
            </div>
            <div>
                <label for="author_create_book">Author:</label>
                <select id="author_create_book" name="author_id_create_book">
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }} {{ $author->surname }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Create Book</button>
        </form>
        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif
    </section>
</body>
</html>
