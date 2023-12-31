<header class="Header w-screen fixed z-10 {{ $classes }}">
    <section class="flex justify-between lg:justify-around items-center h-full w-[90%] lg:w-screen mx-auto">
        <a class="Header-logo" href="{{ home_url('/') }}">
            <img src="@asset('images/nav-logo-dark.png')" alt="Nomad Mystic logo">
        </a>

        @if (has_nav_menu('primary_navigation'))
            <nav class="Header-navigation" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                {!! wp_nav_menu([
                        'theme_location' => 'primary_navigation',
                        'menu_class' => 'nav flex flex-col lg:flex-row Primary-navigation',
                        'echo' => false
                    ]
                  ) !!}
            </nav>

            <div class="Header-hamburger lg:hidden flex items-center" id="Header-hamburger">
                <button class="outline-none">
                    <svg
                        class="w-6 h-6"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        @endif
    </section>
</header>
