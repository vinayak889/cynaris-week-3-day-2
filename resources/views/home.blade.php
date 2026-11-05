@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

    <h1>Welcome to Laravel</h1>

    <h2>Hello, {{ $name }}</h2>

    <p>Course: {{ $course }}</p>

@endsection
