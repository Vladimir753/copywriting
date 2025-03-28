<div id="fields">
    <p class="input-label"><strong>{{ __('templates.variable') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.variable') }}</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.video-topic.11') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.video-topic.11') }}</p>
    <input name="change[{{ $videoTopic }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.video-length.11') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.video-length.11') }}</p>
    <input name="change[{{ $videoLength }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.tone.11') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.tone.11') }}</p>
    <input name="change[{{ $toneStyle }}]" class="input-style" required>
</div>
