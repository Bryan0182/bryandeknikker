@extends('layouts.base')

@section('title', $skill->title)

@push('styles')
    <link rel="stylesheet" href="{{ asset('/output/css/header.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/hero.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/fact.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/slider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/text.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/cta.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/footer.min.css') }}">
@endpush

@section('content')
    <div class="container">
        <h1 class="mb-5">Mijn Vaardigheden</h1>
        <div class="row">
            @foreach($skills as $skill)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="icon-circle mb-3">
                                <img src="{{ asset('output/images/' . $skill->icon) }}" alt="{{ $skill->name }}" width="50" height="50">
                            </div>
                            <h5 class="card-title">{{ $skill->name }}</h5>
                            <p class="card-text">{{ $skill->description }}</p>
                            <p><strong>Gebruik:</strong> {{ $skill->usage_count }}</p>
                            <p><strong>Kennisniveau:</strong> {{ $skill->proficiency }}</p>
                            <p><strong>Leergierigheid:</strong> {{ $skill->eager_to_learn }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
