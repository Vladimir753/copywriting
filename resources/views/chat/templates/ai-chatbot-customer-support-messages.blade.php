<div id="fields">
    <p class="input-label"><strong>{{ __('templates.variable') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.variable') }}</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.customer-question.12') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.customer-question.12') }}</p>
    <input name="change[{{ $customerQuery }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.tone.12') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.tone.12') }}</p>
    <input name="change[{{ $responseTone }}]" class="input-style" required>
</div>
