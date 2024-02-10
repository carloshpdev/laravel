<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Author</title>
</head>
<body>
    <section>
        <h1>Create New Author</h1>
        <form action="{{ route('authors.store') }}" method="POST">
            @csrf
            <div>
                <label for="name_create_author">Name:</label>
                <input type="text" id="name_create_author" name="name_create_author">
            </div>
            <div>
                <label for="surname_create_author">Surname:</label>
                <input type="text" id="surname_create_author" name="surname_create_author">
            </div>
            <div>
                <label for="nationality_create_author">Nationality:</label>
                <input type="text" id="nationality_create_author" name="nationality_create_author">
            </div>
            <div>
                <label for="gender_create_author">Gender:</label>
                <input type="text" id="gender_create_author" name="gender_create_author">
            </div>
            <div>
                <label for="age_create_author">age</label>
                <input type="number" min="1" id="age_create_author" name="age_create_author">
            </div>
            <button type="submit">Create Author</button>
        </form>
        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif
    </section>
</body>
</html>
