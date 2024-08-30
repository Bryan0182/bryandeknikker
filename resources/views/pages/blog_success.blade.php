@extends('layouts.base')

@section('content')
    <h1>Blog Aangemaakt!</h1>
    <p>{{ session('success') }}</p>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Nog een blog toevoegen</a>
@endsection
