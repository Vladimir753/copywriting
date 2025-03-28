<x-guest-layout>
    <link
        href="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.snow.css"
        rel="stylesheet"
    />
    @vite(['resources/js/main.js', 'resources/css/history.css'])


    <div class="container-panel">


        @include('dashboard.nav')


        <main class="main-content">
            @include('dashboard.lang-menu')


            <div class="show-history-container">
                <h5>{{ __('messages.name') }}</h5>
                <p class="mt-0 color-gray">{{ $history->name }}</p>

                <h5>{{ __('messages.fields') }}</h5>
                @foreach(json_decode($history->question) as $key => $value)
                    <p class="mt-0">{{ Str::headline($key) }}: <span class="color-gray">{{ $value }}</span></p>
                @endforeach

                <h5>{{ __('messages.generate-text') }}</h5>
                <div class="color-gray">
                    {!! $history->message !!}
                </div>
            </div>
        </main>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.js"></script>


    <!-- Initialize Quill editor -->


</x-guest-layout>
