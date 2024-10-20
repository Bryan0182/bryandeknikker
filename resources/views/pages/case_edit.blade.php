@extends('layouts.base')

@section('title', 'Blog bewerken')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/output/css/header.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/footer.min.css') }}">
@endpush

@section('content')
    <div class="container hero-container col-12">
        <div class="row align-items-center g-5 py-5 hero-row">
            <div class="col-12">
                <h1>Blog bewerken</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Formulier voor het bewerken van een blog -->
                <form action="{{ route('pages.case_update', $blog->id) }}" method="POST" enctype="multipart/form-data" class="form-case-edit">
                    @csrf
                    @method('PUT')

                    <!-- Titel -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Titel</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
                    </div>

                    <!-- Introductietekst -->
                    <div class="mb-3">
                        <label for="intro_text" class="form-label">Introductietekst</label>
                        <textarea name="intro_text" id="intro_text" class="form-control" rows="3" required>{{ old('intro_text', $blog->intro_text) }}</textarea>
                    </div>

                    <!-- Website URL -->
                    <div class="mb-3">
                        <label for="website_url" class="form-label">Website URL</label>
                        <input type="url" name="website_url" id="website_url" class="form-control" value="{{ old('website_url', $blog->website_url) }}">
                    </div>

                    <!-- Logo Afbeelding -->
                    <div class="mb-3">
                        <label for="logo_image" class="form-label">Logo Afbeelding</label>
                        <input type="file" name="logo_image" id="logo_image" class="form-control" accept="image/*">
                        @if ($blog->logo_image)
                            <img src="{{ asset('storage/' . $blog->logo_image) }}" alt="Huidig logo" class="img-thumbnail mt-2" width="200">
                        @endif
                    </div>

                    <!-- Fact 1 -->
                    <div class="mb-3">
                        <label for="fact1_title" class="form-label">Fact 1 Titel</label>
                        <input type="text" name="fact1_title" id="fact1_title" class="form-control" value="{{ old('fact1_title', $blog->fact1_title) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="fact1_description" class="form-label">Fact 1 Beschrijving</label>
                        <textarea name="fact1_description" id="fact1_description" class="form-control" rows="3" required>{{ old('fact1_description', $blog->fact1_description) }}</textarea>
                    </div>

                    <!-- Fact 2 -->
                    <div class="mb-3">
                        <label for="fact2_title" class="form-label">Fact 2 Titel</label>
                        <input type="text" name="fact2_title" id="fact2_title" class="form-control" value="{{ old('fact2_title', $blog->fact2_title) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="fact2_description" class="form-label">Fact 2 Beschrijving</label>
                        <textarea name="fact2_description" id="fact2_description" class="form-control" rows="3" required>{{ old('fact2_description', $blog->fact2_description) }}</textarea>
                    </div>

                    <!-- Fact 3 -->
                    <div class="mb-3">
                        <label for="fact3_title" class="form-label">Fact 3 Titel</label>
                        <input type="text" name="fact3_title" id="fact3_title" class="form-control" value="{{ old('fact3_title', $blog->fact3_title) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="fact3_description" class="form-label">Fact 3 Beschrijving</label>
                        <textarea name="fact3_description" id="fact3_description" class="form-control" rows="3" required>{{ old('fact3_description', $blog->fact3_description) }}</textarea>
                    </div>

                    <!-- Challenge -->
                    <div class="mb-3">
                        <label for="challenge_title" class="form-label">Challenge Titel</label>
                        <input type="text" name="challenge_title" id="challenge_title" class="form-control" value="{{ old('challenge_title', $blog->challenge_title) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="challenge_description" class="form-label">Challenge Beschrijving</label>
                        <textarea name="challenge_description" id="challenge_description" class="form-control" rows="3" required>{{ old('challenge_description', $blog->challenge_description) }}</textarea>
                    </div>

                    <!-- Approach -->
                    <div class="mb-3">
                        <label for="approach_title" class="form-label">Approach Titel</label>
                        <input type="text" name="approach_title" id="approach_title" class="form-control" value="{{ old('approach_title', $blog->approach_title) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="approach_description" class="form-label">Approach Beschrijving</label>
                        <textarea name="approach_description" id="approach_description" class="form-control" rows="3" required>{{ old('approach_description', $blog->approach_description) }}</textarea>
                    </div>

                    <!-- Slider Afbeeldingen -->
                    <div class="mb-3">
                        <label for="slider_images" class="form-label">Slider Afbeeldingen (meerdere bestanden)</label>
                        <input type="file" name="slider_images[]" id="slider_images" class="form-control" multiple accept="image/*">

                        @if ($blog->slider_images)
                            @php
                                // Zet de JSON slider_images string om naar een array
                                $sliderImages = json_decode($blog->slider_images, true);
                            @endphp

                            <div class="mt-2">
                                @foreach ($sliderImages as $image)
                                    <img src="{{ Storage::url($image) }}" alt="Slider afbeelding" class="img-thumbnail" width="100">
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <!-- Results -->
                    <div class="mb-3">
                        <label for="results_title" class="form-label">Results Titel</label>
                        <input type="text" name="results_title" id="results_title" class="form-control" value="{{ old('results_title', $blog->results_title) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="results_description" class="form-label">Results Beschrijving</label>
                        <textarea name="results_description" id="results_description" class="form-control" rows="3" required>{{ old('results_description', $blog->results_description) }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary edit-case-form-button">Case Opslaan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
