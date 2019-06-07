@extends('layout')

@section('content')
    
    <h1>{{ $title }}</h1>
            
    <hr>

    @empty ( $users )   
        <p>No users found</p>    
    @else
        <ul>
            @foreach ($users as $user)
                <li>{{ $user }}</li>
            @endforeach
        </ul>
    @endempty

@endsection



@section('sidebar')
    @parent
    <h2>Sidebar personalizada</h2>
@endsection