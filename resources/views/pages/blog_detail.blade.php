@extends('layouts.base')

@section('title', $blog->title)

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog_detail.css') }}">
@endpush

@section('content')
    <section class="blog-show py-5">
        <div class="container blog-detail-hero-container">
            <div class="row align-items-center g-5 py-5 blog-detail-hero-row">
                <div class="col-lg-6">
                    <h1 class="fw-bold text-body-emphasis lh-1">{{ $blog->title }}</h1>
                    <p class="description-paragraph">{{ $blog->intro_text }}</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start button-blog-row">
                        <a href="{{-- {{ route('contact') }} --}}"
                           class="btn btn-outline-primary btn-lg px-4 me-md-2 contact-blog-button">Contact</a>
                        <a href="{{ $blog->website_url }}"
                           class="btn btn-primary align-items-center d-flex justify-content-center read-more-blog-button"
                           target="_blank">Bezoek de website</a>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-lg-6">
                    @if ($blog->logo_image)
                        <img src="{{ Storage::url($blog->logo_image) }}"
                             class="d-block mx-auto ms-md-auto me-md-0 img-fluid" alt="{{ $blog->title }}" width="300"
                             height="300" loading="eager">
                    @endif
                </div>
            </div>
        </div>

        <div class="container-fluid blog-detail-facts-container-fluid">
            <div class="container blog-detail-facts-container">
                <div class="row align-items-start text-center">
                    <!-- Fact 1 -->
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100 blog-detail-facts-card left">
                            <div class="position-relative">
                                <div
                                    class="position-absolute top-0 start-50 translate-middle bg-primary text-white rounded-circle p-3 fs-4 fw-bold blog-detail-facts-card-number">
                                    <img src="/images/1.svg" width="25px" height="35px"></div>
                            </div>
                            <div class="card-body mt-4">
                                <h5 class="card-title fw-bold blog-detail-card-title">{{ $blog->fact1_title }}</h5>
                                <p class="card-text blog-detail-card-text">{{ $blog->fact1_description }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Fact 2 -->
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100 blog-detail-facts-card middle">
                            <div class="position-relative">
                                <div
                                    class="position-absolute top-0 start-50 translate-middle bg-primary text-white rounded-circle p-3 fs-4 fw-bold blog-detail-facts-card-number">
                                    <img src="/images/2.svg" width="25px" height="35px"></div>
                            </div>
                            <div class="card-body mt-4">
                                <h5 class="card-title fw-bold blog-detail-card-title">{{ $blog->fact2_title }}</h5>
                                <p class="card-text blog-detail-card-text">{{ $blog->fact2_description }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Fact 3 -->
                    <div class="col-lg-4 mb-4">
                        <div class="card h-100 blog-detail-facts-card right">
                            <div class="position-relative">
                                <div
                                    class="position-absolute top-0 start-50 translate-middle bg-primary text-white rounded-circle p-3 fs-4 fw-bold blog-detail-facts-card-number">
                                    <img src="/images/3.svg" width="25px" height="35px"></div>
                            </div>
                            <div class="card-body mt-4">
                                <h5 class="card-title fw-bold blog-detail-card-title">{{ $blog->fact3_title }}</h5>
                                <p class="card-text blog-detail-card-text">{{ $blog->fact3_description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container blog-detail-challenge-section">
            <div class="row text-center g-5 py-5">
                <div class="col-12">
                    <h2>{{ $blog->challenge_title }}</h2>
                    <p>{{ $blog->challenge_description }}</p>
                </div>
            </div>
        </div>

        <div class="container blog-detail-approach-section">
            <div class="row text-center g-5 py-5">
                <div class="col-12">
                    <h2>{{ $blog->approach_title }}</h2>
                    <p>{{ $blog->approach_description }}</p>
                </div>
            </div>
        </div>

        <div class="container blog-detail-slider-section">
            <div class="row">
                <div class="col-12">
                    <!-- Begin slider -->
                    <div class="blog-detail-slider-images">
                        @foreach (json_decode($blog->slider_images) as $image)
                            <div>
                                <img src="{{ Storage::url($image) }}" alt="Slider Image" class="img-fluid"/>
                            </div>
                        @endforeach
                    </div>
                    <!-- Einde slider -->
                </div>
            </div>
        </div>

        <div class="container blog-detail-results-section">
            <div class="row text-center g-5 py-5">
                <div class="col-12">
                    <h2>{{ $blog->results_title }}</h2>
                    <p>{{ $blog->results_description }}</p>
                </div>
            </div>
        </div>

        <div class="container-fluid blog-detail-cta-container-fluid">
            <div class="container blog-detail-cta-section">
                <div class="row text-center g-5 py-5">
                    <div class="col-12">
                        <h2 class="blog-detail-cta-title">Benieuwd wat ik voor jou kan betekenen?</h2>
                        <p class="blog-detail-cta-text">Neem nu contact op</p>
                        <a href="{{-- {{ route('contact') }} --}}"
                           class="btn btn-primary contact-blog-button">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
