<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
</head>
<body>
    <h2>Add Book</h2>
    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        <div>
            <label>Title:</label>
            <input type="text" name="title" required>
        </div>
        <div>
            <label>Author:</label>
            <input type="text" name="author" required>
        </div>
        <div>
            <button type="submit">Add Book</button>
        </div>
    </form>
    <a href="{{ route('books.index') }}">Back</a>
</body>
</html>