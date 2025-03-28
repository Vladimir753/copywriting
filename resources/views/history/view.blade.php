<x-guest-layout>
    <link
        href="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.snow.css"
        rel="stylesheet"
    />
    @vite(['resources/js/main.js', 'resources/js/modal.js', 'resources/css/modal.css', 'resources/css/history.css'])


    <div class="container-panel">


        @include('dashboard.nav')


        <main class="main-content">
            @include('dashboard.lang-menu')

            <div class="template-container">
                @foreach($histories as $name => $allHistory)
                    <button class="accordion history-panel">{{ $name }}</button>
                    <div class="panel">
                    @foreach($allHistory as $index => $history)
                        <a href="{{ route('history.show', ['history' => $history->id]) }}">
                            <div class="pointer history-select">
                                <p class="inline-block">{{ ( $index + 1 ) }}</p>
                                <p class="inline-block">{{ $history->name }}</p>
                                <p class="w-23p inline-block float-right mt-0">{{ $history->created_at }}</p>
                            </div>
                        </a>
                    @endforeach
                    </div>
                @endforeach
            </div>
        </main>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.js"></script>


    <!-- Initialize Quill editor -->


</x-guest-layout>
