<div id="fields">
    <p class="input-label"><strong>{{ __('templates.variable') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.variable') }}</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.social-platform.5') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.social-platform.5') }}</p>
    <input name="change[{{ $socialPlatform }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.topic.5') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.topic.5') }}</p>
    <input name="change[{{ $postTopic }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.goal.5') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.goal.5') }}</p>
    <input name="change[{{ $postGoal }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.tone.5') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.tone.5') }}</p>
    <input name="change[{{ $postTone }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.character-limit.5') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.character-limit.5') }}</p>
    <input name="change[{{ $characterLimit }}]" class="input-style" required>
</div>
