@extends('site.layout.layout')

@section('content')

    <h2 class="page-title">Пиление загатовок</h2>

    <img class="image-main-column" src=" {{ asset('images/pila.jpg') }}">
    <span class="text-main-column">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Dolores et ex magni minima voluptatibus.
                  Aliquid consequuntur eius id iusto modi molestias quo.
                  Accusantium aliquam aliquid aperiam autem culpa deserunt,
                  dicta dolor dolores error esse excepturi exercitationem fugit hic illo impedit labore laudantium
                  optio praesentium quas quod repudiandae sed tempora temporibus?</span>
    <span class="text-main-column">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Dolores et ex magni minima voluptatibus.
                  Aliquid consequuntur eius id iusto modi molestias quo.
                  Accusantium aliquam aliquid aperiam autem culpa deserunt,
                  dicta dolor dolores error esse excepturi exercitationem fugit hic illo impedit labore laudantium
                  optio praesentium quas quod repudiandae sed tempora temporibus?</span>
    <span class="text-main-column">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Dolores et ex magni minima voluptatibus.
                  Aliquid consequuntur eius id iusto modi molestias quo.
                  Accusantium aliquam aliquid aperiam autem culpa deserunt,
                  dicta dolor dolores error esse excepturi exercitationem fugit hic illo impedit labore laudantium
                  optio praesentium quas quod repudiandae sed tempora temporibus?</span>

    <div class="motivation-song-block">

        <span class="motivation-song">@lang('site.pages.motivaciya')</span>
        <a class="header-2-text" href="{{ url_with_locale('/orders') }}">@lang('site.pages.go_to_orders')</a>

    </div>

@endsection
