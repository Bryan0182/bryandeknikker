@extends('layouts.base')

@section('title', 'Blog aanmaken')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/output/css/header.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/case_create.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/footer.min.css') }}">
@endpush

@section('content')
    <div class="container hero-container col-12">
        <div class="row align-items-center g-5 py-5 hero-row">
            <div class="col-12">
                <h1>Nieuwe case</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data" class="form-case-create">
                    @csrf

                    <!-- Titel -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Titel</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <!-- Introductietekst -->
                    <div class="mb-3">
                        <label for="intro_text" class="form-label">Introductietekst</label>
                        <textarea name="intro_text" id="intro_text" class="form-control" rows="3" required></textarea>
                    </div>

                    <!-- Website URL -->
                    <div class="mb-3">
                        <label for="website_url" class="form-label">Website URL</label>
                        <input type="url" name="website_url" id="website_url" class="form-control" required>
                    </div>

                    <!-- Logo Afbeelding -->
                    <div class="mb-3">
                        <label for="logo_image" class="form-label">Logo Afbeelding</label>
                        <input type="file" name="logo_image" id="logo_image" class="form-control" accept="image/*"
                               required>
                    </div>

                    <!-- Fact 1 -->
                    <div class="mb-3">
                        <label for="fact1_title" class="form-label">Fact 1 Titel</label>
                        <input type="text" name="fact1_title" id="fact1_title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="fact1_description" class="form-label">Fact 1 Beschrijving</label>
                        <textarea name="fact1_description" id="fact1_description" class="form-control" rows="3"
                                  required></textarea>
                    </div>

                    <!-- Fact 2 -->
                    <div class="mb-3">
                        <label for="fact2_title" class="form-label">Fact 2 Titel</label>
                        <input type="text" name="fact2_title" id="fact2_title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="fact2_description" class="form-label">Fact 2 Beschrijving</label>
                        <textarea name="fact2_description" id="fact2_description" class="form-control" rows="3"
                                  required></textarea>
                    </div>

                    <!-- Fact 3 -->
                    <div class="mb-3">
                        <label for="fact3_title" class="form-label">Fact 3 Titel</label>
                        <input type="text" name="fact3_title" id="fact3_title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="fact3_description" class="form-label">Fact 3 Beschrijving</label>
                        <textarea name="fact3_description" id="fact3_description" class="form-control" rows="3"
                                  required></textarea>
                    </div>

                    <!-- Challenge -->
                    <div class="mb-3">
                        <label for="challenge_title" class="form-label">Challenge Titel</label>
                        <input type="text" name="challenge_title" id="challenge_title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="challenge_description" class="form-label">Challenge Beschrijving</label>
                        <textarea name="challenge_description" id="challenge_description" class="form-control" rows="3"
                                  required></textarea>
                    </div>

                    <!-- Approach -->
                    <div class="mb-3">
                        <label for="approach_title" class="form-label">Approach Titel</label>
                        <input type="text" name="approach_title" id="approach_title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="approach_description" class="form-label">Approach Beschrijving</label>
                        <textarea name="approach_description" id="approach_description" class="form-control" rows="3"
                                  required></textarea>
                    </div>

                    <!-- Slider Afbeeldingen -->
                    <div class="mb-3">
                        <label for="slider_images" class="form-label">Slider Afbeeldingen (meerdere bestanden)</label>
                        <input type="file" name="slider_images[]" id="slider_images" class="form-control" multiple
                               accept="image/*">
                    </div>

                    <!-- Results -->
                    <div class="mb-3">
                        <label for="results_title" class="form-label">Results Titel</label>
                        <input type="text" name="results_title" id="results_title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="results_description" class="form-label">Results Beschrijving</label>
                        <textarea name="results_description" id="results_description" class="form-control" rows="3"
                                  required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary create-case-form-button">Case Opslaan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
