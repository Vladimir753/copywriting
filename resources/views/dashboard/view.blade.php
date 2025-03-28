<x-guest-layout>
    <div class="container-panel">
        <!-- Sidebar Menu -->
        @include('dashboard.nav')


        <!-- Main Content -->
        <main class="main-content">
            @include('dashboard.lang-menu')


            <!-- Quick Access Section (aligned with sidebar) -->
            <section class="quick-access">
                <div class="card big">
                    <span>Create New Project</span>
                </div>
                <div class="card">
                    <h3>Blog Post Wizard</h3>
                    <p>Jump into a whole first draft of your blog post in 5 minutes.</p>
                </div>
                <div class="card">
                    <h3>Instagram Captions</h3>
                    <p>Generate captions for your Instagram posts.</p>
                </div>
                <div class="card">
                    <h3>Freestyle</h3>
                    <p>Command a flexible AI to generate anything you need.</p>
                </div>
            </section>


            <!-- Folders -->
            <section class="folders">
                <h3>Folders</h3>
                <p>You don't have any folders yet.</p>
                <button>Create Folder</button>
            </section>


            <!-- Projects -->
            <section class="projects">
                <h3>Projects</h3>
                <div class="project-grid">
                    <div class="project-card">2023-05-02 Untitled (4)</div>
                    <div class="project-card">2023-05-02 Untitled (3)</div>
                    <div class="project-card">2023-05-02 Untitled (2)</div>
                </div>
            </section>
        </main>
    </div>


</x-guest-layout>
