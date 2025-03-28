<div id="fields">
    <p class="input-label"><strong>{{ __('templates.variable') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.variable') }}</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.content-type.6') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.content-type.6') }}</p>
    <input name="change[{{ $contentType }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.seo-topic.6') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.seo-topic.6') }}</p>
    <input name="change[{{ $seoTopic }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.keywords-list.6') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.keywords-list.6') }}</p>
    <input name="change[{{ $keywordsList }}]" class="input-style" required>

    <p class="input-label"><strong>{{ __('templates.content-length.6') }}</strong></p>
    <p class="label-info">{{ __('templates.explanation.content-length.6') }}</p>
    <input name="change[{{ $contentLength }}]" class="input-style" required>
</div>
