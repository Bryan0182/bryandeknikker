<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('/output/images/BK-logo.svg') }}" class="logo-light" width="100" height="65" alt="Logo van Bryan de Knikker">
                <img src="{{ asset('/output/images/BK-logo-white.svg') }}" class="logo-dark" width="100" height="65" alt="Logo van Bryan de Knikker">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="width: fit-content;">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item nav-item-header align-items-center d-flex">
                        <a href="{{ route('over-mij') }}" class="nav-link">Over mij</a>
                    </li>
                    <li class="nav-item nav-item-header align-items-center d-flex">
                        <a href="{{ route('skills') }}" class="nav-link">Skills</a>
                    </li>
                    <li class="nav-item nav-item-header dropdown align-items-center d-sm-flex d-md-block">
                        <a href="{{ route('diensten') }}" class="nav-link dropdown-switch" id="servicesDropdown" role="button" aria-expanded="false">
                            Diensten
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="{{ route('diensten.web') }}">Website laten maken</a></li>
                            <li><a class="dropdown-item" href="{{ route('diensten.seo') }}">SEO werkzaamheden</a></li>
                            <li><a class="dropdown-item" href="{{ route('diensten.social') }}">Social werkzaamheden</a></li>
                            <li><a class="dropdown-item" href="{{ route('diensten.design') }}">Design laten maken</a></li>
                            <li><a class="dropdown-item" href="{{ route('diensten.app') }}">Applicatie laten maken</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="d-flex flex-column flex-lg-row buttons-row">
                    <a href="{{ route('cases') }}" type="button" class="btn btn-outline-dark cases-header-button me-0 me-lg-2 mb-2 mb-lg-0">
                        Cases
                    </a>
                    <a href="{{ route('contact') }}" type="button" class="btn btn-outline-dark contact-header-button me-0 me-lg-2 mb-2 mb-lg-0">
                        Contact
                    </a>
                    <button id="theme-switcher" aria-label="Switch Theme">
                        <span id="icon-sun" style="display: none;">
                            <img src="{{ asset('/output/images/sun.svg') }}" alt="Light Theme" width="30" height="30">
                        </span>
                        <span id="icon-moon">
                            <img src="{{ asset('/output/images/moon.svg') }}" alt="Dark Theme" width="30" height="30">
                        </span>
                    </button>
                </div>
            </div>
        </nav>
    </div>
</header>
