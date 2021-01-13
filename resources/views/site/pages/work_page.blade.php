@extends('site.layout.layout')

@section('content')

    <h2 class="page-title">@lang('site.pages.' . $works. '_title')</h2>

    <div class="d-none d-sm-none d-md-block">

        <img class="image-main-column" src=" {{ asset('images/' . $image ) }}">
        <span class="text-main-column">@lang('site.pages.' . $works. '_text')</span>

    </div>

    <div class="d-block d-md-none d-lg-none image-block-for-little-displays">

        <img class="image-for-little-displays" src=" {{ asset('images/' . $image ) }}">

    </div>

    <div class="d-block d-md-none d-lg-none text-block-for-little-displays">

        <span class="text-main-column">@lang('site.pages.' . $works. '_text')</span>

    </div>

    <a class="d-block d-md-none d-lg-none read-more-button"
       data-lang="{{ app()->getLocale() }}"
       href="">@lang('site.pages.read_more')->>></a>

    <div class="motivation-song-block">

        <span class="motivation-song">@lang('site.pages.motivaciya')</span>
        <a class="header-2-text" href="{{ url_with_locale('/orders') }}">@lang('site.pages.go_to_orders')</a>

    </div>


@endsection
