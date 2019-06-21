@extends('layout')

@section('title', "Users")

@section('content')

    <div class="d-flex justify-content-between align-items-end mb-2">
        <h1 class="pb-2">{{ $title }}</h1>
    
        <p>
            <a class="btn btn-primary" href="{{ route('users.create') }}">New user</a>
        </p>
    </div>

    @empty ( $users )   
        <p>No users found</p>    
    @else
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email}}</td>
                        <td>
                            <form style="width:max-content" action="{{ route('users.destroy', $user ) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a style="display:inline" class="btn btn-link" href="{{ route('users.show', $user ) }}">
                                    <span class="oi oi-eye"></span>
                                </a>
                                <a style="display:inline" class="btn btn-link" href="{{ route('users.edit', $user ) }}">
                                    <span class="oi oi-pencil"></span>
                                </a>
                                <button style="display:inline" type="submit" class="btn btn-link">
                                    <span class="oi oi-trash"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endempty

@endsection

