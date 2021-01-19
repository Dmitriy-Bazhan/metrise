<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">

    @foreach ($pages as $page)

        @foreach($languages as $lang)

            <url>

                <loc>{{ url($lang . $page['url']) }}</loc>

                <xhtml:link rel="alternate" hreflang="ru" href="{{ url($languages[1] . $page['url']) }}"/>

                <xhtml:link rel="alternate" hreflang="uk" href="{{ url($languages[0] . $page['url']) }}"/>

                <lastmod>{{ $page['lastmode'] }}</lastmod>

                <changefreq>monthly</changefreq>

                <priority>{{ $page['priority'] }}</priority>

            </url>

        @endforeach

    @endforeach

    {{--  --}}

{{--    @foreach ($posts as $post)--}}

{{--        @foreach($languages as $lang)--}}

{{--            <url>--}}

{{--                <loc>{{ url($lang . 'blog/' . $post->alias) }}</loc>--}}

{{--                <xhtml:link rel="alternate" hreflang="ru" href="{{ url($languages[1] .'blog/' . $post->alias) }}"/>--}}

{{--                <xhtml:link rel="alternate" hreflang="uk" href="{{ url($languages[0] .'blog/' . $post->alias) }}"/>--}}

{{--                <lastmod>{{ $post->updated_at->tz('UTC')->toAtomString() }}</lastmod>--}}

{{--                <changefreq>monthly</changefreq>--}}

{{--                <priority>0.8</priority>--}}

{{--            </url>--}}

{{--        @endforeach--}}

{{--    @endforeach--}}

    {{--  --}}

</urlset>
