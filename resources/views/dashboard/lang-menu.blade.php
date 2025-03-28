<header>
    @if(is_null(Route::currentRouteName()))
        <h2>{{ __('messages.get-started') }}</h2>
    @endif
    <div class="settings">
        <select>
            <option>🇺🇸 EN</option>
            <option>🇧🇬 BG</option>
        </select>
        <div class="profile-icon">ST</div>
    </div>
</header>
