<div id="fields">
    <p class="input-label"><strong>{{ __('templates.variable') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.variable') }}</p>
    <input name="change[{{ $variable }}]" class="input-style" required>


    <p class="input-label"><strong>{{ __('templates.original-text.8') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.original-text.8') }}</p>
    <input name="change[{{ $originalText }}]" class="input-style" required>
</div>
