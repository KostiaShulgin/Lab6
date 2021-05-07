@extends('Navigation')
@section('content')
<p>Title: {{$book->title}}</p>
@foreach($copies as $copy)
    <p>Inv. number: {{$copy->inv_number}}</p>
    <br>
@endforeach
<br><br>
    <a href="{{ url()->previous() }}">Back</a>
@endsection
