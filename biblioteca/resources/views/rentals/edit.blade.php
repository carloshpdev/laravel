<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Rental</title>
</head>
<body>
    <section>
        <h1>Edit Rental</h1>
        <form action="{{ route('rentals.update', $rental->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="user_id">User:</label>
                <select name="user_id" id="user_id">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ $user->id == $rental->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="book_id">Book:</label>
                <select name="book_id" id="book_id">
                    @foreach($books as $book)
                        <option value="{{ $book->id }}" {{ $book->id == $rental->book_id ? 'selected' : '' }}>{{ $book->title }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="rental_date">Rental Date:</label>
                <input type="date" id="rental_date" name="rental_date" value="{{ $rental->rental_date }}">
            </div>
            <div>
                <label for="return_date">Return Date:</label>
                <input type="date" id="return_date" name="return_date" value="{{ $rental->return_date }}">
            </div>
            <button type="submit">Update Rental</button>
        </form>
    </section>
</body>
</html>
