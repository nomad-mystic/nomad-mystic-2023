<a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
</a>

@include('sections.header', [
  'classes' => 'LightTheme',
])

<main id="main" class="main">
    @yield('content')
</main>

@include('sections.footer', [
    'classes' => 'LightTheme',
])

@include('partials.common.footer-navigation', [
  'type' => 'LightTheme',
])
