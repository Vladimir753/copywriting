<div id="fields">
    <p class="input-label"><strong>{{ __('templates.variable') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.variable.4') }}</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.email-purpose.4') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.email-purpose.4') }}</p>
    <input name="change[{{ $emailPurpose }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.target-audience.4') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.target-audience.4') }}</p>
    <input name="change[{{ $targetAudience }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.email-tone.4') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.email-tone.4') }}</p>
    <input name="change[{{ $emailTone }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.min-character-length.4') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.min-character-length.4') }}</p>
    <input name="change[minCharacters]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.max-character-length.4') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.max-character-length.4') }}</p>
    <input name="change[maxCharacters]" class="input-style" required>
</div>
