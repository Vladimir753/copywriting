<aside class="sidebar">
    <div class="logo"><a href="{{ route('dashboard') }}">copy.ai</a></div>
    <nav>
        <ul>
            <li><a href="{{ route('chat') }}">{{ __('messages.chat') }}</a></li>
            <li><a href="{{ route('templates.index') }}">{{ __('messages.templates') }}</a></li>
            <li><a href="{{ route('history.index') }}">{{ __('messages.history') }}</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('messages.logout') }}</a></li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>


            {{--            <li><a href="#">Projects</a></li>--}}
            {{--            <li><a hrewf="#">Infobase</a></li>--}}
            {{--            <li><a href="#">Workflows</a></li>--}}
        </ul>

        <ul>
            <li>{{ __('messages.upgrade-plan-text') }}</li>
        </ul>
    </nav>
</aside>
