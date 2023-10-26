<a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
</a>

@include('sections.header', [
  'classes' => '',
])

<main id="main" class="main">
    @yield('content')
</main>

@include('sections.footer',
    [
      'classes' => '',
    ]
)

@include('partials.common.footer-navigation', [
  'type' => 'Light',
])
