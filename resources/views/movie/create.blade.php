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
        <input type="text" name="name" id="name" value='{{ old("name") }}'>
        @error('name')
        <div class="input-error">{{$message}}</div>
        @enderror

        <label for="description">Description</label>
        <textarea name="description" id="description" placeholder="Description..." value='{{ old("description") }}'></textarea>
        @error('description')
        <div class="input-error">{{$message}}</div>
        @enderror

        <label for="released_at">Released_at</label>
        <input type="date" name="released_at" id="released_at" value='{{ old("released_at") }}'>
        @error('released_at')
        <div class="input-error">{{$message}}</div>
        @enderror

        <label for="length_in_minutes">Length in minutes</label>
        <input type="number" name="length_in_minutes" id="length_in_minutes" value='{{ old("length_in_minutes") }}'>
        @error('length_in_minutes')
        <div class="input-error">{{$message}}</div>
        @enderror

        <label for="budget">Budget</label>
        <input type="number" name="budget" id="budget" value='{{ old("budget") }}'>
        @error('budget')
        <div class="input-error">{{$message}}</div>
        @enderror

        <label for="based_on_a_book">Based on a book</label>
        <input type="checkbox" name="based_on_a_book" id="based_on_a_book" value="{{ old('based_on_a_book', 0) ? 'checked' : '' }}">
        @error('based_on_a_book')
        <div class="input-error">{{$message}}</div>
        @enderror

        <label for="score">Score</label>
        <input type="number" name="score" id="score" value='{{ old("score") }}'>
        @error('score')
        <div class="input-error">{{$message}}</div>
        @enderror

        <label for="original_language">Original language</label>
        <input type="text" name="original_language" id="original_language" value='{{ old("original_language") }}'>
        @error('original_language')
        <div class="input-error">{{$message}}</div>
        @enderror

        <button type="submit">Submit</button>

    </form>
</body>

</html>