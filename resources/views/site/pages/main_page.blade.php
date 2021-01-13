@extends('site.layout.layout')

@section('content')

{{--    <h2 class="page-title">Главная страница</h2>--}}

    <span class="text-main-column">@lang('site.main_page.first_text')</span>

    <ul>
        <li>
            <a href="{{ url_with_locale('/tokarnaya') }}">
                <span class="left-column-text">@lang('site.header.tokarnaya')</span>
            </a>
        </li>
        <li>
            <a href="{{ url_with_locale('/frezirovka') }}">
                <span class="left-column-text">@lang('site.header.frezirovanie')</span>
            </a>
        </li>
        <li>
            <a href="{{ url_with_locale('/shlifovka') }}">
                <span class="left-column-text">@lang('site.header.shlifovka')</span>
            </a>
        </li>
        <li>
            <a href="{{ url_with_locale('/zuborezka') }}">
                <span class="left-column-text">@lang('site.header.zuborezka')</span>
            </a>
        </li>
        <li>
            <a href="{{ url_with_locale('/termo') }}">
                <span class="left-column-text">@lang('site.header.termo')</span>
            </a>
        </li>
        <li>
            <a href="{{ url_with_locale('/pila') }}">
                <span class="left-column-text">@lang('site.header.pilenie')</span>
            </a>
        </li>
        <li>
            <a href="{{ url_with_locale('/slesarnie') }}">
                <span class="left-column-text">@lang('site.header.slesarnie')</span>
            </a>
        </li>
    </ul>

    <span class="text-main-column">@lang('site.main_page.second_text')</span>

    <img class="main-page-image" src=" {{ asset('images/instrument.jpg') }}">
    <img class="main-page-image" src=" {{ asset('images/1.jpg') }}">
    <img class="main-page-image" src=" {{ asset('images/2.jpg') }}">
    <img class="main-page-image" src=" {{ asset('images/3.jpg') }}">


@endsection
