@extends('site.layout.layout')

@section('content')

    <h2 class="page-title">@lang('site.pages.tokarnaia_title')</h2>

    <img class="image-main-column" src=" {{ asset('images/tokarniy-stanok.jpg') }}">
    <span class="text-main-column">@lang('site.pages.tokarnaia_text')</span>

    <div class="motivation-song-block">

        <span class="motivation-song">@lang('site.pages.motivaciya')</span>
        <a class="header-2-text" href="{{ url_with_locale('/orders') }}">@lang('site.pages.go_to_orders')</a>

    </div>


@endsection
