<div id="fields">
    <p class="input-label"><strong>{{ __('templates.variable') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.variable.2') }}</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.topic.2') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.topic.2') }}</p>
    <input name="change[{{ $adTopic }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.platform.2') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.platform.2') }}</p>
    <input name="change[{{ $adPlatform }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.target-audience.2') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.target-audience.2') }}</p>
    <input name="change[{{ $targetAudience }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.key-benefits.2') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.key-benefits.2') }}</p>
    <input name="change[{{ $keyBenefits }}]" class="input-style" required>
</div>
