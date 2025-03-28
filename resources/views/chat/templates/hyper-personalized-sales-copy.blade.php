<div id="fields">
    <p class="input-label"><strong>{{ __('templates.variable') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.variable') }}</p>
    <input name="change[{{ $variable }}]" class="input-style" required>


    <p class="input-label"><strong>{{ __('templates.product-or-service.10') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.product-or-service.10') }}</p>
    <input name="change[{{ $productOrService }}]" class="input-style" required>


    <p class="input-label"><strong>{{ __('templates.target-audience.10') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.target-audience.10') }}</p>
    <input name="change[{{ $targetAudience }}]" class="input-style" required>


    <p class="input-label"><strong>{{ __('templates.tone.10') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.tone.10') }}</p>
    <input name="change[{{ $toneStyle }}]" class="input-style" required>
</div>
