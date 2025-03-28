<div id="fields">
    <p class="input-label"><strong>{{ __('templates.variable') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.variable') }}</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.announcement-topic.15') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.announcement-topic.15') }}</p>
    <input name="change[{{ $announcementTopic }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.key-information.15') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.key-information.15') }}</p>
    <input name="change[{{ $keyInformation }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.tone.15') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.tone.15') }}</p>
    <input name="change[{{ $toneStyle }}]" class="input-style" required>
</div>
