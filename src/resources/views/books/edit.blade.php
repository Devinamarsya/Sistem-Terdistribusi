<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>
    <h2>Edit Book</h2>
    <form method="POST" action="{{ route('books.update', $book->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Title:</label>
            <input type="text" name="title" value="{{ $book->title }}" required>
        </div>
        <div>
            <label>Author:</label>
            <input type="text" name="author" value="{{ $book->author }}" required>
        </div>
        <div>
            <button type="submit">Update Book</button>
        </div>
    </form>
    <a href="{{ route('books.index') }}">Back</a>
</body>
</html>