<div class="container">
    <footer class="py-5">
        <div class="row">
            <div class="col-md-5 mb-3">
                <a href="/" class="footer-brand d-flex align-items-center mb-3">
                    <img src="{{ asset('/images/BK-logo.svg') }}" width="100" height="65" alt="Logo van Bryan de Knikker">
                </a>
                <form autocomplete="off">
                    <p>Blijf op de hoogte van nieuwe cases door je aan te melden voor mijn nieuwsbrief.</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2 mt-3 mb-3">
                        <label for="newsletter1" class="visually-hidden">E-mailadres</label>
                        <input id="newsletter1" type="text" class="form-control newsletter-subscription-form" placeholder="E-mailadres">
                        <button class="btn btn-primary newsletter-subscription-button" type="button">Abonneren</button>
                    </div>
                    <span>Door te abonneren, ga je akkoord met ons privacybeleid en geef je toestemming om updates van mij te ontvangen.</span>
                </form>
            </div>

            <div class="col-12 col-md-3 offset-md-2 mb-3">
                <h5 class="mb-2 mb-md-5">Heb je dit al gezien?</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Over mij</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Skills</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Cases</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Contact</a></li>
                </ul>
            </div>

            <div class="col-12 col-md-2 mb-3">
                <h5 class="mb-2 mb-md-5">Volg mij</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="https://www.linkedin.com/in/bryan-de-knikker/" class="nav-link p-0 text-body-secondary" target="_blank">
                            <img src="/images/linkedin-logo.svg" alt="LinkedIn Logo" style="width: 16px; height: 16px; margin-right: 5px;">
                            LinkedIn
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer d-flex flex-column flex-md-row justify-content-between align-items-center pt-4 border-top">
            <p class="mb-2 mb-md-0 text-center text-md-start">© <?php echo date("Y"); ?> Bryan de Knikker. Alle rechten voorbehouden</p>
            <ul class="nav justify-content-center justify-content-md-end">
                <li class="nav-item nav-item-declaration"><a href="#" class="nav-link px-2 text-body-secondary">Privacyverklaring</a></li>
                <li class="nav-item nav-item-declaration"><a href="#" class="nav-link px-2 text-body-secondary">Cookieverklaring</a></li>
            </ul>
        </div>
    </footer>
</div>
