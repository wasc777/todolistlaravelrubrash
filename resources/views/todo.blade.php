@extends('layouts.app')

@section('content')
    <h1>coucou</h1>

    @foreach ($todos as $todo)

    <h2>{{$todo->name}}</h2>
    <p>{{$todo->description}}</p>
        
    @endforeach
@endsection
