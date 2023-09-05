<!-- resources/views/book_history/create.blade.php -->

<h1>Create Book History Entry</h1>

<form action="{{ route('book_history.store') }}" method="POST">
    @csrf

    <div>
        <label for="book_id">Book ID:</label>
        <input type="text" name="book_id" id="book_id">
    </div>

    <div>
        <label for="user_id">User ID:</label>
        <input type="text" name="user_id" id="user_id">
    </div>

    <button type="submit">Create</button>
</form>