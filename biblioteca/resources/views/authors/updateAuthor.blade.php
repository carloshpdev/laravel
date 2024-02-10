<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Author</title>
</head>
<body>
    <section>
        <h1>Edit Author</h1>
        <form action="{{ route('authors.update', $author->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ $author->name }}">
            </div>
            <div>
                <label for="surname">Surname:</label>
                <input type="text" id="surname" name="surname" value="{{ $author->surname }}">
            </div>
            <div>
                <label for="nationality">Nationality:</label>
                <input type="text" id="nationality" name="nationality" value="{{ $author->nationality }}">
            </div>
            <div>
                <label for="gender">Gender:</label>
                <input type="text" id="gender" name="gender" value="{{ $author->gender }}">
            </div>
            <div>
                <label for="age">Age:</label>
                <input type="text" id="age" name="age" value="{{ $author->age }}">
            </div>
            <button type="submit">Update Author</button>
        </form>
    </section>
</body>
</html>
