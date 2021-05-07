@extends('Navigation')
@section('content')
@foreach($authors as $author)
    <a href="/author/{{$author->id}}">{{$author->Name}} {{$author->Surname}}</a>
    <br>
@endforeach
@endsection
