@extends('layouts/book')

@section('main')

<p>{{ link_to_route('books.create', 'Create new book') }}</p>
@if ($booksList->count())
<table>

    <tr>
        <th>Id</th>
        <th>ISBN</th>
        <th>Title</th>

    </tr>

    @foreach ($booksList as $book)
    <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->isbn }}</td>
        <td>{{ $book->title }}</td>

    </tr>
    @endforeach
    </tbody>
</table>
@else
There are no books
@endif
@stop