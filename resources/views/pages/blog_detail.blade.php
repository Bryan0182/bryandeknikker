@extends('layouts.base')

@section('title', $blog->title)

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog_detail.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/text.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cta.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
@endpush

@section('content')
    <section class="blog-show py-5">
        @component('components.hero', [
            'title' => $blog->title,
            'description' => $blog->intro_text,
            'first_button' => 'Contact',
            'first_button_url' => '',
            'second_button' => 'Bezoek de website',
            'second_button_url' => '',
            'imageSrc' => Storage::url($blog->logo_image),
            'altText' =>$blog->title,
            'width' => 300,
            'height' => 300
        ])
        @endcomponent

        @component('components.fact', [
            'fact1_title' => $blog->fact1_title,
            'fact1_description' => $blog->fact1_description,
            'fact2_title' => $blog->fact2_title,
            'fact2_description' => $blog->fact2_description,
            'fact3_title' => $blog->fact3_title,
            'fact3_description' => $blog->fact3_description
        ])
        @endcomponent

        @component('components.text', [
            'title' => $blog->challenge_title,
            'description' => $blog->challenge_description
        ])
        @endcomponent

        @component('components.text', [
            'title' => $blog->approach_title,
            'description' => $blog->approach_description
        ])
        @endcomponent

        @php
            $sliderImages = is_string($blog->slider_images) ? json_decode($blog->slider_images) : $blog->slider_images;
        @endphp
        @component('components.slider', [
            'images' => $sliderImages
        ])
        @endcomponent

        @component('components.text', [
            'title' => $blog->approach_title,
            'description' => $blog->approach_description
        ])
        @endcomponent

        @component('components.cta', [
            'title' => 'Benieuwd wat ik voor jou kan betekenen?',
            'description' => 'Neem nu contact op',
            'first_button' => 'Contact',
            'first_button_url' => '',
            'second_button' => '',
            'second_button_url' => ''
        ])
        @endcomponent
    </section>
@endsection
