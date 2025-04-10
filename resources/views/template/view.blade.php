<x-app-layout>
    <link
        href="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.snow.css"
        rel="stylesheet"
    />
    @vite(['resources/js/main.js'])


    <div class="container-panel">


        @include('dashboard.nav')


        <main class="main-content">
            @include('dashboard.lang-menu')

            <div class="row">
                <!-- Sidebar with groups -->
                <div class="col-md-3">
                    <div class="list-group" id="groupList">
                        <a href="#" class="bg-color-2a3c50 text-white list-group-item active" data-group="marketing">🛍️ Marketing & Sales</a>
                        <a href="#" class="bg-color-2a3c50 text-white list-group-item" data-group="email">📧 Email & Communication</a>
                        <a href="#" class="bg-color-2a3c50 text-white list-group-item" data-group="social">📱 Social Media</a>
                        <a href="#" class="bg-color-2a3c50 text-white list-group-item" data-group="ai">🧠 AI & Analysis</a>
                        <a href="#" class="bg-color-2a3c50 text-white list-group-item" data-group="ecom">🛒 E-Commerce</a>
                        <a href="#" class="bg-color-2a3c50 text-white list-group-item" data-group="branding">🧬 Branding & Storytelling</a>
                        <a href="#" class="bg-color-2a3c50 text-white list-group-item" data-group="hr">🧑‍💼 Business & HR</a>
                    </div>
                </div>

                <!-- Templates display area -->
                <div class="col-md-9">
                    <!-- All groups content -->
                    <div id="groupContent">

                        <div class="template-group" data-group="marketing">
                            <h3>🛍️ Marketing & Sales</h3>
                            <div class="template-container">
                                @foreach($templates as $key => $template)
                                    <a href="{{ route('chat', ['template' => $key]) }}">
                                        <div class="box">
                                            <i class="fa-duotone fa-regular fa-file-invoice"></i>
                                            @if(isset($template['icon']))
                                                <div class="icon"><img src="{{ $template['icon'] }}"></div>
                                            @else
                                                <div class="icon custom-icon-template"><span>{{ $template['smart_acronym'] }}</span></div>
                                            @endif
                                            <p class="template-name">{{ __("templates.name.{$template['id']}") }}</p>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <div class="template-group d-none" data-group="email">
                            <h3>📧 Email & Communication</h3>
                            <ul class="list-group mb-4">
                                <li class="list-group-item">Email Marketing</li>
                                <li class="list-group-item">Newsletter Community Content</li>
                                <li class="list-group-item">Personalized Communication</li>
                            </ul>
                        </div>

                        <div class="template-group d-none" data-group="social">
                            <h3>📱 Social Media</h3>
                            <ul class="list-group mb-4">
                                <li class="list-group-item">Social Media Content</li>
                                <li class="list-group-item">TikTok Viral Content Hooks</li>
                                <li class="list-group-item">YouTube Video Content</li>
                            </ul>
                        </div>

                        <div class="template-group d-none" data-group="ai">
                            <h3>🧠 AI & Analysis</h3>
                            <ul class="list-group mb-4">
                                <li class="list-group-item">AI Text Analysis</li>
                                <li class="list-group-item">Ai Chatbot Customer Support</li>
                            </ul>
                        </div>

                        <div class="template-group d-none" data-group="ecom">
                            <h3>🛒 E-Commerce</h3>
                            <ul class="list-group mb-4">
                                <li class="list-group-item">E-Commerce Dropshipping</li>
                            </ul>
                        </div>

                        <div class="template-group d-none" data-group="branding">
                            <h3>🧬 Branding & Storytelling</h3>
                            <ul class="list-group mb-4">
                                <li class="list-group-item">Storytelling Branding</li>
                                <li class="list-group-item">Default</li>
                            </ul>
                        </div>

                        <div class="template-group d-none" data-group="hr">
                            <h3>🧑‍💼 Business & HR</h3>
                            <ul class="list-group mb-4">
                                <li class="list-group-item">HR Recruitment</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>




            <div class="template-container">
                @foreach($templates as $key => $template)
                    <a href="{{ route('chat', ['template' => $key]) }}">
                        <div class="box">
                            <i class="fa-duotone fa-regular fa-file-invoice"></i>
                            @if(isset($template['icon']))
                                <div class="icon"><img src="{{ $template['icon'] }}"></div>
                            @else
                                <div class="icon custom-icon-template"><span>{{ $template['smart_acronym'] }}</span></div>
                            @endif
                            <p class="template-name">{{ __("templates.name.{$template['id']}") }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </main>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.js"></script>


    <!-- Initialize Quill editor -->


</x-app-layout>
<script>
    document.querySelectorAll('#groupList a').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            // Remove active class from all links
            document.querySelectorAll('#groupList a').forEach(l => l.classList.remove('active'));

            // Add active to current
            this.classList.add('active');

            // Hide all groups
            document.querySelectorAll('.template-group').forEach(group => group.classList.add('d-none'));

            // Show selected group
            const selectedGroup = this.getAttribute('data-group');
            const target = document.querySelector(`.template-group[data-group="${selectedGroup}"]`);
            if (target) {
                target.classList.remove('d-none');
            }
        });
    });
</script>
