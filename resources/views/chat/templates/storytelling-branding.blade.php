<div id="fields">
    <p class="input-label"><strong>{{ __('templates.variable') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.variable') }}</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.content-type.7') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.content-type.7') }}</p>
    <input name="change[{{ $contentType }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.content-name.7') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.content-name.7') }}</p>
    <input name="change[{{ $companyName }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.tone.7') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.tone.7') }}</p>
    <input name="change[{{ $brandTone }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.target-audience.7') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.tone.7') }}</p>
    <input name="change[{{ $targetAudience }}]" class="input-style" required>
</div>
