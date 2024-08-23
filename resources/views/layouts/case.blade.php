@extends('layouts.base')

@section('content')

    @if (!empty(trim($__env->yieldContent('cases-titel'))))
        <div class="container-fluid align-items-center d-flex flex-column">
            <div class="container case-info">
                <div class="row">
                    <div class="col-md-8 mb-4 mb-md-0">
                        @if (!empty(trim($__env->yieldContent('cases-titel'))))
                            <h1>@yield('cases-titel')</h1>
                        @endif
                        @if (!empty(trim($__env->yieldContent('cases-beschrijving'))))
                            <p>@yield('cases-beschrijving')</p>
                        @endif
                        @if (!empty(trim($__env->yieldContent('button-link'))))
                            <a href="@yield('button-link')"
                               class="btn primary-btn projects-button" target="_blank">@yield('button-text')</a>
                        @endif
                    </div>
                    <div class="col-md-4 align-items-center justify-content-center d-flex">
                        @if (!empty(trim($__env->yieldContent('logo-src'))))
                            <img src="@yield('logo-src')" class="img-fluid" alt="@yield('logo-alt')">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (!empty(trim($__env->yieldContent('case-punt-een-titel'))))
        <div class="container-fluid align-items-center d-flex flex-column case-punten">
            <div class="container case-punten-container">
                <div class="row row-eq-height case-punten-row">
                    @if (!empty(trim($__env->yieldContent('case-punt-een-titel'))))
                        <div class="col-12 col-lg-4 pt-2 pb-2">
                            <div class="item-content">
                                <h3>@yield('case-punt-een-titel')</h3>
                                <p>@yield('case-punt-een-beschrijving')</p>
                            </div>
                        </div>
                    @endif
                    @if (!empty(trim($__env->yieldContent('case-punt-twee-titel'))))
                        <div class="col-12 col-lg-4 pt-2 pb-2 middle-column">
                            <div class="item-content">
                                <h3>@yield('case-punt-twee-titel')</h3>
                                <p>@yield('case-punt-twee-beschrijving')</p>
                            </div>
                        </div>
                    @endif
                    @if (!empty(trim($__env->yieldContent('case-punt-drie-titel'))))
                        <div class="col-12 col-lg-4 pt-2 pb-2">
                            <div class="item-content">
                                <h3>@yield('case-punt-drie-titel')</h3>
                                <p>@yield('case-punt-drie-beschrijving')</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endif

    @if (!empty(trim($__env->yieldContent('case-explanation-titel'))))
        <div class="container-fluid align-items-center d-flex flex-column">
            <div class="container case-explanation">
                <div class="row justify-content-center text-left">
                    <div class="col-md-9 col-lg-7">
                        @if (!empty(trim($__env->yieldContent('case-explanation-titel'))))
                            <h2 class="dw-title">@yield('case-explanation-titel')</h2>
                        @endif
                        @if (!empty(trim($__env->yieldContent('case-explanation-een-beschrijving'))))
                            <p>@yield('case-explanation-een-beschrijving')</p>
                        @endif
                        @if (!empty(trim($__env->yieldContent('case-explanation-twee-beschrijving'))))
                            <p>@yield('case-explanation-twee-beschrijving')</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (!empty(trim($__env->yieldContent('case-details-een-titel'))))
        <div class="container-fluid align-items-center d-flex flex-column">
            <div class="container image-text">
                <div class="row">
                    <div class="col-md-6 col-sm-12 align-items-center d-flex image-text-column">
                        <div class="row">
                            @if (!empty(trim($__env->yieldContent('case-details-een-titel'))))
                                <div class="col-12 title">
                                    <h2>@yield('case-details-een-titel')</h2>
                                </div>
                            @endif
                            <div class="col-12">
                                @if (!empty(trim($__env->yieldContent('case-details-een-een-beschrijving'))))
                                    <p>@yield('case-details-een-een-beschrijving')</p>
                                @endif
                                @if (!empty(trim($__env->yieldContent('case-details-een-twee-beschrijving'))))
                                    <p>@yield('case-details-een-twee-beschrijving')</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @if (!empty(trim($__env->yieldContent('image-een-src'))))
                        <div class="col-md-6 col-sm-12 justify-content-center align-items-center d-flex text-image-column">
                            <div class="image-column">
                                <a href="@yield('image-een-src')" data-lightbox="image-een" data-title="@yield('image-een-alt')">
                                    <img src="@yield('image-een-src')" class="img-fluid" alt="@yield('image-een-alt')">
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endif

    @if (!empty(trim($__env->yieldContent('case-details-twee-titel'))))
        <div class="container-fluid align-items-center d-flex flex-column">
            <div class="container image-text">
                <div class="row">
                    @if (!empty(trim($__env->yieldContent('image-twee-src'))))
                        <div class="col-md-6 col-sm-12 justify-content-center align-items-center d-flex text-image-column">
                            <div class="image-column">
                                <a href="@yield('image-twee-src')" data-lightbox="image-een" data-title="@yield('image-twee-alt')">
                                    <img src="@yield('image-twee-src')" class="img-fluid" alt="@yield('image-twee-alt')">
                                </a>
                            </div>
                        </div>
                    @endif
                    <div class="col-md-6 col-sm-12 align-items-center d-flex text-column">
                        <div class="row">
                            @if (!empty(trim($__env->yieldContent('case-details-twee-titel'))))
                                <div class="col-12 title">
                                    <h2>@yield('case-details-twee-titel')</h2>
                                </div>
                            @endif
                            <div class="col-12">
                                @if (!empty(trim($__env->yieldContent('case-details-twee-een-beschrijving'))))
                                    <p>@yield('case-details-twee-een-beschrijving')</p>
                                @endif
                                @if (!empty(trim($__env->yieldContent('case-details-twee-twee-beschrijving'))))
                                    <p>@yield('case-details-twee-twee-beschrijving')</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
