@extends('layout')

@section('title', "Create user")

@section('content')

    <div class="card">
        <div class="card-header">
            <h4>Create user</h4>
        </div>
        <div class="card-body">
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
        
            <form method="POST" action="{{ url('users') }}">
                @csrf
        
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                </div>
        
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                </div>
        
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
        
                <a class="btn btn-secondary" href="{{ route('users.index') }}">Back</a>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>

    {{-- <a href="{{ action('UserController@index') }}">Back to users list</a> --}}
    
@endsection