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




            <!-- Create the toolbar container -->




            <!-- Create the editor container -->


            <div id="editor-panel" class="hidden">
                <div id="editor"></div>
                <p id="btn-hide-gen-text" class="hide-btn">{{ __('messages.hide') }}</p>
            </div>


            <form action="{{ route('chat') }}" method="post" id="chat-form">
                @include('chat.templates.' . request()->template)
                <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="template" value="{{ request()->template }}" />
                <input type="hidden" name="template_id" value="{{ config('templates.' . request()->template . '.id') }}" />


                <div class="run-button" id="chat-send-button">{{ __('messages.run') }}</div>
            </form>


            <div class="generate-panel">
                <p class="generate-text"><strong>{{ __('messages.generate-text') }}</strong></p>
                <div id="btn-view-gen-text" class="view-btn">{{ __('messages.editor') }}</div>
                <div id="generated-text" class="generate-text"></div>
            </div>




        </main>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.js"></script>


    <!-- Initialize Quill editor -->


</x-guest-layout>
