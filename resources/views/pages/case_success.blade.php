@extends('layouts.base')

@section('title', 'Case succesvol aangemaakt')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/output/css/header.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/footer.min.css') }}">
@endpush

@section('content')
    <h1>Blog Aangemaakt!</h1>
    <p>{{ session('success') }}</p>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Nog een blog toevoegen</a>
    <a href="{{ route('dashboard') }}" class="btn btn-primary">Terug naar dashboard</a>
@endsection
