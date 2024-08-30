@extends('layouts.base')

@section('title', $blog->title)

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog_detail.css') }}">
@endpush

@section('content')
    <section class="blog-show py-5">
        <div class="container hero-container col-12">
            <div class="row align-items-center g-5 py-5 hero-row">
                <div class="col-lg-6">
                    <h1 class="fw-bold text-body-emphasis lh-1">{{ $blog->title }}</h1>
                    <p class="description-paragraph">{{ $blog->intro_text }}</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start button-blog-row">
                        <a href="" class="btn btn-outline-primary btn-lg px-4 me-md-2 contact-blog-button">Contact</a>
                        <a href="{{ $blog->website_url }}" class="btn btn-primary align-items-center d-flex justify-content-center read-more-blog-button" target="_blank">Bezoek de website</a>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-lg-6">
                    @if ($blog->logo_image)
                        <img src="{{ Storage::url($blog->logo_image) }}" class="d-block mx-auto ms-md-auto me-md-0 img-fluid" alt="{{ $blog->title }}" width="300" height="300" loading="eager">
                    @endif
                </div>
            </div>
        </div>

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
