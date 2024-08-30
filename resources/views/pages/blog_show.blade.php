<!-- resources/views/pages/blog_show.blade.php -->

@extends('layouts.base')

@section('title', $blog->title)

@section('content')
    <section class="blog-show py-5">
        <div class="container">
            <h1 class="mb-4">{{ $blog->title }}</h1>
            @if ($blog->logo_image)
                <img src="{{ Storage::url($blog->logo_image) }}" alt="{{ $blog->title }}" class="img-fluid mb-4"/>
            @endif
            <p>{{ $blog->intro_text }}</p>
            <h3>Feiten:</h3>
            <ul>
                <li><strong>{{ $blog->fact1_title }}:</strong> {{ $blog->fact1_description }}</li>
                <li><strong>{{ $blog->fact2_title }}:</strong> {{ $blog->fact2_description }}</li>
                <li><strong>{{ $blog->fact3_title }}:</strong> {{ $blog->fact3_description }}</li>
            </ul>
            <h3>Uitdaging:</h3>
            <p>{{ $blog->challenge_title }} - {{ $blog->challenge_description }}</p>
            <h3>Aanpak:</h3>
            <p>{{ $blog->approach_title }} - {{ $blog->approach_description }}</p>
            <h3>Resultaten:</h3>
            <p>{{ $blog->results_title }} - {{ $blog->results_description }}</p>
            @if (!empty(json_decode($blog->slider_images)))
                <div class="slider">
                    @foreach (json_decode($blog->slider_images) as $image)
                        <img src="{{ Storage::url($image) }}" alt="Slider Image" class="img-fluid"/>
                    @endforeach
                </div>
            @endif
            <a href="{{ url()->previous() }}" class="btn btn-secondary mt-4">Terug</a>
        </div>
    </section>
@endsection
