@extends('layouts.app', ['mainClass' => 'login'])
@section('title', '4 Site | Admin')

@section('content')
    <div class="container">
        <h1>Pages</h1>
        <breadcrumbs :crumbs="[{name: 'Dashboard', link: '/home'},{name: 'Pages', link: ''}]"></breadcrumbs>
        <page-list/>
    </div>
@endsection
