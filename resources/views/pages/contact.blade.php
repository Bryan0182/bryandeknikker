@extends('layouts.base')

@section('title', 'Contact')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/output/css/header.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/contact.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/footer.min.css') }}">
@endpush

@section('content')

    @component('components.contact_block', [
        'title' => 'Neem contact op',
        'description' => 'Heb je een vraag, opmerking of wil je gewoon even hallo zeggen? Vul dan het contactformulier in en ik neem zo snel mogelijk contact met je op!',
    ])
    @endcomponent

@endsection
