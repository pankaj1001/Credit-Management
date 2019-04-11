@extends('layout')


<div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1 class="display-4">All Users</h1>
    <table class="table table-hover mt-5">
        <thead>
            <tr>
                <td class="h3">Name</td>
                <td class="h3">Current Credit</td>
                <td class="h3"></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->current_credit}}</td>
            <td><a href="/users/{{$user->id}}" class="btn btn-success">View User</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>