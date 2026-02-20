@extends('layouts.app')

@section('content')

<h2>Contact Form</h2>

@if(isset($success))
    <p>{{ $success }}</p>
@endif

<form method="POST" action="/contact">
    @csrf
    <input type="text" name="name">
    <button type="submit">Send</button>
</form>

@endsection
