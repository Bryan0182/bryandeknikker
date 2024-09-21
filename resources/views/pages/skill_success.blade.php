@extends('layouts.base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/output/css/header.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/footer.min.css') }}">
@endpush

@section('content')
    <h1>Skill Aangemaakt!</h1>
    <p>{{ session('success') }}</p>
    <a href="{{ route('skill_create') }}" class="btn btn-primary">Nog een skill toevoegen</a>
@endsection
