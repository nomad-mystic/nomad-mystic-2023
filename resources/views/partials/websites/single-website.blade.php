<section class="SingleWebsite SingleWebsite-{{ $website['name'] ?? '' }} w-full p-4">
    <article class="flex flex-col lg:flex-row">
        <a href="{{ $website['url'] ?? '' }}"
           target="_blank"
           rel="noreferrer"
           class="flex items-center SingleWebsite-thumbnail"
        >
            <figure>
                <img src="{{ get_stylesheet_directory_uri() }}/{{ $website['thumbnail'] ?? '' }}"
                     alt="{{  $website['thumbnailAlt'] ?? '' }}">
            </figure>
        </a>

        <section class="pt-4 lg:pt-0 lg:pl-4">
            <header>

                <a href="{{ $website['url'] ?? '' }}"
                   target="_blank"
                   rel="noreferrer"
                >
                    <h2 class="SingleWebsite-title text-3xl pb-2">{{ $website['safeName'] ?? '' }}</h2>
                </a>

                <p class="SingleWebsite-description">{{ $website['description'] ?? '' }}</p>
            </header>

            <section class="flex">
                @if(!empty($website['githubURL']))
                    <div class="SingleWebsite-github" title="Link to GitHub code">
                        <a href="{{ $website['githubURL'] }}"
                           target="_blank"
                           rel="noreferrer"
                           class="flex items-center mr-4"
                        >
                            <figure>
                                {{ svg('si-github') }}
                            </figure>
                            <p class="ml-2">Code</p>
                        </a>
                    </div>
                @endif

                <div class="SingleWebsite-production" title="Link to production landing page">
                    <a href="{{ $website['url'] ?? '' }}"
                       target="_blank"
                       rel="noreferrer"
                       class="flex items-center"
                    >
                        <figure>
                            {{ svg('fas-link') }}
                        </figure>
                        <p class="ml-2">Production</p>
                    </a>
                </div>
            </section>
        </section>
    </article>
</section>
