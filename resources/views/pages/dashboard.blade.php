@extends('layouts.base')

@section('title', 'Home')

@push('styles')
    <link rel="stylesheet" href="{{ asset('/output/css/header.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/dashboard_overview.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/output/css/footer.min.css') }}">
@endpush

@section('content')

    @include('components.dashboard_overview')

@endsection
