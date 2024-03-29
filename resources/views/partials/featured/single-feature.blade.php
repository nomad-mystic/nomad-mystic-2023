<?php

use App\Helpers\SeoHelpers;

$featured_url = '';

if (!empty($feature['external'])) {

    $featured_url = $feature['url'];

} else {

    $featured_url = get_stylesheet_directory_uri() . '/' . $feature['url'] ?? '';

}

?>

<section class="SingleFeature SingleFeature-{{ $feature['name'] ?? '' }} w-full p-4 mb-6">
    <article class="flex flex-col md:flex-row">

        <script type="application/ld+json">{!! SeoHelpers::buildFeaturedLdJson($feature) !!}</script>

        <figure class="SingleFeature-thumbnail">
            <a href="{{ $featured_url }}"
               target="_blank"
               rel="noreferrer"
               class="flex items-center"
            >
                <img src="{{ get_stylesheet_directory_uri() }}/{{ $feature['thumbnail'] ?? '' }}"
                     alt="{{ $feature['thumbnailAlt'] ?? '' }}"/>
            </a>
        </figure>

        <section class="pt-4 md:pt-0 md:pl-4">
            <header>
                <h2 class="SingleFeature-title text-3xl pb-2">{{ $feature['safeName'] ?? '' }}</h2>
                <p class="SingleFeature-description">{{ __($feature['description'] ?? '', NOMAD_THEME_TEXT_DOMAIN) }}</p>
            </header>

            <div class="flex flex-col SingleFeature-metadata">
                <section class="flex gap-4 align-center">
                    <div class="SingleFeature-github" title="Link to GitHub code">
                        <a href="{{ $feature['githubURL'] ?? '' }}"
                           target="_blank"
                           rel="noreferrer"
                           class="flex items-center"
                        >
                            <figure>
                                {{ svg('si-github', '', [
                                    'aria-label' => 'GitHub icon',
                                    'role' => 'img',
                                ]) }}
                            </figure>

                            <p class="ml-2">{{ __('Code', NOMAD_THEME_TEXT_DOMAIN) }}</p>
                        </a>
                    </div>

                    <div class="SingleFeature-production" title="Link to production landing page">
                        <a href="{{ $featured_url }}"
                           target="_blank"
                           rel="noreferrer"
                           class="flex items-center"
                        >
                            <figure>
                                {{ svg('fas-link', '', [
                                    'aria-label' => 'External link icon',
                                    'role' => 'img',
                                ]) }}
                            </figure>


                            <p class="ml-2">{{ __('Production', NOMAD_THEME_TEXT_DOMAIN) }}</p>
                        </a>
                    </div>

                    <div class="SingleFeature-published" title="Published date">
                        <div class="flex items-center">
                            <figure>
                                {{ svg('fas-code', '', [
                                    'aria-label' => 'Code icon',
                                    'role' => 'img',
                                ]) }}
                            </figure>

                            <p class="ml-2">{{ $feature['published'] ?? '' }}</p>
                        </div>
                    </div>
                </section>

                <section class="flex items-center SingleFeature-builtWith">
                    <p>{{ __('Built With:', NOMAD_THEME_TEXT_DOMAIN) }}</p>

                    @if (!empty($feature['builtWith']) && is_array($feature['builtWith']))

                        @foreach($feature['builtWith'] as $icon)
                            <a href="{{ $icon['url'] ?? '' }}"
                               target="_blank" rel="nofollow"
                            >
                                <figure title="{{ $icon['altText'] ?? '' }}">

                                    <img
                                        src="{{ get_stylesheet_directory_uri() }}/resources/images/icons/languages/{{ $icon['name'] ?? '' }}.svg"
                                        alt="Icon for {{ __($icon['altText'] ?? '', NOMAD_THEME_TEXT_DOMAIN) }}">

                                </figure>

                            </a>
                        @endforeach

                    @endif
                </section>
            </div>
        </section>
    </article>
</section>
