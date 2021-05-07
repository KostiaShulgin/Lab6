@extends('Navigation')
@section('content')
<p>{{$author->Name}} {{$author->Surname}}</p>
<p>Books</p>
@foreach($books as $book)
    <a href="/book/{{$book->id}}">{{$book->title}}</a>
    <br>
@endforeach
<br>
<a href="{{ url()->previous() }}">Back</a>
@endsection
