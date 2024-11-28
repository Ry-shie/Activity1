<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digtal Book</title>
</head>
<style>
    div {
        margin: 5px;
        border: 2px, solid, black;
        border-radius: 10px;
        padding: 5px
    }
</style>
<body>
{{--
1. Create migration files for two tables: a parent table and a child table.
2. Create models for both tables, ensuring the relationship between the tables is properly defined.
3. Create factories for both tables.
4. Create seeders for both tables to populate the database.
5. Create controller to handle HTTP requests, ensuring data is fetched from the models and returned to the views.
5. Create view to display data to the user. --}}

@foreach($students as $student)
    <div>
        <h3>{{ $student->name }}</h3>
        @foreach ($student->posts as $post)
                <h5>{{ $post->title }}</h5>
                <p>{{ $post->content }}</p>
        @endforeach
    </div>
@endforeach
</body>
</html>
