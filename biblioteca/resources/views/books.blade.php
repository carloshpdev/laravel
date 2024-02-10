<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        
        <table>
            <caption>Books</caption>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>
                        <a href="{{'books/create'}}">New Book</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->category }}</td>
                        <td>{{ $book->authors->name }} {{ $book->authors->surname }}</td>
                        <td>
                            <a href="/books/edit">Edit</a>
                        </td>
                        <td>
                            <form action="/books/{{ $book->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
    </section>
    

</body>
</html>