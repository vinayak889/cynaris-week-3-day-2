@extends('layouts.app')

@section('title', 'About Page')

@section('content')

    <h1>{{ $title }}</h1>

    <p>{{ $description ?? 'Welcome to our services page.' }}</p>

@endsection
