<x-guest-layout>
    <link
        href="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.snow.css"
        rel="stylesheet"
    />
    @vite(['resources/js/main.js'])


    <div class="container-panel">


        @include('dashboard.nav')


        <main class="main-content">
            @include('dashboard.lang-menu')


            <div class="template-container">
                @foreach($templates as $key => $template)
                    <a href="{{ route('chat', ['template' => $key]) }}">
                        <div class="box">
                            <i class="fa-duotone fa-regular fa-file-invoice"></i>
                            <div class="icon"><img src="{{ $template['icon'] }}"></div>
                            <p class="template-name">{{ __("templates.name.{$template['id']}") }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </main>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.js"></script>


    <!-- Initialize Quill editor -->


</x-guest-layout>
