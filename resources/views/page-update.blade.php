@extends('layouts.app', ['mainClass' => 'login'])
@section('title', '4 Site | Admin')

@section('content')
    <div class="container">
        <h1>Update Page</h1>
        <breadcrumbs :crumbs="[{name: 'Dashboard', link: '/home'},{name: 'Pages', link: '/pages'},{name: 'Update Page', link: ''}]"></breadcrumbs>
        <page-update id="{{ Request::route('id') }}"></page-update>
    </div>
@endsection
