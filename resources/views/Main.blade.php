@extends('Navigation')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('tables.css') }}" >
<div class="d1">
    <form action="/main/searchBookByTitle" method="POST">
        {{ csrf_field() }}
        <input type="text" name="searchInput" placeholder="Search here...">
        <button type="submit" title="Find" onsubmit="">Search</button>
    </form>
</div>

<table cellspacing="0">
    <tr class="head">
        <th>Book Id</th>
        <th>Title</th>
        <th>Genre</th>
        <th>Year</th>
    </tr>
    @foreach($books as $book)
    <tr onclick="/book/{{$book->id}}">
        <td class="data">{{$book->id}}</td>
        <td class="data">{{$book->title}}</td>
        <td class="data">{{$book->genre}}</td>
        <td class="data">{{$book->creation_year}}</td>
        <td class="data"><button type="button" onclick="window.location='{{ url("/book/$book->id") }}'">Book Page</button></td>
    </tr>
    @endforeach
</table>
@endsection
