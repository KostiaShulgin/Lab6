@extends('Navigation')
@section('content')
<p>Title: {{$book->title}}</p>
<a href="/booksByGenre/{{$book->genre}}">Genre: {{$book->genre}}</a>
<p>Year: {{$book->creation_year}}</p>
<p>Authors</p>
@foreach($authors as $author)
    <a href="/author/{{$author->id}}">{{$author->Name}} {{$author->Surname}}</a>
    <br>
@endforeach
<p>Copies</p>
@foreach($copies as $copy)
    <a href="/book/{{$book->id}}/copy/{{$copy->inv_number}}">{{$copy->inv_number}}</a>
    <br>
@endforeach
<br>
<a href="{{ url()->previous() }}">Back</a>
@endsection
