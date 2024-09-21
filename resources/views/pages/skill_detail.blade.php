@extends('layouts.base')

@section('title', $skill->title)

@push('styles')
    <link rel="stylesheet" href="{{ asset('/output/css/header.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/hero.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/text.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/cta.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/footer.min.css') }}">
@endpush

@section('content')
    @component('components.text', [
        'title' => $skill->name,
        'description' => $skill->description
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Skill Details',
        'description' => "{$skill->usage_count}<br><br>{$skill->proficiency}<br><br>{$skill->eager_to_learn}"
    ])
    @endcomponent
@endsection
