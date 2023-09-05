<!-- resources/views/book_history/index.blade.php -->

<h1>Book History</h1>

@foreach ($bookHistories as $bookHistory)
    <p>{{ $bookHistory->id }}: Book ID - {{ $bookHistory->book_id }}, User ID - {{ $bookHistory->user_id }}</p>
@endforeach