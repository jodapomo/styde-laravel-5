@extends('layout')

@section('title', "Edit user")

@section('content')

    <h1>Edit user</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <h6>Please correct the errors:</h6>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url("users/{$user->id}") }}">
        @method('PUT')
        @csrf

        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $user->name) }}">


        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $user->email) }}">


        <label for="password">Password:</label>
        <input type="password" class="form-control" name="password" id="password">


        <button type="submit" class="btn btn-primary">Update</button>

    </form>


    <p>
        <a href="{{ route('users.index') }}">Back</a>
        {{-- <a href="{{ action('UserController@index') }}">Back to users list</a> --}}
    </p>
    
@endsection