<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex flex-wrap py-3 mb-4 border-bottom align-items-center">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('/images/BK-logo.svg') }}" class="navbar-logo" alt="Logo van Bryan de Knikker" width="auto" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Str::startsWith(request()->url(), route('cases')) ? 'active' : '' }}" href="{{ route('cases') }}">Cases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('over-mij') ? 'active' : '' }}" href="{{ route('over-mij') }}">Over mij</a>
                </li>
                <li class="nav-item contact-button-item">
                    <a class="nav-link contact-button {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
