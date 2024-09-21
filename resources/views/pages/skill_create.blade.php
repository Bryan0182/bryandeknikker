@extends('layouts.base')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/output/css/header.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/skill_create.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/footer.min.css') }}">
@endpush

@section('content')
    <div class="container">
        <h1>Nieuwe Skill Toevoegen</h1>
        <form action="{{ route('skills.store') }}" method="POST" enctype="multipart/form-data">
            @csrf <!-- CSRF-token voor beveiliging -->

            <!-- Naam van de skill -->
            <div class="mb-3">
                <label for="name" class="form-label">Skill Naam</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Icoon upload -->
            <div class="mb-3">
                <label for="icon_image" class="form-label">Skill Icoon (bestand uploaden)</label>
                <input type="file" class="form-control @error('icon_image') is-invalid @enderror" id="icon_image" name="icon_image">
                @error('icon_image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Beschrijving van de skill -->
            <div class="mb-3">
                <label for="description" class="form-label">Beschrijving</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Hoe vaak de skill is gebruikt -->
            <div class="mb-3">
                <label for="usage_count" class="form-label">Hoe vaak gebruikt</label>
                <input type="text" class="form-control @error('usage_count') is-invalid @enderror" id="usage_count" name="usage_count" value="{{ old('usage_count') }}">
                @error('usage_count')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Beheersingsniveau van de skill -->
            <div class="mb-3">
                <label for="proficiency" class="form-label">Beheersingsniveau</label>
                <input type="text" class="form-control @error('proficiency') is-invalid @enderror" id="proficiency" name="proficiency" value="{{ old('proficiency') }}">
                @error('proficiency')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Of er nog veel te leren valt -->
            <div class="mb-3">
                <label for="eager_to_learn" class="form-label">Nog veel te leren?</label>
                <input type="text" class="form-control @error('eager_to_learn') is-invalid @enderror" id="eager_to_learn" name="eager_to_learn" value="{{ old('eager_to_learn') }}">
                @error('eager_to_learn')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Categorie: Frontend of Backend -->
            <div class="mb-3">
                <label for="category" class="form-label">Categorie</label>
                <select class="form-select @error('category') is-invalid @enderror" id="category" name="category" required>
                    <option value="">Selecteer een categorie</option>
                    <option value="frontend" {{ old('category') == 'frontend' ? 'selected' : '' }}>Frontend</option>
                    <option value="backend" {{ old('category') == 'backend' ? 'selected' : '' }}>Backend</option>
                </select>
                @error('category')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Type: Language of Framework -->
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select class="form-select @error('type') is-invalid @enderror" id="type" name="type" required>
                    <option value="">Selecteer een type</option>
                    <option value="language" {{ old('type') == 'language' ? 'selected' : '' }}>Language</option>
                    <option value="framework" {{ old('type') == 'framework' ? 'selected' : '' }}>Framework</option>
                </select>
                @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Skill Toevoegen</button>
        </form>
    </div>
@endsection
