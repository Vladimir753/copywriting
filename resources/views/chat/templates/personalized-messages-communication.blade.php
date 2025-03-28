<div id="fields">
    <p class="input-label"><strong>{{ __('templates.variable') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.variable') }}</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.recipient-profession.9') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.recipient-profession.9') }}</p>
    <input name="change[{{ $recipientProfession }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.tone.9') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.tone.9') }}</p>
    <input name="change[{{ $messageTone }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.connection-purpose.9') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.connection-purpose.9') }}</p>
    <input name="change[{{ $connectionPurpose }}]" class="input-style" required>
</div>
