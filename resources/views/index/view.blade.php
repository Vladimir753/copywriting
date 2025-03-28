<x-guest-layout>
    <div>
        @include('partials.header')
        @include('partials.hero-slider')
        @include('partials.services')
        @include('partials.about')
        @include('partials.cta-thin')
        @include('partials.team')
        @include('partials.testimonials')
        @include('partials.pricing')
        @include('partials.cta-wide')
        @include('partials.blog')
        @include('partials.contact')
        @include('partials.footer')
    </div>
    <!-- Javascript-->
    <script src="{{ asset('build/public/js/core.min.js') }}"></script>
    <script src="{{ asset('build/public/js/script.js') }}"></script>
</x-guest-layout>
