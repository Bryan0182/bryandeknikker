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
    @component('components.hero', [
        'title' => $skill->name,
        'description' => $skill->description,
        'first_button' => 'Contact',
        'first_button_url' => '',
        'second_button' => 'Lees meer',
        'second_button_url' => '',
        'imageSrc' => 'storage/' . $skill->icon,
        'altText' => 'Foto van Bryan de Knikker',
        'width' => 150,
        'height' => 150,
        'imageClass' => ''
    ])
    @endcomponent

    @component('components.text', [
        'title' => 'Skill Details',
        'description' => "{$skill->usage_count}<br><br>{$skill->proficiency}<br><br>{$skill->eager_to_learn}"
    ])
    @endcomponent

    @component('components.cta', [
        'title' => 'Benieuwd wat ik voor jou kan betekenen?',
        'description' => 'Neem nu contact op',
        'first_button' => 'Contact',
        'first_button_url' => '/contact',
        'second_button' => '',
        'second_button_url' => ''
    ])
    @endcomponent
@endsection
