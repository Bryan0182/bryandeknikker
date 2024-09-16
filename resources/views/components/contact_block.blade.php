<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <h1 class="mb-3">{{ $title }}</h1>
            <p>{{ $description }}</p>
        </div>
        <div class="col-md-6">
            @if(session('success'))
                <div class="alert alert-success mt-3">{{ session('success') }}</div>
            @endif
                <form method="POST" action="{{ route('contact.store') }}" class="mt-4 form-contact">
                    @csrf

                    <div class="mb-3">
                        <label for="naam" class="visually-hidden">Naam:</label>
                        <input type="text" name="naam" id="naam" value="{{ old('naam') }}" class="form-control" placeholder="Naam" required>
                        @error('naam') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="emailadres" class="visually-hidden">E-mailadres:</label>
                        <input type="email" name="emailadres" id="emailadres" value="{{ old('emailadres') }}" class="form-control" placeholder="E-mailadres" required>
                        @error('emailadres') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="telefoonnummer" class="visually-hidden">Telefoonnummer (optioneel):</label>
                        <input type="tel" name="telefoonnummer" id="telefoonnummer" value="{{ old('telefoonnummer') }}" class="form-control" placeholder="Telefoonnummer (optioneel)">
                        @error('telefoonnummer') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="reden_van_contact" class="visually-hidden">Reden van contact:</label>
                        <select name="reden_van_contact" id="reden_van_contact" class="form-control" required>
                            <option value="" disabled selected>Kies een reden...</option>
                            <option value="support" {{ old('reden_van_contact') == 'support' ? 'selected' : '' }}>Support</option>
                            <option value="sales" {{ old('reden_van_contact') == 'sales' ? 'selected' : '' }}>Sales</option>
                            <option value="feedback" {{ old('reden_van_contact') == 'feedback' ? 'selected' : '' }}>Feedback</option>
                            <option value="other" {{ old('reden_van_contact') == 'other' ? 'selected' : '' }}>Overig</option>
                        </select>
                        @error('reden_van_contact') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="onderwerp" class="visually-hidden">Onderwerp:</label>
                        <input type="text" name="onderwerp" id="onderwerp" value="{{ old('onderwerp') }}" class="form-control" placeholder="Onderwerp" required>
                        @error('onderwerp') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="bericht" class="visually-hidden">Bericht:</label>
                        <textarea name="bericht" id="bericht" class="form-control" rows="5" placeholder="Bericht" required>{{ old('bericht') }}</textarea>
                        @error('bericht') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary contact-button">Verzenden</button>
                </form>
        </div>
    </div>
</div>
