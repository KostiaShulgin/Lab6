@extends('Navigation')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('tables.css') }}" >

<table cellspacing="0">
    <tr class="head">
        <th>Book Id</th>
        <th>Title</th>
        <th>Year</th>
    </tr>
    @foreach($result as $book)
        <tr>
            <td class="data">{{$book->id}}</td>
            <td class="data"><a href="/book/{{$book->id}}">{{$book->title}}</a></td>
            <td class="data">{{$book->creation_year}}</td>
            <td class="data"><button type="button" onclick="{{ Redirect::to("book/$book->id") }}">Book Page</button></td>
        </tr>
    @endforeach
</table>
@endsection
