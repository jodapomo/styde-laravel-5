@extends('layout')

@section('title', "Users")

@section('content')
    
    <h1>{{ $title }}</h1>
            
    <hr>

    @empty ( $users )   
        <p>No users found</p>    
    @else
        <ul>
            @foreach ($users as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </ul>
    @endempty

@endsection



@section('sidebar')
    @parent
@endsection