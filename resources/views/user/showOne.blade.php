@extends('layout')

@section('title','User')
    
@section('content')
<div class="container">
        <h1 class="display-4">Name: {{$user->name}}</h1>
        <h2 class="h3">Current Credits: {{$user->current_credit}}</h2>
        <a href="/users/{{$user->id}}/transfer" class="btn btn-info">Transfer Credit</a>
</div>
@endsection