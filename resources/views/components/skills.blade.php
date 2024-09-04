<div class="skills-container-fluid">
    <div class="container skills-section py-5 col-12">
        <div class="row">
            <!-- Frontend Development -->
            <div class="col-lg-4 offset-lg-1">
                <div class="text-center mb-4">
                    <div class="skills-icon">
                        <img src="{{ asset('images/brackets-code-white.svg') }}" alt="Frontend Development" width="45" height="45">
                    </div>
                    <h2 class="skills-title">Frontend Development</h2>

                    <h3 class="skills-subtitle">Talen</h3>
                    <div class="col-10 d-inline-block">
                        <ul class="list-unstyled">
                            @foreach ($frontend['languages'] as $language)
                                <li class="d-flex align-items-center mb-3">
                                    <div class="icon-circle me-3">
                                        <img src="{{ asset('images/' . $language['icon']) }}"
                                             alt="{{ $language['name'] }}" width="35" height="40">
                                    </div>
                                    <span class="language-framework-name">{{ $language['name'] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <h3 class="skills-subtitle">Frameworks</h3>
                    <div class="col-10 d-inline-block">
                        <ul class="list-unstyled">
                            @foreach ($frontend['frameworks'] as $framework)
                                <li class="d-flex align-items-center mb-3">
                                    <div class="icon-circle me-3">
                                        <img src="{{ asset('images/' . $framework['icon']) }}"
                                             alt="{{ $framework['name'] }}" width="35" height="40">
                                    </div>
                                    <span class="language-framework-name">{{ $framework['name'] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Backend Development -->
            <div class="col-lg-4 offset-lg-1">
                <div class="text-center mb-4">
                    <div class="skills-icon">
                        <img src="{{ asset('images/brackets-curly-code-white.svg') }}" alt="Backend Development" width="45" height="45">
                    </div>
                    <h2 class="skills-title">Backend Development</h2>

                    <h3 class="skills-subtitle">Talen</h3>
                    <div class="col-10 d-inline-block">
                        <ul class="list-unstyled">
                            @foreach ($backend['languages'] as $language)
                                <li class="d-flex align-items-center mb-3">
                                    <div class="icon-circle me-3">
                                        <img src="{{ asset('images/' . $language['icon']) }}"
                                             alt="{{ $language['name'] }}" width="35" height="40">
                                    </div>
                                    <span class="language-framework-name">{{ $language['name'] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <h3 class="skills-subtitle">Frameworks</h3>
                    <div class="col-10 d-inline-block">
                        <ul class="list-unstyled">
                            @foreach ($backend['frameworks'] as $framework)
                                <li class="d-flex align-items-center mb-3">
                                    <div class="icon-circle me-3">
                                        <img src="{{ asset('images/' . $framework['icon']) }}"
                                             alt="{{ $framework['name'] }}" width="35" height="40">
                                    </div>
                                    <span class="language-framework-name">{{ $framework['name'] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
