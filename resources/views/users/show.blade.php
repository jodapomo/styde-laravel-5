@extends('layout')

@section('title', "User {$id}")

@section('content')

    <h2>Usuario #{{ $id }}</h2>

    <hr>

    Showing details for user: {{ $id }}
@endsection