<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('movies.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">

        <label for="description">Description</label>
        <textarea name="description" id="description" placeholder="Description..."></textarea>

        <label for="released_at">Released_at</label>
        <input type="date" name="released_at" id="released_at">

        <label for="length_in_minutes">Length in minutes</label>
        <input type="number" name="length_in_minutes" id="length_in_minutes">

        <label for="based_on_a_book">Based on a book</label>
        <input type="checkbox" name="based_on_a_book" id="based_on_a_book">

        <label for="score">Score</label>
        <input type="number" name="score" id="score">

        <label for="original_language">Original language</label>
        <input type="text" name="original_language" id="original_language">

        <button type="submit">Submit</button>

    </form>
</body>

</html>