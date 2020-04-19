@extends('layouts.app', ['mainClass' => 'login'])
@section('title', '4 Site | Admin')

@section('content')
    <div class="container">
        <h1>{{ Auth::user()->name }}'s Admin Dashboard</h1>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <user-list/>
    </div>
@endsection
