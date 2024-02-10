<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Rental</title>
</head>
<body>
    <section>
        <h1>Create New Rental</h1>
        <form action="{{ route('rentals.store') }}" method="POST">
            @csrf
            <div>
                <label for="user_id">User:</label>
                <select id="user_id" name="user_id">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="book_id">Book:</label>
                <select id="book_id" name="book_id">
                    @foreach($books as $book)
                        <option value="{{ $book->id }}">{{ $book->title }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="rental_date">Rental Date:</label>
                <input type="date" id="rental_date" name="rental_date" value="{{ date('Y-m-d') }}">
            </div>
            <!-- You can add more fields as needed -->
            <button type="submit">Create Rental</button>
        </form>
        @if(session('error'))
            <div>{{ session('error') }}</div>
        @endif
    </section>
</body>
</html>
