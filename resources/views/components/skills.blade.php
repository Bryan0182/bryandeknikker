<div class="skills-container-fluid">
    <div class="container skills-section py-5 col-12">
        <div class="row justify-content-center">
            <!-- Frontend Development -->
            <div class="col-lg-4">
                <div class="text-center mb-4">
                    <div class="skills-icon">
                        <img src="{{ asset('output/images/brackets-code-white.svg') }}" alt="Frontend Development" width="45"
                             height="45">
                    </div>
                    <h2 class="skills-title">Frontend Development</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-5 col-lg-12">
                            <h3 class="skills-subtitle">Talen</h3>
                            <div class="col-10 d-inline-block">
                                <ul class="list-unstyled">
                                    @foreach ($frontend['languages'] as $language)
                                        <li class="d-flex align-items-center mb-3 skills-item">
                                            <div class="icon-circle me-3">
                                                <img src="{{ asset('output/images/' . $language['icon']) }}"
                                                     alt="{{ $language['name'] }}" width="35" height="40">
                                            </div>
                                            <span class="language-framework-name">{{ $language['name'] }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-5 col-lg-12">
                            <h3 class="skills-subtitle">Frameworks</h3>
                            <div class="col-10 d-inline-block">
                                <ul class="list-unstyled">
                                    @foreach ($frontend['frameworks'] as $framework)
                                        <li class="d-flex align-items-center mb-3 skills-item">
                                            <div class="icon-circle me-3">
                                                <img src="{{ asset('output/images/' . $framework['icon']) }}"
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

            <!-- Backend Development -->
            <div class="col-lg-4">
                <div class="text-center mb-4">
                    <div class="skills-icon">
                        <img src="{{ asset('output/images/brackets-curly-code-white.svg') }}" alt="Backend Development"
                             width="45" height="45">
                    </div>
                    <h2 class="skills-title">Backend Development</h2>
                    <div class="row justify-content-center">
                        <div class="col-md-5 col-lg-12">
                            <h3 class="skills-subtitle">Talen</h3>
                            <div class="col-10 d-inline-block">
                                <ul class="list-unstyled">
                                    @foreach ($backend['languages'] as $language)
                                        <li class="d-flex align-items-center mb-3 skills-item">
                                            <div class="icon-circle me-3">
                                                <img src="{{ asset('output/images/' . $language['icon']) }}"
                                                     alt="{{ $language['name'] }}" width="35" height="40">
                                            </div>
                                            <span class="language-framework-name">{{ $language['name'] }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-12">
                            <h3 class="skills-subtitle">Frameworks</h3>
                            <div class="col-10 d-inline-block">
                                <ul class="list-unstyled">
                                    @foreach ($backend['frameworks'] as $framework)
                                        <li class="d-flex align-items-center mb-3 skills-item">
                                            <div class="icon-circle me-3">
                                                <img src="{{ asset('output/images/' . $framework['icon']) }}"
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
    </div>
</div>
