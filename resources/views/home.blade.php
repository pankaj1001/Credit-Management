@extends('layout')

@section('title','Home Page')
    
@section('content')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Credit Management System</h1>
        <p class="lead">A simple credit management CRUD Application.</p>
        <hr class="my-4">
        <p>Create Your Transactions.</p>
        <a href="/users" class="btn btn-primary">View all Users</a>
    </div>
</div>
@endsection
