@extends('layout')

@section('title', "User {$user->name}")

@section('content')

    <h2>Usuario #{{ $user->id }}</h2>

    <hr>

    <p>Nombre: {{ $user->name }}</p> 
    <p>Email: {{ $user->email }}</p>


    <p>
        <a href="{{ route('users.index') }}">Back</a>
        {{-- <a href="{{ action('UserController@index') }}">Back to users list</a> --}}
    </p>
    
@endsection