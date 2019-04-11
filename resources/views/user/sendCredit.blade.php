@extends('layout')

@section('content')
<form action="/users/{{$from}}/transfer/{{$to}}" method="post">
    @csrf
    <div style="height: 50vh;">
    <div class="form-group d-flex flex-column justify-content-center align-items-center h-100">
        <label for="amount" class="h2 input-group">Amount To Transfer:</label>
        <input type="number" name="amount" id="amount" required class="input-group"/>
        <button class="btn btn-info mt-2 input-group" type="submit">Send</button>
    </div>
    </div>
</form>
@endsection