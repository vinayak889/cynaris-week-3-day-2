@extends('layouts.app')

@section('title', 'Contact Page')

@section('content')

    <h1>Contact Us</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="/contact" method="POST">

        @csrf

        <label>Name:</label>
        <input type="text" name="name" required>

        <br><br>

        <label>Email:</label>
        <input type="email" name="email" required>

        <br><br>

        <button type="submit">Submit</button>

    </form>

@endsection
