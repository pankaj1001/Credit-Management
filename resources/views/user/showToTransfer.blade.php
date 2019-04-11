@extends('layout')


<div class="container">
        <h1 class="display-4">Transfer To</h1>
    <table class="table table-striped mt-5">
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
            <td><a href="/users/{{$id}}/transfer/{{$user->id}}" class="btn btn-warning">Transfer Credits</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>