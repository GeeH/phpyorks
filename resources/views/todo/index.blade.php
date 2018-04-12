@extends('layout')

@section('content')
<h1>Todo:</h1>
<ul>
    @foreach($todos as $todo)
        <li>{{ $todo['title'] }}</li>
    @endforeach
</ul>
@endsection
